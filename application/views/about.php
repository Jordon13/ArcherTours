<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->helper('section');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>About | check out this page and see what we are about</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/icons/logo.png'); ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="generator" content="Gatsby 2.15.6">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta  name="description" 
    content="We take pride in providing exceptional services to our clients/guests here in Jamaica. We provide airport transfer to and from Sangster International Airport. We will take care of you and yours the minute you exit the custom area at the ports whether you travel by air or sea No matter how small or how large the group is whether you are here on vacation, business, church or school mission our reliable, knowledgeable, courteous and trustworthy drivers will puntually take care of you and yours from day one to the day you leave We will fullfill your needs for taxi services for any Tours/Excursion or if you just want go on a JOYRIDE">
    <meta name="author" content="Archer1062Tours">
    <meta  name="keywords" content="money, booking, save, saving, cheap, flight, book, tour, trips, trip, taxi, jamaica
    jamaican, jamaican food, places in jamaica, trip in jamaica, tour jamaica, jamaica culture, jamaican culture, jamaican song,
    airport transfer, airport, food, dancehall, reggae, rasta, flight to jamaica, hotels in jamaica, hotels in the caribbean, places in jamaica,
    best places in jamaica to visit, jamaica gleaner, jamaica lagoon, activities in jamaica, usa, united, people, love, one love,bob marley,
    bob marley meseum, sport in jamaica, ackee, ackee and salt fish, jamaican ackee, jamaican people, trip to jamaica, montego bay,
    kingston, negril, ohco rios, falmouth, trelawny, usain bolt, fastest man in the world, tracks and record, restaurants in jamaica,
    restaurants jamaica, jamaica restaurants, jamaican restaurants, restaurants">
    

    <meta property="og:title" content="Archer 1062 Tours">
    <meta property="og:description" content="We take pride in providing exceptional services to our clients/guests here in Jamaica. We provide airport transfer to and from Sangster International Airport. We will take care of you and yours the minute you exit the custom area at the ports whether you travel by air or sea No matter how small or how large the group is whether you are here on vacation, business, church or school mission our reliable, knowledgeable, courteous and trustworthy drivers will puntually take care of you and yours from day one to the day you leave We will fullfill your needs for taxi services for any Tours/Excursion or if you just want go on a JOYRIDE">
    <meta property="og:type" content="website">
    <meta property="og:image" content="">
    <?php main_head();?>
    
    <style>
    
      html {
        position: relative;
        height: 100%!important;
        font-family: "Nunito";
      }

      body {
          position: relative;
          height: 100%!important;
      }

      .fpage {
          background-image: url(<?php echo base_url('assets/'.$data['_about_us_back_img'])?>);
          background-size: cover;
          background-repeat: no-repeat;
          background-position: center;
          height: 100%!important;
          width: 100%!important;
          background-attachment: fixed;
          position: relative;
      }

      .stats {
          background-image: url(<?php echo base_url('assets/'.$data['_about_stat_img'])?>);
          background-size: cover;
          background-repeat: no-repeat;
          background-position: center;
          width: 100%!important;
          background-attachment: fixed;
          position: relative;
          padding-top:4em!important;
          padding-bottom:4em!important;
          margin-bottom:0px!important;
      }

      .about-back-img {
          background-image: url(<?php echo base_url('assets/'.$data['_about_title_img'])?>);
          background-size: cover;
          background-repeat: no-repeat;
          background-position: center;
          width: 100%;
          height: 400px!important;
          padding-top:4em!important;
          padding-bottom:4em!important;
          margin-bottom:0px!important;
      }

      .overlay {
          top: 0px;
          background-color: rgba(0, 0, 0, 0.3);
          height: 100%;
          position: absolute;
          width: 100%;
          z-index: 2!important;
      }

      .stats-overlay{
          top: 0px;
          background-color: rgba(253, 216, 0, 0.9);
          height: 100%;
          position: absolute;
          width: 100%;
          z-index: 2!important;
      }

      .custom-hone-link{
        color:white!important;
      }

      .custom-card-header{
        font-weight: bolder;
      }

      .lead {
        font-size: 18px;
        padding: 0.5em;
        margin-bottom: 1em!important;
      }
      
      

    </style>
</head>
<body class="">
<?php main_nav(); ?>

  <div class="row fpage">
      <div class="overlay"></div>
      
      <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0 center"  style="height:100%!important; z-index:4!important; position:relative;">
        <div class="row valign-wrapper" style="height:100%!important;">
          <div class="col s12" >
          <h5 class="white-text"><a class="custom-hone-link" href="<?php echo site_url('/')?>">Home</a> | <span style="color:rgba(255,255,255,0.8)!important;">About</span></h5>
            <h1 class="white-text header"><?php echo $data['_about_us_back_title']; ?></h1>
          </div>
        </div>
      </div>

  </div>


  <div class="row">
    <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0">

      <div class="row" style="padding-top:4em!important;
          padding-bottom:4em!important;">
        
        <div class="col l4 m12 s12">
          <div class="card-panel z-depth-0">
            <h5 class="custom-card-header"><span class="" style="color:#fdd800!important;">01</span> Diverse Destinations</h5>
            <span class=""><?php echo $data['_about_diverse'];?></span>
          </div>
        </div>

        <div class="col l4 m12 s12">
          <div class="card-panel z-depth-0">
            <h5 class="custom-card-header"><span class="" style="color:#fdd800!important;">02</span> Value For Money</h5>
            <span class=""><?php echo $data['_about_value'];?></span>
          </div>
        </div>

        <div class="col l4 m12 s12">
          <div class="card-panel z-depth-0">
            <h5 class="custom-card-header"><span class="" style="color:#fdd800!important;">03</span> Passionate Travel</h5>
            <span class=""><?php echo $data['_about_passionate'];?></span>
          </div>
        </div>

      </div>

    </div>
  </div>

  <div class="row stats">
    <div class="stats-overlay"></div>
    <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0"style="z-index:4!important;position:relative;">

      <div class="row white-text" style="z-index">
        <div class="col l3 m6 s12 center-align custom-card-header">
          <h2>20,000</h2>
          <p>Happy Customers</p>
        </div>

        <div class="col l3 m6 s12 center-align custom-card-header">
          <h2>420K</h2>
          <p>Trips</p>
        </div>

        <div class="col l3 m6 s12 center-align custom-card-header">
          <h2>2000</h2>
          <p>Unique Destinations</p>
        </div>

        <div class="col l3 m6 s12 center-align custom-card-header">
          <h2>20+</h2>
          <p>Years Of Experience</p>
        </div>
      </div>

    </div>
  </div>

    <div class="row">
      
      <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0" style="padding-top:4em!important; padding-bottom:4em!important;">

        <div class="col l6 m12 s12 about-back-img">

       </div>

      <div class="col l6 m12 s12 " >
        <div class="col s12" >
          <h3 class="header"><?php echo $data['_about_title'];?></h3>
          
        </div>
        <div class="col s12">
          <p class="lead"><?php echo $data['_about_msg'];?></p>
        </div>
      </div>

      </div>

    </div>
    
  <?php main_footer(); ?>
</body>
</html>