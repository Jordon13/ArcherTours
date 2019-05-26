<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function login(){
        $this->load->view('admin/login');
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

// Edit Pages
    public function euser()
    {
        $this->load->view('admin/edit/user');
    }

    public function eblog()
    {
        $this->load->view('admin/edit/blog');
    }

    public function eprices()
    {
        $this->load->view('admin/edit/prices');
    }

    public function testimonials()
    {
        $this->load->view('admin/edit/test');
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
    $this->load->view('admin/pages/about');
}

public function blog()
{
    $this->load->view('admin/pages/blog');
}

public function booking()
{
    $this->load->view('admin/pages/booking');
}

public function contact()
{
    $this->load->view('admin/pages/contact');
}

public function gallery()
{
    $this->load->view('admin/pages/gallery');
}

public function home()
{
    $this->load->view('admin/pages/home');
}

}

?>