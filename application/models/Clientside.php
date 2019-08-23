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

    public function InsertTransaction($data, $bookingId){

        $inserttrans = $this->db->insert('sys_transaction',$data);

		if($inserttrans == true){

            $this->db->where('booking_unique_key', $bookingId);

            $items = array('txn_id'=>$data['txn_id'],'booking_status'=>'booked');

            $success = $this->db->update('sys_booking', $items);

            if($success){
                return true;
            }
        }
        return false;

    }

    public function InsertSubscriber($data){
        $insertsub = $this->db->insert('sys_subscribe',$data);

		if($insertsub == true){

            return true;
        }
        return false;
    }

    public function GetPackageById($id){
        $this->db->select('*');
        $this->db->from('sys_prices');
        $this->db->where('package_unique_id',$id);
        $query = $this->db->get();

        $item = $query->first_row();

        if($item != null){
            return $item;
        }

        return false;
    }
        

    public function PaymentIdExist($id){

        $this->db->select("*");
        $this->db->where("pay_id",$id);
        $this->db->where("txn_state","completed");

        $return = $this->db->get("sys_transaction");

        $result = $return->result_array();

        if(count($result) > 0){
            return true;
        }

        return false;

    }

    public function GetBlogs(){
        $this->db->select('*');
        $this->db->from('sys_blogs');
        $this->db->join('sys_users', 'sys_users.session_id = sys_blogs.blog_post_by');
        $this->db->order_by('sys_blogs.blog_date_generated', 'desc');
        $query = $this->db->get();

        $results = $query->result_array();

        $data = array();

        foreach($results as $res){
            $result = json_decode(json_encode($res));

            $content =$this->enc->decrypt($result->blog_content);

            $fbid = $result->blog_fb_id;

            $comments = NULL;//$this->face->GetCommentCount((string)$fbid);
            $likes = NULL;//$this->face->GetLikesCount((string)$fbid);
            $shares = NULL;//$this->face->GetSharesCount((string)$fbid);

            if($comments === NULL){
                $comments = 0;
            }

            if($likes === NULL){
                $likes = 0;
            }

            if($shares === NULL){
                $shares = 0;
            }

            $ne = array(
                'title'=>$result->blog_title,
                'id'=>$result->blog_unique_id,
                'url'=>site_url("blogs1062/$result->blog_url"),
                'tags'=>sanitizeInput(base64_decode($result->blog_tags)),
                'catch'=>$result->blog_catch_phrase,
                'content'=>sanitizeInput(substr($content, 0, 150)).'...',
                'image'=>base_url("uploads/blog-images/$result->blog_image"),
                'created'=>$result->blog_date_generated,
                'comments'=>(string)$comments,
                'likes'=> (string)$likes,
                'shares'=>(string)$shares,
                'fullname'=>$result->blog_user_visible=="1" ? $result->first_name.' '.$result->last_name:"anonymous"
                
            );

            array_push($data, $ne);
        }

        return $data;
    }

    public function GetBlog($url){
        $this->db->select('*');
        $this->db->from('sys_blogs');
        $this->db->join('sys_users', 'sys_users.session_id = sys_blogs.blog_post_by');
        $this->db->where("sys_blogs.blog_url", $url);
        $this->db->order_by('sys_blogs.blog_date_generated', 'desc');
        $query = $this->db->get();

        $results = $query->result_array();

        if(count($results) > 0){
                
            $data = array();

            foreach($results as $res){
                $result = json_decode(json_encode($res));

                $content =$this->enc->decrypt($result->blog_content);

                $fbid = $result->blog_fb_id;

                $comments = 0;
                $likes = 0;
                $shares = 0;
                $objectLink = '';

                // if(!empty($fbid) && $this->ses->userdata('fb_access_token') !== null){
                //     $comments = $this->face->GetCommentCount((string)$fbid);
                //     $likes = $this->face->GetLikesCount((string)$fbid);
                //     $shares = $this->face->GetSharesCount((string)$fbid);
                //     $objectLink = json_decode(json_encode($this->face->GetPostAction((string)$fbid)),true);
                // }

                

                if($comments === NULL){
                    $comments = 0;
                }

                if($likes === NULL){
                    $likes = 0;
                }

                if($shares === NULL){
                    $shares = 0;
                }

                $ne = array(
                    'title'=>$result->blog_title,
                    'id'=>$result->blog_unique_id,
                    'url'=>site_url("blogs1062/$result->blog_url"),
                    'tags'=>explode(',',sanitizeInput2(base64_decode($result->blog_tags,true))),
                    'catch'=>$result->blog_catch_phrase,
                    'content'=>$content,
                    'objectlink'=>$result->fb_comment_link,
                    'image'=>base_url("uploads/blog-images/$result->blog_image"),
                    'created'=>$result->blog_date_generated,
                    'comments'=>(string)$comments,
                    'likes'=> (string)$likes,
                    'shares'=>(string)$shares,
                    'fullname'=>$result->blog_user_visible=="1" ? $result->first_name.' '.$result->last_name:"anonymous"
                    
                );

                array_push($data, $ne);
            }

            return $data;
        }

        return false;
    }

    public function getPackages($packageType = "3"){
        //ptype 3 = taxi
        //ptype 2 = toursExcursion
        //ptype 1 = airporttransfer

        $this->db->select("*");
        $this->db->where("package_type",$packageType);
        
        $return = $this->db->get("sys_prices");

        $result = $return->result_array();

        $newArray = array();

        if(count($result) > 0){

            

            foreach($result as $val){

                $trip_type = 'Round Trip';
                if($val['trip_type'] == 1){
                    $trip_type = 'One Way Trip';
                }

                $val['price_description'] = base64_decode($val['price_description']);//price_addtional_info

                $val['price_addtional_info'] = explode(',', sanitizeInput2(base64_decode($val['price_addtional_info'])));

                $addinfoArray = array();

                foreach($val['price_addtional_info'] as $item){
                    $ad=array("item"=>'֍ '.$item);
                    array_push($addinfoArray,$ad);
                    // print_r($item);
                }

                $val['price_addtional_info'] = $addinfoArray;

                $val['trip_type'] = $trip_type;

                // $ne = array($val);
                array_push($newArray,$val);
                
            }

            return $newArray;
        }

        return false;
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
        $link = site_url("admin/");
        $this->email->from(MY_EMAIL_ADDR, 'Archer 1062 Tours');
        $this->email->to(MY_EMAIL_ADDR);
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
    
                        