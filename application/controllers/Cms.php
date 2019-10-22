<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Cms extends CI_Controller {

    public $is_hookable = TRUE;

    function __construct(){
        parent::__construct();
        if(!($this->ses->has_userdata("user_ses"))){
            redirect(site_url("Admin/login")."?error=Unauthorized Access: please login to use services");
        }
    }

    public function index(){

    }

    

    public function FaceBookHandler(){
        $token = $this->face->getAccessToken();

        if($token != false){

            $result = $this->face->setAccessToken($token);

            if($result != false){

                $fbExist = $this->mn->IsFacebookExist();

                if($fbExist === 2 || $fbExist === 3){
                    if($fbExist === 3){

                        $updateData = array(
                            'user_id'=>$result['fb_user_id'],
                            'user_token'=>$result['fb_access_token'],
                            'expiry_date'=>$result['fb_expires_at']
                        );
        
                        if($this->gen->UpdateFbInfo($updateData)){
                            echo "Fb user updated Successfully!";
                        }else{
                            echo "Failed user id must me present";
                        }
                       
                    }else{
                        $insertData = array(
                            'user_id'=>$result['fb_user_id'],
                            'user_token'=>$result['fb_access_token'],
                            'expiry_date'=>$result['fb_expires_at']
                        );
        
                        if($this->gen->insertFbInfo($insertData)){
                            echo "Fb user Added Successfully!";
                        }else{
                            echo "Failed to add fb user";
                        }
                    }
                }

            }else{
                echo "Failed to set access token";
            }
        }else{
            echo "Login Failed";
        }
    }

    public function CreateUser(){

        $this->gen->Validatelogin();
        
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

    public function AddBlog(){

        $this->gen->Validatelogin();

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

            $blog_content_copy = $this->input->post('blog_content_copy',true);

            $blog_unique_id = random_string('alnum', 13);

            $blog_tags = $this->input->post('blog_tags',true);

            $blog_image = ''; 

            $fbpost = $this->input->post('fbpost',true);
            

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
                'blog_unique_id'=>$blog_unique_id
            );
            

            if($this->cms->InsertBlog($dataArray)){
                
                $result = array(
                
                    "Message" =>"Blog Added Successfully. <a href='".site_url('blogs1062/').urlencode($blog_url)."'>Check Out Your Blog Here</a>",
                
                    "IsSuccess" => true
                );

                
                if(!empty($fbpost)){

                    $arr = array('message' => sanitizeInput2(xss_clean($blog_content_copy)),
                'link' => 'https://www.archer1062tours.com');

                    $res = $this->face->PostBlog($arr);
                    if(!empty($res)){

                        if(!$res->Success){
                            $result = array(
                        
                                "Message" =>'Added to the system but failed to post to facebook due to: '.$res->Message,
                            
                                "IsSuccess" => false
                            );
    
                            echo json_encode($result);
                            http_response_code(400);
                            return;
                        }

                        $var = $this->face->GetPostAction((string)$res->Message);
                        
                        $updateRes = $this->cms->UpdateBlog(array(
                            'blog_unique_id' => $blog_unique_id,
                            'blog_fb_id' => $res->Message,
                            'fb_comment_link'=>$var->actions[1]->link
                        ));

                        if(!$updateRes){
                            $result = array(
                        
                                "Message" =>'Added to the system and facebook but failed to added commenting features',
                            
                                "IsSuccess" => false
                            );
    
                            echo json_encode($result);
                            http_response_code(400);
                            return;
                        }
                        
                    }

                    
                }

                echo json_encode($result);

                http_response_code(200);
                
                return; 
            }

        }catch(Exception $e){
            $result = array(
            
                "Message" => $e->getMessage(),
            
                "IsSuccess" => false
            );
    
            echo json_encode($result);
    
            http_response_code(500);
        }

        

        
    }

    public function AddPricePackage(){
        try{
            $this->gen->Validatelogin();

            $this->load->helper('security');

            $this->load->helper('string');

            $this->load->library('encryption');

            $this->load->model('General','cms');

            $this->load->helper('db');

            $price_image = ''; 

            $price_origin = sanitizeInput($this->input->post('price_origin',true));

            $price_destination = sanitizeInput($this->input->post('price_destination',true));

            $price_place = sanitizeInput($this->input->post('price_place',true));

            $price_discount = sanitizeInput($this->input->post('price_discount',true));

            $display_price = sanitizeInput($this->input->post('display_price',true));

            $price_per_adult = sanitizeInput($this->input->post('price_per_adult',true));

            $price_per_child = sanitizeInput($this->input->post('price_per_child',true));

            $price_description = base64_encode($this->input->post('price_description',true));

            $package_type = sanitizeInput($this->input->post('package_type',true));

            $trip_type = sanitizeInput($this->input->post('trip_type',true));

            $price_addtional_info = base64_encode(json_encode($this->input->post('price_addtional_info',true)));

            $package_unique_id = random_string('alnum', 32);

            if(empty($price_place) || empty( $price_origin) || empty($price_destination) || empty($display_price) || empty($price_description) || empty($package_type) || empty($trip_type) || empty($price_per_adult)){
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

            $config['upload_path'] = './uploads/prices-images/';
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
                $price_image = $this->upload->data()['file_name'];
            }

            $price_origin = xss_clean($price_origin);

            $price_destination = xss_clean($price_destination);

            $price_place = xss_clean($price_place);

            $price_per_adult = xss_clean($price_per_adult);

            $display_price = xss_clean($display_price);

            $trip_type = xss_clean($trip_type);

            $price_discount = xss_clean($price_discount);

            if(!is_null($price_origin)){
                $price_discount = xss_clean($price_discount);
            }

            if(!is_null($price_per_child)){
                $price_per_child = xss_clean($price_per_child);
            }
            

            $dataArray = array(
                'price_origin'=>$price_origin,
                'price_destination'=>$price_destination,
                'price_place'=>$price_place,
                'display_price'=>$display_price,
                'price_per_adult'=>$price_per_adult,
                'price_per_child'=>$price_per_child,
                'price_description'=>$price_description,
                'package_type'=>$package_type,
                'trip_type'=>$trip_type,
                'price_addtional_info'=>$price_addtional_info,
                'price_image'=>$price_image,
                'package_unique_id'=>$package_unique_id,
                'price_discount'=>$price_discount,
            );
            

            if($this->cms->InsertPrice($dataArray)){
                
                $result = array(
                
                    "Message" =>"Package Added Successfully.",
                
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

    public function AddDeal(){

        $this->gen->Validatelogin();

        try{

            $deal_place = sanitizeInput($this->input->post('place',true));
            $deal_price = sanitizeInput($this->input->post('price',true));
            $deal_discount = sanitizeInput($this->input->post('dicount',true));
            $deal_catch = sanitizeInput($this->input->post('catch_phrase',true));
            $deal_start_date = sanitizeInput($this->input->post('sdate',true));
            $deal_end_date = sanitizeInput($this->input->post('edate',true));
            $deal_description = sanitizeInput($this->input->post('description',true));
            $deal_back_img = '';
            $deal_unique_id = random_string('alnum', 32);


            if(empty($deal_place) || empty( $deal_price) || empty($deal_start_date) || empty($deal_end_date) || empty($deal_description)){
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

            $config['upload_path'] = './uploads/deal-images/';
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
                $deal_back_img  = $this->upload->data()['file_name'];
            }

            $dataArray = array(
                'deal_place '=>$deal_place,
                'deal_price'=>$deal_price,
                'deal_discount'=>$deal_discount,
                'deal_catch'=>$deal_catch,
                'deal_start_date'=>date("Y-m-d" ,strtotime($deal_start_date)),
                'deal_end_date'=>date("Y-m-d" ,strtotime($deal_end_date)),
                'deal_description'=>$deal_description,
                'deal_back_img'=>$deal_back_img,
                'deal_unique_id'=>$deal_unique_id
            );

            $dataArray = $this->gen->xss_cleanse($dataArray);
            

            if($this->gen->InsertDeal($dataArray)){
                
                $result = array(
                
                    "Message" =>"Package Added Successfully.",
                
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

    public function AddSpecial(){

        $this->gen->Validatelogin();

        try{

            

            $special_place = sanitizeInput($this->input->post('place',true));
            $special_price = sanitizeInput($this->input->post('price',true));
            $special_discount = sanitizeInput($this->input->post('discount',true));
            $special_catch = sanitizeInput($this->input->post('catch_phrase',true));
            $special_start_date = sanitizeInput($this->input->post('sdate',true));
            $special_end_date = sanitizeInput($this->input->post('edate',true));
            $special_desc = sanitizeInput($this->input->post('description',true));
            $special_category = sanitizeInput($this->input->post('package_type',true));
            $special_category_desc = sanitizeInput($this->input->post('packdesc',true));
            $special_image = '';
            $special_unique_id = random_string('alnum', 28);


            if(empty($special_place) || empty( $special_price) || empty($special_start_date) || empty($special_end_date) || empty($special_desc)){
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

            $config['upload_path'] = './uploads/special-images/';
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
                $special_image  = $this->upload->data()['file_name'];
            }

            $dataArray = array(
                'special_place'=>$special_place,
                'special_price'=>$special_price,
                'special_discount'=>$special_discount,
                'special_catch'=>$special_catch,
                'special_start_date'=>date("Y-m-d" ,strtotime($special_start_date)),
                'special_end_date'=>date("Y-m-d" ,strtotime($special_end_date)),
                'special_desc'=>$special_desc,
                'special_image'=>$special_image,
                'special_unique_id'=>$special_unique_id,
                'special_desc'=>$special_desc,
                'special_category_desc'=>$special_category_desc,
                'special_category'=>$special_category
            );

            $dataArray = $this->gen->xss_cleanse($dataArray);
            

            if($this->gen->InsertSpecial($dataArray)){
                
                $result = array(
                
                    "Message" =>"Package Added Successfully.",
                
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

    public function UploadItems(){
        try{

            $this->gen->Validatelogin();

            $media_file_name = "";
            $media_file_desc = sanitizeInput($this->input->post('desc',true));
            $sys_user = $this->ses->userdata('user_ses');
            $sys_folder_name = sanitizeInput($this->input->post('folder',true));
            $sys_folder_id ='';
            $counter = 0;


            if(empty($media_file_desc) || empty($sys_folder_name)){
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

            $sys_folder_id = $this->fp->CreateFolder($sys_folder_name);


            if($sys_folder_id == false){
                $result = array(
                    "Message" =>"Failed to create folder",
                    "IsSuccess" => false
                );

                echo json_encode($result);
                http_response_code(400);
                return;
            }

            for($count = 0; $count<count($_FILES['upl']['name']); $count++){

                $isVideo = false;

                $info = pathinfo($_FILES['upl']['name'][$count], PATHINFO_EXTENSION);

                if($info == "mp4"){
                    $config['upload_path'] = './uploads/media/'.$sys_folder_name.'/videos/';
                    $isVideo = true;
                }else{
                    $config['upload_path'] = './uploads/media/'.$sys_folder_name.'/photos/';
                    $isVideo = false;
                }

                $config['allowed_types'] = "jpg|jpeg|png|mp4";
                $config['encrypt_name'] = TRUE;
                $this->load->library('upload',$config);
                $this->upload->initialize($config);

				$_FILES['file']['name'] = $_FILES['upl']['name'][$count];
				$_FILES['file']['type'] = $_FILES['upl']['type'][$count];
				$_FILES['file']['tmp_name'] = $_FILES['upl']['tmp_name'][$count];
				$_FILES['file']['error'] = $_FILES['upl']['error'][$count];
				$_FILES['file']['size'] = $_FILES['upl']['size'][$count];
				if($this->upload->do_upload('file')){
					
                    $media_file_name  = $this->upload->data()['file_name'];
                
                    $dataArray = array(
                        'media_file_desc'=>$media_file_desc,
                        'media_file_name'=>$media_file_name,
                        'sys_folder_id'=>$sys_folder_id,
                        'sys_user'=>$sys_user,
                        'media_file_type'=> $isVideo == true ? "video" : "image"
                    );

                    $dataArray = $this->gen->xss_cleanse($dataArray);

                    if($this->gen->InsertMedia($dataArray)){
                        
        
                       //http_response_code(200);
                        $counter++;
                    }
                
                }
            }
				
            if($counter > 0){
                
                $result = array(
                
                    "Message" =>"Album published successfully.",
                
                    "IsSuccess" => true
                );

                echo json_encode($result);

                http_response_code(200);
                
                return; 
            }else{
                $result = array(
                
                    "Message" =>"Falied to upload album.",
                
                    "IsSuccess" => false
                );

                echo json_encode($result);

                http_response_code(400);
                
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

    public function AddRecentEvent(){

        $this->gen->Validatelogin();

        try{
            if(!($this->ses->has_userdata("user_ses"))){
                redirect(site_url("Admin/login")."?error=Unauthorized Access: please login to use services");
              }

            $recent_title = sanitizeInput($this->input->post('title',true));
            $recent_desc = sanitizeInput($this->input->post('desc',true));
            $recent_img = "";
            $recent_unique_id = random_string('alnum', 10);


            if(empty($recent_desc) || empty($recent_title)){
                $result = array(
                    "Message" =>"All feilds are necessary for this transaction",
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

            $config['upload_path'] = './uploads/recent/';
            $config['allowed_types'] = "jpg|jpeg|png|mp4";
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            $_FILES['file']['name'] = $_FILES['upl']['name'][0];
            $_FILES['file']['type'] = $_FILES['upl']['type'][0];
            $_FILES['file']['tmp_name'] = $_FILES['upl']['tmp_name'][0];
            $_FILES['file']['error'] = $_FILES['upl']['error'][0];
            $_FILES['file']['size'] = $_FILES['upl']['size'][0];
            if($this->upload->do_upload('file')){
                $recent_img  = $this->upload->data()['file_name'];
            }

            $dataArray = array(
                'recent_title'=>$recent_title,
                'recent_desc'=>$recent_desc,
                'recent_file_name'=>$recent_img,
                'recent_unique_id'=>$recent_unique_id,
                'sys_user'=>$this->ses->userdata("user_ses")
            );

            $dataArray = $this->gen->xss_cleanse($dataArray);
            

            if($this->gen->InsertRecentEvent($dataArray)){
                
                $result = array(
                
                    "Message" =>"Recent Event Added Successfully.",
                
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


    public function DeleteFolderData(){

        $foldername = sanitizeInput($this->input->post("folder",true));

        if($this->fp->DeleteFolder($foldername)){

            $data = array(
                'Message' => 'Successfully Deleted!',
                'IsSuccess' => true
            );

            echo json_encode($data,JSON_FORCE_OBJECT);

        }


        $data = array(
            'Message' => 'An Error Has Occured.',
            'IsSuccess' => false
        );

        echo json_encode($data,JSON_FORCE_OBJECT);


    }


    public function AddAboutUs(){

    }

    public function AddContactUs(){

    }



    /************************************ */

    public function UpdateMultimediaDetails(){

    }

    public function UpdatePricePackage($id){

    }

    public function UpdateUser(){
        $newArray = sanitizeArray($_POST);

        if($this->gen->UpdateUser($newArray)){
            echo "Successfully Updated.";
            return;
        }

        echo "Failed to update.";
    }

    /************************************ */

     public function DeleteMultimediaDetails(){

    }

    public function DeletePricePackage($id){

    }

    /************************************ */

    public function UpdateHomePage(){

        $images = $this->input->post('images',true);

        if(!empty($images)){

            $imageArray = explode(',',$images);

            for($i = 0; $i < count($imageArray); $i++){

                if($imageArray[$i] == ""){
                    unset($imageArray[$i]);
                }
            }

            $newArray = array_values($imageArray);

            if((isset($_FILES['upl']))  && (count($_FILES['upl']) > 0 )){
                    
                for($x =0; $x < count($_FILES['upl']['name']); $x++){
                    $config['upload_path'] = './assets/';
                    $config['allowed_types'] = "jpg|jpeg|png";
                    $config['encrypt_name'] = TRUE;
                    $this->load->library('upload',$config);
                    $this->upload->initialize($config);
                    $_FILES['file']['name'] = $_FILES['upl']['name'][$x];
                    $_FILES['file']['type'] = $_FILES['upl']['type'][$x];
                    $_FILES['file']['tmp_name'] = $_FILES['upl']['tmp_name'][$x];
                    $_FILES['file']['error'] = $_FILES['upl']['error'][$x];
                    $_FILES['file']['size'] = $_FILES['upl']['size'][$x];
                    if($this->upload->do_upload('file')){
                        $newImage  = $this->upload->data()['file_name'];
                        $array = array($newArray[$x]=>$newImage);
                        $this->gen->UpdateHomePageFields($array);
                    }
                }
            }

            array_pop($_POST);
        }

        if(count($_POST) > 0){
            $result = $this->gen->UpdateHomePageFields($_POST);
        }

    }

    public function UpdateAboutPage(){

        $images = $this->input->post('images',true);

        if(!empty($images)){

            $imageArray = explode(',',$images);

            for($i = 0; $i < count($imageArray); $i++){

                if($imageArray[$i] == ""){
                    unset($imageArray[$i]);
                }
            }

            $newArray = array_values($imageArray);

            if((isset($_FILES['upl']))  && (count($_FILES['upl']) > 0 )){
                    
                for($x =0; $x < count($_FILES['upl']['name']); $x++){
                    $config['upload_path'] = './assets/';
                    $config['allowed_types'] = "jpg|jpeg|";
                    $config['encrypt_name'] = TRUE;
                    $this->load->library('upload',$config);
                    $this->upload->initialize($config);
                    $_FILES['file']['name'] = $_FILES['upl']['name'][$x];
                    $_FILES['file']['type'] = $_FILES['upl']['type'][$x];
                    $_FILES['file']['tmp_name'] = $_FILES['upl']['tmp_name'][$x];
                    $_FILES['file']['error'] = $_FILES['upl']['error'][$x];
                    $_FILES['file']['size'] = $_FILES['upl']['size'][$x];
                    if($this->upload->do_upload('file')){
                        $newImage  = $this->upload->data()['file_name'];
                        $array = array($newArray[$x]=>$newImage);
                        $this->gen->UpdateAboutUsFields($array);
                    }
                }
            }

            array_pop($_POST);
        }

        if(count($_POST) > 0){
            $result = $this->gen->UpdateAboutUsFields($_POST);
        }

    }

    public function UpdateContactPage(){

        $images = $this->input->post('images',true);

        if(!empty($images)){

            $imageArray = explode(',',$images);

            for($i = 0; $i < count($imageArray); $i++){

                if($imageArray[$i] == ""){
                    unset($imageArray[$i]);
                }
            }

            $newArray = array_values($imageArray);

            if((isset($_FILES['upl']))  && (count($_FILES['upl']) > 0 )){
                    
                for($x =0; $x < count($_FILES['upl']['name']); $x++){
                    $config['upload_path'] = './assets/';
                    $config['allowed_types'] = "jpg|jpeg|";
                    $config['encrypt_name'] = TRUE;
                    $this->load->library('upload',$config);
                    $this->upload->initialize($config);
                    $_FILES['file']['name'] = $_FILES['upl']['name'][$x];
                    $_FILES['file']['type'] = $_FILES['upl']['type'][$x];
                    $_FILES['file']['tmp_name'] = $_FILES['upl']['tmp_name'][$x];
                    $_FILES['file']['error'] = $_FILES['upl']['error'][$x];
                    $_FILES['file']['size'] = $_FILES['upl']['size'][$x];
                    if($this->upload->do_upload('file')){
                        $newImage  = $this->upload->data()['file_name'];
                        $array = array($newArray[$x]=>$newImage);
                        $this->gen->UpdateContactUsFields($array);
                    }
                }
            }

            array_pop($_POST);
        }

        if(count($_POST) > 0){
            $result = $this->gen->UpdateContactUsFields($_POST);
        }

    }

    public function UpdateGalleryPage(){

        $images = $this->input->post('images',true);

        if(!empty($images)){

            $imageArray = explode(',',$images);

            for($i = 0; $i < count($imageArray); $i++){

                if($imageArray[$i] == ""){
                    unset($imageArray[$i]);
                }
            }

            $newArray = array_values($imageArray);

            if((isset($_FILES['upl']))  && (count($_FILES['upl']) > 0 )){
                    
                for($x =0; $x < count($_FILES['upl']['name']); $x++){
                    $config['upload_path'] = './assets/';
                    $config['allowed_types'] = "jpg|jpeg|";
                    $config['encrypt_name'] = TRUE;
                    $this->load->library('upload',$config);
                    $this->upload->initialize($config);
                    $_FILES['file']['name'] = $_FILES['upl']['name'][$x];
                    $_FILES['file']['type'] = $_FILES['upl']['type'][$x];
                    $_FILES['file']['tmp_name'] = $_FILES['upl']['tmp_name'][$x];
                    $_FILES['file']['error'] = $_FILES['upl']['error'][$x];
                    $_FILES['file']['size'] = $_FILES['upl']['size'][$x];
                    if($this->upload->do_upload('file')){
                        $newImage  = $this->upload->data()['file_name'];
                        $array = array($newArray[$x]=>$newImage);
                        $this->gen->UpdateGalleryPageFields($array);
                    }
                }
            }

            array_pop($_POST);
        }

        if(count($_POST) > 0){
            $result = $this->gen->UpdateGalleryPageFields($_POST);
        }

    }


    public function UpdateBlogPage(){

        $images = $this->input->post('images',true);

        if(!empty($images)){

            $imageArray = explode(',',$images);

            for($i = 0; $i < count($imageArray); $i++){

                if($imageArray[$i] == ""){
                    unset($imageArray[$i]);
                }
            }

            $newArray = array_values($imageArray);

            if((isset($_FILES['upl']))  && (count($_FILES['upl']) > 0 )){
                    
                for($x =0; $x < count($_FILES['upl']['name']); $x++){
                    $config['upload_path'] = './assets/';
                    $config['allowed_types'] = "jpg|jpeg|";
                    $config['encrypt_name'] = TRUE;
                    $this->load->library('upload',$config);
                    $this->upload->initialize($config);
                    $_FILES['file']['name'] = $_FILES['upl']['name'][$x];
                    $_FILES['file']['type'] = $_FILES['upl']['type'][$x];
                    $_FILES['file']['tmp_name'] = $_FILES['upl']['tmp_name'][$x];
                    $_FILES['file']['error'] = $_FILES['upl']['error'][$x];
                    $_FILES['file']['size'] = $_FILES['upl']['size'][$x];
                    if($this->upload->do_upload('file')){
                        $newImage  = $this->upload->data()['file_name'];
                        $array = array($newArray[$x]=>$newImage);
                        $this->gen->UpdateBlogPageFields($array);
                    }
                }
            }

            array_pop($_POST);
        }

        if(count($_POST) > 0){
            $result = $this->gen->UpdateBlogPageFields($_POST);
        }

    }

    public function UpdateBookingPage(){

        $images = $this->input->post('images',true);

        if(!empty($images)){

            $imageArray = explode(',',$images);

            for($i = 0; $i < count($imageArray); $i++){

                if($imageArray[$i] == ""){
                    unset($imageArray[$i]);
                }
            }

            $newArray = array_values($imageArray);

            if((isset($_FILES['upl']))  && (count($_FILES['upl']) > 0 )){
                    
                for($x =0; $x < count($_FILES['upl']['name']); $x++){
                    $config['upload_path'] = './assets/';
                    $config['allowed_types'] = "jpg|jpeg|";
                    $config['encrypt_name'] = TRUE;
                    $this->load->library('upload',$config);
                    $this->upload->initialize($config);
                    $_FILES['file']['name'] = $_FILES['upl']['name'][$x];
                    $_FILES['file']['type'] = $_FILES['upl']['type'][$x];
                    $_FILES['file']['tmp_name'] = $_FILES['upl']['tmp_name'][$x];
                    $_FILES['file']['error'] = $_FILES['upl']['error'][$x];
                    $_FILES['file']['size'] = $_FILES['upl']['size'][$x];
                    if($this->upload->do_upload('file')){
                        $newImage  = $this->upload->data()['file_name'];
                        $array = array($newArray[$x]=>$newImage);
                        $this->gen->UpdateBookingPageFields($array);
                    }
                }
            }

            array_pop($_POST);
        }

        if(count($_POST) > 0){
            $result = $this->gen->UpdateBookingPageFields($_POST);
        }

    }

    public function UpdateServicePage(){

        $images = $this->input->post('images',true);

        if(!empty($images)){

            $imageArray = explode(',',$images);

            for($i = 0; $i < count($imageArray); $i++){

                if($imageArray[$i] == ""){
                    unset($imageArray[$i]);
                }
            }

            $newArray = array_values($imageArray);

            if((isset($_FILES['upl']))  && (count($_FILES['upl']) > 0 )){
                    
                for($x =0; $x < count($_FILES['upl']['name']); $x++){
                    $config['upload_path'] = './assets/';
                    $config['allowed_types'] = "jpg|jpeg|mp4|avi|3gp|ogg|wmv|wma|webm|flv";
                    $config['encrypt_name'] = TRUE;
                    $this->load->library('upload',$config);
                    $this->upload->initialize($config);
                    $_FILES['file']['name'] = $_FILES['upl']['name'][$x];
                    $_FILES['file']['type'] = $_FILES['upl']['type'][$x];
                    $_FILES['file']['tmp_name'] = $_FILES['upl']['tmp_name'][$x];
                    $_FILES['file']['error'] = $_FILES['upl']['error'][$x];
                    $_FILES['file']['size'] = $_FILES['upl']['size'][$x];
                    if($this->upload->do_upload('file')){
                        $newImage  = $this->upload->data()['file_name'];
                        $array = array($newArray[$x]=>$newImage);
                        $this->gen->UpdateServicePageFields($array);
                    }
                }
            }

            array_pop($_POST);
        }

        if(count($_POST) > 0){
            $result = $this->gen->UpdateServicePageFields($_POST);
        }

    }

    public function UpdateTaxiServicePage(){

        $images = $this->input->post('images',true);

        if(!empty($images)){

            $imageArray = explode(',',$images);

            for($i = 0; $i < count($imageArray); $i++){

                if($imageArray[$i] == ""){
                    unset($imageArray[$i]);
                }
            }

            $newArray = array_values($imageArray);

            if((isset($_FILES['upl']))  && (count($_FILES['upl']) > 0 )){
                    
                for($x =0; $x < count($_FILES['upl']['name']); $x++){
                    $config['upload_path'] = './assets/';
                    $config['allowed_types'] = "jpg|jpeg|";
                    $config['encrypt_name'] = TRUE;
                    $this->load->library('upload',$config);
                    $this->upload->initialize($config);
                    $_FILES['file']['name'] = $_FILES['upl']['name'][$x];
                    $_FILES['file']['type'] = $_FILES['upl']['type'][$x];
                    $_FILES['file']['tmp_name'] = $_FILES['upl']['tmp_name'][$x];
                    $_FILES['file']['error'] = $_FILES['upl']['error'][$x];
                    $_FILES['file']['size'] = $_FILES['upl']['size'][$x];
                    if($this->upload->do_upload('file')){
                        $newImage  = $this->upload->data()['file_name'];
                        $array = array($newArray[$x]=>$newImage);
                        $this->gen->UpdateTaxiPageFields($array);
                    }
                }
            }

            array_pop($_POST);
        }

        if(count($_POST) > 0){
            $result = $this->gen->UpdateTaxiPageFields($_POST);
        }

    }

    public function UpdateToursServicePage(){

        $images = $this->input->post('images',true);

        if(!empty($images)){

            $imageArray = explode(',',$images);

            for($i = 0; $i < count($imageArray); $i++){

                if($imageArray[$i] == ""){
                    unset($imageArray[$i]);
                }
            }

            $newArray = array_values($imageArray);

            if((isset($_FILES['upl']))  && (count($_FILES['upl']) > 0 )){
                    
                for($x =0; $x < count($_FILES['upl']['name']); $x++){
                    $config['upload_path'] = './assets/';
                    $config['allowed_types'] = "jpg|jpeg|";
                    $config['encrypt_name'] = TRUE;
                    $this->load->library('upload',$config);
                    $this->upload->initialize($config);
                    $_FILES['file']['name'] = $_FILES['upl']['name'][$x];
                    $_FILES['file']['type'] = $_FILES['upl']['type'][$x];
                    $_FILES['file']['tmp_name'] = $_FILES['upl']['tmp_name'][$x];
                    $_FILES['file']['error'] = $_FILES['upl']['error'][$x];
                    $_FILES['file']['size'] = $_FILES['upl']['size'][$x];
                    if($this->upload->do_upload('file')){
                        $newImage  = $this->upload->data()['file_name'];
                        $array = array($newArray[$x]=>$newImage);
                        $this->gen->UpdateToursPageFields($array);
                    }
                }
            }

            array_pop($_POST);
        }

        if(count($_POST) > 0){
            $result = $this->gen->UpdateToursPageFields($_POST);
        }

    }

    public function UpdateAirportServicePage(){

        $images = $this->input->post('images',true);

        if(!empty($images)){

            $imageArray = explode(',',$images);

            for($i = 0; $i < count($imageArray); $i++){

                if($imageArray[$i] == ""){
                    unset($imageArray[$i]);
                }
            }

            $newArray = array_values($imageArray);

            if((isset($_FILES['upl']))  && (count($_FILES['upl']) > 0 )){
                    
                for($x =0; $x < count($_FILES['upl']['name']); $x++){
                    $config['upload_path'] = './assets/';
                    $config['allowed_types'] = "jpg|jpeg|";
                    $config['encrypt_name'] = TRUE;
                    $this->load->library('upload',$config);
                    $this->upload->initialize($config);
                    $_FILES['file']['name'] = $_FILES['upl']['name'][$x];
                    $_FILES['file']['type'] = $_FILES['upl']['type'][$x];
                    $_FILES['file']['tmp_name'] = $_FILES['upl']['tmp_name'][$x];
                    $_FILES['file']['error'] = $_FILES['upl']['error'][$x];
                    $_FILES['file']['size'] = $_FILES['upl']['size'][$x];
                    if($this->upload->do_upload('file')){
                        $newImage  = $this->upload->data()['file_name'];
                        $array = array($newArray[$x]=>$newImage);
                        $this->gen->UpdateAirportPageFields($array);
                    }
                }
            }

            array_pop($_POST);
        }

        if(count($_POST) > 0){
            $result = $this->gen->UpdateAirportPageFields($_POST);
        }

    }

    public function UpdateDealsPage(){

        $images = $this->input->post('images',true);

        if(!empty($images)){

            $imageArray = explode(',',$images);

            for($i = 0; $i < count($imageArray); $i++){

                if($imageArray[$i] == ""){
                    unset($imageArray[$i]);
                }
            }

            $newArray = array_values($imageArray);

            if((isset($_FILES['upl']))  && (count($_FILES['upl']) > 0 )){
                    
                for($x =0; $x < count($_FILES['upl']['name']); $x++){
                    $config['upload_path'] = './assets/';
                    $config['allowed_types'] = "jpg|jpeg|";
                    $config['encrypt_name'] = TRUE;
                    $this->load->library('upload',$config);
                    $this->upload->initialize($config);
                    $_FILES['file']['name'] = $_FILES['upl']['name'][$x];
                    $_FILES['file']['type'] = $_FILES['upl']['type'][$x];
                    $_FILES['file']['tmp_name'] = $_FILES['upl']['tmp_name'][$x];
                    $_FILES['file']['error'] = $_FILES['upl']['error'][$x];
                    $_FILES['file']['size'] = $_FILES['upl']['size'][$x];
                    if($this->upload->do_upload('file')){
                        $newImage  = $this->upload->data()['file_name'];
                        $array = array($newArray[$x]=>$newImage);
                        $this->gen->UpdateDealsPageFields($array);
                    }
                }
            }

            array_pop($_POST);
        }

        if(count($_POST) > 0){
            $result = $this->gen->UpdateDealsPageFields($_POST);
        }

    }

    public function UpdateTestimonialsPage(){

        $images = $this->input->post('images',true);

        if(!empty($images)){

            $imageArray = explode(',',$images);

            for($i = 0; $i < count($imageArray); $i++){

                if($imageArray[$i] == ""){
                    unset($imageArray[$i]);
                }
            }

            $newArray = array_values($imageArray);

            if((isset($_FILES['upl']))  && (count($_FILES['upl']) > 0 )){
                    
                for($x =0; $x < count($_FILES['upl']['name']); $x++){
                    $config['upload_path'] = './assets/';
                    $config['allowed_types'] = "jpg|jpeg|";
                    $config['encrypt_name'] = TRUE;
                    $this->load->library('upload',$config);
                    $this->upload->initialize($config);
                    $_FILES['file']['name'] = $_FILES['upl']['name'][$x];
                    $_FILES['file']['type'] = $_FILES['upl']['type'][$x];
                    $_FILES['file']['tmp_name'] = $_FILES['upl']['tmp_name'][$x];
                    $_FILES['file']['error'] = $_FILES['upl']['error'][$x];
                    $_FILES['file']['size'] = $_FILES['upl']['size'][$x];
                    if($this->upload->do_upload('file')){
                        $newImage  = $this->upload->data()['file_name'];
                        $array = array($newArray[$x]=>$newImage);
                        $this->gen->UpdateTestimonialsPageFields($array);
                    }
                }
            }

            array_pop($_POST);
        }

        if(count($_POST) > 0){
            $result = $this->gen->UpdateTestimonialsPageFields($_POST);
        }

    }

    public function UpdateRecentNewsPage(){

        $images = $this->input->post('images',true);

        if(!empty($images)){

            $imageArray = explode(',',$images);

            for($i = 0; $i < count($imageArray); $i++){

                if($imageArray[$i] == ""){
                    unset($imageArray[$i]);
                }
            }

            $newArray = array_values($imageArray);

            if((isset($_FILES['upl']))  && (count($_FILES['upl']) > 0 )){
                    
                for($x =0; $x < count($_FILES['upl']['name']); $x++){
                    $config['upload_path'] = './assets/';
                    $config['allowed_types'] = "jpg|jpeg|";
                    $config['encrypt_name'] = TRUE;
                    $this->load->library('upload',$config);
                    $this->upload->initialize($config);
                    $_FILES['file']['name'] = $_FILES['upl']['name'][$x];
                    $_FILES['file']['type'] = $_FILES['upl']['type'][$x];
                    $_FILES['file']['tmp_name'] = $_FILES['upl']['tmp_name'][$x];
                    $_FILES['file']['error'] = $_FILES['upl']['error'][$x];
                    $_FILES['file']['size'] = $_FILES['upl']['size'][$x];
                    if($this->upload->do_upload('file')){
                        $newImage  = $this->upload->data()['file_name'];
                        $array = array($newArray[$x]=>$newImage);
                        $this->gen->UpdateNewsPageFields($array);
                    }
                }
            }

            array_pop($_POST);
        }

        if(count($_POST) > 0){
            $result = $this->gen->UpdateNewsPageFields($_POST);
        }

    }

    

    public function DeleteUser(){
        $id = $_POST['id'];

        if($this->gen->DeleteUserById($id)){
            echo 0;
            return;
        }

        echo 1;
    }

    public function EditUser(){

        $newArray = sanitizeArray($_POST);

        $id = $newArray['id'];

        array_pop($newArray);
        
        if($this->gen->UpdateUserById($newArray,$id)){
            echo "Successfully Updated.";
            return;
        }

        echo "Failed to update.";

    }

    public function DeleteBlog(){
        $id = $_POST['id'];

        if($this->gen->DeleteBlogById($id)){
            echo 0;
            return;
        }

        echo 1;
    }

    public function EditBlog(){
        $images = $this->input->post('images',true);
        
        $this->load->helper('security');

        $this->load->helper('string');

        $this->load->library('encryption');

        $id = $_POST['id'];

        array_pop($_POST);

        if(!empty($images)){

            $imageArray = explode(',',$images);

            for($i = 0; $i < count($imageArray); $i++){

                if($imageArray[$i] == ""){
                    unset($imageArray[$i]);
                }
            }

            $newArray = array_values($imageArray);
            // print_r($newArray);
            // return;

            

            if((isset($_FILES['upl']))  && (count($_FILES['upl']) > 0 )){
                    
                for($x =0; $x < count($_FILES['upl']['name']); $x++){
                    $config['upload_path'] = './uploads/blog-images/';
                    $config['allowed_types'] = "jpg|jpeg|";
                    $config['encrypt_name'] = TRUE;
                    $this->load->library('upload',$config);
                    $this->upload->initialize($config);
                    $_FILES['file']['name'] = $_FILES['upl']['name'][$x];
                    $_FILES['file']['type'] = $_FILES['upl']['type'][$x];
                    $_FILES['file']['tmp_name'] = $_FILES['upl']['tmp_name'][$x];
                    $_FILES['file']['error'] = $_FILES['upl']['error'][$x];
                    $_FILES['file']['size'] = $_FILES['upl']['size'][$x];
                    if($this->upload->do_upload('file')){
                        $newImage  = $this->upload->data()['file_name'];
                        $array = array($newArray[$x]=>$newImage);
                        $this->gen->UpdateBlogById($array,$id);
                    }
                }
            }

            array_pop($_POST);

            //print_r($_POST);
        }

        $_POST['blog_content'] = $this->encryption->encrypt(xss_clean($_POST['blog_content']));

        if(count($_POST) > 0){
            $result = $this->gen->UpdateBlogById($_POST,$id);
        }
    }

    public function DeletePrice(){
        $id = $_POST['id'];

        if($this->gen->DeletePriceById($id)){
            echo 0;
            return;
        }

        echo 1;
    }

    public function EditPrice(){
        $images = $this->input->post('images',true);
        
        $this->load->helper('security');

        $this->load->helper('string');

        $this->load->library('encryption');

        $id = $_POST['id'];

        array_pop($_POST);

        if(!empty($images)){

            $imageArray = explode(',',$images);

            for($i = 0; $i < count($imageArray); $i++){

                if($imageArray[$i] == ""){
                    unset($imageArray[$i]);
                }
            }

            $newArray = array_values($imageArray);
            // print_r($newArray);
            // return;

            

            if((isset($_FILES['upl']))  && (count($_FILES['upl']) > 0 )){
                    
                for($x =0; $x < count($_FILES['upl']['name']); $x++){
                    $config['upload_path'] = './uploads/prices-images/';
                    $config['allowed_types'] = "jpg|jpeg|";
                    $config['encrypt_name'] = TRUE;
                    $this->load->library('upload',$config);
                    $this->upload->initialize($config);
                    $_FILES['file']['name'] = $_FILES['upl']['name'][$x];
                    $_FILES['file']['type'] = $_FILES['upl']['type'][$x];
                    $_FILES['file']['tmp_name'] = $_FILES['upl']['tmp_name'][$x];
                    $_FILES['file']['error'] = $_FILES['upl']['error'][$x];
                    $_FILES['file']['size'] = $_FILES['upl']['size'][$x];
                    if($this->upload->do_upload('file')){
                        $newImage  = $this->upload->data()['file_name'];
                        $array = array($newArray[$x]=>$newImage);
                        $this->gen->UpdatePriceById($array,$id);
                    }
                }
            }

            array_pop($_POST);

            //print_r($_POST);
        }

        if(count($_POST) > 0){
            $result = $this->gen->UpdatePriceById($_POST,$id);
        }
    }

    public function DeleteDeal(){
        $id = $_POST['id'];

        if($this->gen->DeleteDealById($id)){
            echo 0;
            return;
        }

        echo 1;
    }

    public function EditDeal(){
        $newArray = sanitizeArray($_POST);

        $id = $newArray['id'];

        array_pop($newArray);
        
        if($this->gen->UpdateDealById($newArray,$id)){
            echo "Successfully Updated.";
            return;
        }

        echo "Failed to update.";
    }

    //DeleteImageById

    public function DeleteNews(){
        $id = $_POST['id'];

        if($this->gen->DeleteNewsById($id)){
            echo 0;
            return;
        }

        echo 1;
    }

    public function DeleteMedia(){
        $id = $_POST['id'];

        if($this->gen->DeleteImageById($id)){
            echo 0;
            return;
        }

        echo 1;
    }

    public function EditRecentNews(){
        $images = $this->input->post('images',true);
        
        $this->load->helper('security');

        $this->load->helper('string');

        $this->load->library('encryption');

        $id = $_POST['id'];

        array_pop($_POST);

        if(!empty($images)){

            $imageArray = explode(',',$images);

            for($i = 0; $i < count($imageArray); $i++){

                if($imageArray[$i] == ""){
                    unset($imageArray[$i]);
                }
            }

            $newArray = array_values($imageArray);
            
            if((isset($_FILES['upl']))  && (count($_FILES['upl']) > 0 )){
                    
                for($x =0; $x < count($_FILES['upl']['name']); $x++){
                    $config['upload_path'] = './uploads/recent/';
                    $config['allowed_types'] = "jpg|jpeg|mp4|avi|flv";
                    $config['encrypt_name'] = TRUE;
                    $this->load->library('upload',$config);
                    $this->upload->initialize($config);
                    $_FILES['file']['name'] = $_FILES['upl']['name'][$x];
                    $_FILES['file']['type'] = $_FILES['upl']['type'][$x];
                    $_FILES['file']['tmp_name'] = $_FILES['upl']['tmp_name'][$x];
                    $_FILES['file']['error'] = $_FILES['upl']['error'][$x];
                    $_FILES['file']['size'] = $_FILES['upl']['size'][$x];
                    if($this->upload->do_upload('file')){
                        $newImage  = $this->upload->data()['file_name'];
                        $array = array($newArray[$x]=>$newImage);
                        $this->gen->UpdateNewsById($array,$id);
                    }
                }
            }

            array_pop($_POST);

            //print_r($_POST);
        }

        if(count($_POST) > 0){
            $result = $this->gen->UpdateNewsById($_POST,$id);
        }
    }

    public function EditImageCaption(){

    }

    public function EditBooking(){

    }

    public function DeleteTestimonial(){
        $id = $_POST['id'];

        if($this->gen->DeleteTestimonialById($id)){
            echo 0;
            return;
        }

        echo 1;
    }

    
    public function DeleteFolderFiles(){
        

        $_POST = sanitizeArray($_POST);

        $id = $_POST['id'];
        
        if($this->gen->DeleteFilesAndFoldersById($id)){
            echo "Successfully Deleted.";
            return;
        }

        echo "Failed to update.";
    }

    public function SetTestimonialVisibility(){
       
        $_POST = sanitizeArray($_POST);

        $id = $_POST['id'];

        $newArray = array("_isVisible"=>$_POST['state']);
        
        if($this->gen->UpdateTestimonialById($newArray,$id)){
            echo "Successfully Updated.";
            return;
        }

        echo "Failed to update.";
    }
}

?>