<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('section');
?>
<!Doctype html>
<html lang="en">

    <head>

    <?php main_head(); ?>

    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <link href="<?php echo base_url('css/homepage.css');?>" rel="stylesheet">
    </head>
    
    <style>
      .fpage {
          background-image: url(<?php echo base_url('assets/'.$data['homepage']['_home_img'])?>);
          background-size: cover;
          background-repeat: no-repeat;
          background-position: center;
          height: 100%!important;
          width: 100%!important;
          background-attachment: fixed;
      }

      .contact-section {
          background-image: url(<?php echo base_url('assets/'.$data['contact']['_contact_img'])?>);
          background-size: cover;
          background-repeat: no-repeat;
          background-position: center;
          width: 100%!important;
          background-attachment: fixed;
          position: relative;
          margin-bottom: 0px!important;
      }

    .whyus {
        position: relative!important;
        background-image: url(<?php echo base_url('assets/'.$data['aboutus']['_about_us_img'])?>);
        background-size: cover!important;
        background-repeat: no-repeat!important;
        background-position: center!important;
        /* height:100%!important; */
        width: 100%!important;
        background-attachment: fixed!important;
    }

    .the-img{
      width:100%;
    }
    .the-img img{
      height:200px!important;
      width:200px!important;
    }

    

    </style>
    <body>

      <?php main_nav(); ?>

      <div class="fpage valign-wrapper" style="position:relative;">
        <div class="overlay"></div>
        
        <div class="row"  style="position:relative; z-index:4;">


          <div>
              <h2  class="animated bounceIn header myhead white-text center"><?php echo $data['homepage']['_welcome_msg']?></h2>
          </div>

          <blockquote id="typehead" class="animated flipInX white-text lead"><em><?php echo $data['homepage']['_welcome_quote']?></em></blockquote>

          <div class="row mbtn">
              <div class="col l6 m8 s12 offset-l3 offset-m2 offset-s0 center-align">
                <button class="animated pulse booknow btn btn-large waves-effect waves-light"><a style="color:black;" href="<?php echo site_url('/deal');?>">View Deals</a></button>

              </div>
            </div>

      </div>

      
        
      </div>

      <?php if(count($data['specials'])>0){?>
        <div class="row">
        
        <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0"  >
            <h2 class="header center-align blackText">
              Specials
            </h2>
        </div>

        <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0 custom-border-area"  >
          <div class="divider custom-divider"></div>
        </div>

        <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0"  >
          <p class="center-align blackText lead">30% off all pacages offer ends Decenber 31, 2019</p>
        </div>

        <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0"  >

          <div class="row">

          
            <?php foreach($data['specials'] as $item){?>
              <div class="col l4 m6 s12">
                <div class="card">
                  <div class="card-image custom-hover" >
                    <div class="custom-overlay-discount center-align" style="display:none">
                      <p class="ltext1"><?php echo $item['special_discount'];?>% off<br/>Book Now</p>
                    </div>
                    <img src="<?php echo base_url('uploads/special-images/'.$item['special_image']);?>" alt="no img">
                    <span class="card-title"><?php echo $item['special_place'];?></span>
                  </div>
                  <div class="card-content">
                    <p><b>Price:</b> <?php echo $item['special_price'];?></p>
                    <p><b>Discount:</b> <span class="green-text">-<?php echo $item['special_discount'];?>%</span></p>
                    <p><b>Offer Ends:</b> <?php echo date("M d, Y",strtotime($item['special_end_date']));?></p>
                    <p><b>Description:</b> <?php echo substr($item['special_desc'],0,124).'...';?></p>
                  </div>
                  <div class="card-action modify-action center-align">
                    <a onclick="addToCart('<?php echo base64_encode(substr(uniqid(),0,10).$item['special_unique_id']);?>')" class="custom-link">Add To Cart</a>
                  </div>
                </div>
              </div>
              <?php }?>

            </div>

          </div>

        
        </div>
      <?php }?>

      <div class="row">
          <div class="col l8 m8 s12 offset-l2 offset-m2 offset-s0">
          <div class="divider cdiv grey lighten-3"></div>
          </div>
      </div>

      <div class="row">
        
        <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0"  >
            <h2 class="header center-align blackText">
              Services
            </h2>
        </div>

        <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0 custom-border-area"  >
          <div class="divider custom-divider"></div>
        </div>

        <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0"  >
          <p class="center-align blackText lead">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, 
            or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
             hidden in the middle of text.</p>
        </div>

        <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0"  >

          <div class="row center-align">
            <div class="col l4 m6 s12">
              <div class="card">
                <div class="card-image custom-hover" >
                  <div class="custom-overlay-discount" style="display:none">

                    <div class="input-field col s12" style="width:100%!important; height:auto!important">
                        <input id="rqrate" type="search" class="z-depth-1" placeholder="Enter Email Address..."/>
                        <button class="custom-btn">Request Rates</button>
                    </div>                   

                  </div>
                  <img src="<?php echo base_url('assets/trips/13.jpeg');?>" >
                  <span class="card-title">Airport Transfer</span>
                </div>
                <div class="card-content">
                  <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action modify-action">
                  <a href="<?php echo site_url('/airport');?>" class="custom-link">View Packages</a>
                </div>
              </div>
            </div>
            <div class="col l4 m6 s12">
              <div class="card">
                <div class="card-image custom-hover" >
                  <div class="custom-overlay-discount" style="display:none">

                    <div class="input-field col s12" style="width:100%!important; height:auto!important">
                        <input id="rqrate" type="search" class="z-depth-1" placeholder="Enter Email Address..."/>
                        <button class="custom-btn">Request Rates</button>
                    </div>                   

                  </div>
                  <img src="<?php echo base_url('assets/trips/5.jpeg');?>" >
                  <span class="card-title">Taxi</span>
                </div>
                <div class="card-content">
                  <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action modify-action">
                  <a href="<?php echo site_url('/taxi');?>" class="custom-link">View Packages</a>
                </div>
              </div>
            </div>
            <div class="col l4 m6 s12">
              <div class="card">
                <div class="card-image custom-hover" >
                  <div class="custom-overlay-discount" style="display:none">

                    <div class="input-field col s12" style="width:100%!important; height:auto!important">
                        <input id="rqrate" type="search" class="z-depth-1" placeholder="Enter Email Address..."/>
                        <button class="custom-btn">Request Rates</button>
                    </div>                   

                  </div>
                  <img src="<?php echo base_url('assets/trips/3.jpeg');?>" >
                  <span class="card-title">Tours & Excursion</span>
                </div>
                <div class="card-content">
                  <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action modify-action">
                  <a href="<?php echo site_url('/tour');?>" class="custom-link">View Packages</a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>


      <div class="row grey lighten-5" style="margin-bottom:0px!important;">
        <div class="row whyus valign-wrapper" >
          <div class="overlay2"></div>

          <div class="row cont" >
            <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0"  >
                  <h2 class="header center-align white-text">
                    Why Choose Us
                  </h2>
              </div>

              <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0 custom-border-area"  >
                <div class="divider custom-divider"></div>
              </div>

              <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0"  >
                <p class="center-align lead white-text"><?php echo $data['aboutus']['_about_pitch'];?></p>
              </div>

              <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0"  >
                <div class="row custom-row">
                  <div class="col l3 m6 s12 center-align white z-depth-1 uscont">
                    <div class="col s12 center-ilayer ">
                      <div class="iconlayer">
                        <i class="material-icons search-trigger">terrain</i>
                      </div>
                    </div>
                    <div class="col s12">
                      <h4>Diverse Destinations</h4>
                    </div>
                    <div class="col s12">
                      <p class="center-align blackText"><?php echo $data['aboutus']['_about_diverse'];?></p>
                    </div>
                  </div>
                  <div class="col l3 m6 s12 center-align white z-depth-1 uscont">
                    <div class="col s12 center-ilayer ">
                      <div class="iconlayer">
                        <i class="material-icons search-trigger">monetization_on</i>
                      </div>
                    </div>
                    <div class="col s12">
                      <h4>Value For Money</h4>
                    </div>
                    <div class="col s12">
                      <p class="center-align blackText"><?php echo $data['aboutus']['_about_value'];?></p>
                    </div>
                  </div>
                  <div class="col l3 m6 s12 center-align white z-depth-1 uscont">
                    <div class="col s12 center-ilayer ">
                      <div class="iconlayer">
                        <i class="material-icons search-trigger">wc</i>
                      </div>
                    </div>
                    <div class="col s12">
                      <h4>Passionate Travel</h4>
                    </div>
                    <div class="col s12">
                      <p class="center-align blackText"><?php echo $data['aboutus']['_about_passionate'];?></p>
                    </div>
                  </div>
                </div>
              </div>
            
          </div>
        </div>

        <div class="row">

          <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0">

            <div class="row">
              <div class="col l3 m6 s12 center-align stats">
                <h5>20,000</h5>
                <p>Happy Customers</p>
              </div>

              <div class="col l3 m6 s12 center-align stats">
                <h5>420K</h5>
                <p>Trips</p>
              </div>

              <div class="col l3 m6 s12 center-align stats">
                <h5>2000</h5>
                <p>Unique Destinations</p>
              </div>

              <div class="col l3 m6 s12 center-align stats">
                <h5>20+</h5>
                <p>Years Of Experience</p>
              </div>
            </div>

          </div>
          
        </div>
      </div>

      <div class="row" style="background-color: rgba(35, 32, 32, 1)!important;">
    
          <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0" >
              <h2 class="header center-align white-text">
                What Our Clients Say
              </h2>
          </div>

          <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0 custom-border-area" >
            <div class="divider custom-divider"></div>
          </div>

          <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0" >
            <p class="center-align white-text lead"><em>~ Serving Our Clients Is Essential ~</em></p>
          </div>

          <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0" >

            <div class="row  valign-wrapper center-align test-area">

              <div class="col l4 m6 s12 offset-l4 offset-m3 offset-s0 custom-blogs" >
                <div class="card-panel z-depth-3 ">
                      <div class="the-img">
                        <img src="https://www.qmul.ac.uk/busman/media/sbm/postgraduate/staff/administrative-staff/profiles/RipaParvin200x200.jpg" alt="no img" width="200px" height="200px" class="circle responsive-img"> <!-- notice the "circle" class -->
                      </div>

                      <div class="col s12">
                        <p class="lead">
                          Shana Brown
                        </p>
                      </div>

                      <div class="col s12">
                        <p class="lead grey-text lighten-3">
                          <em>"Day At Dunns Rivier Falls"</em>
                        </p>
                      </div>

                      <span class="">I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
                      </span>
                    </div>
              </div>

              <div class="col l4 m6 s12 offset-l4 offset-m3 offset-s0 custom-blogs" style="display:none">
                <div class="card-panel z-depth-3 ">
                      <div class="the-img">
                        <img src="https://i.pinimg.com/originals/39/f5/63/39f5630b733d053761eef4e376ce3928.jpg" alt="no img" width="200px" height="200px" class="circle responsive-img"> <!-- notice the "circle" class -->
                      </div>

                      <div class="col s12">
                        <p class="lead">
                          Shana Brown
                        </p>
                      </div>

                      <div class="col s12">
                        <p class="lead grey-text lighten-3">
                          <em>"Day At Dunns Rivier Falls"</em>
                        </p>
                      </div>

                      <span class="">I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
                      </span>
                    </div>
              </div>

              <div class="col l4 m6 s12 offset-l4 offset-m3 offset-s0 custom-blogs" style="display:none">
                <div class="card-panel z-depth-3 ">
                      <div class="the-img">
                        <img src="https://cdnb.artstation.com/p/assets/images/images/001/863/575/large/irakli-nadar-artstation-da.jpg?1453903033" alt="no img" width="200px" height="200px" class="circle responsive-img"> <!-- notice the "circle" class -->
                      </div>

                      <div class="col s12">
                        <p class="lead">
                          Shana Brown
                        </p>
                      </div>

                      <div class="col s12">
                        <p class="lead grey-text lighten-3">
                          <em>"Day At Dunns Rivier Falls"</em>
                        </p>
                      </div>

                      <span class="">I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
                      </span>
                    </div>
              </div>

              <div class="carousel-controls-custom">
              
                <div class="controller z-depth-1">
                  <i class="material-icons">keyboard_arrow_left</i>
                </div>
                <div class="controller z-depth-1">
                  <i class="material-icons">keyboard_arrow_right</i>
                </div>

              </div>
              

            </div>

            <div class="row  valign-wrapper center-align">

              <div class="col s12 inids">
                
              </div>

            </div>

          </div>
        
      </div>
      

      <?php if(count($data['blogs']) > 0){?>

        <div class="row">
        
          <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0"  >
              <h2 class="header center-align blackText">
                Our Blogs
              </h2>
          </div>

          <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0 custom-border-area"  >
            <div class="divider custom-divider"></div>
          </div>

          <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0"  >
            <p class="center-align blackText lead">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, </p>
          </div>

          <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0"  >

            <div class="row ">

              <?php foreach($data['blogs'] as $blog){?>

                <div class="col l4 m6 s12">
                  <!-- start coding here -->
                  <div class="card">
                    <div class="card-image custom-hover" >
                      <div class="overlay"></div>
                      <div class="date-overlay"><?php echo date("M d",strtotime($blog['blog_last_modified']));?></div>
                      <img src="<?php echo base_url('uploads/blog-images/'.$blog['blog_image'])?>" >
                      <span class="card-title" style="z-index:3!important;"><?php echo $blog['blog_title'];?></span>
                    </div>
                    <div class="card-content">
                    <p class="blackText" style="padding-bottom:1em;"><b><em>- <?php echo $blog['first_name'].' '.$blog['last_name'];?></em></b></p>
                    
                      <p class="blackText"><?php echo substr($this->enc->decrypt($blog['blog_content']),0,124).'...';//substr(base64_decode(),0,124).'...' ;?></p>
                    </div>
                    <div class="card-action modify-action center-align">
                      <a href="<?php echo site_url('blogs1062/'.$blog['blog_url'])?>" class="custom-link">Continue Reading</a>
                    </div>
                  </div>

                </div>
              <?php } ?>
            </div>

          </div>

        
        </div>

      <?php }?>

      

      <div class="row valign-wrapper contact-section" >
        <div class="contact-overlay"></div>
        <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0 main-contact-items nomarg">
          
          <div class="row nomarg valign-wrapper">
            <div class="col l6 m8 s12 myendb">

              <div class="row">
                <h4>Contact Us</h4>
              </div>
              
              <div class="card-panel transparent z-depth-0 cus-panel">
                <div class="row valign-wrapper">
                  <div class="col s1 custom-icon z-depth-1">
                      <i class="material-icons">location_on</i>
                    </div>
                    <div class="col s11">
                      <span class="white-text lead"><?php echo $data['contact']['_contact_address']; ?></span>
                    </div>
                  </div>
                </div>

                <div class="card-panel transparent z-depth-0 cus-panel">
                <div class="row valign-wrapper">
                  <div class="col s1 custom-icon z-depth-1">
                      <i class="material-icons">local_phone</i>
                    </div>
                    <div class="col s11">
                      <span class="white-text lead"><?php echo $data['contact']['_contact_phone']; ?></span>
                    </div>
                  </div>
                </div>

                <div class="card-panel transparent z-depth-0 cus-panel">
                <div class="row valign-wrapper">
                    <div class="col s1 custom-icon z-depth-1">
                      <i class="material-icons">mail</i>
                    </div>
                    <div class="col s11">
                      <span class="white-text  lead"><?php echo $data['contact']['_contact_email']; ?></span>
                    </div>
                  </div>
                </div>

                <div class="card-panel transparent z-depth-0 cus-panel">
                <div class="row valign-wrapper">
                    <div class="col s1 custom-icon z-depth-1">
                      <i class="material-icons">timer</i>
                    </div>
                    <div class="col s11">
                      <span class="white-text  lead"><?php echo $data['contact']['operating_hours']; ?></span>
                    </div>
                  </div>
                </div>

            </div>

            <form class="col l6 m8 s12 mycent">
            
              <div class="input-field col s6">
                <input id="name" type="text" placeholder="name" name="name" class="validate white">
                <label for="name" class="white-text">Name</label>
              </div>
              <div class="input-field col s6">
                <input id="email" placeholder="email" type="text" name="email_address" class="validate white">
                <label for="email" class="white-text">Email</label>
              </div>

              <div class="input-field col s12">
                <textarea id="message" placeholder="message..." name="message" class="materialize-textarea white"></textarea>
                <label for="message" class="white-text">Textarea</label>
              </div>

              <div class="col">
              <button class="btn white black-text waves-effect waves-yellow" id="sendMsg">Send Message</button>
              <p class="white-text lead" style="display:none;" id="resDisplay">Sending...</p>
              </div>
            
            </form>  
          </div>
        </div>
        

      </div>
      <?php main_footer(); ?>
    </body>

    <script>

      var testiCount = $('.custom-blogs').length;

      var testi = $('.custom-blogs');

      var currentIndex = 0;
      
      $('document').ready(function(){
        $('.modal').modal({
          preventScrolling: true,
          opacity: 0.4
        });
        for(x=0;x < testiCount;x++){
          $('.inids').append('<div class="inid"></div>');
        }

        $('.inid').eq(0).addClass('inid-active');

        $('.custom-hover').hover(function(){
          var index = $('.custom-hover').index(this);
          $('.custom-overlay-discount').eq(index).fadeIn(500);
          
        }).mouseleave(function(){
          $('.custom-overlay-discount').fadeOut(500);
        });

        //console.log(testiCount);



        $('.controller').eq(0).click(function(){
          
          if(currentIndex == 0){
            currentIndex = testiCount-1;
            //console.log(currentIndex);
          }else{
            currentIndex--;
            //console.log(currentIndex);
          }
          $('.inid').removeClass('inid-active');
          $('.inid').eq(currentIndex).addClass('inid-active');
          animateTesti(currentIndex);
        });

        $('.controller').eq(1).click(function(){
          if(currentIndex == 0){
            currentIndex+=1;
            //console.log(currentIndex);
          }else if(currentIndex == testiCount-1){
            currentIndex = 0;
            //console.log(currentIndex);
          }else{
            currentIndex++;
            //console.log(currentIndex);
          }

          $('.inid').removeClass('inid-active');
          $('.inid').eq(currentIndex).addClass('inid-active');
          animateTesti(currentIndex);
        });


        $('#sendMsg').click((e)=>{
          e.preventDefault();

          if($('#message').val() == '' || $('#email').val() == '' || $('#name').val() == ''){
            alert("Please fill out all fields");
            return;
          }

          $("#resDisplay").fadeIn(500);

          $.post('<?php echo base_url("/client/ContactUs")?>',{name:$('#name').val(),email_address:$('#email').val(),message:$('#message').val(),subject:"Message From Client - "+$('#name').val()},(data)=>{

            var result = JSON.parse(data);

            alert(result.Message);

            $("#resDisplay").fadeOut(500);


          });
        });

      });

      var animateTesti = (index)=>{
        // testi.hide();
        // testi.eq(index).show();
        testi.fadeOut(500);
        testi.eq(index).delay(498).fadeIn(0);
      }


      var addToCart = (id) =>{
        $.post("<?php echo base_url('/client/CartAdd'); ?>",{id:id,type:1},function(data){

          if($(".cartTotal")[0]){
            $(".cartTotal").text(data);
          }else{
            $("#np").prepend("<div class='cart-active white-text cartTotal'>"+data+"</div>");
          }

          
        });
      }



    </script>

</html>