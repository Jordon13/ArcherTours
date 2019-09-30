<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
	{
        //print_r($this->mn->LoadHomepage());
		$this->load->view('homepage',array('data'=>$this->mn->LoadHomepage()));
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
        $this->load->view('about', array('data'=>$this->mn->LoadAboutUsPage()[0]));
    }

    public function recentstories()
    {
        $this->load->view('recentnews',array('data'=>$this->mn->LoadNewsPage()[0]));
    }

    public function testimonials()
    {
        $this->ps->parse('testimonials',array('data'=>$this->mn->LoadTestimonialsPage()[0], 'items'=>$this->mn->LoadTestimonials()));
    }

    public function services(){
        $this->load->view('services', array('data'=>$this->mn->LoadServicePage()[0]));//LoadServicePage()
    }

    public function deals(){
        $this->load->view('deals',array('data'=>$this->mn->LoadDealsPage()[0]));
    }

    public function booking()
    {
        $this->load->view('booking', array('data'=>$this->mn->LoadBookingPage()[0]));//
    }

    public function contact()
    {
        $this->load->view('contact', array('data'=>$this->mn->LoadContactUsPage()[0]));
    }

    public function gallery()
    {

        $this->ps->parse('gallery',array('data'=>$this->mn->LoadGallery()));
    }

    public function airporttransfer()
    {
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

    public function header()
    {
        $this->load->view('sections/header');
    }

    public function cart()
    {
        $this->load->view('sections/cart');
    }

    
    public function footer()
    {
        $this->load->view('sections/footer');
    }

    


    /** Admin Pages */




}

?>