<?php

if(!function_exists('main_head')){
	function main_head(){
        echo '<script src="https://code.jquery.com/jquery-3.4.0.js" integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> 
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.9.0/css/all.css">    
        <link href="https://fonts.googleapis.com/css?family=Dekko|Gamja+Flower|Itim|Merienda+One|Patrick+Hand+SC|Sriracha&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
        <link href="'.base_url('css/header.css').'" rel="stylesheet">
        <script src="'.site_url('js/header.js').'" type="application/javascript"></script>  ';
	}
}

if(!function_exists('main_nav')){
	function main_nav(){
        echo '<div class="row searcharea valign-wrapper" style="display:none;">

        <div class="close z-depth-1 valign-wrapper"><i class="material-icons">close</i></div>
    
    <div class="col l4 m8 s12 offset-l4 offset-m2 offset-s0 sbody">
        <h5 class="header white-text center-align">Search For Places In Jamaica & Book Your Trip</h5>
        
        <div class="input-field col s12 inp">
            <input id="sbox" type="search" class="z-depth-1" placeholder="Search Here..."/>
        </div>

        <p class="white-text center-align"><em>Powered By Trip Advisor</em></p>
    </div>
</div>

<div class="nav-header">

    <div class="nav-body">
        <div class="nav-logo">
            <img src="'.base_url('assets/logo2.png').'"/>
        </div>

        <div class="nav-links noshow">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Blog</a></li>
                
            </ul>
        </div>


        <div class="nav-misc">
            <button class="noshow">Book A Trip</button>
            <i class="fas fa-search noshow search-trigger"></i>
            <i class="fas fa-bars nav-icon sidenav-trigger" data-target="mobile-demo" style="display: none;"></i>
        </div>
        </div>

    </div>


    <ul class="sidenav" id="mobile-demo">
        <li><a href="sass.html">Services</a></li>
        <li><a href="badges.html">Gallery</a></li>
        <li><a href="badges.html">About</a></li>
        <li><a href="badges.html">Contact</a></li>
        <li><a href="badges.html">Blog</a></li>

        <div class="nav-miscs">
            <button class="">Book A Trip</button>
            <i class="fas fa-search search-trigger"></i>
        </div>
    </ul>';
	}
}

if(!function_exists('main_footer')){
	function main_footer(){
	}
}


if(!function_exists('main_head_js')){
	function main_head_js(){

	}
}


if(!function_exists('main_foot_js')){
	function main_foot_js(){
	}
}
?>