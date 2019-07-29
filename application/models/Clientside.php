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

    public function GetBlogs(){
        $this->db->select('*');
        $this->db->from('sys_blogs');
        $this->db->join('sys_users', 'sys_users.session_id = sys_blogs.blog_post_by');
        $query = $this->db->get();

        $results = $query->result_array();

        $data = array();

        foreach($results as $res){
            $result = json_decode(json_encode($res));

            $content =$this->enc->decrypt($result->blog_content);

            $ne = array(
                'title'=>$result->blog_title,
                'id'=>$result->blog_unique_id,
                'url'=>site_url("blogs1062/$result->blog_url"),
                'tags'=>sanitizeInput(base64_decode($result->blog_tags)),
                'catch'=>$result->blog_catch_phrase,
                'content'=>sanitizeInput(substr($content, 0, 150)).'...',
                'image'=>base_url("uploads/blog-images/$result->blog_image"),
                'created'=>$result->blog_date_generated,
                'fullname'=>$result->blog_user_visible=="1" ? $result->first_name.' '.$result->last_name:"anonymous"
                
            );

            array_push($data, $ne);
        }

        return $data;
    }

    public function SendMessage($data){

        $insertContact = $this->db->insert('sys_contact_us',$data);

        if($insertContact == false){
            
            return $insertContact;
        }

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
        $this->email->subject($data['_subject']);
        $this->email->message('
            <p><b>Name:</b> '.$data['_name'].'</p>
            <p><b>Email Address:</b> '.$data['_email'].'</p>
            <p><b>Message:</b> '.$data['_message'].'</p>
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
    
                        