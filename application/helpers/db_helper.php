<?php

defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('UserExist'))
{
    function UserExist($email)
    {
        $ci=& get_instance();
        $ci->load->database(); 

        $sql = "Select * from `sys_users` where `email_address` = '$email'";

        $result = $ci->db->query($sql)->row();

        if(isset($result)){
            if(strtolower($result->email_address) == strtolower($email)){
                return $result;
            }
            return false;
        }
        
        return false;
    }   
}


function sanitizeInput($input){
    $ci=& get_instance();
    $ci->load->database(); 
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    $input = $ci->db->escape_str($input);
    $input = preg_replace('/[^A-Za-z0-9\-\.\@]/', '', $input);
    return $input;
  }

  function sanitizeArray($input){
    foreach($input as $key => $value){
        $input[$key] = sanitizeInput($value);
    }

    return $input;
  }


// function killSession($sessionarray){
//     if($this->ses->has_userdata($sessionarray)){
//         $this->ses->unset_userdata($sessionarray);
//     }else{
//         return false;
//     }
// }

?>