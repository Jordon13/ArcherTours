<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    

    public function login(){

        $this->load->library('parser');

        // $data = array(
        //     'names' => array(
        //         array('first' => 'Jordaine',
        //         'last' => 'Gayle'),
        //         array('first' => 'Kylie',
        //         'last' => 'Jenner'),
        //     )
        // );
        // $this->parser->parse('blog_template', $data);
        $this->load->view('admin/login');

        

    }

    public function confirm(){

        $this->load->library('parser');

        // $data = array(
        //     'names' => array(
        //         array('first' => 'Jordaine',
        //         'last' => 'Gayle'),
        //         array('first' => 'Kylie',
        //         'last' => 'Jenner'),
        //     )
        // );
        // $this->parser->parse('blog_template', $data);
        $this->load->view('admin/confirm');

        

    }

    public function dashboard(){
        $this->load->view('admin/dashboard');
    }
// Create Content
    public function cuser()
    {
        $this->load->view('admin/create/user');
    }

    public function cblog()
    {
        $this->load->view('admin/create/blog');
    }

    public function cprices()
    {
        $this->load->view('admin/create/prices');
    }

    public function cdeal()
    {
        $this->load->view('admin/create/deal');
    }

    public function cspecial()
    {
        $this->load->view('admin/create/specials');
    }

    public function callback()
    {
        $this->load->view('admin/fb-callback');
    }

    public function crecent()
    {
        $this->load->view('admin/create/recent');
    }

// Edit Pages
    public function euser()
    {
        $this->ps->parse('admin/edit/user',array('data'=>$this->gen->GetSystemUsers()));
    }

    public function eblog()
    {
        $this->ps->parse('admin/edit/blog',array('data'=>$this->gen->GetSystemBlogs()));
    }

    public function eprices()
    {
        $this->ps->parse('admin/edit/prices',array('data'=>$this->gen->GetSystemPrices()));
    }

    public function testimonials()
    {
        $this->ps->parse('admin/edit/test',array('data'=>$this->gen->GetSystemTestimonials()));
    }

    public function edeals()
    {
        $this->ps->parse('admin/edit/deal',array('data'=>$this->gen->GetSystemDeals()));
    }

    public function erecent()
    {
        $this->ps->parse('admin/edit/recent',array('data'=>$this->gen->GetSystemNews()));
    }


// uploads and content creation
    public function media()
    {
        //print_r($this->gen->GetSystemFolders());
        $this->load->view('admin/mupload/multimedia',array('data'=>$this->gen->GetSystemFolders()));
    }

    // public function recent()
    // {
    //     $this->load->view('admin/mupload/recent');
    // }

    // pages redesign

    public function about()
    {
        $this->load->view('admin/pages/about',array('data'=>$this->mn->LoadAboutUsPage()[0]));
    }

    public function blog()
    {
        $this->load->view('admin/pages/blog',array('data'=>$this->mn->LoadBlogPage()[0]));
    }

    public function booking()
    {
        $this->load->view('admin/pages/booking',array('data'=>$this->mn->LoadBookingPage()[0]));
    }

    public function contact()
    {
        $this->load->view('admin/pages/contact',array('data'=>$this->mn->LoadContactUsPage()[0]));
    }

    public function gallery()
    {
        $this->load->view('admin/pages/gallery',array('data'=>$this->mn->LoadGalleryPage()[0]));
    }

    public function home()
    {
        $this->load->view('admin/pages/home',array('data'=>$this->mn->LoadHome()[0]));//LoadHome()[0]
    }

    public function service()
    {
        $this->load->view('admin/pages/service',array('data'=>$this->mn->LoadServicePage()[0]));
    }

    public function airportservice()
    {
        $this->load->view('admin/pages/airportService',array('data'=>$this->mn->LoadAirportServicePage()[0]));
    }


    public function taxiservice()
    {
        $this->load->view('admin/pages/taxiService',array('data'=>$this->mn->LoadTaxiServicePage()[0]));
    }

    public function toursservice()
    {
        $this->load->view('admin/pages/toursService',array('data'=>$this->mn->LoadToursServicePage()[0]));
    }

    public function deal()
    {
        $this->load->view('admin/pages/dealPage',array('data'=>$this->mn->LoadDealsPage()[0]));
    }

    public function testimonialspage()
    {
        $this->load->view('admin/pages/testimonialPage',array('data'=>$this->mn->LoadTestimonialsPage()[0]));
    }


    public function newspage()
    {
        $this->load->view('admin/pages/newsPage',array('data'=>$this->mn->LoadNewsPage()[0]));
    }


    //analytics

    public function booking_analytics()
    {
        $this->load->view('admin/analytics/booking_analytics');
    }


    public function handlebookings()
    {
        $this->load->view('admin/analytics/handlebookings',array('data'=>$this->gen->GetSystemBookings()));
    }

    public function profitloss()
    {
        $this->load->view('admin/analytics/profitloss');
    }

    public function calender()
    {
        $month = $this->uri->segment(3,-1);

        $year = date("Y");
        
        if($month == "-1"){
            $month = date("m");
        }

        $items = $this->gen->GetBookingsByDate($month,$year);

        $data2 = array();

        if(count($items)>0){

            foreach($items as $i){

                $day = date("d", strtotime($i['booking_date']));
                $id = $i['auto_generated_id'];
                $url = site_url('admin/editbooking/').$id;
                $data2+= array($day => $url);

            }

        }

        $data = $this->cal->generate($year, $month,$data2);

        $this->load->view('admin/analytics/bcalender',array('data'=>$data));
    }


    public function editprofile()
    {
        $result = $this->gen->GetUserBySessionId($this->ses->userdata('user_ses'));

        $this->load->view('admin/editprofile',array('data'=>$result[0]));
    }

    public function edituser()
    {
        $linkId = $this->uri->segment(3,-1);

        $result = $this->gen->GetUserById($linkId);

        $this->load->view('admin/temp/edituser',array('data'=>$result[0]));
    }

    public function edittest()
    {
        $linkId = $this->uri->segment(3,-1);

        $result = $this->gen->GetTestimonialById($linkId);

        $this->load->view('admin/temp/edittest',array('data'=>$result[0]));
    }

    public function viewfiles()
    {
        $linkId = $this->uri->segment(3,-1);

        $result = $this->gen->GetFilesByFolderId($linkId);

        if($result == false){
            $this->load->view('admin/temp/viewfolder',array('data'=>0));
        }else{
            $this->load->view('admin/temp/viewfolder',array('data'=>$result));
        }

        
    }

    public function editdeal()
    {
        $linkId = $this->uri->segment(3,-1);

        $result = $this->gen->GetDealById($linkId);

        $this->load->view('admin/temp/editdeal',array('data'=>$result[0]));
    }

    public function editprice()
    {
        $linkId = $this->uri->segment(3,-1);

        $result = $this->gen->GetPriceById($linkId);

        $this->load->view('admin/temp/editprice',array('data'=>$result[0]));
    }


    public function editblog()
    {
        $linkId = $this->uri->segment(3,-1);

        $result = $this->gen->GetBlogById($linkId);

        $this->load->view('admin/temp/editblog',array('data'=>$result[0]));
    }

    public function editnews()
    {
        $linkId = $this->uri->segment(3,-1);

        $result = $this->gen->GetNewsById($linkId);

        $this->load->view('admin/temp/editnews',array('data'=>$result[0]));
    }

    public function editbooking()
    {
        $linkId = $this->uri->segment(3,-1);

        $result = $this->gen->GetBookingById($linkId);

        $this->load->view('admin/temp/editbooking',array('data'=>$result[0]));
    }

    public function logout(){
        $this->gen->killSession("user_ses");
        redirect(site_url('/admin/login?success=Thanks for using the service'),'location');
    }

}

?>