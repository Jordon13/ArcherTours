<?php


if(!function_exists('main_head')){
	function main_head($inverted = 0){

      $header = $inverted == 0 ? base_url('css/header.css') : base_url('css/header_invert_2.css');

        echo '<script src="https://code.jquery.com/jquery-3.4.0.js" integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin="anonymous"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>


        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> 
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>  

        <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Dekko|Gamja+Flower|Itim|Merienda+One|Patrick+Hand+SC|Sriracha&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

        <script src="'.base_url('js/').'jquery.star-rating-svg.js"></script>
        
        <link rel="stylesheet" type="text/css" href="'.base_url('css/').'star-rating-svg.css">


        <script src="'.base_url('js/materialize.js').'"></script>
        
        <link href="'.$header.'" rel="stylesheet">

        <link href="'.base_url('css/footer.css').'" rel="stylesheet">
        
        <link href="'.base_url('css/materialize.css').'" rel="stylesheet">
        
        <script src="'.base_url('js/header.js').'" async></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/tiny-slider.css">

        
        <style>
        
        
        
        </style>
        
          ';
	}
}

if(!function_exists('main_nav')){
	function main_nav(){

    $ci=& get_instance();
    $ci->load->database(); 

    $logo = $ci->mn->LoadHome()[0]['_home_logo_img'];

    $getCart = isset($_COOKIE[CARTNAME]) && !empty($_COOKIE[CARTNAME]) ? $_COOKIE[CARTNAME] : null;

    $div = '';

    $_GLOBAL['totalItems'] = 0;

    $total = 0;
    
    if($getCart !== null){

      $total = count(json_decode(base64_decode($getCart),true));

      if($total > 0 ){

        $_GLOBAL['totalItems'] = $total;

        $div = '<div class="cart-active white-text cartTotal">'.$_GLOBAL['totalItems'].'</div>';
      }

      
    }

        echo '
        
        <div class="fixed-action-btn " id="np">
        '.$div.'
        <a href="'.base_url('/checkout').'" class="btn-floating btn-large grey darken-4 waves-effect waves-light">
        <i class="large material-icons">add_shopping_cart</i>
        </a>
      </div>
        
        <div class="row searcharea valign-wrapper" style="display:none;">

        <div class="close z-depth-1 valign-wrapper"><i class="material-icons">close</i></div>
    
    <div class="col l4 m8 s12 offset-l4 offset-m2 offset-s0 sbody">
        <h5 class="header white-text center-align">Search For Places In Jamaica & Book Your Trip</h5>
        
        <div class="input-field col s12 inp">
            <input id="sbox" type="search" class="z-depth-1" placeholder="Search Here..."/>
        </div>

        <p class="white-text center-align"><em>Powered By Trip Advisor</em></p>
    </div>
</div>

      <div class="custom-dropdown z-depth-1" style="display:none;">
        <div class="triangle-up"></div>
            <ul>
                <li><a href="'.site_url('/taxi').'">Private Taxi</a></li>
                <li><a href="'.site_url('/airport').'">Airport Transfer</a></li>
                <li><a href="'.site_url('/tour').'">Tours & Excursion</a></li>
            </ul>            
        </div>

<div class="nav-header">

    <div class="nav-body">
        <div class="nav-logo">
        <a href="'.site_url('/').'"><img src="'.base_url('assets/').$logo.'"/></a>
        </div>

        <div class="nav-links noshow">
            <ul>
                <li><a href="'.site_url('/').'">Home</a></li>
                <li><a href="'.site_url('/about').'">About</a></li>
                <li><a href="'.site_url('/contact').'">Contact</a></li>
                <li><a href="'.site_url('/gallery').'">Gallery</a></li>
                <li class="trigger-menu"><a href="'.site_url('/services').'">Services</a></li>
                <li><a href="'.site_url('/blog').'">Blog</a></li>
                <li><a href="'.site_url('/news').'">Recent</a></li>
                
            </ul>
        </div>


        <div class="nav-misc">
            <button class="noshow"><a href="'.site_url('/booking').'">Book A Trip</a></button>
            <form id="frm" method="GET" action="'.site_url('/search').'" target="_self">
                <div class="input-field">
                <input id="search" type="search" name="query" placeholder="Search For Trips" style="border:1px solid white!important; border-radius:30px!important;padding-left:15px!important;" required>
                
                </div>
            </form>
            <i class="material-icons nav-icon sidenav-trigger" data-target="slidenav" style="display: none;">menu</i>
        </div>
        </div>

        

    </div>


    <ul class="sidenav" id="slidenav">
      <li><a href="'.site_url('/home').'">Home</a></li>
      <li><a href="'.site_url('/blog').'">Gallery</a></li>
      <li><a href="'.site_url('/about').'">About</a></li>
      <li><a href="'.site_url('/news').'">Blog</a></li>
      <li><a href="'.site_url('/contact').'">Contact</a></li>
      <li><a href="'.site_url('/gallery').'">Gallery</a></li>
      <li><a href="'.site_url('/services').'">Services</a></li> 
      <li><a href="'.site_url('/testimonial').'">Testimonial</a></li>
      <div class="nav-misc">
        <button><a href="'.site_url('/booking').'">Book A Trip</a></button>
      </div>
    </ul>';
	}
}

if(!function_exists('main_footer')){
	function main_footer(){
        echo '        <div class="row valign-wrapper custom-foot">

        <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0">

          <div class="row">

            <div class="col l4 m4 s12 sec1">

              <h5 style="padding-bottom:1em!important;">Archer 1062 Tours</h5>

              <p style="padding-bottom:1em!important;"><b>Stay Connected</b></p>

              <div class="row" style="padding-bottom:0px!important;">
                <div class="col inner-img"><a href="https://www.facebook.com/archer1062tours"><img class="himg" src="'.base_url('assets/icons/facebook.png').'"/></a></div>
                <div class="col inner-img"><a href="https://www.instagram.com/archer1062tours/?hl=en"><img  class="himg" src="'.base_url('assets/icons/instagram.png').'"/></a></div>
                <div class="col inner-img"><a href="tel:1876-804-6480"><img class="himg" src="'.base_url('assets/icons/whatsapp.png').'"/></a></div>
              </div>

              <form class="row">
              
                <div class="input-field col s10">
                <p style="font-size:12px;"><b>Subscibe to our newsletter for update on deals and specials avaliable.</b></p>
                  <input id="emailAddr" type="email" placeholder="email" name="email" class="validate white">
                  <!-- <label for="first_name" class="white-text">Name</label> -->
                  <button class="btn white black-text waves-effect waves-light yellow accent-3" id="submit1">Subscribe</button>
                </div>
              </form>

              <!-- <p class="custom-email-link" style="padding-bottom:1em!important;">jordainegayle@gmail.com</p> -->

            </div>

            
            <div class="col l4 m4 s12 sec1">

              <h5 class="" style="padding-bottom:1em!important;">1062 Explore</h5>

              <div class="row cusexp" style="padding-bottom:1em!important;">
                <div class="col l4 m8 s12">
                  <ul>
                    <li><a href="'.site_url('/').'">Home</a></li>
                    <li><a href="'.site_url('/about').'">About</a></li>
                    <li><a href="'.site_url('/blog').'">Blogs</a></li>
                    <li><a href="'.site_url('/deal').'">Deals</a></li>
                    
                  </ul>
                </div>
                <div class="col l4 m8 s12">
                <ul>
                    <li><a href="'.site_url('/gallery').'">Gallery</a></li>
                    <li><a href="'.site_url('/contact').'">Contact Us</a></li>
                    <li><a href="'.site_url('/testimonial').'">Testimonials</a></li>
                    <li><a href="'.site_url('/news').'">Recent Places</a></li>
                  </ul>
                </div>
              </div>
            <div class="col s10">

            <blockquote cite="https://www.briantracy.com/blog/personal-success/26-motivational-quotes-for-success/">
                “The Way Get Started Is To Quit Talking And Begin Doing.” – Walt Disney
              </blockquote>
            
            </div>
              

            </div>
            
            
            <div class="col l4 m4 s12 sec1 ">
            <h5 style="padding-bottom:1em!important;"><a class="cusexp" href="'.site_url("/news").'">Our News</a></h5>
    <div class="verticalSlide">
              '.News().'
</div>
            </div>

          </div>

        </div>

      </div>

      <div class="row valign-wrapper custom-copy-right">

        <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0">
        <p class="s12 center-align">Copyright ©2019 All rights reserved
        <br/><em>Created By: JDevStudios. For more information please contact us @ 1-876-557-8447 or jdevstudios34@gmail.com</em></p>
        </div>

      </div>
      <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src=\'https://embed.tawk.to/5e1c5da927773e0d832d4679/default\';
s1.charset=\'UTF-8\';
s1.setAttribute(\'crossorigin\',\'*\');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


<!--End of Tawk.to Script-->';

      echo "
      <script type='text/javascript'>
      
          $(document).ready(function(){
            $('.sidenav').sidenav();
            AOS.init({
              // once: true
           });
          });
  
          $('.himg').eq(1).hover(function(){
            $(this).attr('src','".base_url('assets/icons/instagram1.png')."');
          }).mouseleave(function(){
            $(this).attr('src','".base_url('assets/icons/instagram.png')."');
          });
  
          $('.himg').eq(2).hover(function(){
            $(this).attr('src','".base_url('assets/icons/whatsapp1.png')."');
          }).mouseleave(function(){
            $(this).attr('src','".base_url('assets/icons/whatsapp.png')."');
          });
  
          $('.himg').eq(0).hover(function(){
            $(this).attr('src','".base_url('assets/icons/facebook1.png')."');
          }).mouseleave(function(){
            $(this).attr('src','".base_url('assets/icons/facebook.png')."');
          });
          var verticalSlide = tns({
            container: '.verticalSlide',
            items: 4,
            axis: 'vertical',
            controls:false,
            autoplay:true,
            mouseDrag: true,
            speed: 400,
            nav:false,
            arrowKeys: true,
            autoplayHoverPause:true,
            autoplayResetOnVisibility:true,
            autoplayButtonOutput:false
          });

          $('#submit1').on('click',function(e){

            e.preventDefault();

            if($('#emailAddr').val() == ''){
              alert('Please enter a valid email address');
              return;
            }

            $.post('".base_url('client/Subscribe')."',{email:$('#emailAddr').val()},function(data){
              alert(data);
            });

          });
  
      </script>
      ";
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


function testData(){
    echo '<section>
    "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
    </section>

    <section>
    "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
    </section>

    <section>
    "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
    </section>

    <section>
    "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
    </section>

    <section>
    "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
    </section>

    <section>
    "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
    </section>

    <section>
    "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
    </section>

    <section>
    "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
    </section>


    <section>
    "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
    </section>

    <section>
    "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
    </section>

    <section>
    "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
    </section>

    <section>
    "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
    </section>

    <section>
    "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
    </section> ';
}
?>