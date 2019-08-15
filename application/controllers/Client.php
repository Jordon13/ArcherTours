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
                'booking_phone_number'=>$booking_phone_number,
                'booking_adults'=>$booking_adults,
                'booking_kids'=>$booking_kids,
                'booking_origin'=>$booking_origin,
                'booking_dest'=>$booking_dest,
                'booking_dealspecial_id'=>$booking_dealspecial_id,
                'booking_date'=>date("Y-m-d" ,strtotime($booking_date)),
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
        // echo "my user id = ".$_SESSION['fb_user_id'];
        $arr = array('message' => 'New Message Postguhhhoh23121asdasasingsfsdfsdfsdfsdfs');
        echo '<pre>';
        echo json_encode($this->face->GetPostAction("208362526252176_736506393437784"),JSON_PRETTY_PRINT);
        //$item  = $this->face->PostBlog($arr);
        //echo $item->Message;
        //$res = $this->face->GetCommentCount("208362526252176_736506393437784");
        //$ress = $this->face->GetLikesCount("208362526252176_736506393437784");
        //$resss = $this->face->GetSharesCount("208362526252176_736506393437784");
       // print_r($res);
        

        // $this->face->GetFeedData();
        echo'</pre>';

       // print_r("Total Comments = ".$res);
        //print_r("<br/>Total Likes = ".$ress);
        //print_r("<br/>Total Shares = ".$resss);
        // echo $res['data']['summary']['total_count']." - cool";
    }

    public function CreatePayment(){

        $fname = $this->input->post('fname',true);

        $lname = $this->input->post('lname',true);

        $email = $this->input->post('email',true);

        $phone = $this->input->post('phone',true);

        $adultcount = $this->input->post('adultcount',true);

        $childcount = $this->input->post('childcount',true);

        $tripdate = $this->input->post('tripdate',true);
        
        $addinfo = $this->input->post('adinfo',true);

        $packageId = $this->input->post('PackageId',true);

        $booking_unique_key = random_string('alnum', 10);

        if(empty($fname) && empty($lname) && empty($email) && empty($phone) && empty($adultcount) && empty($tripdate) && empty($addinfo) && empty($packageId) ){

            echo "All feilds are required for this request";

            return;

        }

        $name = $fname.' '.$lname;

        $item = $this->cs->GetPackageById($packageId);

        

        if($item === false){
            
            echo "Failed to identify package";

            return;
        }

        
        $items = array();

        if($item->price_per_child > 0 && $childcount > 0){
            array_push($items, array(
                'name'=>$item->price_place,
                'currency'=>'USD',
                'quantity'=>$childcount,
                'id'=>$packageId,
                'desc'=>"child package",
                'price'=>$item->price_per_child
            ));
        }

        array_push($items, array(
            'name'=>$item->price_place,
            'currency'=>'USD',
            'quantity'=>$adultcount,
            'id'=>$packageId,
            'desc'=>"adult package",
            'price'=>$item->price_per_adult
        ));

        if($item->price_per_child == null){
            $item->price_per_child = 0;
        }

        $total = ($item->price_per_adult * $adultcount) + ($item->price_per_child * $childcount);


        array_push($items, array(
            'name'=>"90% waiver to offset balance to only collect 10% upfront. *amount waived should be payed in person*",
            'currency'=>'USD',
            'quantity'=>"1",
            'id'=>$packageId,
            'desc'=>"down payment waiver - *amount waived should be payed in person*",
            'price'=>($total * 0.90) * -1
        ));

        $note = "Going from ".$item->price_origin." to ".$item->price_destination;

        $description = $item->price_description;

        $total = ($total-($total * 0.90));

        $jsDeArray = json_decode(json_encode($items));

        $pack = array(
            'items'=>$jsDeArray,
            'desc'=>base64_decode($description),
            'currency'=>"USD",
            "note"=>$note,
            "total"=>(float)$total,
            "bookingid"=>$booking_unique_key
        );

        $package = json_decode(json_encode($pack));

        //print_r($package);

        $result = $this->pal->getPayPalClient($package);

        if($result === false){
            echo "failed to process payment";
            return;
        }


        $dataArray = array(
            'booking_unique_key'=>$booking_unique_key,
            'booking_first_name'=>$fname,
            'booking_last_name'=>$lname,
            'booking_email'=>$email,
            'booking_phone_number'=>$phone,
            'booking_adults'=>$adultcount,
            'booking_kids'=>$childcount,
            'booking_origin'=>$item->price_origin,
            'booking_dest'=>$item->price_destination,
            'booking_date'=>date("Y-m-d" ,strtotime($tripdate)),
            'booking_type'=>$item->package_type,
            'booking_special_inst'=>$addinfo
        );

        $dataArray = $this->gen->xss_cleanse($dataArray);

        if($this->cs->InsertBooking($dataArray)){
            echo $result;
            return;
        }

        echo "failed to add booking and accept payment";
        return;
        
    }

    

    public function testPay(){
        // $this->pal->getPayPalClient();
        // $this->config->load('paypal', TRUE);
        // $con = json_decode(json_encode($this->config->config));
        echo '<pre>';
        $this->pal->getPayPalClient();
        echo '</pre>';
    }

    public function process(){
        
        $result = $this->pal->processPayment();

        if($result === 200){
            echo "This transaction has already been processed";
            return;
        }else if($result === false){
            echo "Failed to execute payment, try again later. Could be due to slow connection or invalid information provided";
            return;
        }

        // echo "<h2 style='color:green;'>Payment was successful</h2><br/>";
        // echo "<b>Transaction Id: </b>".$result['txn_id']."<br/>";
        // echo "<b>Transaction State: </b>".$result['txn_state']."<br/>";
        // echo "<b>Item Amount: </b>".$result['item_quantity']."<br/>";
        // echo "<b>Invoice Id: </b>".$result['invoice_number']."<br/>";
        // echo "<b>Currency: </b>".$result['currency']."<br/>";
        // echo "<b>Total Price: </b>".$result['total_price']."<br/>";

        $this->load->view('sections/paymentsuccess',$result);
        
    }


    public function refund(){
        // echo "<a href='".base_url('client/refund?refid='.$id)."'>Cancel Payment</a>";
        $id = $_GET['refid'];
        echo '<pre>';
        $this->pal->refundPayment($id);
        echo '</pre>';
    }

    public function testPackage(){
        $this->load->view('sections/paymentsuccess');
    }




}
        
    /* End of file  Client.php */
        
                            