<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->helper('section');

?>
<html lang="en">
<head>
    <title>Blogs</title>
    <?php main_head();?>
</head>

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
        background-image: url(<?php echo base_url('assets/24.jpg')?>);
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
        padding: 0.2em;
        margin-bottom: 1em!important;
      }

      .yel-tex{
        color:#fdd800!important;
      }

    .blog{
      border: 0.9px solid rgba(224,224,224 ,1);
      background-color: rgba(35, 32, 32, 1)!important;
    }

    .social-stats{
      color:#bdbdbd;
      display: flex;
      justify-content:flex-start;
      flex-flow: row wrap;
      margin-top:10px;
      align-items: center;
    }

    .social-stats p{
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-right:15px;
    }

    .social-stats p i{
      margin-right: 10px;
    }

    .h1text a{
      color:white;
      text-decoration: underline;
    }


</style>
<body class="">

    <?php main_nav(); ?>
    <div class="row fpage">
      <div class="overlay"></div>
      
      <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0 center"  style="height:100%!important; z-index:4!important; position:relative;">
        <div class="row valign-wrapper" style="height:100%!important;">
          <div class="col s12" >
          <h5 class="white-text"><a class="custom-hone-link" href="<?php echo site_url('/')?>">Home</a> | <span style="color:rgba(255,255,255,0.8)!important;">Blogs</span></h5>
            <h1 class="white-text header">Our Blogs</h1>
          </div>
        </div>
      </div>

      

    </div>

<div class="row blogs">
    {data}
      <div class="col s12 m8 offset-m2 l8 offset-l2">
        <div class="card-panel blog">
          <div class="row valign-wrapper">
            <div class="col s3">
            <img src="{image}" alt="no image" class="responsive-img"/>
            </div>
            <div class="col s10">
              <h4 class="header white-text h1text"><a href="{url}">{title}</a></h4>
              <p class="white-text lead"><em>{content}</em></p>
              <p class="yel-tex">TAGS: <em>{tags}</em></p>
              <div class="social-stats">
                <p><i class="material-icons">access_time</i> {created}</p>
                <p><i class="material-icons">person</i>  {fullname}</p>
                <p><i class="material-icons">location_on</i>  Montego Bay. JM</p>
                <p><i class="material-icons">mode_comment</i> 39</p>
              </div>

            </div>
            
          </div>
        </div>
      </div>
    {/data}

      </div>
    <?php main_footer(); ?>
</body>
</html>