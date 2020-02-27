<?php

defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('navigation')){
	
	function navigation($navtype = 0){

		$active0 = $navtype == 0 ? "active" : "";
		$active1 = $navtype == 1 ? "active" : "";
		$active2 = $navtype == 2 ? "active" : "";
		$active3 = $navtype == 3 ? "active" : "";
		$active4 = $navtype == 4 ? "active" : "";
		$active5 = $navtype == 5 ? "active" : "";
		
		echo '<section class="navigation">
		<div class="overlay"></div>
		<section class="vertical-nav">

			<header class="vertical-header blue accent-3">
				<p><b>ARCHER 1062 TOURS</b></p>
			</header>
			<p style="color: rgba(158,158,158 ,1); padding: 1em;">Navigation</p>
			<ul class="ver-link collapsible" data-collapsible="accordion">

				<li class = "'.$active0.'">
					<p  class="collapsible-header waves-effect waves" '.$active0.'><a href="'.base_url('admin/dashboard?active=0').'"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></p>
					<ul class="collapsible-body grey lighten-3">
					</ul>
				</li>

				<li class = "'.$active1.'">
					<p  class="collapsible-header '.$active1.' waves-effect waves" ><i class="fa fa-plus-square" aria-hidden="true"></i> Create</p>
					<ul class="collapsible-body grey lighten-3">
						<li><a href="'.base_url('admin/cuser?active=1').'">System User</a></li>
						<li><a href="'.base_url('admin/cblog?active=1').'">Blog</a></li>
						<li><a href="'.base_url('admin/cprices?active=1').'">Prices</a></li>
						<li><a href="'.base_url('admin/crecent?active=1').'">Recent Places</a></li>
					</ul>
				</li>

				<li class = "'.$active2.'">
					<p  class="collapsible-header '.$active2.' waves-effect waves" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i> View / Edit</p>
					<ul class="collapsible-body grey lighten-3">
					<li><a href="'.base_url('admin/euser?active=2').'">System Users </a><!--<span class="new badge blue darken-1 z-depth-1">4</span>--></li>
						<li><a href="'.base_url('admin/edeals?active=2').'">Deals </a><!--<span class="new badge blue darken-1 z-depth-1">4</span>--></li>
						<li><a href="'.base_url('admin/eblog?active=2').'">Blogs </a> <!--<span class="new badge blue darken-1 z-depth-1">2</span>--></li>
						<li><a href="'.base_url('admin/testimonials?active=2').'">Testimonals </a><!--<span class="new badge blue darken-1 z-depth-1">1</span>--></li>
						<li><a href="'.base_url('admin/eprices?active=2').'">Prices </a><!--<span class="new badge blue darken-1 z-depth-1">8</span>--></li>
						<li><a href="'.base_url('admin/erecent?active=2').'">Recent Places</a></li>
						<li><a href="'.base_url('admin/vsubs?active=2').'">Subscribers </a><!--<span class="new badge blue darken-1 z-depth-1">1</span>--></li>
						<li><a href="'.base_url('admin/customermsgs?active=2').'">Customer Messages </a><!--<span class="new badge blue darken-1 z-depth-1">1</span>--></li>

					</ul>
				</li>

				<li class = "'.$active3.'">
					<p  class="collapsible-header '.$active3.' waves-effect waves" ><i class="fa fa-cloud-upload" aria-hidden="true"></i> Media Upload</p>
					<ul class="collapsible-body grey lighten-3">
						<li><a href="'.base_url('admin/media?active=3').'">Photos / Videos</a></li>
						
					</ul>
				</li>

				<li class = "'.$active4.'">
					<p  class="collapsible-header '.$active4.' waves-effect waves" ><i class="fa fa-bar-chart" aria-hidden="true"></i> Bookings</p>
					<ul class="collapsible-body grey lighten-3">
						<li><a href="'.base_url('admin/handlebookings?active=4').'">Bookings</a></li>
						<li><a href="'.base_url('admin/booking_analytics?active=4').'">Booking Analytics</a></li>
						<li><a href="'.base_url('admin/calender/').'">Activity Calender</a></li>
						<li><a href="'.base_url('admin/profitloss?active=4').'">Income Report</a></li>
					</ul>
				</li>

				<li class = "'.$active5.'">
					<p  class="collapsible-header '.$active5.' waves-effect waves" ><i class="fa fa-file-text" aria-hidden="true"></i> Pages</p>
					<ul class="collapsible-body grey lighten-3">
						<li><a href="'.base_url('admin/home?active=5').'">Home</a></li>
						<li><a href="'.base_url('admin/blog?active=5').'">Blog</a></li>
						<li><a href="'.base_url('admin/deal?active=5').'">Deal</a></li>
						<li><a href="'.base_url('admin/about?active=5').'">About</a></li>
						<li><a href="'.base_url('admin/contact?active=5').'">Contact</a></li>
						<li><a href="'.base_url('admin/booking?active=5').'">Booking</a></li>
						<li><a href="'.base_url('admin/gallery?active=5').'">Gallery</a></li>
						<li><a href="'.base_url('admin/service?active=5').'">Service</a></li>
						<li><a href="'.base_url('admin/newspage?active=5').'">Recent News</a></li>
						<li><a href="'.base_url('admin/testimonialspage?active=5').'">Testimonials</a></li>
						<li><a href="'.base_url('admin/taxiservice?active=5').'">Taxi Service</a></li>
						<li><a href="'.base_url('admin/toursservice?active=5').'">Tours Service</a></li>
						<li><a href="'.base_url('admin/airportservice?active=5').'">Airport Service</a></li>
					</ul>
				</li>
			</ul>
		</section>
		<header class="nav-header blue accent-4">
			<div class="nav-div">
				
				<ul class="nav-icon">
					<a class="nav-toggle btn-floating btn waves-effect waves-light blue darken-3" onclick="navToggle();"><i class="material-icons">view_headline</i></a>
				</ul>

				<ul class="profile">
					<li id="noti"><div class="alert-badge">'.TotalNotifications().'</div><i class="fa fa-bell fa-lg" aria-hidden="true" ></i></li>
					<li id="prof"><i class="fa fa-user-md fa-lg" aria-hidden="true"></i>  <i class="fa fa-caret-down fa-lg" aria-hidden="true"></i></li>
				</ul>

		</div>
		</header>
			<ul class="profile-drop grey lighten-5">
					<li><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <a style="color:black;" href="'.site_url('admin/editprofile').'">Edit Profile</a></li>
					<li><i class="fa fa-sign-out" aria-hidden="true"></i> <a style="color:black;" href="'.site_url('/admin/logout').'">Log out</a></li>
				</ul>
				<ul class="notification-drop grey lighten-5" id="">
					'.Notifications().'
				</ul>
	</section>';
	}
}

if(!function_exists('adminjs')){
	function adminjs(){
		echo '
		<script>
			var once = 0, qoune = 0, toggle = 1,toggle1 = 1;
	
			var windowSize = 0;
	
			$("document").ready(()=>{
				$(".dropdown-trigger").dropdown();
				$(".collapsible").collapsible({accordion: true});
				
				$("#noti").on("click",()=>{
					backgroundToggle("#212121","white","#noti");
					if(toggle === 1){
						toggle=0;
					}else{
						toggle = 1;
					}
					$(".notification-drop").slideToggle();
					console.log(toggle);
				});
	
				$("#prof").on("click",()=>{
					backgroundToggle2("#212121","white","#prof");
					if(toggle1 === 1){
						toggle1=0;
					}else{
						toggle1 = 1;
					}
					$(".profile-drop").slideToggle();
				});
	
				if(getInnerWidth() <= 1000){
					$(".overlay").fadeOut();
					
						$(".vertical-nav").css({
							"left": "-190px"
						});
	
						$(".nav-header").css({
							"width": "100%",
							"left": "0%"
						});
	
						$(".content-area").css({
							"width": "100%",
							"left": "0%"
						});
	
						$(".nav-toggle").removeAttr("onclick");
						$(".nav-toggle").attr("onclick", "navToggleDefault()");
						
						windowSize = getInnerWidth();
						console.log("just loaded");
						
					}
				
				resizeEvent();
	
				$(".overlay").on("click",()=>{
					
					$(".overlay").fadeOut();
					
					$(".vertical-nav").animate({
					left: "-190px"
					},800);
	
					$(".nav-header").animate({
						width: "100%",
						left: "0px"
					},500);
	
					$(".content-area").animate({
						width: "100%",
						left: "0%"
					},500);
					
					$(".nav-toggle").removeAttr("onclick");
					$(".nav-toggle").attr("onclick", "navToggleDefault()");
				});
			});
	
			
	
			var navToggle = () =>{
	
	
				if(getInnerWidth() <= 1000){
	
				}else{
					$(".overlay").fadeOut();
					$(".vertical-nav").animate({
					left: "-190px"
				},800);
	
				$(".nav-header").animate({
					width: "100%",
					left: "0px"
				},500);
	
				$(".content-area").animate({
					width: "100%",
					left: "0%"
				},500);
	
				$(".nav-toggle").removeAttr("onclick");
				$(".nav-toggle").attr("onclick", "navToggleDefault()");
				$(".vertical-nav").css("z-index","0");
				}
	
				
			}
	
			var navToggleDefault = () =>{
	
				if(getInnerWidth() <= 1000){
					$(".vertical-nav").css("z-index","6");
	
					$(".vertical-nav").animate({
						left: "0px",
						width:"191px"
					},500);
	
					$(".overlay").css("width","0%");
					$(".overlay").fadeIn();
					
					$(".overlay").animate({
						width: returnCurrentPixels()
					},200);
				}else{
					$(".vertical-nav").css("width","12%");
					$(".vertical-nav").animate({
					left: "0px"
				},500);
	
				$(".nav-header").animate({
					width: "88%",
					left: "12%"
				},700);
	
				$(".content-area").animate({
					width: "88%",
					left: "12%"
				},700);
				$(".nav-toggle").removeAttr("onclick");
				$(".nav-toggle").attr("onclick", "navToggle()");
				}
	
			   
			} 
	
			var addBackground = (color, property) => {
				//rgba(33,150,243,1);
				$(property).css("color",color);
			}
	
			var removeBackground = (color, property) => {
				$(property).css("color",color);
			}
	
			var backgroundToggle = (color1, color2, property) =>{
				
				if(toggle === 0){
					removeBackground(color2, property);
				}else{
					addBackground(color1, property);
				}
			}
	
	
			var backgroundToggle2 = (color1, color2, property) =>{
				
				if(toggle1 === 0){
					removeBackground(color2, property);
				}else{
					addBackground(color1, property);
				}
			}
	
	
			var getInnerWidth = () =>{
				return window.innerWidth;
			}
	
			var returnCurrentPixels = () =>{
				return (windowSize-191)+"px";
			}
	
			var resizeEvent = () =>{
				
				$(window).resize(function () { 
					windowSize = getInnerWidth();
					console.log(returnCurrentPixels());
					if(getInnerWidth() <= 1000){
						once++;
						$(".overlay").css("width",returnCurrentPixels());
						if(once == 1){
							$(".vertical-nav").animate({
								left: "-190px"
							},800);
	
							$(".nav-header").animate({
								width: "100%",
								left: "0%"
							},500);
	
							$(".content-area").animate({
								width: "100%",
								left: "0%"
							},500);
	
							$(".nav-toggle").removeAttr("onclick");
							$(".nav-toggle").attr("onclick", "navToggleDefault()");
						}
						qoune=0;
						console.log(once);
						
					}else{
	
						once = 0;
						qoune++;
						console.log(once);
						if(qoune == 1){
							$(".overlay").fadeOut();
							$(".vertical-nav").css("z-index","0");
							$(".vertical-nav").css("width","12%");
							$(".vertical-nav").animate({
								left: "0px"
							},0);
	
							$(".nav-header").animate({
								width: "88%",
								left: "12%"
							},0);
	
							$(".content-area").animate({
								width: "88%",
								left: "12%"
							},0);
							$(".nav-toggle").removeAttr("onclick");
							$(".nav-toggle").attr("onclick", "navToggle()");
							console.log("qounce: "+qoune);
						}
							
						console.log("qounce: "+qoune);
					}
				});
			}
						 
		</script>';
	}
}


if(!function_exists('adminhead')){
	function adminhead(){
		echo '<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
		<link rel="shortcut icon" type="image/x-icon" href="'.base_url('assets/cmsicon.png').'">
        <script
		src="https://code.jquery.com/jquery-3.4.0.js"
		integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
		crossorigin="anonymous"></script>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="stylesheet" href="'.base_url("css/admin.css").'">

		<!-- Compiled and minified JavaScript -->

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">';
	}
}
?>