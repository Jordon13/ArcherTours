<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');


// use Models\Invoiced\InvoiceFields;
// use Models\Invoiced\Invoice;
// use Models\Invoiced\SerializeInvoice;

class Client extends CI_Controller {

    public function Login(){

        //$this->load->model('General','cms');

        $email = $this->input->post('email',true);

        $password = $this->input->post('password',true);

        $result = $this->gen->LoginUser($email,$password);

        if($result != false){

            $fbExist = $this->mn->IsFacebookExist();

            if($fbExist === 2 || $fbExist === 3){
                echo $this->face->login();
            }

            if($result->first_time == 0){
                echo "<script>window.location.href = '".site_url('Admin/dashboard?active=0')."?success=login sucessfully';</script>";
            }else{
                echo "<script>window.location.href = '".site_url('Admin/confirm')."?error=please set a new password or continue and do it on your next login';</script>";
            }
        }

        echo "<script>window.location.href = '".site_url('Admin/login')."?error=failed to login';</script>";
        http_response_code(401);

    }

    public function UpdateUserData(){

        $this->gen->Validatelogin();

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

        //$this->load->model('General','cms');

        $this->load->helper('db');

        $password = sanitizeInput($this->input->post('user_password',true));

        $data = array(
            'user_password'=>password_hash($password,PASSWORD_DEFAULT),
            'first_time'=>0
        );

        $res = $this->gen->UpdateUser($data);

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

    public function AddBooking(){

        try{

            

            $booking_unique_key = random_string('alnum', 10);
            $booking_first_name = sanitizeInput($this->input->post('fname',true));//required
            $packageid = sanitizeInput($this->input->post('pid',true));//required
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

    public function Subscribe(){

        try{
            $_useremail = sanitizeInput($this->input->post('email',true));

            if(empty($_useremail)){
                echo "Please enter a valid email address.";
                return;
            }

            $data = array("_useremail"=>strtolower($_useremail));

            if($this->cs->InsertSubscriber($data)){
                echo "Added Successfully!";
                return;
            }

            echo "Failed add email either it already exist or you internet connection is unstable.";
        
        }catch(RuntimeException $ex){

            echo "Failed add email either it already exist or you internet connection is unstable.";
        }

        
    }

    public function CreatePayment(){

        $fname = $this->input->post('fname',true);

        $lname = $this->input->post('lname',true);

        $email = $this->input->post('email',true);

        $phone = $this->input->post('phone',true);

        $adultcount = $this->input->post('adultcount',true);

        $tripdate = $this->input->post('tripdate',true);
        
        $addinfo = $this->input->post('adinfo',true);

        $type = $this->input->post('type',true);

        $booking_unique_key = random_string('alnum', 10);

        $cartItems = json_decode($_POST['items']);

        $total = 0;

        $grand_total = 0;

        $reloadPage = "";

        $body = "";

        $batchArray = array();

        if(empty($fname) && empty($lname) && empty($email) && empty($phone) && empty($adultcount) && empty($tripdate)){

            echo "All feilds are required for this request";

            return;

        }
        


        foreach($cartItems as $cartItem){

            $item = null;

            $discount = 0;

            $utype = $cartItem->utype;

            if($utype == 0){
                $item = $this->cs->GetPackageById($cartItem->id);

                if($cartItem->quantity == 4){
                    $ogp = $item->price_per_adult * $cartItem->quantity;

                    $ngp = $item->display_price;

                    $diff = $ogp - $ngp;

                    if($diff < 0){
                        $discount = 0;
                    }else{
                        $discount = (($diff/$ogp) * 100);

                        $discount = $discount/100;
                    }
                }

            }else{
                $n = $this->cs->GetSpecialById($cartItem->id);

                $item = $this->cs->GetPackageById($n->_service_id);

                $discount = $n->special_discount/100;
            }

            $total = ($item->price_per_adult * $cartItem->quantity) - (($item->price_per_adult * $cartItem->quantity) * $discount);

            $grand_total += $total;

            $dataArray = array(
                'booking_unique_key'=>$booking_unique_key,
                'booking_first_name'=>$fname,
                'booking_last_name'=>$lname,
                'booking_email'=>$email,
                'booking_phone_number'=>$phone,
                'booking_adults'=>$cartItem->quantity,
                'booking_origin'=>$item->price_origin,
                'booking_dest'=>$item->price_destination,
                'booking_date'=>date("Y-m-d" ,strtotime($tripdate)),
                'booking_type'=>$item->package_type,
                'booking_special_inst'=>$addinfo,
                'booking_price'=>$total,
                'booking_package_id'=>$item->package_unique_id
            );

            $trip_type = 'Round Trip';
            if($item->package_type == 1){
                $trip_type = 'One Way Trip';
            }


            $body.=<<<EOT

            <tr class="inner">

                <td>$item->price_origin</td>
                <td>$item->price_destination</td>
                <td>$trip_type</td>
                <td>$$item->price_per_adult</td>
                <td>$cartItem->quantity</td>
                <td>%$discount</td>
                <td>$$total</td>

            </tr>
EOT;
    
            $dataArray = $this->gen->xss_cleanse($dataArray);

            array_push($batchArray,$dataArray);

            $reloadPage = $this->cs->DeleteCartItem($cartItem->id,1);
        }


        if($this->cs->InsertBooking2($batchArray)){

            $subject = "Booking Details For Archer 1062 Tours";

            $uid = uniqid();

            $invDate = date('F d, Y');

            $dueDate = date("F d, Y" ,strtotime($tripdate));

            $mainBody = <<<EOT
            
            <!DOCTYPE html>

<html>

    <head>

        <style>
            html,body{
                padding:0px;
                margin: 0px;
                font-family:sans-serif;
                width: 100%;
                font-weight: 100;
            }

            table{
                padding: 1em;
                width:900px!important; 
                margin-left:auto;
                margin-right: auto;
                border-spacing: 0;
                
            }

            thead{
                width: 100%;
            }

            thead tr th{
                /* font-size: 13px; */
                padding: 0.6em;
                text-align: left;
            }

            thead tr td{
                /* font-size: 13px; */
                padding: 0.6em;
                text-align: left;
                color:white;
            }

            tbody tr td{
                /* font-size: 13px; */
                padding: 0.6em;
                text-align: left;
            }

            tfoot tr td{
                /* font-size: 13px; */
                padding: 0.6em;
                text-align: left;
                color:white;
            }

            tfoot tr th{
                /* font-size: 13px; */
                padding: 0.6em;
                text-align: left;
                color:#FFEE58;
            }

            .inner td{
                border:0.5px solid rgba(130,130,130,0.3);
                color:#212121!important;
            }

            .inner th{
                border:0.5px solid rgba(130,130,130,0.3);
                color:#fff;
            }
        </style>

    </head>

    <body>

        <table >

            <thead style="background-color:#212121;">

                <!-- <tr >
                    <th style="border-bottom: 0.1px solid #000!important;" colspan="7"></th>
                </tr> -->

                <tr>
                    <th rowspan="8" ><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZF5j_offbmgzVWL3WoOfn0ETr0btw3pqnhyVJMp_FOJjtM2glXw" alt="no image"/></th>
                    
                </tr>
                <tr>
                    <th colspan="7" style="text-align: right; color:#FFEE58;"><h1>Vincent Archer</h1></th>
                </tr>

                <tr>
                    <td colspan="7" style="text-align: right;">Montego Bay, Jamaica</td>
                </tr>

                <tr>
                    <td colspan="7" style="text-align: right;">1-876-804-6480</td>
                </tr>

                <tr >
                    <td colspan="7" style="text-align: right;">archer1062tours@yahoo.com</td>
                </tr>

                <tr >
                    <td style="border-bottom: 0.1px solid #000!important;" colspan="7"></td>
                </tr>

            </thead>

            <thead style="background-color: rgba(170,170,170,0.3); ">

                   
    
                    <tr>
                        <th colspan="3" style="text-align: left; color:#212121!important;">INVOICE TO:</th>
                        <th  colspan="4" style="text-align: right; color:#212121!important;">INVOICE #$uid</th>
                       
                    </tr>

                    <tr>
                        <td colspan="3" style="text-align: left; color:#212121!important;">$fname $lname</td>
                        <td colspan="4" style="text-align: right; color:#212121!important;">Date of Invoice: $invDate</td>
                        
                    </tr>

                    <tr>
                        <td colspan="3" style="text-align: left; color:#212121!important;">Outter State</td>
                        <td colspan="4" style="text-align: right; color:#212121!important;">Due Date: $dueDate</td>
                    </tr>
                    
                    <tr>
                        <td colspan="7" style="text-align: left; color:#212121!important;">$email</td>
                    </tr>
                   
    
                </thead>

                <thead style="background-color: #212121">
                    <tr class="inner">
                        <th>Origin</th>
                        <th>Destination</th>
                        <th>Trip Type</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Discount</th>
                        <th>Total</th>
                    </tr>
                </thead>

            <tbody style="background-color: rgba(170,170,170,0.3);">

                $body

            </tbody>

            <tfoot style="background-color:#212121;">

                <tr>
                    <td rowspan="4" style="text-align: left; color:#FFEE58;"><h1>Thank you!</h1></td>
                </tr>

                <tr>
                        <td colspan="4"></td>
                    <td style="text-align: left;">Sub Total</td>
                    <td style="text-align: left;">$$grand_total</td>
                </tr>

                <tr>
                    <td colspan="4"></td>
                    <td style="text-align: left;">Tax</td>
                    <td style="text-align: left;">0%</td>
                </tr>

                <tr>
                    <td colspan="4"></td>
                    <th style="text-align: left;">Grand Total</th>
                    <th style="text-align: left;">$$grand_total</th>
                </tr>

                <tr>
                    <td rowspan="2" colspan="7" style="text-align: left; border-left: 3px solid #FFEE58;">We value you here at Archer 1062 Tours.<br/>Come travel with us again.<br/>Reference Id: $booking_unique_key</td>
                </tr>

            </tfoot>
        </table>
        
    </body>
</html>
EOT;

            $this->cs->SendEmail($email,$subject,$mainBody);

            echo "Booked Successfully. Please check your email for the booking details.";

            if($reloadPage == "reload"){
                echo "<script>setTimeout(function(){location.reload();},3200);</script>";
            }

            //unset($_COOKIE[CARTNAME]);

            //set_cookie(CARTNAME,null,time() - 3600);

            return;

        }

        return;
        
    }

    public function CartAdd(){
        
        $id = "";
        $type = sanitizeInput($this->input->post("type",true));
        $discount = 0;
        $trip_type = '';

        if($type == 0){
            $id = $this->input->post("id",true);
        }else{
            $id= substr(sanitizeInput(base64_decode($this->input->post("id",true))),10);
        }
        

        if(empty($id) && empty($type)){
            return;
        }

        if($type == 0){
            $getItem = $this->cs->GetPackageById($id);
        }else{
            
            $n = $this->cs->GetSpecialById($id);

            $getItem = $this->cs->GetPackageById($n->_service_id);

            //$id = $getItem->package_unique_id;

            $discount = $n->special_discount;
        }

        if($getItem == false){
            return;
        }
        
        $trip_type = "Round Trip";
        
        if($getItem->trip_type == 1){
            $trip_type = 'One Way Trip';
        }

        if(isset($_COOKIE[CARTNAME]) && !empty($_COOKIE[CARTNAME])){

            $getVal = json_decode(base64_decode($_COOKIE[CARTNAME]),true);

            $totalItems = count($getVal);

            $_GLOBAL['totalItems'] = $totalItems;

            $key = array_search($id, array_column($getVal, 'id'));

            if($key !== false){

                $getVal[$key]['quantity']+=1;

                $cookie_name = CARTNAME;
        
                $cookie_value = $getVal;
        
                set_cookie($cookie_name,base64_encode(json_encode($cookie_value)),86400*3);

                
            echo count($cookie_value);
            }else{

                array_push($getVal,array(
                    "price"=>$getItem->price_per_adult,
                    "id"=>$id,
                    "discount"=>$discount,
                    "quantity"=>1,
                    "type"=>$trip_type,
                    "Origin"=>$getItem->price_origin,
                    "Destination"=>$getItem->price_destination,
                    "DisplayPrice"=>$getItem->display_price,
                    "utype"=>$type
                
                ));

                $cookie_name = CARTNAME;
                $cookie_value = $getVal;
                set_cookie($cookie_name,base64_encode(json_encode($cookie_value)),86400*3);
                
                $t = $_GLOBAL['totalItems'];

                $t = $t+=1;

                $_GLOBAL['totalItems'] = $t;
                
                
                echo count($cookie_value);
            }
        }else{

            $cookie_name = CARTNAME;
            $cookie_value = array(array(
                "price"=>$getItem->price_per_adult,
                "id"=>$id,
                "discount"=>$discount,
                "quantity"=>1,
                "type"=>$trip_type,
                "Origin"=>$getItem->price_origin,
                "Destination"=>$getItem->price_destination,
                "DisplayPrice"=>$getItem->display_price,
                "utype"=>$type
            
            )
            
            );

            set_cookie($cookie_name,base64_encode(json_encode($cookie_value)),86400*3);

            //$t = $_GLOBAL['totalItems'];

            $t = 1;

            $_GLOBAL['totalItems'] = $t;

            echo count($cookie_value);
        }

    }

    public function DeleteCartItem(){

        $id = $this->input->post("id",true);

        $getVal = json_decode(base64_decode($_COOKIE[CARTNAME]),true);

        $key = array_search($id, array_column($getVal, 'id'));

        if($key !== false){

            $cookie_name = CARTNAME;
    
            $cookie_value = $getVal;

            unset($cookie_value[$key]);

            $newArray = array_values($cookie_value);

            $arryCount = count($newArray);
    
            set_cookie($cookie_name,base64_encode(json_encode($newArray)),86400*1);

            if($arryCount > 0 ){
                
                echo "none";

                return;
            }

            echo "<script>location.reload();</script>";

            return;
        }

        echo "none";
    }


    public function GetMoreBlogs(){

        $last_position = $_GET['position'];

        if(!isset($last_position) && empty($last_position)){
            
            echo "Don't modify code please.";

            return;
        }

        $results = $this->cs->GetBlogs2($last_position);

        if($results === false){
            echo 0;
            return;
        }else{
            echo json_encode($results,JSON_PRETTY_PRINT);
            return;
        }

        echo 0;

    }

    public function AddTestimonial(){
        // InsertTestimonial($data)

        //sanitizeArray();

        $_username = $this->input->post('_username',true); 

        $_useremail = $this->input->post('_useremail',true);

        $_user_msg = $this->input->post('_user_msg',true);

        $_rating = $this->input->post('_rating',true);

        if(empty($_username) || empty($_useremail) || empty($_user_msg) ){
            
            echo "all fields are mandatory for this request";

            return;
        }

        if(strlen($_user_msg) != 210){
            echo "testimonial length should be atleast 210 characters in length.";

            return;
        }

        $cleanedData = sanitizeArray($_POST);

        if($this->cs->InsertTestimonial($cleanedData)){
            echo "successfully added!";
            return;
        }

        echo "failed to process request, an unexpected error has occured. Please contact owner to fix issue.";

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

        $this->load->view('sections/paymentsuccess',array('data'=>$result));
        
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

    public function test(){

        $data = $this->inv->Invoice();

        // echo $data;

        // $ch = curl_init();
		// 	curl_setopt($ch, CURLOPT_URL, "https://invoice-generator.com");
		// 	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		// 	curl_setopt($ch, CURLOPT_POST, 1);
        //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);//CURLOPT_HEADER
        //    // curl_setopt($ch, CURLOPT_HEADER, true);
		// 	$response = curl_exec($ch);
		// 	$statusOfTranscation = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        //     curl_close($ch);
            
        //    // $headers = explode("\n", $response);

        //    // $clen = explode(":",$headers[2]);

        //     //print_r();

        //     //print_r($response);

        //     $id = uniqid();

        //     $file = $response;
		// 	header('Content-Description: File Transfer');
		// 	header('Content-Type: application/octet-stream');
		// 	header('Content-Disposition: attachment; filename="invoice_'.$id.'.pdf"');
		// 	header('Expires: 0');
		// 	header('Cache-Control: must-revalidate');
		// 	header('Pragma: public');
		// 	header('Content-Length: 100000');
		// 	echo $file;


        $this->load->view("test.html");
    }

    




}
        
    /* End of file  Client.php */
        
                            