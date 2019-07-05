<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cms extends CI_Controller {
    
    public $is_hookable = TRUE;

    public function index(){

    }

    public function Login(){

        $email = $this->input->post('email',true);
        $password = $this->input->post('password',true);



        echo "Your Emails Is: ".$email." Password IS: ".$password;
    }

    public function CreateUser(){
        
        $this->load->model('General','cms');
        
        $result = $this->cms->CreateEmployee("Jordaine","Gayle","jordainegayle34@gmail.com","Love123456789","Manager");
        
        if($result){
            echo 'Created Successfully';
        }else{
            echo 'Failed to create user';
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