<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
	{
		$this->load->view('homepage');
    }

    public function blogs1062(){
        $this->load->view('blog/blogs1062');
    }

    public function about()
    {
        $this->load->view('about');
    }

    public function services(){
        $this->load->view('services');
    }

    public function deals(){
        $this->load->view('deals');
    }

    public function booking()
    {
        $this->load->view('booking');
    }

    public function contact()
    {
        $this->load->view('contact');
    }

    public function gallery()
    {
        $this->load->view('gallery');
    }

    public function airporttransfer()
    {
        $this->load->view('airporttransfer');
    }

    public function taxiservice()
    {
        $this->load->view('taxiservice');
    }

    // public function price()
    // {
    //     $this->load->view('templates/price.html');
    // }

    public function tours()
    {
        $this->load->view('tours');
    }

    /*Blog */
    public function blog()
    {
        $this->load->view('blog/blog');
    }

    public function header()
    {
        $this->load->view('sections/header');
    }

    
    public function footer()
    {
        $this->load->view('sections/footer');
    }


    /** Admin Pages */




}

?>