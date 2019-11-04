<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->helper('section');
$images = $data['images'];
$pageData = $data['pageDetails'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gallery | View our collection of images and videos</title>
    <?php main_head();?>
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
    restaurants jamaica, jamaica restaurants, jamaican restaurants, restaurants, best price, best, best rates, best trips, best trip, best tour">
    

    <meta property="og:title" content="Archer 1062 Tours">
    <meta property="og:description" content="We take pride in providing exceptional services to our clients/guests here in Jamaica. We provide airport transfer to and from Sangster International Airport. We will take care of you and yours the minute you exit the custom area at the ports whether you travel by air or sea No matter how small or how large the group is whether you are here on vacation, business, church or school mission our reliable, knowledgeable, courteous and trustworthy drivers will puntually take care of you and yours from day one to the day you leave We will fullfill your needs for taxi services for any Tours/Excursion or if you just want go on a JOYRIDE">
    <meta property="og:type" content="website">
    <meta property="og:image" content="">
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
        background-image: url(<?php echo base_url('assets/').$pageData['_gallery_img']?>);
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

      .medias{
        flex-flow: row wrap;
        align-items: flex-start;
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

      .activeView{
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

      .formatt{
          padding:1em!important;
          height:100%;
      }

      .videos{
        
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
            <h1 class="white-text header"><?php echo $pageData['_gallery_back_title'];?></h1>
          </div>
        </div>
      </div>

    </div>

    <div class="row">

      <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0">

        <div class="row media-option" style="margin-bottom:0px!important;">

          <div class="col lead imgclick">Photos</div>
          <div class="col lead vidclick">Videos</div>

        </div>

        <div class="divider"></div>

      </div>

      

    </div>
    
    
    <div class="row photos" >
      <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0 center">
        <div class="row valign-wrapper medias">

        
        <?php foreach($data['images'] as $img){?>

            <div class="col l4 m12 s12 custom-img" >
              <img class="materialboxed" data-caption="<?php echo $img['media_file_desc']?>" src="<?php echo base_url('uploads/media/')?><?php echo $img['media_folder_name']?>/photos/<?php echo $img['media_file_name']?>"/> 
            </div>
        <?php }?>

        </div>
      </div>
    </div>


    <div class="row videos" style="display:none;">
      <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0 center">
       

        
        <?php foreach($data['videos'] as $vid){?>
          <div class="col l4 m12 s12 custom-img" >
          <video controls class="player materialboxed" data-caption="<?php echo $vid['media_file_desc']?>" id="player1"
            width="100%" loop muted poster="<?php echo base_url('assets/trips/19.jpeg') ?>"
            preload="auto" src="<?php echo base_url('uploads/media/')?><?php echo $vid['media_folder_name']?>/videos/<?php echo $vid['media_file_name']?>"
            tabindex="0" title="MediaElement">
          </video>
          </div>
          
        <?php }?>

      </div>
    </div>
    
    <?php main_footer(); ?>
</body>
<script>

$('document').ready( ()=>{
  $('.materialboxed').materialbox();

  $(".imgclick").on('click',function(){

    $(".videos").fadeOut(800);
    $(".photos").delay(800).fadeIn(800);
    $(this).addClass("activeView");
    $(".vidclick").removeClass("activeView");

  });

  $(".vidclick").on('click',function(){

    $(".photos").fadeOut(800);
    $(".videos").delay(800).fadeIn(800);
    $(".imgclick").removeClass("activeView");
    $(this).addClass("activeView");

  });

});

</script>
</html>