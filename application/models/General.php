<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends CI_Model {

    public function LoginUser($email, $password){

        $this->load->helper('db');

        if($this->ses->has_userdata("user_ses")){
            $this->killSession("user_ses");
        }

        $result= UserExist($email);

        if($result != false)
        {
            if(password_verify($password,$result->user_password)){

                $this->ses->set_userdata("user_ses",$result->session_id);
                
                $this->ses->set_userdata("first_time",$result->first_time);

                $this->ses->set_userdata("first_name",$result->first_name);

                $this->ses->set_userdata("last_name",$result->last_name);

                return $result;
            }

            return false;
        }

        return false;
    }

    public function CreateEmployee($data){
        
        $seskey =  $this->returnRandomString(50);

        $password = $this->returnRandomString(10);

        $passwordHash = password_hash($password,PASSWORD_DEFAULT);

        $data+=array('session_id'=>$seskey);

        $data+=array('first_time'=>1);

        $data+=array('user_password'=>$passwordHash);

        $insertUser = $this->db->insert('sys_users',$data);

		if($insertUser == true){
            $this->emailUserPassword($data['email_address'],$password);
			return true;

		}else{
			return false;
		}
    }

    public function UpdateUser($data){
        
        $session_id = $this->ses->userdata('user_ses');

        $this->db->where('session_id', $session_id);

        $success = $this->db->update('sys_users', $data);

        if($success){
            return true;
        }

        return false;
    }

    public function InsertBlog($data){

        $data+=array('blog_post_by'=>$this->ses->userdata("user_ses"));//	blog_unique_id

        // $data+=array('blog_unique_id'=> $this->returnRandomString(12));

        $insertblog= $this->db->insert('sys_blogs',$data);

		if($insertblog == true){
			return true;
        }
        return false;
    }

    public function InsertPrice($data){

        $insertprice = $this->db->insert('sys_prices',$data);

		if($insertprice == true){
			return true;
        }
        return false;
    }

    public function InsertDeal($data){

        $insertdeals = $this->db->insert('sys_deals',$data);

		if($insertdeals == true){
			return true;
        }
        return false;
    }

    public function InsertSpecial($data){

        $insertspecials = $this->db->insert('sys_specials',$data);

		if($insertspecials == true){
			return true;
        }
        return false;
    }

    public function InsertMedia($data){
        $insertmedia = $this->db->insert('sys_media_upload',$data);

		if($insertmedia == true){
			return true;
        }
        return false;
    }

    public function InsertRecentEvent($data){
        $insertrecent = $this->db->insert('sys_recent',$data);

		if($insertrecent == true){
			return true;
        }
        return false;
    }

    public function InsertFolder($data){
        $insertfile = $this->db->insert('sys_files',$data);

		if($insertfile == true){
			return true;
        }
        return false;
    }

    public function InsertFbInfo($data){
        $insertfb = $this->db->insert('sys_fb_credentials',$data);

		if($insertfb == true){
			return true;
        }
        return false;
    }

    public function UpdateFbInfo($data){

        $this->db->where('user_id', $data['user_id']);

        $success = $this->db->update('sys_fb_credentials', $data);

        if($success){
            return true;
        }

        return false;
    }

    public function UpdateBlog($data){
        
        //$session_id = $this->ses->userdata('sys_blogs');

        $this->db->where('blog_unique_id', $data['blog_unique_id']);

        $success = $this->db->update('sys_blogs', $data);

        if($success){
            return true;
        }

        return false;
    }

    public function UpdateAboutUsFields($data){

        $this->db->where("auto_generated_id",1);

        $result = $this->db->update('sys_about_us',$data);

        if($result){
            return true;
        }

        return false;

    }

    public function UpdateContactUsFields($data){

        $this->db->where("auto_generated_id",1);

        $result = $this->db->update('sys_contact_page',$data);

        if($result){
            return true;
        }

        return false;

    }

    public function UpdateGalleryPageFields($data){

        $this->db->where("auto_generated_id",1);

        $result = $this->db->update('sys_gallery_page',$data);

        if($result){
            return true;
        }

        return false;

    }

    public function UpdateBlogPageFields($data){

        $this->db->where("auto_generated_id",1);

        $result = $this->db->update('sys_blog_page',$data);

        if($result){
            return true;
        }

        return false;

    }

    public function UpdateBookingPageFields($data){

        $this->db->where("auto_generated_id",1);

        $result = $this->db->update('sys_booking_page',$data);

        if($result){
            return true;
        }

        return false;

    }

    public function UpdateHomePageFields($data){

        $this->db->where("auto_generated_id",1);

        $result = $this->db->update('sys_home_page',$data);

        if($result){
            return true;
        }

        return false;

    }

    public function UpdateServicePageFields($data){

        $this->db->where("auto_generated_id",1);

        $result = $this->db->update('sys_service_page',$data);

        if($result){
            return true;
        }

        return false;

    }

    public function UpdateTaxiPageFields($data){

        $this->db->where("auto_generated_id",1);

        $result = $this->db->update('sys_taxi_service_page',$data);

        if($result){
            return true;
        }

        return false;

    }

    public function UpdateToursPageFields($data){

        $this->db->where("auto_generated_id",1);

        $result = $this->db->update('sys_tours_service_page',$data);

        if($result){
            return true;
        }

        return false;

    }


    public function UpdateAirportPageFields($data){

        $this->db->where("auto_generated_id",1);

        $result = $this->db->update('sys_airport_service_page',$data);

        if($result){
            return true;
        }

        return false;

    }


    public function UpdateDealsPageFields($data){

        $this->db->where("auto_generated_id",1);

        $result = $this->db->update('sys_deals_page',$data);

        if($result){
            return true;
        }

        return false;

    }


    public function UpdateTestimonialsPageFields($data){

        $this->db->where("auto_generated_id",1);

        $result = $this->db->update('sys_testimonals_page',$data);

        if($result){
            return true;
        }

        return false;

    }

    public function UpdateNewsPageFields($data){

        $this->db->where("auto_generated_id",1);

        $result = $this->db->update('sys_recent_news_page',$data);

        if($result){
            return true;
        }

        return false;

    }

    public function UpdateUserById($data, $id){

        $this->db->where("auto_generated_id",$id);

        $result = $this->db->update('sys_users',$data);

        if($result){
            return true;
        }

        return false;

    }

    public function UpdateTestimonialById($data,$id){
        //SetTestimonialVisibility
        $this->db->where("auto_generated_id",$id);

        $result = $this->db->update('sys_testimonials',$data);

        if($result){
            return true;
        }

        return false;
    }


    public function Validatelogin(){
        if(!($this->ses->has_userdata("user_ses"))){
            $result = array(
                "Message" => "<script>window.location.href = '".site_url('Admin/login')."?error=Unauthorized Access: login token expired, re-login to continue.';</script>",
                "IsSuccess" => true
            );

            echo json_encode($result);
          } 
    }


    public function GetSystemUsers(){

        $this->db->select("auto_generated_id,first_name,last_name,email_address,session_id");

        return $this->db->get("sys_users")->result_array();

    }

    public function GetSystemFolders(){
        return $this->db->get("sys_files")->result_array();
    }


    public function GetFilesByFolderId($id){

       
        $this->db->join('sys_files', 'sys_files.auto_generated_id = sys_media_upload.sys_folder_id');
        $this->db->where(array("sys_media_upload.sys_folder_id"=>$id,"sys_media_upload.media_file_type"=>"image"));
        $this->db->order_by('date_added','DESC');
        $images = $this->db->get("sys_media_upload")->result_array();

        $this->db->reset_query();

        
        $this->db->join('sys_files', 'sys_files.auto_generated_id = sys_media_upload.sys_folder_id');
        $this->db->where(array("sys_media_upload.sys_folder_id"=>$id,"sys_media_upload.media_file_type"=>"video"));
        $this->db->order_by('date_added','DESC');
        $videos = $this->db->get("sys_media_upload")->result_array();

        if(count($videos) <=0 && count($images) <= 0){
            return false;
        }

        $data = array('images'=>$images,'videos'=>$videos);

        return $data;
    }


    public function GetUserById($id){
        return $this->db->get_where("sys_users", "auto_generated_id = ".$id)->result_array();
    }

    public function DeleteUserById($id){
        return $this->db->delete('sys_users', array('auto_generated_id' => $id)); 
    }
    


    public function GetSystemPrices(){

        $this->db->select("auto_generated_id,price_place,price_per_adult,price_origin,price_destination,price_image");

        return $this->db->get("sys_prices")->result_array();

    }


    public function GetPriceById($id){
        return $this->db->get_where("sys_prices", "auto_generated_id = ".$id)->result_array();
    }

    public function DeletePriceById($id){
        return $this->db->delete('sys_prices', array('auto_generated_id' => $id)); 
    }


    public function GetSystemDeals(){

        $this->db->join('sys_prices','sys_specials._service_id = sys_prices.package_unique_id');
        $this->db->select("sys_specials.auto_generated_id,sys_specials.special_discount,sys_specials.special_start_date,sys_specials.special_end_date,sys_specials.special_unique_id,
        sys_prices.price_origin,sys_prices.price_destination,sys_prices.price_image,sys_prices.price_per_adult");

        return $this->db->get("sys_specials")->result_array();

    }

    public function GetUserBySessionId($id){
        $this->db->where("session_id", $id);
        return $this->db->get("sys_users")->result_array();
    }

    public function GetDealById($id){
        return $this->db->get_where("sys_specials", "auto_generated_id = ".$id)->result_array();
    }

   //user_ses 

    public function DeleteDealById($id){
        return $this->db->delete('sys_specials', array('auto_generated_id' => $id)); 
    }


    public function GetSystemTestimonials(){

        $this->db->select("auto_generated_id,_username,_user_msg,_useremail,_rating,_isVisible");
       //$this->db->where("_isVisible",1);

        return $this->db->get("sys_testimonials")->result_array();

    }


    public function GetTestimonialById($id){
        return $this->db->get_where("sys_testimonials", "auto_generated_id = ".$id)->result_array();
    }

    public function DeleteTestimonialById($id){
        return $this->db->delete('sys_testimonials', array('auto_generated_id' => $id)); 
    }


    public function GetSystemBlogs(){

        $this->db->select("auto_generated_blog_id,blog_title,blog_catch_phrase,blog_image,blog_user_visible");

        return $this->db->get("sys_blogs")->result_array();

    }


    public function GetBlogById($id){
        return $this->db->get_where("sys_blogs", "auto_generated_blog_id = ".$id)->result_array();
    }

    public function DeleteBlogById($id){
        return $this->db->delete('sys_blogs', array('auto_generated_blog_id' => $id)); 
    }


    public function UpdateDealById($data, $id){

        $this->db->where("auto_generated_id",$id);

        $result = $this->db->update('sys_specials',$data);

        if($result){
            return true;
        }

        return false;

    }


    public function UpdateNewsById($data, $id){

        $this->db->where("auto_generated_id",$id);

        $result = $this->db->update('sys_recent',$data);

        if($result){
            return true;
        }

        return false;

    }



    public function UpdatePriceById($data, $id){

        $this->db->where("auto_generated_id",$id);

        $result = $this->db->update('sys_prices',$data);

        if($result){
            return true;
        }

        return false;

    }


    public function UpdateBlogById($data, $id){

        $this->db->where("auto_generated_blog_id",$id);

        $result = $this->db->update('sys_blogs',$data);

        if($result){
            return true;
        }

        return false;

    }


    public function UpdateBookingById($data, $id){

        $this->db->where("auto_generated_id",$id);

        $result = $this->db->update('sys_booking',$data);

        if($result){
            return true;
        }

        return false;

    }

    //UpdateBookingById


    public function DeleteFilesAndFoldersById($id){
        $this->db->delete('sys_files', array('auto_generated_id' => $id));
        return $this->db->delete('sys_media_upload', array('sys_folder_id' => $id)); 
    }

    public function DeleteImageById($id){
        
        return $this->db->delete('sys_media_upload', array('_id' => $id)); 
    }

    public function GetNewsById($id){
        return $this->db->get_where("sys_recent", "auto_generated_id = ".$id)->result_array();
    }

    public function DeleteNewsById($id){
        return $this->db->delete('sys_recent', array('auto_generated_id' => $id)); 
    }


    public function GetSystemNews(){

        $this->db->select("auto_generated_id,recent_title,recent_desc,recent_likes,recent_dislikes,recent_views");
        $this->db->order_by("date_created","desc");
        return $this->db->get("sys_recent")->result_array();

    }


    public function GetSystemBookings(){

        $this->db->order_by("date_created","desc");
        return $this->db->get("sys_booking")->result_array();

    }

    public function GetSystemSubscribers(){

        $this->db->order_by("date_created","desc");
        return $this->db->get("sys_subscribe")->result_array();

    }

    public function GetSystemMessages(){

        $this->db->order_by("date_created","desc");
        return $this->db->get("sys_contact_us")->result_array();

    }

    public function GetBookingById($id){
        return $this->db->get_where("sys_booking", "auto_generated_id = ".$id)->result_array();
    }

    public function DeleteBookingById($id){
        return $this->db->delete('sys_booking', array('auto_generated_id' => $id)); 
    }


    public function emailUserPassword($emailAddress, $password){
        $this->load->library('email');
            $config = array(
            'protocol'  => 'smtp',
            'smtp_host' => _HOST_,
            'smtp_port' => 465,
            'smtp_user' => MY_EMAIL_ADDR,
            'smtp_pass' => MY_EMAIL_PASSW,
            'mailtype'  => 'html',
            'smtp_keepalive' => 'TRUE',
            '_smtp_auth'=>'TRUE',
            '_replyto_flag'=>'TRUE',
            'charset'   => 'utf-8'
            );
        $this->email->initialize($config);
        $this->email->set_mailtype("html");
        $this->email->set_newline("\r\n");
        $link = site_url("admin/login?error=Welcome to Archer 1062 Tours, if this is your first time we suggest you create a new password after logging in with the system provided one");
        $this->email->from(MY_EMAIL_ADDR, 'Archer 1062 Tours');
        $this->email->to($emailAddress);
        $this->email->subject('Admin System - Login Cendentials For Archer 1062 Tours');
        $this->email->message('<div style="border-radius:5px;border: 1px solid rgba(100,100,100,0.2);width:250px;background-color:#F5F5F5;">
        <h3 style="padding:0.5em;background-color: #0D47A1; color:white;margin:0px!important;">Login Credentails</h3>
        <p style="padding:1em!important;">Email: '.$emailAddress.'</p>
        <p style="padding:1em!important;">Password: '.$password.'</p>
        <p style="padding:1em!important;text-align:center;"><a style="border:0.5px solid rgba(100,100,100,0.3); border-radius:5px;padding:0.5em!important;" href="'.$link.'">Confirm & Login</a></p></div>');
        $c = $this->email->send();
        if(!$c){
            return false;
        }else{
            return true;
        }
    }


    /* Potential Queries*/


    //To select all bookings with in a three months period - SELECT * FROM `sys_booking` where date_created >= (NOW() - INTERVAL 3 MONTH) and date_created < (NOW() + INTERVAL 1 MONTH) ORDER BY `sys_booking`.`date_created` DESC

    //select all booking that are completed in this year - select * from `sys_booking` where year(date_created) = year(NOW()) and booking_status = 'completed'

    //select * from `sys_booking` where year(date_created) = year(NOW()) and booking_status = 'nego'

    //select * from `sys_booking` where year(date_created) = year(NOW()) and booking_status = 'cancelled'

    //select * from `sys_booking` where year(date_created) = year(NOW()) and booking_status = 'booked'



    public function booking_analytics_data()
    {
        $items = array();

        //select MONTHNAME(date_created) as 'Months', Count(date_created) as 'Bookings' from `sys_booking` group by MONTHNAME(date_created)

        $query = $this->db->query("select MONTHNAME(date_created) as 'Months', Count(date_created) as 'Bookings' FROM `sys_booking` where `date_created` >= (NOW() - INTERVAL 3 MONTH)
         and `date_created` < (NOW() + INTERVAL 1 MONTH)  group by MONTHNAME(date_created) ORDER BY MONTH(date_created) ASC ");
        $results = $query->result_array();
        $items+=array("overall"=>$results);


        $query = $this->db->query("select MONTHNAME(date_created) as 'Months', Count(date_created) as 'Bookings' 
        from `sys_booking` where year(`date_created`) = year(NOW()) and `booking_status` = 'completed'
        group by MONTHNAME(date_created) ORDER BY MONTH(date_created) ASC ");
        $results = $query->result_array();
        $items+=array("completed"=>$results);

        $query = $this->db->query("select MONTHNAME(date_created) as 'Months', Count(date_created) as 'Bookings' 
        from `sys_booking` where year(`date_created`) = year(NOW()) and `booking_status` = 'nego'
        group by MONTHNAME(date_created) ORDER BY MONTH(date_created) ASC ");
        $results = $query->result_array();
        $items+=array("nego"=>$results);

        $query = $this->db->query("select MONTHNAME(date_created) as 'Months', Count(date_created) as 'Bookings' 
        from `sys_booking` where year(`date_created`) = year(NOW()) and `booking_status` = 'cancelled'
        group by MONTHNAME(date_created) ORDER BY MONTH(date_created) ASC ");
        $results = $query->result_array();
        $items+=array("cancelled"=>$results);

        $query = $this->db->query("select MONTHNAME(date_created) as 'Months', Count(date_created) as 'Bookings' 
        from `sys_booking` where year(`date_created`) = year(NOW()) and `booking_status` = 'booked'
        group by MONTHNAME(date_created) ORDER BY MONTH(date_created) ASC ");
        $results = $query->result_array();
        $items+=array("booked"=>$results);

        $query = $this->db->query("select MONTHNAME(date_created) as 'Months', Count(date_created) as 'Bookings' 
        from `sys_booking` where year(`date_created`) = year(NOW()) and `booking_status` = 'quoted'
        group by MONTHNAME(date_created) ORDER BY MONTH(date_created) ASC ");
        $results = $query->result_array();
        $items+=array("quoted"=>$results);

        return $items;

    }

    public function plsheet(){

        $query = $this->db->query("select tb1.`booking_status` as Completed, tb2.`booking_status` as Cancelled, sum(tb1.`booking_price`) as CompletedPrice, sum(tb2.`booking_price`) as CancelledPrice,
        MONTHNAME(tb1.`date_created`) as Month from `sys_booking` as tb1, `sys_booking` as tb2 
        where (tb1.`booking_status` = 'completed' and tb2.`booking_status` = 'cancelled') and 
        year(tb1.`date_created`) = '2019' group by MONTHNAME(tb1.`date_created`)
        ORDER BY MONTH(tb1.`date_created`) ASC");

        $results = $query->result_array();


        return $results;

    }


    public function dash(){

        $items = array();

        $query = $this->db->query("select DAYNAME(`date_created`) as Day, sum(`booking_price`) as Total FROM `sys_booking` where `date_created` >= (NOW() - INTERVAL 1 WEEK) 
         group by DAYNAME(`date_created`) ORDER BY `date_created` ASC");
        $results = $query->result_array();
        $items+=array("weekbookings"=>$results);


        $query = $this->db->query("select DAYNAME(`date_created`) as Day, count(`page`) as Total FROM `sys_page_visits` where `date_created` >= (NOW() - INTERVAL 1 WEEK) 
        group by DAYNAME(`date_created`) ORDER BY `date_created` ASC");
        $results = $query->result_array();
        $items+=array("weekpageviews"=>$results);


        $query = $this->db->query("select * FROM `sys_notifications` where `date_created` >= (NOW() - INTERVAL 1 WEEK) 
        ORDER BY `date_created` DESC");
        $results = $query->result_array();
        $items+=array("weekactivities"=>$results);

        return $items;
    }

    public function notifications(){

        $query = $this->db->query("select * FROM `sys_notifications` where `view` = 0 
        ORDER BY `date_created` ASC");
        return $query->result_array();
        
    }


    public function xss_cleanse($array){
        foreach($array as $key => $value){
            if(!empty($value)){
                $array[$key] = xss_clean($value);
            }
        }

        return $array;
    }

    function crypto_rand_secure($min, $max)
    {
        $range = $max - $min;
        if ($range < 1) return $min; // not so random...
        $log = ceil(log($range, 2));
        $bytes = (int) ($log / 8) + 1; // length in bytes
        $bits = (int) $log + 1; // length in bits
        $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
        do {
            $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
            $rnd = $rnd & $filter; // discard irrelevant bits
        } while ($rnd > $range);
        return $min + $rnd;
    }

    function returnRandomString($length)
    {
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
        $codeAlphabet.= "0123456789";
        $max = strlen($codeAlphabet); // edited
    
        for ($i=0; $i < $length; $i++) {
            $token .= $codeAlphabet[$this->crypto_rand_secure(0, $max-1)];
        }
    
        return $token;
    }

    function killSession($sessionarray){
        if($this->ses->has_userdata($sessionarray)){
            $this->ses->unset_userdata($sessionarray);
        }else{
            return false;
        }
    }

    function GetBookingsByDate($month,$year){
        $this->db->select("*");
        $this->db->where('DATE_FORMAT(booking_date, "%c") = ',$month);
        $this->db->where('DATE_FORMAT(booking_date, "%Y") = ',$year);
        return $this->db->get("sys_booking")->result_array();
    }

}

?>