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


if(!function_exists('News')){
  function News(){
    $ci=& get_instance();
    $ci->load->database();
    
    $ci->db->limit(4);

    $ci->db->order_by('date_created','DESC');

    $items = $ci->db->get("sys_recent")->result_array();

    $data = '';

    if(count($items) > 0){
      foreach($items as $item){
        $data.='<div class="card-panel transparent z-depth-0 cus-panel1">
        <div class="row valign-wrapper">
          <div class="col s1 custom-date z-depth-1">
              '.date("M d",strtotime($item['date_created'])).'
            </div>
            <div class="col s11">
              <span class="white-text">
                '.$item[''].'
              </span>
            </div>
          </div>
        </div>';
      }
    }

    return NULL;
  }
}


function sanitizeInput($input){
    $ci=& get_instance();
    $ci->load->database(); 
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    $input = $ci->db->escape_str($input);
    $input = preg_replace('/[^A-Za-z0-9\-\.\@\,\s]/', '', $input);
    return $input;
  }

  function sanitizeInput2($input){
    $ci=& get_instance();
    $ci->load->database(); 
    $input = trim($input);
    $input = stripslashes($input);
    // $input = htmlspecialchars($input);
    $input = $ci->db->escape_str($input);
    $input = preg_replace('/[^A-Za-z0-9\-\.\@\,\s]/', '', $input);
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