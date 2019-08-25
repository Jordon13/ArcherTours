<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->helper('section');

?>
<html lang="en">
<head>
    <title>Gallery</title>
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
        background-image: url(<?php echo base_url('assets/23.jpg')?>);
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
        font-size: 23px;
        padding: 0.5em;
        margin-bottom: 0.5em!important;
        cursor: pointer;
      }


      .lead:hover{
        color: rgba(35, 32, 32, 0.6);
      }

      .custom-img{
        padding:1em!important;
      }
      .custom-img img{
        width:100%;
        /* height:220px; */
      }

      .media-option{
        font-size: 20px;
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
          <h5 class="white-text"><a class="custom-hone-link" href="<?php echo site_url('/')?>">Home</a> | <span style="color:rgba(255,255,255,0.8)!important;">Gallery</span></h5>
            <h1 class="white-text header">Gallery</h1>
          </div>
        </div>
      </div>

    </div>

    <div class="row">

      <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0">

        <div class="row media-option" style="margin-bottom:0px!important;">

          <div class="col lead">Photos</div>
          <div class="col lead">Videos</div>

        </div>

        <div class="divider"></div>

      </div>

      

    </div>

    <!-- <div class="row">
      <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0 center">
        <div class="row">

          <div class="col l4 m12 s12 custom-img">
            <img class="materialboxed" data-caption="A picture of a way with a group of trees in a park" src="<?php echo base_url('assets/23.jpg')?>"> 
          </div>

        </div>
      </div>
    </div> -->

    <div class="row">
      <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0 center">
        <div class="row">

          <div class="col l4 m12 s12 custom-img">
            <img class="materialboxed" data-caption="A picture of a way with a group of trees in a park" src="<?php echo base_url('assets/23.jpg')?>"> 
          </div>

        </div>
      </div>
    </div>
    <?php main_footer(); ?>
</body>
<script>

$('document').ready( ()=>{
  $('.materialboxed').materialbox();
});

</script>
</html>