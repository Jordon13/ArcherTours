<?php

class GClass{
  public static $totalNotification = 0; 
}

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
    
    $ci->db->limit(10);

    $ci->db->order_by('date_created','DESC');

    $items = $ci->db->get("sys_recent")->result_array();

    $data = '';

    if(count($items) > 0){
      foreach($items as $item){
        $data.='<div class="card-panel transparent z-depth-0 cus-panel11">
        <div class="row valign-wrapper">
          <div class="col s1 custom-date z-depth-1">
              '.date("M d",strtotime($item['date_created'])).'
            </div>
            <div class="col s11">
              <span class="white-text">
                '.substr($item['recent_desc'],0,80).'...
              </span>
            </div>
          </div>
        </div>';
      }

      return $data;
    }

    return 'No recent activites within the company.';
  }
}


if(!function_exists('Notifications')){
  function Notifications(){
    $ci=& get_instance();
    $ci->load->database();
   
    $query = $ci->db->query("select * FROM `sys_notifications` where `viewed` = 0 and `date_created` >= (NOW() - INTERVAL 2 WEEK)
        ORDER BY `date_created` DESC");
      

    $items = $query->result_array();

    $data = '';

    if(count($items) > 0){
      foreach($items as $item){

        $link = "#";


        if($item['type']=='recent'){
          $link = baseurl."/admin/editnews/".$item['refid'];
        }else if($item['type']=='rating'){
          $link = baseurl."/admin/testimonials?active=2";
        }else if($item['type']=='contact'){
          $link = baseurl."/admin/customermsgs?active=2";
        }else if($item['type']=='booking'){
          $link = baseurl."/admin/editbooking/".$item['refid'];
        }else if($item['type']=='subscription'){
          $link = baseurl."/admin/vsubs?active=2";
        }

        //subscription

        $data.='<li class="">
        <b>'.$item['short_desc'].'</b>
        <br/><em>
        <span style="font-size: 10px; color: rgba(200,200,200,0.9);">
        '.date('l F dS, Y',strtotime($item['date_created'])).'</span></em>
        <br/><b><a href="'.$link.'">Visit</a></b></li>';
      }

      GClass::$totalNotification = count($items);

      return $data;
    }

    return 'No recent activites within the company.';
  }
}


if(!function_exists('TotalNotifications')){
  function TotalNotifications(){
    $ci=& get_instance();
    $ci->load->database();
   
    $query = $ci->db->query("select * FROM `sys_notifications` where `viewed` = 0 and `date_created` >= (NOW() - INTERVAL 2 WEEK)
    ORDER BY `date_created` DESC");
      

    $items = $query->result_array();

    return count($items);
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