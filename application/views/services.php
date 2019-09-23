<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->helper('section');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Services</title>
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
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
        background-image: url(<?php echo base_url('assets/32.jpg')?>);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        height: 100%!important;
        width: 100%!important;
        background-attachment: fixed;
        position: relative;
    }
    .overlay {
          top: 0px;
          background-color: rgba(0, 0, 0, 0.3);
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

      .custom-img{
        margin-bottom:1.5em!important;
        padding:1em!important;
        overflow: hidden;
      }

      .custom-img img{
        width:100%;
        /* height:220px; */
        transition: transform .5s ease-in-out;
      }

      .custom-img-hover{
        transform: scale(1.5) rotate(10deg);
        /* transition: transform .5s ease-in-out; */
      }

      .dark-overlay, .yellow-overlay, .green-overlay{
        position: absolute;

        width: 100%;
        height: 100%;
        display: flex!important;
        justify-content: center!important;
        align-items: center!important;

        z-index: 4!important;
        /* padding:1em!important; */
        cursor: pointer;

      }

      .dark-overlay a, .yellow-overlay a, .green-overlay a{
        font-family: 'Righteous', cursive!important;
        text-align: center;
        line-height: 35px!important;
        text-shadow: 1px 1px 1px rgba(58, 58, 58, 0.89);
        color: white;
        font-size: 35px;
        word-wrap: break-word;
        font-weight: bolder;
      }

      .dark-overlay{
        background-color: rgba(35, 32, 32, 0.9)!important;
      }

      .yellow-overlay{
        background-color: rgba(253, 216, 0, 0.9)!important;
      }

      .green-overlay{
        background-color: rgba(20, 120, 61, 0.9)!important;
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
          <h5 class="white-text"><a class="custom-hone-link" href="<?php echo site_url('/')?>">Home</a> | <span style="color:rgba(255,255,255,0.8)!important;">Services</span></h5>
            <h1 class="white-text header">Services</h1>
          </div>
        </div>
      </div>

    </div>


    <div class="row" style="margin-bottom:0px!important;">


    <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0 center">
    
    <div class="col l4 m12 s12 custom-img" style="position:relative;" title="Click to see rates">
        <div style="position:relative; overflow: hidden;">
        <div class="dark-overlay">
          <a href="<?php echo site_url('/airport');?>">Airport Transfer</a>
        </div>
        <img class="imgmod" src="<?php echo base_url('assets/trips/13.jpeg');?>" />
        </div>
      </div>

      <div class="col l4 m12 s12 custom-img" style="position:relative;" title="Click to see rates">
        <div style="position:relative; overflow: hidden;">
        <div class="yellow-overlay"><a href="<?php echo site_url('/taxi');?>">Private Taxi</a></div>
        <img class="imgmod" src="<?php echo base_url('assets/trips/5.jpeg');?>" />
        </div>
      </div>

      <div class="col l4 m12 s12 custom-img" style="position:relative;" title="Click to see rates">
        <div style="position:relative; overflow: hidden;">
        <div class="green-overlay"><a href="<?php echo site_url('/tour');?>">Tours & Excursion</a></div>
        <img class="imgmod" src="<?php echo base_url('assets/trips/3.jpeg');?>" />
        </div>
      </div>
      

    </div>

    </div>


    <div class="row">

   
      <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0 center">
        <iframe width="100%" height="600px" src="https://www.youtube.com/embed/DPWYizIpGOc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    
    </div>
    <?php main_footer(); ?>

    <script>
    
      $('document').ready(function(){

        $('.custom-img').hover(function(){
          $('.imgmod').eq($(this).index()).addClass('custom-img-hover');
        }).mouseleave(function(){
          $('.imgmod').removeClass('custom-img-hover');
        });

      });
    
    </script>
</body>
</html>