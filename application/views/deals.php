<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->helper('section');

?>
<html lang="en">
<head>
    <title>Deals | check out our deals for this month and more</title>
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
      background-image: url(<?php echo base_url('assets/').$data['_deals_img']?>);
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



</style>
<body class="">

    <?php main_nav(); ?>
    <div class="row fpage">
      <div class="overlay"></div>
      
      <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0 center"  style="height:100%!important; z-index:4!important; position:relative;">
        <div class="row valign-wrapper" style="height:100%!important;">
          <div class="col s12">
          <h5 class="white-text"><a class="custom-hone-link" href="<?php echo site_url('/')?>">Home</a> | <span style="color:rgba(255,255,255,0.8)!important;">Deals</span></h5>
            <h1 class="white-text header"><?php echo $data['_deals_title'];?></h1>
            <p class="white-text header"><?php echo $data['_deals_pitch'];?></p>
          </div>
          
        </div>
        
      </div>

    </div>

    <?php if(count($items)>0){?>
        <div class="row">
        

        <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0"  >

          <div class="row my-slider2">

          
            <?php foreach($items as $item){?>
              <div class="col l4 m6 s12">
                <div class="card">
                  <div class="card-image custom-hover" >
                    <div class="custom-overlay-discount center-align" style="display:none">
                      <p class="ltext1"><?php echo $item['special_discount'];?>% off<br/>Book Now</p>
                    </div>
                    <img height="300px"src="<?php echo base_url('uploads/prices-images/'.$item['price_image']);?>" class="" alt="no img">
                    <span class="card-title"><?php echo $item['price_place'];?></span>
                  </div>
                  <div class="card-content">
                    <p><b>Price:</b> <?php echo $item['price_per_adult'];?></p>
                    <p><b>Discount:</b> <span class="green-text">-<?php echo $item['special_discount'];?>%</span></p>
                    <p><b>Offer Ends:</b> <?php echo date("M d, Y",strtotime($item['special_end_date']));?></p>
                    <p><b>Description:</b> <?php echo base64_decode(substr($item['price_description'],0,124)).'...';?></p>
                  </div>
                  <div class="card-action modify-action center-align ">
                    <a onclick="addToCart('<?php echo base64_encode(substr(uniqid(),0,10).$item['special_unique_id']);?>')" class="custom-link waves-effect waves-light btn grey darken-3">Add To Cart</a>
                  </div>
                </div>
              </div>
              <?php }?>

            </div>

          </div>

        
        </div>
      <?php }else{?>

        <div class="row">
        

        <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0"  >

          <h1 class="center-align">No Deals Available.<h1>

        </div>

        
        </div>

      <?php }?>


    
    <?php main_footer(); ?>
</body>
</html>

<script>

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