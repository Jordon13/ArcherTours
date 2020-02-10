<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
	{
	    
        $this->cs->updateBooking();
        $part = $this->uri->segment(1,0);

        if($part != "0"){
            if(!isset($_COOKIE[$part])){
            
                if($this->cs->AddPageView($part)){
                    set_cookie($part,1,86400*1);
                }
            }
        }else{
            if(!isset($_COOKIE['home'])){
            
                if($this->cs->AddPageView('home')){
                    set_cookie('home',1,86400*1);
                }
            }
        }

        

		$this->load->view('homepage',array('data'=>$this->mn->LoadHomepage()));
    }
    
    
    public function privacy(){
        $this->load->view('privacy');
    }

    public function blogs1062(){

        $linkId = $this->uri->segment(2,-1);

        $data = array();


        if($linkId === -1){
            $data+=array(
                'data'=>'Please provide an id for this request.',
                'IsSuccessful' => false
            );
            $this->ps->parse('blog/blogs1062', $data);
            return;
        }

        $result = $this->cs->GetBlog($linkId);

        if($result === false){
            $data+=array(
                'data'=>'Unable to locate blog, it\'s either removed or doesn\'t exist',
                'IsSuccessful' => false
            );
            $this->ps->parse('blog/blogs1062', $data);
            return;
        }

        $data+=$result[0];


        $this->ps->parse('blog/blogs1062',array("data"=>$data,'IsSuccessful' => true));
    }

    public function about()
    {
        $part = $this->uri->segment(1,0);

        if($part != "0"){
            if(!isset($_COOKIE[$part])){
            
                if($this->cs->AddPageView($part)){
                    set_cookie($part,1,86400*1);
                }
            }
        }else{
            if(!isset($_COOKIE['home'])){
            
                if($this->cs->AddPageView('home')){
                    set_cookie('home',1,86400*1);
                }
            }
        }
        $this->load->view('about', array('data'=>$this->mn->LoadAboutUsPage()[0]));
    }

    public function recentstories()
    {
        $part = $this->uri->segment(1,0);

        if($part != "0"){
            if(!isset($_COOKIE[$part])){
            
                if($this->cs->AddPageView($part)){
                    set_cookie($part,1,86400*1);
                }
            }
        }else{
            if(!isset($_COOKIE['home'])){
            
                if($this->cs->AddPageView('home')){
                    set_cookie('home',1,86400*1);
                }
            }
        }
        $this->load->view('recentnews',array('data'=>$this->mn->LoadNewsPage()[0], 'items'=>$this->mn->LoadRecentEvents()));
    }

    public function testimonials()
    {
        $part = $this->uri->segment(1,0);

        if($part != "0"){
            if(!isset($_COOKIE[$part])){
            
                if($this->cs->AddPageView($part)){
                    set_cookie($part,1,86400*1);
                }
            }
        }else{
            if(!isset($_COOKIE['home'])){
            
                if($this->cs->AddPageView('home')){
                    set_cookie('home',1,86400*1);
                }
            }
        }
        $this->ps->parse('testimonials',array('data'=>$this->mn->LoadTestimonialsPage()[0], 'items'=>$this->mn->LoadTestimonials()));
    }

    public function services()
    {
        $part = $this->uri->segment(1,0);

        if($part != "0"){
            if(!isset($_COOKIE[$part])){
            
                if($this->cs->AddPageView($part)){
                    set_cookie($part,1,86400*1);
                }
            }
        }else{
            if(!isset($_COOKIE['home'])){
            
                if($this->cs->AddPageView('home')){
                    set_cookie('home',1,86400*1);
                }
            }
        }
        $this->load->view('services', array('data'=>$this->mn->LoadServicePage()[0]));//LoadServicePage()
    }

    public function deals()
    {
        $part = $this->uri->segment(1,0);

        if($part != "0"){
            if(!isset($_COOKIE[$part])){
            
                if($this->cs->AddPageView($part)){
                    set_cookie($part,1,86400*1);
                }
            }
        }else{
            if(!isset($_COOKIE['home'])){
            
                if($this->cs->AddPageView('home')){
                    set_cookie('home',1,86400*1);
                }
            }
        }
        $this->load->view('deals',array('data'=>$this->mn->LoadDealsPage()[0],'items'=>$this->mn->LoadSpecials()));
    }

    public function booking()
    {
        $part = $this->uri->segment(1,0);

        if($part != "0"){
            if(!isset($_COOKIE[$part])){
            
                if($this->cs->AddPageView($part)){
                    set_cookie($part,1,86400*1);
                }
            }
        }else{
            if(!isset($_COOKIE['home'])){
            
                if($this->cs->AddPageView('home')){
                    set_cookie('home',1,86400*1);
                }
            }
        }
        $this->load->view('booking', array('data'=>$this->mn->LoadBookingPage()[0]));//
    }

    public function contact()
    {
        $part = $this->uri->segment(1,0);

        if($part != "0"){
            if(!isset($_COOKIE[$part])){
            
                if($this->cs->AddPageView($part)){
                    set_cookie($part,1,86400*1);
                }
            }
        }else{
            if(!isset($_COOKIE['home'])){
            
                if($this->cs->AddPageView('home')){
                    set_cookie('home',1,86400*1);
                }
            }
        }
        $this->load->view('contact', array('data'=>$this->mn->LoadContactUsPage()[0]));
    }

    public function gallery()
    {
        $part = $this->uri->segment(1,0);

        if($part != "0"){
            if(!isset($_COOKIE[$part])){
            
                if($this->cs->AddPageView($part)){
                    set_cookie($part,1,86400*1);
                }
            }
        }else{
            if(!isset($_COOKIE['home'])){
            
                if($this->cs->AddPageView('home')){
                    set_cookie('home',1,86400*1);
                }
            }
        }

        $this->ps->parse('gallery',array('data'=>$this->mn->LoadGallery()));
    }

    public function airporttransfer()
    {
        $part = $this->uri->segment(1,0);

        if($part != "0"){
            if(!isset($_COOKIE[$part])){
            
                if($this->cs->AddPageView($part)){
                    set_cookie($part,1,86400*1);
                }
            }
        }else{
            if(!isset($_COOKIE['home'])){
            
                if($this->cs->AddPageView('home')){
                    set_cookie('home',1,86400*1);
                }
            }
        }
        $packages = $this->cs->getPackages(1);

        if($packages === false){
            $data = array(
                'datas'=>0);
            $this->ps->parse('airporttransfer',$data);
            return;
        }

        $data = array(
            'datas'=>$packages,
            'pageDetails' =>$this->mn->LoadAirportServicePage()[0]
        );

        $this->ps->parse('airporttransfer',$data);
        // $this->load->view('airporttransfer');
    }

    public function taxiservice()
    {
        $part = $this->uri->segment(1,0);

        if($part != "0"){
            if(!isset($_COOKIE[$part])){
            
                if($this->cs->AddPageView($part)){
                    set_cookie($part,1,86400*1);
                }
            }
        }else{
            if(!isset($_COOKIE['home'])){
            
                if($this->cs->AddPageView('home')){
                    set_cookie('home',1,86400*1);
                }
            }
        }
        $packages = $this->cs->getPackages();

        if($packages === false){
            $data = array(
                'datas'=>0);
            $this->ps->parse('taxiservice',$data);
            return;
        }

        $data = array(
            'datas'=>$packages,
            'pageDetails' =>$this->mn->LoadTaxiServicePage()[0]
        );

        $this->ps->parse('taxiservice',$data);
    }

    public function tours()
    {
        $part = $this->uri->segment(1,0);

        if($part != "0"){
            if(!isset($_COOKIE[$part])){
            
                if($this->cs->AddPageView($part)){
                    set_cookie($part,1,86400*1);
                }
            }
        }else{
            if(!isset($_COOKIE['home'])){
            
                if($this->cs->AddPageView('home')){
                    set_cookie('home',1,86400*1);
                }
            }
        }
        $packages = $this->cs->getPackages(2);

        if($packages === false){
            $data = array(
                'datas'=>0);
            $this->ps->parse('tours',$data);
            return;
        }

        $data = array(
            'datas'=>$packages,
            'pageDetails' =>$this->mn->LoadToursServicePage()[0]
        );

        $this->ps->parse('tours',$data);
        // $this->load->view('tours');
    }

    /*Blog */
    public function blog()
    {
        $part = $this->uri->segment(1,0);

        if($part != "0"){
            if(!isset($_COOKIE[$part])){
            
                if($this->cs->AddPageView($part)){
                    set_cookie($part,1,86400*1);
                }
            }
        }else{
            if(!isset($_COOKIE['home'])){
            
                if($this->cs->AddPageView('home')){
                    set_cookie('home',1,86400*1);
                }
            }
        }
        $blogs = $this->cs->GetBlogs();

        if(count($blogs) <= 0){
            echo "No blog content sorry";
            return;
        }

        $data = array(
            'data'=>$blogs,
            'pageDetails'=>$this->mn->LoadBlogPage()[0]
        );
        
        $this->ps->parse('blog/blog', $data);
    }
    
    public function results()
    {

        if(!isset($_GET['query']) || empty($_GET['query'])){
            $result = $this->cs->search(" ");
            $this->load->view('searchresults',array('data' =>$result));
            return;
        }

        $str = sanitizeInput($_GET['query']);

        $result = $this->cs->search($str);

        $this->load->view('searchresults',array('data' =>$result));
    }

    public function header()
    {
        $this->load->view('sections/header');
    }

    public function cart()
    {
        $this->load->view('sections/cart');
    }

    public function viewprice()
    {
        $linkId = $this->uri->segment(2,-1);

        $data = array();

        if($linkId === -1){
            $data+=array(
                'data'=>'Please provide an id for this request.',
                'IsSuccessful' => false
            );
            $this->load->view('sections/viewprice', $data);
            return;
        }

        $result = $this->cs->GetPackageById($linkId);

        if($result === false){
            $data+=array(
                'data'=>'Unable to find package by that id.',
                'IsSuccessful' => false
            );
            $this->load->view('sections/viewprice', $data);
            return;
        }

        $data+=array(
            'data'=>$result,
            'IsSuccessful' => true
        );

        $this->load->view('sections/viewprice',$data);
    }

    
    public function footer()
    {
        $this->load->view('sections/footer');
    }

    


    /** Admin Pages */




}

?>