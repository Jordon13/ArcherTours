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
            echo "<script>window.location.href = '".site_url('Admin/dashboard')."?sucess=login sucessfully';</script>";
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

    /************************************ */

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