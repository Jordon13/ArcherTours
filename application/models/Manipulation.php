<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Manipulation extends CI_Model {


    public function PackageList($data){

        $this->db->where("package_type",$data->trip_type);

        $this->db->like('lower(price_origin)', strtolower($data->origin), 'both');
        
        $this->db->like('lower(price_destination)', strtolower($data->destination), 'both');  
        
        $query = $this->db->get("sys_prices");
        
        $result = $query->result();

        if(count($result) > 0){
            return $result;
        }

        return false;
    }
                                  
    public function EmailPackageList($data){
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
        $this->email->to($data->UserEmail);
        

        $result = $this->mn->PackageList($data);

        if($result != false){

            $emailBody = 'Reference Id: '.$data->RefId.'';

            $emailBody .= $this->ps->parse('templates/price_template',array('packages'=>json_decode(json_encode($result),true)),true);

            $this->email->subject('Archer 1062 Tours - Price Package List');

            $this->email->message($emailBody);
            
        }else{
            $this->email->subject('Archer 1062 Tours - Price Package List');
            $this->email->message('<p>Reference Id: '.$data->RefId.'</p><p>Sorry we didn\'t find any package for the requested route.</p>');
        }


        $c = $this->email->send();
        if(!$c){
            return false;
        }else{
            return true;
        }
    }
    
    public function IsFacebookExist(){
        $result = $this->db->get('sys_fb_credentials');
        $firstRow = $result->row();

        if($result->num_rows() > 0){

            $currentTime = time();

            $this->ses->set_userdata("fb_access_token",$firstRow->user_token);
            $this->ses->set_userdata("fb_expires_at",$firstRow->expiry_date);
            $this->ses->set_userdata("fb_user_id",$firstRow->user_id);

            return true;
        }

        return 2;

    }
    

                        
}
                        
/* End of file Manipulation.php */
    
                        