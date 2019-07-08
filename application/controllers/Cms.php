<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cms extends CI_Controller {
    
    public $is_hookable = TRUE;

    public function index(){

    }

    public function Login(){

        $this->load->model('General','cms');

        $email = $this->input->post('email',true);

        $password = $this->input->post('password',true);

        $result = $this->cms->LoginUser($email,$password);

        if($result != false){

            if($result->first_time == 0){
                echo "<script>window.location.href = '".site_url('Admin/dashboard')."?sucess=login sucessfully';</script>";
            }else{
                echo "<script>window.location.href = '".site_url('Admin/confirm')."?error=please set a new password or continue and do it on your next login';</script>";
            }
        }

        echo "<script>window.location.href = '".site_url('Admin/login')."?error=failed to login';</script>";
    }

    public function CreateUser(){
        
        $this->load->model('General','cms');
       
        $this->load->helper('db');

        $email = sanitizeInput($this->input->post('email_address',true));

        $fname = sanitizeInput($this->input->post('first_name',true));

        $lname = sanitizeInput($this->input->post('last_name',true));

        $role = sanitizeInput($this->input->post('user_role',true));

        $city = sanitizeInput($this->input->post('user_city',true));

        $state = sanitizeInput($this->input->post('user_state',true));

        if(empty($email) || empty($lname) || empty($fname) || empty($role) || empty($city) || empty($state)){
            $data = array(
                'Message' => 'Please fill out all fields for this transaction.',
                'IsSuccess' => false
            );

            echo json_encode($data,JSON_FORCE_OBJECT);
            return;
        }
        

        $result= UserExist($email);

        if($result != false){
            
            $data = array(
                'Message' => 'User already exist. Falied to create.',
                'IsSuccess' => false
            );

            echo json_encode($data,JSON_FORCE_OBJECT);
            return;

        }

        $result = $this->cms->CreateEmployee(sanitizeArray($_POST));
    
        if($result){
            $data = array(
                'Message' => 'Successfully Created!',
                'IsSuccess' => true
            );

            echo json_encode($data,JSON_FORCE_OBJECT);
        }else{
            $data = array(
                'Message' => 'An error has occured falied to create user.',
                'IsSuccess' => false
            );

            echo json_encode($data,JSON_FORCE_OBJECT);
        }
        

    }

    public function UpdateUserData(){

        if(!($this->ses->has_userdata('user_ses'))){
            echo "<script>window.location.href = '".site_url('Admin/login')."?error=failed to login';</script>";
            return;
        }

        if(empty( $this->input->post("user_password",true))){
            $result = array('Message'=>'Pasword cannot be null or empty.','IsSuccess' => false);

            echo json_encode($result);
            return;
        }

        if(strlen($this->input->post("user_password",true)) < 8){
            $result = array('Message'=>'Password must be 8 or more characters in length.','IsSuccess' => false);

            echo json_encode($result);
            return;
        }

        $pa = $this->input->post("user_password",true);

        if(preg_match('/[!@#$%^&*(),.?":{}|<>\'\`\~\=\+\;\/\_\-\¨\]\[]/',$pa,$match) > 0){
            
            $result = array('Message'=>'Not a valid password. Only word and letter allowed','IsSuccess' => false);

            echo json_encode($result);
            return;
        }

        $this->load->model('General','cms');

        $this->load->helper('db');

        $password = sanitizeInput($this->input->post('user_password',true));

        $data = array(
            'user_password'=>password_hash($password,PASSWORD_DEFAULT),
            'first_time'=>0
        );

        $res = $this->cms->UpdateUser($data);

        if($res){
            echo "";

            $this->ses->set_userdata("first_time",0);

            $result = array('Message'=>"<script>window.location.href = '".site_url('Admin/dashboard')."?success=password created successfully login success';</script>",'IsSuccess' => true);

            echo json_encode($result);
            return;
        }

        $result = array('Message'=>'Failed to update user password','IsSuccess' => false);

        echo json_encode($result);
    }

    /************************************ */

    public function AddBlog(){
        print_r($_POST);
    }

    public function UploadImages(){

    }

    public function UploadVideos(){

    }

    public function AddTaxiPackage(){

    }

    public function AddToursPackage(){
        
    }

    public function AddAirportPackage(){
        
    }

    public function AddAboutUs(){

    }

    public function AddContactUs(){

    }

    public function AddTransportPackage(){

    }

    /************************************ */

    public function UpdateMultimediaDetails(){

    }

    public function UpdatePricePackage($id){

    }

    public function UpdateUser(){

    }

    /************************************ */

     public function DeleteMultimediaDetails(){

    }

    public function DeletePricePackage($id){

    }

    public function DeleteUser(){

    }

    /************************************ */

}

?>