<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->helper('section');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $data['title']?> | <?php echo date('l F d, Y',strtotime($data['created']))?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/icons/logo.png'); ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="generator" content="Gatsby 2.15.6">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta  name="description" 
    content="<?php echo $data['catch'];?>">
    <meta name="author" content="<?php echo $data['fullname']?>">
    <meta  name="keywords" content="money, booking, save, saving, cheap, flight, book, tour, trips, trip, taxi, jamaica
    jamaican, jamaican food, places in jamaica, trip in jamaica, tour jamaica, jamaica culture, jamaican culture, jamaican song,
    airport transfer, airport, food, dancehall, reggae, rasta, flight to jamaica, hotels in jamaica, hotels in the caribbean, places in jamaica,
    best places in jamaica to visit, jamaica gleaner, jamaica lagoon, activities in jamaica, usa, united, people, love, one love,bob marley,
    bob marley meseum, sport in jamaica, ackee, ackee and salt fish, jamaican ackee, jamaican people, trip to jamaica, montego bay,
    kingston, negril, ohco rios, falmouth, trelawny, usain bolt, fastest man in the world, tracks and record, restaurants in jamaica,
    restaurants jamaica, jamaica restaurants, jamaican restaurants, restaurants, best price, best, best rates, best trips, best trip, best tour,
    travel, travelling, travel to jamaica, travel to ja, travel to caribbean">
    

    <meta property="og:title" content="<?php echo $data['title']?>">
    <meta property="og:description" content="<?php echo $data['catch'];?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo $data['image'];?>">
    <meta property="og:url"   content="<?php echo $data['url'];?>" />
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
        /* background-image: url(<?php echo base_url('assets/24.jpg')?>); */
        /* background-size: cover; */
        /* background-repeat: no-repeat; */
        /* background-position: center; */
        height: 100%!important;
        width: 100%!important;
        background-attachment: fixed;
        position: relative;
    }

    .fpage2{
        background-image: url(<?php echo $data['image'];?>);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        height: 50%!important;
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

      .social-stats{
      color:#9e9e9e;
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
      margin-right:5%;
    }

    .social-stats p b{
      margin-right: 10px;
    }

    .tagsshw{
      display:flex;
      margin-top: 3%!important;
      align-items: center;
      justify-content: flex-start;
      margin-right: 5%!important;
      width:100%!important;
    }

    .chip{
      margin-left: 1%!important;
      background-color: rgba(35, 32, 32, 1)!important;
      color: white!important;
    }



</style>
<body class="blue-grey lighten-5" style="position:relative;">

    <?php main_nav(); ?>
    
    <?php if($IsSuccessful === true){?>

     <div class="row fpage2">
      
     </div>
     <!-- style="height:1500px!important;position:relative;" -->
     <div class="row" >
      <div class="col l8 m8 s12 offset-l2 offset-m2 offset-s0"  style="z-index:4!important; position:relative;">
        <div class="row">
          <h1 class="header" style="color:rgba(35, 32, 32, 1);"><?php echo $data['title'].': '.$data['catch'];?></h1>
          <p style="color:#9e9e9e;"><em>By <?php echo $data['fullname'];?></em></p>
        </div>


        <div class="row">
          <div class="tagsshw">
            <b>TAGS:</b> 
            <?php foreach($data['tags'] as $tag){?>
            <div class="chip"><em><?php echo $tag;?></em></div>
            <?php }?>
          </div>
        </div>

        <div class="row" style="margin-top: 3%!important;">
          <div class="social-stats">
            <p><b>Date Posted: </b> <em><?php echo $data['created'];?></em></p>
            <!-- <p><b>Comments: </b> <em><?php //echo $data['comments'];?></em></p>
            <p><b>Likes: </b> <em><?php //echo $data['likes'];?></em></p>
            <p><b>Shares: </b> <em><?php //echo $data['shares'];?></em></p> -->
          </div>
        </div>

        <div class="row" style="margin-top: 5%!important;">
          <div class="col">
            <?php echo $data['content'];?>
          </div>
        </div>

        
  <div class="row" >
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0&appId=413554662903444&autoLogAppEvents=1"></script>

    <div class="fb-like col s12" data-href="<?php echo $data['url'];?>" data-width="" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>

    <?php if($data['objectlink'] != ''){?>
      <div class="fb-comments col s12" data-href="<?php echo $data['objectlink'];?>" data-width="1000" data-numposts="2"></div>
    <?php }?>
  </div>


      </div>
     </div>

    <?php }else{?>

      <div class="row fpage white-text" style="background-color:rgba(35, 32, 32, 1);margin-bottom:0px!important;">
      
      <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0 center"  style="height:100%!important; z-index:4!important; position:relative;">
        <div class="row valign-wrapper" style="height:100%!important;">
          <h2><?php echo $data; ?></h2>
        </div>
      </div>

    </div>
    <?php }?>

    <?php main_footer(); ?>
</body>
</html>