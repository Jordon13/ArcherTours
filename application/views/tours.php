<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->helper('section');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Service | Tours | let check out everywhere in this island. One life live full.</title>
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
        list-style: circle!important;
    }

    .fpage {
        background-image: url(<?php echo base_url('assets/').$pageDetails['_tours_img'];?>);
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

      .liItem{
        list-style: circle!important;
      }

      .liItem li{
        padding-top: 0.5em!important;
      }

      .book{
          position: fixed!important;
          background-color: rgba(35, 32, 32,0.4)!important;
          height:100%!important;
          width: 100%!important;
          z-index: 10!important;

      }

      .modal-open {
    /* disable scrollbar on both x and y axis */
    overflow: hidden;

    /* disable scrollbar on x-axis only */
    overflow-x: hidden;

    /* disable scrollbar on y-axis only */
    overflow-y: hidden;

    /* disable scroll */
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;

    /* OPTIONAL: none of dom element will be click-able */
    pointer-events: none;
}

.bcenter{
      display: flex;
      justify-content: center;
      width: 100%;
    }

    .result{
        display: flex;
        flex-flow: row wrap;
        justify-content: center;
    }
    
    .search-box-area:focus{
      border-bottom:1px solid #212121!important;
    }
    
    .card-title{
        background-color: #000000d4!important;
        width: 100%!important;
        color: white!important;
    }

</style>

</head>
<body class="">

    <?php main_nav(); ?>
    
    <div class="row fpage" style="margin-bottom:0px!important;">
      <div class="overlay"></div>
      
      <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0 center"  style="height:100%!important; z-index:4!important; position:relative;">
        <div class="row valign-wrapper" style="height:100%!important;">
          <div class="col s12" >
          <h5 class="white-text"><a class="custom-hone-link" href="<?php echo site_url('/')?>">Home</a> | <span style="color:rgba(255,255,255,0.8)!important;">Tours</span></h5>
            <h1 class="white-text header"><?php echo $pageDetails['_tours_title'];?></h1>
          </div>
        </div>
      </div>

    </div>
    
    

    <?php if($datas !== 0){?>
    <div class="row" style="margin-top:1em!important;">
        
        
        <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0">
            <div class="row trip-search-area">
            <input class="search-box-area" type="search" placeholder="Search..."/>
          </div>
            <div class="row valign-wrapper" style="flex-flow: row wrap; align-items:baseline;">
                
            {datas}
                <div class="col l4 m12 s12">
                    <div class="card sticky-action">
                        

                        <div class="card-image waves-effect waves-block waves-light">
                            <span class="card-title" style="font-size:20px!important;">{price_place} ({trip_type})</span>
                            <img class="activator" width="420" height="280" alt="no image"  src="<?php echo base_url('/uploads/prices-images/{price_image}')?>">
                        </div>

                        <div class="card-content">
                            <span class="activator grey-text text-darken-4"><i class="material-icons right">more_vert</i><b>Trip: From </b>{price_origin} <b>To</b> {price_destination}</span>
                            <br/><br/>
                            

                            <p><b>Origin Place: </b>{price_hotel}</p> 
                             <p><b>Destination Place: </b>{price_place}</p>

                            <p><b>Group Price:</b> USD ${display_price} for 4 people.</p>
                            <p><b>Each additional person:</b> USD ${price_per_adult}</p><br/>

                            <p><b>Description: </b>{price_description}</p>
                        </div>

                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Additional Information<i class="material-icons right">close</i></span>
                            <ul style="list-style: circle!important; padding:1em!important;" class="liItem">
                            {price_addtional_info}<li>{item}</li>{/price_addtional_info}
                            </ul>
                        </div>

                        

                        <div class="card-action center">
                          <a class="waves-effect waves-light btn modal-trigger grey darken-3" id="{package_unique_id}" onclick=addToCart('{package_unique_id}') >Add To Cart</a>
                          <a class="waves-effect waves-light btn modal-trigger grey darken-3" id="{package_unique_id}" onclick=bookToCart('{package_unique_id}') >Book Now</a>
                        </div>

                    </div>
                </div>
            {/datas}

            </div>
        </div>

    </div>
  <?php }else{?>
    <div class="row white-text" style="background-color:rgba(35, 32, 32, 1);margin-bottom:0px!important;">
      
      <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0 center"  style="height:100%!important; z-index:4!important; position:relative;">
        <div class="row center" style="height:100%!important;">
          <h2>۞ No Packages Available, Sorry. ۞</h2>
        </div>
      </div>

    </div>
  <?php }?>

    <?php main_footer(); ?>
</body>

<script>

    var addToCart = (id) =>{
            $.post("<?php echo base_url('/client/CartAdd'); ?>",{id:id,type:0},function(data){

              if($(".cartTotal")[0]){
                $(".cartTotal").text(data);
              }else{
                $("#np").prepend("<div class='cart-active white-text cartTotal'>"+data+"</div>");
              }
            });
          }

    var bookToCart = (id) =>{
      $.post("<?php echo base_url('/client/CartAdd'); ?>",{id:id,type:0},function(data){

        if($(".cartTotal")[0]){
          $(".cartTotal").text(data);
        }else{
          $("#np").prepend("<div class='cart-active white-text cartTotal'>"+data+"</div>");
        }

        location.href = "<?php echo site_url('/checkout')?>";
      });
    }

    $('document').ready(function(){

      var divlength = $('.sticky-action').length;

      var divs = $('.sticky-action');

      $('.search-box-area').keyup(function(){

        var text = $(this).val();

        var ptr = new RegExp(text,'i');

        for(x =0; x < divlength; x++){
          var result = $(divs.eq(x)).text();
          var sres = result.search(ptr);
          
          if(sres > -1){
            divs.eq(x).css('display','');
          }else{
            divs.eq(x).css('display','none');
          }

        }

        

      });

    });
</script>
</html>