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
            'smtp_host' => _HOST_,
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
        //$link = site_url("admin/login?error=Welcome to Archer 1062 Tours, if this is your first time we suggest you create a new password after logging in with the system provided one");
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

            if($firstRow->expiry_date < $currentTime){
                
                return 3;
            }

            $this->ses->set_userdata("fb_access_token",$firstRow->user_token);
            $this->ses->set_userdata("fb_expires_at",$firstRow->expiry_date);
            $this->ses->set_userdata("fb_user_id",$firstRow->user_id);

            return true;
        }

        return 2;

    }


    public function LoadHomepage(){

        $homepage = $this->db->get("sys_home_page")->result_array();

        $this->db->join('sys_prices', 'sys_prices.package_unique_id = sys_specials._service_id');
        $this->db->order_by('sys_specials.last_modified','DESC');
        $specials = $this->db->get_where("sys_specials",array("special_end_date >="=>date("Y-m-d") ),10,0)->result_array();


        $this->db->limit(3);
        $this->db->join('sys_users', 'sys_users.session_id = sys_blogs.blog_post_by');
        $this->db->order_by('blog_date_generated','DESC');
        $blogs = $this->db->get("sys_blogs")->result_array();

        $aboutus = $this->LoadAboutUsPage();


        $contact = $this->LoadContactUsPage();

        $data = array(
            'homepage'=>$homepage[0],
            'specials'=>$specials,
            'blogs'=>$blogs,
            'aboutus'=>$aboutus[0], 
            'contact'=>$contact[0], 
            'services'=>$this->LoadServicePage()[0],
            'testimonial'=>$this->LoadTestimonials10(),
            'deal'=>$this->mn->LoadDealsPage()[0]
        );

        return $data;

    }

    public function LoadAboutUsPage(){
        return $this->db->get("sys_about_us")->result_array();
    }


    public function LoadHome(){
        return $this->db->get("sys_home_page")->result_array();
    }

    public function LoadContactUsPage(){
        return $this->db->get("sys_contact_page")->result_array();
    }

    public function LoadGalleryPage(){
        return $this->db->get("sys_gallery_page")->result_array();
    }

    public function LoadBlogPage(){
        return $this->db->get("sys_blog_page")->result_array();
    }

    public function LoadServicePage(){
        return $this->db->get("sys_service_page")->result_array();
    }

    public function LoadTaxiServicePage(){
        return $this->db->get("sys_taxi_service_page")->result_array();
    }

    public function LoadAirportServicePage(){
        return $this->db->get("sys_airport_service_page")->result_array();
    }

    public function LoadToursServicePage(){
        return $this->db->get("sys_tours_service_page")->result_array();
    }

    public function LoadBookingPage(){
        return $this->db->get("sys_booking_page")->result_array();
    }

    public function LoadDealsPage(){
        return $this->db->get("sys_deals_page")->result_array();
    }

    public function LoadSpecials(){
        $this->db->join('sys_prices', 'sys_prices.package_unique_id = sys_specials._service_id');
        $this->db->order_by('sys_specials.last_modified','DESC');
        return $this->db->get_where("sys_specials")->result_array();
    }

    public function LoadNewsPage(){
        return $this->db->get("sys_recent_news_page")->result_array();
    }

    public function LoadTestimonialsPage(){
        return $this->db->get("sys_testimonals_page")->result_array();
    }

    public function LoadTestimonials(){
        $this->db->order_by('date_created','DESC');
        $this->db->where('_isVisible','1');
        return $this->db->get("sys_testimonials")->result_array();
    }

    public function LoadRecentEvents(){
        $this->db->order_by('date_created','DESC');
        return $this->db->get("sys_recent")->result_array();
    }

    public function LoadTestimonials10(){
        $this->db->limit(10);
        $this->db->order_by('date_created','DESC');
        return $this->db->get("sys_testimonials")->result_array();
    }

    public function LoadGallery(){
        $this->db->join('sys_files', 'sys_files.auto_generated_id = sys_media_upload.sys_folder_id');
        $this->db->where("sys_media_upload.media_file_type","image");
        $this->db->order_by('date_added','DESC');
        $images = $this->db->get("sys_media_upload")->result_array();

        $this->db->join('sys_files', 'sys_files.auto_generated_id = sys_media_upload.sys_folder_id');
        $this->db->where("sys_media_upload.media_file_type","video");
        $this->db->order_by('date_added','DESC');
        $videos = $this->db->get("sys_media_upload")->result_array();

        $data = array('images'=>$images, 'videos'=>$videos, 'pageDetails'=>$this->LoadGalleryPage()[0]);

        return $data;
    }






    
    

                        
}
                        
/* End of file Manipulation.php */
    
                        