<?php

defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('footer'))
{
	function footer($page = "anon")
	{
		echo '        <!-- Section 4 End -->
        <!-- footer-->
        <footer class="footer-classic context-dark bg-image col-md-12 m-0 p-0" style="background-color:rgba(10,10,10,0.8);">
            <div class="container col-md-12 m-0 p-3">
                <div class="row col-md-12 m-0">
                    <div class="col-md-4 col-xl-5">
                        <div class="">
                            <a class="brand" href="index.html"><img class="brand-logo-light" src="'.base_url('assets/logo.png').'" alt="network error" srcset="'.base_url('assets/logo.png').' 2x"></a>
                            <p class="text-capitalize">EXPERIENCR JAMAICA\'S PARADISE THROUGH DRIVERS THAT ARE RELIABLE, KNOWLEDGEABLE AND TRUSTWORTHY</p>
                            <!-- Rights-->
                            <p class="rights"><span>©  </span><span class="copyright-year">2019</span><span> </span><span>Waves</span><span>. </span><span>All Rights Reserved.</span></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h5>Contacts</h5>
                        <dl class="contact-list">
                            <dt>Address:</dt>
                            <dd>Claude Clarke Ave, Montego Bay, Jamaica</dd>
                        </dl>
                        <dl class="contact-list">
                            <dt>Email:</dt>
                            <dd><a href="mailto:archer1062tours@yahoo.com">archer1062tours@yahoo.com</a></dd>
                        </dl>
                        <dl class="contact-list">
                            <dt>Phones:</dt>
                            <dd><a href="tel:#">1876-804-6480</a>
                                <!--<span>or</span> <a href="tel:#">+91 9571195353</a>-->
                            </dd>
                        </dl>
                    </div>
                    <div class="col-md-4 col-xl-3">
					<h5>Links</h5>
					<ul class="nav-list">
						<li><a href="'.base_url('/').'">Home</a></li>
						<li><a href="'.base_url('/abt').'">About</a></li>
						<li><a href="'.base_url('/contact').'">Contacts</a></li>
						<li><a href="'.base_url('/gal').'">Gallery</a></li>
						<li><a href="'.base_url('/book').'">Booking</a></li>
						<li><a href="'.base_url('/airport-pricing').'">Airport Pricing</a></li>
						<li><a href="'.base_url('/tours-pricing').'">Tours Pricing</a></li>
						<li><a href="'.base_url('/taxi-pricing').'">Taxi Pricing</a></li>
					</ul>
                    </div>
                </div>
            </div>
            <div class="row no-gutters social-container">
                <div class="col"><a class="social-inner" href="https://www.facebook.com/archer1062tours"><span class="icon mdi mdi-facebook"></span><span>Facebook</span></a></div>
                <div class="col"><a class="social-inner" href="https://www.instagram.com/archer1062tours/?hl=en"><span class="icon mdi mdi-instagram"></span><span>instagram</span></a></div>
                <!--<div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-twitter"></span><span>twitter</span></a></div>
                <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-youtube-play"></span><span>google</span></a></div> -->
            </div>
        </footer>
        <!-- footer end-->';

		echo '<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous" ></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous" ></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous" ></script>';
	
		echo '      <script src="https://unpkg.com/aos@next/dist/aos.js" ></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" async></script>
        <script async>
            AOS.init();
		</script>';
		
		if($page == "home"){
			echo "<script async>
            (function($) {
                \"use strict\";
                // Auto-scroll
                $('#myCarousel').carousel({
                    interval: 5000
                });

                // Control buttons
                $('.next').click(function() {
                    $('.carousel').carousel('next');
                    return false;
                });
                $('.prev').click(function() {
                    $('.carousel').carousel('prev');
                    return false;
                });

                // On carousel scroll
                $(\"#myCarousel\").on(\"slide.bs.carousel\", function(e) {
                    var r = $(e.relatedTarget);
                    var idx = r.index();
                    var itemsPerSlide = 3;
                    var totalItems = $(\".carousel-item\").length;
                    if (idx >= totalItems - (itemsPerSlide - 1)) {
                        var it = itemsPerSlide -
                            (totalItems - idx);
                        for (var i = 0; i < it; i++) {
                            // append slides to end 
                            if (e.direction == \"left\") {
                                $(
                                    \".carousel-item\").eq(i).appendTo(\".carousel-inner\");
                            } else {
                                $(\".carousel-item\").eq(0).appendTo(\".carousel-inner\");
                            }
                        }
                    }
                });
            })
            (jQuery);
        </script>";
		}
	}

}

if(! function_exists('archerHeader'))
{

	function archerHeader($page = "anon")
	{
		echo '<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />';

		if($page = "home"){
			echo "        <style>
			
            body {
				background-color: #F5F5F5;
				scroll-behavior: smooth;
            }
            
            .overlay {
                position: absolute;
                width: 100%;
                height: 100%;
                z-index: 2;
                background-color: rgba(10,10,10,0.4);
                margin: 0px;
                padding: 0px;
            }
            
            .overlay1 {
                position: absolute;
                width: 100%;
                height: 100%;
                z-index: 2;
                background-color: rgba(0, 0, 0, 0.6);
                margin: 0px;
                padding: 0px;
            }
            
            #bg-image {
                width: 100%;
                height: 1000px;
                background-image: url(".base_url('assets/8.jpg').");
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                z-index: 1;
                animation: imageChange 80s infinite;
                animation-delay: 2s;
            }
            
            #bg-image2 {
                width: 100%;
                height: 500px;
                background-image: url(".base_url('assets/7.jpg').");
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                background-attachment: fixed;
                z-index: 1;
            }
            
            #bg-image3 {
                width: 100%;
                height: 500px;
                background-image: url(".base_url('assets/trips/2.jpeg').");
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                z-index: 1;
            }
            
            @keyframes imageChange {
                10% {
                    background-image: url(".base_url('assets/8.jpg').");
                }
                20% {
                    background-image: url(".base_url('assets/9.jpg').");
                }
                30% {
                    background-image: url(".base_url('assets/10.jpg').");
                }
                40% {
                    background-image: url(".base_url('assets/8.jpg').");
                }
                50% {
                    background-image: url(".base_url('assets/9.jpg').");
                }
                60% {
                    background-image: url(".base_url('assets/10.jpg').");
                }
                70% {
                    background-image: url(".base_url('assets/8.jpg').");
                }
                80% {
                    background-image: url(".base_url('assets/9.jpg').");
                }
                90% {
                    background-image: url(".base_url('assets/10.jpg').");
                }
                100% {
                    background-image: url(".base_url('assets/8.jpg').");
                }
            }
            /* Tablet and up */
            
            @media screen and (min-width: 768px) {
                .carousel-inner .active,
                .carousel-inner .active+.carousel-item {
                    display: block;
                }
                .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
                .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item {
                    -webkit-transition: none;
                    transition: none;
                }
                .carousel-inner .carousel-item-next,
                .carousel-inner .carousel-item-prev {
                    position: relative;
                    -webkit-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0);
                }
                .carousel-inner .active.carousel-item+.carousel-item+.carousel-item+.carousel-item {
                    position: absolute;
                    top: 0;
                    right: -50%;
                    z-index: -1;
                    display: block;
                    visibility: visible;
                }
                /* left or forward direction */
                .active.carousel-item-left+.carousel-item-next.carousel-item-left,
                .carousel-item-next.carousel-item-left+.carousel-item {
                    position: relative;
                    -webkit-transform: translate3d(-100%, 0, 0);
                    transform: translate3d(-100%, 0, 0);
                    visibility: visible;
                }
                /* farthest right hidden item must be abso position for animations */
                .carousel-inner .carousel-item-prev.carousel-item-right {
                    position: absolute;
                    top: 0;
                    left: 0;
                    z-index: -1;
                    display: block;
                    visibility: visible;
                }
                /* right or prev direction */
                .active.carousel-item-right+.carousel-item-prev.carousel-item-right,
                .carousel-item-prev.carousel-item-right+.carousel-item {
                    position: relative;
                    -webkit-transform: translate3d(100%, 0, 0);
                    transform: translate3d(100%, 0, 0);
                    visibility: visible;
                    display: block;
                    visibility: visible;
                }
            }
            /* Desktop and up */
            
            @media screen and (min-width: 992px) {
                .carousel-inner .active,
                .carousel-inner .active+.carousel-item,
                .carousel-inner .active+.carousel-item+.carousel-item {
                    display: block;
                }
                .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
                .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item,
                .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item+.carousel-item {
                    -webkit-transition: none;
                    transition: none;
                }
                .carousel-inner .carousel-item-next,
                .carousel-inner .carousel-item-prev {
                    position: relative;
                    -webkit-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0);
                }
                .carousel-inner .active.carousel-item+.carousel-item+.carousel-item+.carousel-item {
                    position: absolute;
                    top: 0;
                    right: -33.3333%;
                    z-index: -1;
                    display: block;
                    visibility: visible;
                }
                /* left or forward direction */
                .active.carousel-item-left+.carousel-item-next.carousel-item-left,
                .carousel-item-next.carousel-item-left+.carousel-item,
                .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item,
                .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item+.carousel-item {
                    position: relative;
                    -webkit-transform: translate3d(-100%, 0, 0);
                    transform: translate3d(-100%, 0, 0);
                    visibility: visible;
                }
                /* farthest right hidden item must be abso position for animations */
                .carousel-inner .carousel-item-prev.carousel-item-right {
                    position: absolute;
                    top: 0;
                    left: 0;
                    z-index: -1;
                    display: block;
                    visibility: visible;
                }
                /* right or prev direction */
                .active.carousel-item-right+.carousel-item-prev.carousel-item-right,
                .carousel-item-prev.carousel-item-right+.carousel-item,
                .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item,
                .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item+.carousel-item {
                    position: relative;
                    -webkit-transform: translate3d(100%, 0, 0);
                    transform: translate3d(100%, 0, 0);
                    visibility: visible;
                    display: block;
                    visibility: visible;
                }
            }
            
            .nav-pills .nav-link:not(.active) {
                color: rgba(255, 255, 255, 1);
            }
            
            .nav-pills .nav-link.active {
                background-color: #388E3C;
                color: white;
            }
            

            


        </style>";
		}

		echo "<style>
		.context-dark,
		.bg-gray-dark,
		.bg-primary {
			color: rgba(255, 255, 255, 0.8);
		}
		
		.footer-classic a,
		.footer-classic a:focus,
		.footer-classic a:active {
			color: #ffffff;
		}
		
		.nav-list li {
			padding-top: 5px;
			padding-bottom: 5px;
		}
		
		.nav-list li a:hover:before {
			margin-left: 0;
			opacity: 1;
			visibility: visible;
		}
		
		ul,
		ol {
			list-style: none;
			padding: 0;
			margin: 0;
		}
		
		.social-inner {
			display: flex;
			flex-direction: column;
			align-items: center;
			width: 100%;
			padding: 23px;
			font: 900 13px/1 \"Lato\", -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif;
			text-transform: uppercase;
			color: rgba(255, 255, 255, 0.5);
		}
		
		.social-container .col {
			border: 1px solid rgba(255, 255, 255, 0.1);
		}
		
		.nav-list li a:before {
			content: \"\f14f\";
			font: 400 21px/1 \"Material Design Icons\";
			color: #4d6de6;
			display: inline-block;
			vertical-align: baseline;
			margin-left: -28px;
			margin-right: 7px;
			opacity: 0;
			visibility: hidden;
			transition: .22s ease;
		}
		
		.section {
			width: 100%!important;
		}
		.float {
			position: fixed;
			width: 80px;
			height: 80px;
			bottom: 40px;
			right: 40px;
			background-color: #388E3C;
			color: #FFF;
			border-radius: 100%;
			z-index: 9;
			text-align: center;
			animation: bounce 0.85s;
			animation-direction: alternate;
			animation-iteration-count: infinite;
		}
		
		.my-float {
			margin-top: 15px;
			margin-left: 2px;
		}
		@keyframes bounce {
			0% {
				transform: translateY(0);
			}
			100% {
				transform: translateY(-5px);
			}
		}
		
		.bounce {
			animation: bounce 0.85s;
			animation-direction: alternate;
			animation-iteration-count: infinite;
		}
		
		.card {
			box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
			transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
		}
		
		::-webkit-scrollbar-track {
			-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
			border-radius: 10px;
			background-color: #F5F5F5;
		}
		
		::-webkit-scrollbar {
			width: 12px;
			background-color: #F5F5F5;
		}
		
		::-webkit-scrollbar-thumb {
			border-radius: 10px;
			-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
			background-color: #555;
		}
		</style>";
	}

}


if(!function_exists('floatingMessage'))
{
	function floatingMessage()
	{
		echo '<a href="#" class="float" data-toggle="modal" data-target="#exampleModalCenter" data-aos="fade-up"><i class="fa fa-envelope-o fa-3x my-float"></i></a>
	<!-- Modal -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Contact Us</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<label for="formGroupExampleInput">Fullname</label>
							<input type="text" class="form-control" id="formGroupExampleInput" placeholder="fullname">
						</div>
						<div class="form-group">
							<label for="formGroupExampleInput2">Email</label>
							<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="email">
						</div>
						<div class="form-group">
							<label for="formGroupExampleInput3">Message</label>
							<textarea class="form-control" id="formGroupExampleInput3" placeholder="message"></textarea>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Send Message</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal End-->';
	}
}

if(!function_exists('navBar'))
{
	function navBar($page = "home")
	{
		echo '                <!-- Nav Start-->
		<nav class="navbar navbar-expand-lg sticky-top navbar-dark col-md-12" style="background-color:rgba(10,10,10,0.8) ;z-index: 7;">
			<a class="navbar-brand" href="#"><img src="'.base_url('assets/logo.png').'" width="120px" height="70px"/></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>';

			if($page == "about"){
				echo '<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="'.base_url('/home').'">Home</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="'.base_url('/about').'">About <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="'.base_url('/contact').'">Contact</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="'.base_url('/airport-pricing').'">Airport Transfer</a>
							<a class="dropdown-item" href="'.base_url('/tours-pricing').'">Tours / Excursions</a>
							<a class="dropdown-item" href="'.base_url('/taxi-pricing').'">Taxi Service</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="'.base_url('/gallery').'">Gallery</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="'.base_url('/booking').'">Booking</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="'.base_url('/blog').'">Blog</a>
					</li>

				</ul>
			</div>';
			}else if($page == "contact"){
				echo '<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="'.base_url('/home').'">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="'.base_url('/about').'">About </a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="'.base_url('/contact').'">Contact <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="'.base_url('/airport-pricing').'">Airport Transfer</a>
							<a class="dropdown-item" href="'.base_url('/tours-pricing').'">Tours / Excursions</a>
							<a class="dropdown-item" href="'.base_url('/taxi-pricing').'">Taxi Service</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="'.base_url('/gallery').'">Gallery</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="'.base_url('/booking').'">Booking</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="'.base_url('/blog').'">Blog</a>
					</li>
				</ul>
			</div>';

			}else if($page == "gallery"){
				echo '<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="'.base_url('/home').'">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="'.base_url('/about').'">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="'.base_url('/contact').'">Contact</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="'.base_url('/airport-pricing').'">Airport Transfer</a>
							<a class="dropdown-item" href="'.base_url('/tours-pricing').'">Tours / Excursions</a>
							<a class="dropdown-item" href="'.base_url('/taxi-pricing').'">Taxi Service</a>
						</div>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="'.base_url('/gallery').'">Gallery <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="'.base_url('/booking').'">Booking</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="'.base_url('/blog').'">Blog</a>
					</li>
				</ul>
			</div>';

			}else if($page == "booking"){
				echo '<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="'.base_url('/home').'">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="'.base_url('/about').'">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="'.base_url('/contact').'">Contact</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="'.base_url('/airport-pricing').'">Airport Transfer</a>
							<a class="dropdown-item" href="'.base_url('/tours-pricing').'">Tours / Excursions</a>
							<a class="dropdown-item" href="'.base_url('/taxi-pricing').'">Taxi Service</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="'.base_url('/gallery').'">Gallery</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="'.base_url('/booking').'">Booking <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="'.base_url('/blog').'">Blog</a>
					</li>

				</ul>
			</div>';
			}else if($page == "service"){
				echo '<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="'.base_url('/home').'">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="'.base_url('/about').'">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="'.base_url('/contact').'">Contact</a>
					</li>
					<li class="nav-item dropdown active">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services  <span class="sr-only">(current)</span></a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="'.base_url('/airport-pricing').'">Airport Transfer</a>
							<a class="dropdown-item" href="'.base_url('/tours-pricing').'">Tours / Excursions</a>
							<a class="dropdown-item" href="'.base_url('/taxi-pricing').'">Taxi Service</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="'.base_url('/gallery').'">Gallery</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link" href="'.base_url('/booking').'">Booking</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="'.base_url('/blog').'">Blog</a>
					</li>

				</ul>
			</div>';
			}else if($page == "blog"){
				echo '<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="'.base_url('/home').'">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="'.base_url('/about').'">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="'.base_url('/contact').'">Contact</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="'.base_url('/airport-pricing').'">Airport Transfer</a>
							<a class="dropdown-item" href="'.base_url('/tours-pricing').'">Tours / Excursions</a>
							<a class="dropdown-item" href="'.base_url('/taxi-pricing').'">Taxi Service</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="'.base_url('/gallery').'">Gallery</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link" href="'.base_url('/booking').'">Booking</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="'.base_url('/blog').'">Blog <span class="sr-only">(current)</span></a>
					</li>

				</ul>
			</div>';
			}else{
				if($page == "home"){
					echo '<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="'.base_url('/home').'">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="'.base_url('/about').'">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="'.base_url('/contact').'">Contact</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="'.base_url('/airport-pricing').'">Airport Transfer</a>
							<a class="dropdown-item" href="'.base_url('/tours-pricing').'">Tours / Excursions</a>
							<a class="dropdown-item" href="'.base_url('/taxi-pricing').'">Taxi Service</a>
						</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="'.base_url('/gallery').'">Gallery</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="'.base_url('/booking').'">Booking</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="'.base_url('/blog').'">Blog</a>
						</li>
	
					</ul>
				</div>';
				}
			}

		echo '</nav>
		<!-- Nav End -->';
	}
}
?>