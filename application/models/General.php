<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends CI_Model {

    public function Login($email, $password){
        
    }

    public function CreateEmployee($firstname, $lastname, $email, $password, $role){
        $seskey =  $this->returnRandomString(30);
		$hashkey =  $this->returnRandomString(50);

        $passwordHash = password_hash($password,PASSWORD_DEFAULT);

        $dategenerated = date("d/m/Y");

        $insertUser = $this->db->query("Insert into `sys_users` (`session_id`,`first_name`,
        `last_name`,`user_role`,`email_address`,`user_password`,`date_generated`) 
        values ('$seskey','$firstname','$lastname','$role','$email','$passwordHash','$dategenerated') ");

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

}

?>