<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Client extends CI_Controller {

    public function AddBooking(){

        try{

            

            $booking_unique_key = random_string('alnum', 10);
            $booking_first_name = sanitizeInput($this->input->post('fname',true));//required
            $booking_last_name = sanitizeInput($this->input->post('lname',true));//required
            $booking_email = sanitizeInput($this->input->post('email',true));//required
            $booking_phone_number = empty(sanitizeInput($this->input->post('phone',true))) ? "" : sanitizeInput($this->input->post('phone',true)) ;
            $booking_adults = sanitizeInput($this->input->post('adult',true));//required
            $booking_kids = empty(sanitizeInput($this->input->post('kid',true))) ? "" : sanitizeInput($this->input->post('kid',true));
            $booking_origin = $this->input->post('origin',true);//required
            $booking_dest = $this->input->post('dest',true);//required
            $booking_dealspecial_id = empty(sanitizeInput($this->input->post('dealspec',true))) ? "" : sanitizeInput($this->input->post('dealspec',true)) ;
            $booking_date = sanitizeInput($this->input->post('tripdate',true));//required
            // $booking_status = sanitizeInput($this->input->post('place',true));//required sanitizeInput($this->input->post('place',true));
            $booking_type = sanitizeInput($this->input->post('package_type',true));//required
            $booking_special_inst = empty(sanitizeInput($this->input->post('desc',true))) ? "" : sanitizeInput($this->input->post('desc',true));
            $booking_image = '';


            if(empty($booking_first_name) || empty($booking_last_name) || empty($booking_email) || empty($booking_adults) || empty($booking_origin)
            || empty($booking_dest) || empty($booking_date) || empty($booking_type)){
                $result = array(
                    "Message" =>"Please fill out all the feilds *required* for this transaction",
                    "IsSuccess" => false
                );

                echo json_encode($result);
                http_response_code(400);
                return;
            }

            
            if((isset($_FILES['upl']))  && (count($_FILES['upl']) > 0 )){
                    
                $config['upload_path'] = './uploads/bookings/';
                $config['allowed_types'] = "jpg|jpeg";
                $config['encrypt_name'] = TRUE;
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                $_FILES['file']['name'] = $_FILES['upl']['name'][0];
                $_FILES['file']['type'] = $_FILES['upl']['type'][0];
                $_FILES['file']['tmp_name'] = $_FILES['upl']['tmp_name'][0];
                $_FILES['file']['error'] = $_FILES['upl']['error'][0];
                $_FILES['file']['size'] = $_FILES['upl']['size'][0];
                if($this->upload->do_upload('file')){
                    $booking_image  = $this->upload->data()['file_name'];
                }
            }


            $dataArray = array(
                'booking_unique_key'=>$booking_unique_key,
                'booking_first_name'=>$booking_first_name,
                'booking_last_name'=>$booking_last_name,
                'booking_email'=>$booking_email,
                'booking_phone_number'=>date("Y-m-d" ,strtotime($booking_phone_number)),
                'booking_adults'=>$booking_adults,
                'booking_kids'=>$booking_kids,
                'booking_origin'=>$booking_origin,
                'booking_dest'=>$booking_dest,
                'booking_dealspecial_id'=>$booking_dealspecial_id,
                'booking_date'=>$booking_date,
                'booking_type'=>$booking_type,
                'booking_special_inst'=>$booking_special_inst,
                'booking_image'=>$booking_image
            );

            $dataArray = $this->gen->xss_cleanse($dataArray);
            

            if($this->cs->InsertBooking($dataArray)){
                
                $result = array(
                
                    "Message" =>"Quote Request Has Been Sent. An email was sent to {$booking_email} with an estimated rate, please wait for one of our agent to contact you via phone or email 
                    with the best price for you package. Thank you have a wonderful day.",
                
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

    public function ContactUs(){

        $_name = sanitizeInput($this->input->post('name',true));

        $_subject = sanitizeInput($this->input->post('subject',true));

        $_message = sanitizeInput($this->input->post('message',true));

        $_email = sanitizeInput($this->input->post('email_address',true));

        if(empty($_name) || empty($_email) || empty($_message) || empty($_subject)){
            $result = array(
                "Message" =>"* All feilds are mandatory for this request. *",
                "IsSuccess" => false
            );

            echo json_encode($result);
            return;
        }

        $dataArray = array(
            '_name' => $_name,
            '_subject' => $_subject,
            '_message' => $_message,
            '_email' => $_email
        );

        $dataArray = sanitizeArray($dataArray);

        $sent = $this->cs->SendMessage($dataArray);

        if($sent){
            $result = array(
                "Message" =>"Sent Successfully!",
                "IsSuccess" => true
            );

            echo json_encode($result);
            return;
        }

        $result = array(
            "Message" =>"Failed To Send",
            "IsSuccess" => false
        );

        echo json_encode($result);
    }

    public function RequestBlogs(){
        echo "my user id = ".$_SESSION['fb_user_id'];
        echo $this->face->login();
    }

    public function FaceBookHandler(){
        $token = $this->face->getAccessToken();

        if($token != false){

            $result = $this->face->setAccessToken($token);

            if($result != false){
                print_r($result);
            }else{
                echo "Failed to set access token";
            }

            

        }else{
            echo "Login Failed";
        }
    }




}
        
    /* End of file  Client.php */
        
                            