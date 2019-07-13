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
                echo "<script>window.location.href = '".site_url('Admin/dashboard?active=0')."?sucess=login sucessfully';</script>";
            }else{
                echo "<script>window.location.href = '".site_url('Admin/confirm')."?error=please set a new password or continue and do it on your next login';</script>";
            }
        }

        echo "<script>window.location.href = '".site_url('Admin/login')."?error=failed to login';</script>";
        http_response_code(401);
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
            http_response_code(400);
            return;
        }
        

        $result= UserExist($email);

        if($result != false){
            
            $data = array(
                'Message' => 'User already exist. Falied to create.',
                'IsSuccess' => false
            );

            echo json_encode($data,JSON_FORCE_OBJECT);
            http_response_code(400);
            return;

        }

        $result = $this->cms->CreateEmployee(sanitizeArray($_POST));
    
        if($result){
            $data = array(
                'Message' => 'Successfully Created!',
                'IsSuccess' => true
            );

            echo json_encode($data,JSON_FORCE_OBJECT);
            http_response_code(200);
        }else{
            $data = array(
                'Message' => 'An error has occured falied to create user.',
                'IsSuccess' => false
            );

            echo json_encode($data,JSON_FORCE_OBJECT);
            http_response_code(417);
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
            http_response_code(400);
            return;
        }

        if(strlen($this->input->post("user_password",true)) < 8){
            $result = array('Message'=>'Password must be 8 or more characters in length.','IsSuccess' => false);

            echo json_encode($result);
            http_response_code(400);
            return;
        }

        $pa = $this->input->post("user_password",true);

        if(preg_match('/[!@#$%^&*(),.?":{}|<>\'\`\~\=\+\;\/\_\-\¨\]\[]/',$pa,$match) > 0){
            
            $result = array('Message'=>'Not a valid password. Only word and letter allowed','IsSuccess' => false);

            echo json_encode($result);
            http_response_code(400);
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

            $result = array('Message'=>"<script>window.location.href = '".site_url('Admin/dashboard')."?success=password created successfully login success&active=0';</script>",'IsSuccess' => true);

            echo json_encode($result);
            return;
        }

        $result = array('Message'=>'Failed to update user password','IsSuccess' => false);

        echo json_encode($result);
        http_response_code(417);
    }

    /************************************ */

    public function AddBlog(){

        try{

            $this->load->helper('security');

            $this->load->helper('string');

            $this->load->library('encryption');

            $this->load->model('General','cms');

            $this->load->helper('db');

            $blog_title = sanitizeInput($this->input->post('blog_title',true));

            $blog_catch_phrase = sanitizeInput($this->input->post('blog_catch_phrase',true));

            $blog_url = $this->input->post('blog_url',true);

            $blog_user_visible = sanitizeInput($this->input->post('blog_user_visible',true));

            $blog_content = $this->input->post('blog_content',true);

            $blog_tags = $this->input->post('blog_tags',true);

            $blog_image = ''; 

            if(empty($blog_title) || empty($blog_catch_phrase) || empty($blog_user_visible) || empty($blog_content) || empty($blog_tags)){
                $result = array(
                    "Message" =>"Please fill out all the feilds necessary for this transaction",
                    "IsSuccess" => false
                );

                echo json_encode($result);
                http_response_code(400);
                return;
            }

            if(!(isset($_FILES['upl'])) || ($_FILES['upl']['name'][0] == "")){
                    
                    $result = array(
                    
                        "Message" =>"Please upload a image for this request",
                    
                        "IsSuccess" => false
                    );

                    echo json_encode($result);
                    http_response_code(400);
                    return;
            }

            $blog_title = xss_clean($blog_title);

            $blog_catch_phrase = xss_clean($blog_catch_phrase);

            $blog_content = $this->encryption->encrypt(xss_clean($blog_content));

            $blog_tags = xss_clean($blog_tags);

            $blog_tags = base64_encode(json_encode($blog_tags));

            $output = 0;
            $config['upload_path'] = './uploads/blog-images/';
            $config['allowed_types'] = "jpg|jpeg|png";
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            $_FILES['file']['name'] = $_FILES['upl']['name'][0];
            $_FILES['file']['type'] = $_FILES['upl']['type'][0];
            $_FILES['file']['tmp_name'] = $_FILES['upl']['tmp_name'][0];
            $_FILES['file']['error'] = $_FILES['upl']['error'][0];
            $_FILES['file']['size'] = $_FILES['upl']['size'][0];
            if($this->upload->do_upload('file')){
                $blog_image = $this->upload->data()['file_name'];
            }

            if(empty($blog_url)){
                $blog_url = base64_encode(do_hash(random_string('alnum', 16),'gost-crypto'));
            }


            $dataArray = array(
                'blog_title'=>$blog_title,
                'blog_catch_phrase'=>$blog_catch_phrase,
                'blog_url'=>$blog_url,
                'blog_user_visible'=>$blog_user_visible,
                'blog_content'=>$blog_content,
                'blog_image'=>$blog_image,
                'blog_tags'=>$blog_tags,
            );
            

            if($this->cms->InsertBlog($dataArray)){
                
                $result = array(
                
                    "Message" =>"Blog Added Successfully. <a href='".site_url('blogs1062/').urlencode($blog_url)."'>Check Out Your Blog Here</a>",
                
                    "IsSuccess" => true
                );

                echo json_encode($result);

                http_response_code(200);
                
                return; 
            }

        }catch(Exception $e){
            $result = array(
            
                "Message" => $e->getMessage(),
            
                "IsSuccess" => false
            );
    
            echo json_ensode($result);
    
            http_response_code(500);
        }

        

        
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