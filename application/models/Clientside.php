<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Clientside extends CI_Model {
                        
    public function InsertBooking($data){
        $insertbooking = $this->db->insert('sys_booking',$data);

		if($insertbooking == true){

            $arry = array(
                'origin' => $data['booking_origin'],
                'destination'=>$data['booking_dest'],
                'trip_type' => $data['booking_type'],
                'RefId' => $data['booking_unique_key'],
                'UserEmail'=>$data['booking_email']
            );
    
            $json = json_encode($arry);
    
            $decode = json_decode($json);

            $this->mn->EmailPackageList($decode);

			return true;
        }
        return false;
    }

    public function SendMessage($data){
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
        $link = site_url("admin/");
        $this->email->from('freshcode9@gmail.com', 'Archer 1062 Tours');
        $this->email->to('freshcode9@gmail.com');
        $this->email->subject($data->subject);
        $this->email->message('
            <p><b>Name:</b> '.$data->name.'</p>
            <p><b>Email Address:</b> '.$data->email_address.'</p>
            <p><b>Message:</b> '.$data->message.'</p>
        ');
        $sent = $this->email->send();
        if(!$sent){
            return false;
        }else{
            return true;
        }
    }
                   
}
                        
/* End of file Clientside.php */
    
                        