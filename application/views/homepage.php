<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('section');
?>
<!Doctype html>
<html lang="en">

    <head>

    <?php main_head(); ?>
    <title>Archer1062Tours | Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/icons/logo.png'); ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="generator" content="Gatsby 2.15.6">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta  name="description" 
    content="We take pride in providing exceptional services to our clients/guests here in Jamaica. We provide airport transfer to and from Sangster International Airport. ">
    <meta name="author" content="Archer1062Tours">
    <meta  name="keywords" content="money, booking, save, saving, cheap, flight, book, tour, trips, trip, taxi, jamaica
    jamaican, jamaican food, places in jamaica, trip in jamaica, tour jamaica, jamaica culture, jamaican culture, jamaican song,
    airport transfer, airport, food, dancehall, reggae, rasta, flight to jamaica, hotels in jamaica, hotels in the caribbean, places in jamaica,
    best places in jamaica to visit, jamaica gleaner, jamaica lagoon, activities in jamaica, usa, united, people, love, one love,bob marley,
    bob marley meseum, sport in jamaica, ackee, ackee and salt fish, jamaican ackee, jamaican people, trip to jamaica, montego bay,
    kingston, negril, ohco rios, falmouth, trelawny, usain bolt, fastest man in the world, tracks and record, restaurants in jamaica,
    restaurants jamaica, jamaica restaurants, jamaican restaurants, restaurants, best price, best, best rates, best trips, best trip, best tour">
    

    <meta property="og:title" content="Archer 1062 Tours">
    <meta property="og:description" content="We take pride in providing exceptional services to our clients/guests here in Jamaica. We provide airport transfer to and from Sangster International Airport. We will take care of you and yours the minute you exit the custom area at the ports whether you travel by air or sea No matter how small or how large the group is whether you are here on vacation, business, church or school mission our reliable, knowledgeable, courteous and trustworthy drivers will puntually take care of you and yours from day one to the day you leave We will fullfill your needs for taxi services for any Tours/Excursion or if you just want go on a JOYRIDE">
    <meta property="og:type" content="website">
    <meta property="og:image" content="">
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <link href="<?php echo base_url('css/homepage.css');?>" rel="stylesheet">
    </head>
    
    <style>
      .fpage {
          /*background-image: url(<?php //echo base_url('assets/'.$data['homepage']['_home_img'])?>);*/
          /*background-size: cover;*/
          /*background-repeat: no-repeat;*/
          /*background-position: center;*/
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
        background-image: url(<?php echo base_url('assets/'.$data['aboutus']['_about_stat_img'])?>);
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

    .fadeOut{
      opacity: 0!important;
      transition: opacity 5s;
    }

    .fadeIn{
      opacity: 1!important;
      transition: opacity 5s;
    }
    .slideimg{
        width: 100%!important;
        height: 100%;
        position: absolute;
      }
    

    </style>
    <body>
    

      <?php main_nav(); ?>

      <div class="fpage valign-wrapper" style="position:relative;">
        <div class="overlay"></div>
        
        <img src="<?php echo base_url('assets/1.jpg'); ?>" class="slideimg"/>
         <img  src="<?php echo base_url('assets/2.jpg'); ?>" class="slideimg fadeOut"/>
         <img  src="<?php echo base_url('assets/3.jpg'); ?>" class="slideimg fadeOut"/>
         <img  src="<?php echo base_url('assets/4.jpg'); ?>" class="slideimg fadeOut"/>
         <img  src="<?php echo base_url('assets/5.jpg'); ?>" class="slideimg fadeOut"/>
         <img  src="<?php echo base_url('assets/6.jpg'); ?>" class="slideimg fadeOut"/>
         <img  src="<?php echo base_url('assets/7.jpg'); ?>" class="slideimg fadeOut"/>
         <img  src="<?php echo base_url('assets/8.jpg'); ?>" class="slideimg fadeOut"/>
        
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
            <?php echo $data['deal']['_deals_title'];?>
            </h2>
        </div>

        <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0 custom-border-area"  >
          <div class="divider custom-divider"></div>
        </div>

        <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0"  >
          <p class="center-align blackText lead"><?php echo $data['deal']['_deals_pitch'];?></p>
        </div>

        <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0"  >

          <div class="row my-slider2">

          
            <?php foreach($data['specials'] as $item){?>
              <div class="col l4 m6 s12">
                <div class="card">
                  <div class="card-image custom-hover" >
                    <div class="custom-overlay-discount center-align" style="display:none">
                      <p class="ltext1"><?php echo $item['special_discount'];?>% off<br/>Book Now</p>
                    </div>
                    <img height="300px"src="<?php echo base_url('uploads/prices-images/'.$item['price_image']);?>" class="" alt="money, booking, save, saving, cheap, flight, book, tour, trips, trip, taxi, jamaica
    jamaican, jamaican food, places in jamaica, trip in jamaica, tour jamaica, jamaica culture, jamaican culture, jamaican song,
    airport transfer, airport, food, dancehall, reggae, rasta, flight to jamaica, hotels in jamaica, hotels in the caribbean, places in jamaica,
    best places in jamaica to visit, jamaica gleaner, jamaica lagoon, activities in jamaica, usa, united, people, love, one love,bob marley,
    bob marley meseum, sport in jamaica, ackee, ackee and salt fish, jamaican ackee, jamaican people, trip to jamaica, montego bay,
    kingston, negril, ohco rios, falmouth, trelawny, usain bolt, fastest man in the world, tracks and record, restaurants in jamaica,
    restaurants jamaica, jamaica restaurants, jamaican restaurants, restaurants, best price, best, best rates, best trips, best trip, best tour">
                    <span class="card-title"><?php echo $item['price_place'];?></span>
                  </div>
                  <div class="card-content">
                    <p><b>Price:</b> <?php echo $item['price_per_adult'];?></p>
                    <p><b>Discount:</b> <span class="green-text">-<?php echo $item['special_discount'];?>%</span></p>
                    <p><b>Offer Ends:</b> <?php echo date("M d, Y",strtotime($item['special_end_date']));?></p>
                    <p><b>Description:</b> <?php echo substr($item['special_description'],0,124).'...';?></p>
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
              <?php echo $data['services']['_service_ack_title']?>
            </h2>
        </div>

        <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0 custom-border-area"  >
          <div class="divider custom-divider"></div>
        </div>

        <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0"  >
          <p class="center-align blackText lead"><?php echo $data['services']['_service_ptich']?></p>
        </div>

        <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0"  >

          <div class="row center-align">
            <div class="col l4 m6 s12">
              <div class="card">
                <div class="card-image custom-hover" >
                  <!-- <div class="custom-overlay-discount" style="display:none">

                    <div class="input-field col s12" style="width:100%!important; height:auto!important">
                        <input id="rqrate" type="search" class="z-depth-1" placeholder="Enter Email Address..."/>
                        <button class="custom-btn">Request Rates</button>
                    </div>                   

                  </div> -->
                  <img src="<?php echo base_url('assets/').$data['services']['_service_airport_img'];?>" alt="money, booking, save, saving, cheap, flight, book, tour, trips, trip, taxi, jamaica
    jamaican, jamaican food, places in jamaica, trip in jamaica, tour jamaica, jamaica culture, jamaican culture, jamaican song,
    airport transfer, airport, food, dancehall, reggae, rasta, flight to jamaica, hotels in jamaica, hotels in the caribbean, places in jamaica,
    best places in jamaica to visit, jamaica gleaner, jamaica lagoon, activities in jamaica, usa, united, people, love, one love,bob marley,
    bob marley meseum, sport in jamaica, ackee, ackee and salt fish, jamaican ackee, jamaican people, trip to jamaica, montego bay,
    kingston, negril, ohco rios, falmouth, trelawny, usain bolt, fastest man in the world, tracks and record, restaurants in jamaica,
    restaurants jamaica, jamaica restaurants, jamaican restaurants, restaurants, best price, best, best rates, best trips, best trip, best tour">
                  <span class="card-title"><?php echo $data['services']['_service_airport_title']?></span>
                </div>
                <div class="card-content">
                  <p><?php echo $data['services']['_service_airport_desc']?></p>
                </div>
                <div class="card-action modify-action">
                  <a href="<?php echo site_url('/airport');?>" class="custom-link">View Packages</a>
                </div>
              </div>
            </div>
            <div class="col l4 m6 s12">
              <div class="card">
                <div class="card-image custom-hover" >
                  <!-- <div class="custom-overlay-discount" style="display:none">

                    <div class="input-field col s12" style="width:100%!important; height:auto!important">
                        <input id="rqrate" type="search" class="z-depth-1" placeholder="Enter Email Address..."/>
                        <button class="custom-btn">Request Rates</button>
                    </div>                   

                  </div> -->
                  <img src="<?php echo base_url('assets/').$data['services']['_service_taxi_img'];?>" alt="money, booking, save, saving, cheap, flight, book, tour, trips, trip, taxi, jamaica
    jamaican, jamaican food, places in jamaica, trip in jamaica, tour jamaica, jamaica culture, jamaican culture, jamaican song,
    airport transfer, airport, food, dancehall, reggae, rasta, flight to jamaica, hotels in jamaica, hotels in the caribbean, places in jamaica,
    best places in jamaica to visit, jamaica gleaner, jamaica lagoon, activities in jamaica, usa, united, people, love, one love,bob marley,
    bob marley meseum, sport in jamaica, ackee, ackee and salt fish, jamaican ackee, jamaican people, trip to jamaica, montego bay,
    kingston, negril, ohco rios, falmouth, trelawny, usain bolt, fastest man in the world, tracks and record, restaurants in jamaica,
    restaurants jamaica, jamaica restaurants, jamaican restaurants, restaurants, best price, best, best rates, best trips, best trip, best tour">
                  <span class="card-title"><?php echo $data['services']['_service_taxi_title']?></span>
                </div>
                <div class="card-content">
                  <p><?php echo $data['services']['_service_taxi_desc']?></p>
                </div>
                <div class="card-action modify-action">
                  <a href="<?php echo site_url('/taxi');?>" class="custom-link">View Packages</a>
                </div>
              </div>
            </div>
            <div class="col l4 m6 s12">
              <div class="card">
                <div class="card-image custom-hover" >
                  <!-- <div class="custom-overlay-discount" style="display:none">

                    <div class="input-field col s12" style="width:100%!important; height:auto!important">
                        <input id="rqrate" type="search" class="z-depth-1" placeholder="Enter Email Address..."/>
                        <button class="custom-btn">Request Rates</button>
                    </div>                   

                  </div> -->
                  <img src="<?php echo base_url('assets/').$data['services']['_service_tours_img'];?>" alt="money, booking, save, saving, cheap, flight, book, tour, trips, trip, taxi, jamaica
    jamaican, jamaican food, places in jamaica, trip in jamaica, tour jamaica, jamaica culture, jamaican culture, jamaican song,
    airport transfer, airport, food, dancehall, reggae, rasta, flight to jamaica, hotels in jamaica, hotels in the caribbean, places in jamaica,
    best places in jamaica to visit, jamaica gleaner, jamaica lagoon, activities in jamaica, usa, united, people, love, one love,bob marley,
    bob marley meseum, sport in jamaica, ackee, ackee and salt fish, jamaican ackee, jamaican people, trip to jamaica, montego bay,
    kingston, negril, ohco rios, falmouth, trelawny, usain bolt, fastest man in the world, tracks and record, restaurants in jamaica,
    restaurants jamaica, jamaica restaurants, jamaican restaurants, restaurants, best price, best, best rates, best trips, best trip, best tour">
                  <span class="card-title"><?php echo $data['services']['_service_tours_title'];?></span>
                </div>
                <div class="card-content">
                  <p><?php echo $data['services']['_service_tours_desc'];?></p>
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

      <div class="row" style="background-color: rgba(21, 21, 21, 1)!important;">
    
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

            <div class="row my-slider">
              <?php foreach($data['testimonial'] as $item){ ?>
              <div class="col s4" ><!-- Repeating section-->

                <div class="card-panel grey lighten-5 z-depth-3" style="border-radius:10px;">
                  <div class="row valign-wrapper">
                    <div class="col s3"><img class="circle responsive-img" src="<?php echo base_url('assets/pholder.png')?>" alt="money, booking, save, saving, cheap, flight, book, tour, trips, trip, taxi, jamaica
    jamaican, jamaican food, places in jamaica, trip in jamaica, tour jamaica, jamaica culture, jamaican culture, jamaican song,
    airport transfer, airport, food, dancehall, reggae, rasta, flight to jamaica, hotels in jamaica, hotels in the caribbean, places in jamaica,
    best places in jamaica to visit, jamaica gleaner, jamaica lagoon, activities in jamaica, usa, united, people, love, one love,bob marley,
    bob marley meseum, sport in jamaica, ackee, ackee and salt fish, jamaican ackee, jamaican people, trip to jamaica, montego bay,
    kingston, negril, ohco rios, falmouth, trelawny, usain bolt, fastest man in the world, tracks and record, restaurants in jamaica,
    restaurants jamaica, jamaica restaurants, jamaican restaurants, restaurants, best price, best, best rates, best trips, best trip, best tour"></div>  
                    <div class="col s9">
                      <p><b><?php echo strtoupper($item['_username']); ?></b></p>
                      <p class="grey-text" style="margin-bottom:10px!important;font-size:12px;"><b><?php echo date("F d, Y",strtotime($item['date_created'])); ?></b></p>
                      
                    </div>
                  </div>

                  <div class="container">
                    <div class="row">
                    <span class=""style="font-size:14px;"><?php echo substr($item['_user_msg'],0,204); ?>...</span>
                    </div>
                  </div>

                  <div class="container">
                    <div class="row valign-wrapper" style="justify-content:center;">
                      <div class="rating" data-rating="<?php echo $item['_rating']; ?>"></div>
                    </div>
                  </div>
                  
                </div>

              </div><!-- Repeating section ends-->
              <?php }?>

            </div>

            <div class="container">
              <div class="row center-align">
                <a href="<?php echo site_url('/testimonial')?>" class="btn btn-large yellow waves-effect waves-light black-text z-depth-3" style="border-radius:30px;">View All</a>
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
            <p class="center-align blackText lead">Where the Internet is about availability of information, blogging is about making information creation available to anyone.</p>
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
                      <img src="<?php echo base_url('uploads/blog-images/'.$blog['blog_image'])?>" alt="money, booking, save, saving, cheap, flight, book, tour, trips, trip, taxi, jamaica
    jamaican, jamaican food, places in jamaica, trip in jamaica, tour jamaica, jamaica culture, jamaican culture, jamaican song,
    airport transfer, airport, food, dancehall, reggae, rasta, flight to jamaica, hotels in jamaica, hotels in the caribbean, places in jamaica,
    best places in jamaica to visit, jamaica gleaner, jamaica lagoon, activities in jamaica, usa, united, people, love, one love,bob marley,
    bob marley meseum, sport in jamaica, ackee, ackee and salt fish, jamaican ackee, jamaican people, trip to jamaica, montego bay,
    kingston, negril, ohco rios, falmouth, trelawny, usain bolt, fastest man in the world, tracks and record, restaurants in jamaica,
    restaurants jamaica, jamaica restaurants, jamaican restaurants, restaurants, best price, best, best rates, best trips, best trip, best tour">
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

      

      <div class="row contact-section" >
        <div class="contact-overlay2"></div>
        <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0" style="position: relative;">
          
          <div class="row ">
            <div class="col s12">

              <div class="row">
                <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0"  >
                  <h2 class="header center-align white-text">
                    Contact Us
                  </h2>
                </div>
              </div>

              <div class="row">

                <div class="col l3 m6 s12">
                  <p class="lead white-text valign-wrapper"><i class="material-icons small">location_on</i>  <?php echo $data['contact']['_contact_address'];?></p>
                </div>

                <div class="col l3 m6 s12">
                  <p class="white-text lead valign-wrapper"><i class="material-icons small">local_phone</i> <?php echo $data['contact']['_contact_phone'];?></p>
                </div>

                <div class="col l3 m6 s12">
                  <p class="white-text lead valign-wrapper"><i class="material-icons small">mail</i> <?php echo $data['contact']['_contact_email'];?></p>
                </div>

                <div class="col l3 m6 s12">
                  <p class="lead white-text valign-wrapper"><i class="material-icons small">timer</i> Always Available!</p>
                </div>

                <form class="col s12">
            
                  <div class="input-field col s12">
                    <input id="name" type="text" placeholder="name" name="name" class="validate white">
                    <label for="name" class="white-text">Name</label>
                  </div>
                  <div class="input-field col s12">
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
        </div>
        

      </div>
      <?php main_footer(); ?>
    </body>

    <script>
  var slider = tns({
    container: '.my-slider',
    items: 1,
    autoplay: true,
    controls:false,
    mouseDrag: true,
    speed: 400,
    nav:false,
    arrowKeys: true,
    autoplayHoverPause:true,
    autoplayResetOnVisibility:true,
    autoplayButtonOutput:false,
    responsive: {
      640: {
        edgePadding: 10,
        gutter: 10,
        items: 2
      },
      700: {
        gutter: 10
      },
      900: {
        items: 3
      }
    }
  });


  var slider2 = tns({
    container: '.my-slider2',
    items: 1,
    controls:false,
    mouseDrag: true,
    speed: 400,
    nav:false,
    arrowKeys: true,
    autoplayHoverPause:true,
    autoplayResetOnVisibility:true,
    autoplayButtonOutput:false,
    responsive: {
      640: {
        edgePadding: 10,
        gutter: 10,
        items: 2
      },
      700: {
        gutter: 10
      },
      900: {
        items: 3
      }
    }
  });
</script>

    <script>

$(".rating").starRating({
          totalStars: 5,
          starShape: 'rounded',
          starSize: 20,
          emptyColor: 'lightgray',
          hoverColor: '#ffff8d',
          ratedColor: '#ffd600',
          useGradient: false,
          useFullStars: true,
          readOnly: true
        });

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
    
    <script>
      
        var elements = document.getElementsByClassName("slideimg");

        var len = elements.length;

        var oneless = elements.length-1;

        var counter = 0;

        var interval = setInterval(function(){

          if(counter>=oneless){
            counter = 0;
          }
          var inc = 0
          var incount = 0.0;
            
          setTimeout(function(){
            elements[counter].classList.add("fadeOut");
            elements[counter].classList.remove("fadeIn");
          },5000);

          setTimeout(function(){
              var t = counter;
              t = t+1;
              if(t<=oneless){
                elements[t].classList.add("fadeIn");
                elements[t].classList.remove("fadeOut");
              }else{
                elements[0].classList.add("fadeIn");
                elements[0].classList.remove("fadeOut");
              }
            },5000);

          counter++;

        },10000);

      
      </script>

</html>