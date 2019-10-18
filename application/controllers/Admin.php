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


// uploads and content creation
    public function media()
    {
        $this->load->view('admin/mupload/multimedia');
    }

    public function recent()
    {
        $this->load->view('admin/mupload/recent');
    }

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
        $this->load->view('admin/analytics/handlebookings');
    }

    public function profitloss()
    {
        $this->load->view('admin/analytics/profitloss');
    }

    public function calender()
    {
        $this->load->view('admin/analytics/bcalender');
    }


    public function editprofile()
    {
        $this->load->view('admin/editprofile');
    }

    public function edituser()
    {
        $linkId = $this->uri->segment(3,-1);

        $result = $this->gen->GetUserById($linkId);

        $this->load->view('admin/temp/edituser',array('data'=>$result[0]));
    }

    public function editprice()
    {
        $this->load->view('admin/temp/editprice');
    }


    public function editblog()
    {
        $linkId = $this->uri->segment(2,-1);

        print_r($linkId);

        $this->load->view('admin/temp/editblog');
    }
    public function logout(){
        $this->gen->killSession("user_ses");
        redirect(site_url('/admin/login?success=Thanks for using the service'),'location');
    }

}

?>