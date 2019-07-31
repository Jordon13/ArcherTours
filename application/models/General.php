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

        $data+=array('blog_unique_id'=> $this->returnRandomString(12));

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












    

    
















    public function Validatelogin(){
        if(!($this->ses->has_userdata("user_ses"))){
            $result = array(
                "Message" => "<script>window.location.href = '".site_url('Admin/login')."?error=Unauthorized Access: login token expired, re-login to continue.';</script>",
                "IsSuccess" => true
            );

            echo json_encode($result);
          } 
    }










    public function emailUserPassword($emailAddress, $password){
        $this->load->library('email');
            $config = array(
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'freshcode9@gmail.com',
            'smtp_pass' => 'Love123456789',
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
        $this->email->from('freshcode9@gmail.com', 'Archer 1062 Tours');
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

}

?>