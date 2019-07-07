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

                return true;
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

        $data+=array('user_password'=>$passwordHash);

        $insertUser = $this->db->insert('sys_users',$data);

		if($insertUser == true){
			return true;

		}else{
			return false;
		}
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