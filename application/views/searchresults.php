
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->helper('section');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search | Check out what we have in store</title>
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
    <?php main_head(1);?>

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

    nav{
        background-color: rgba(35, 32, 32, 1);
    }

    .fixed-action-btn{
        top:88%!important;
        
    }

    </style>

</head>
<body class="">
<?php main_nav(); ?>
    <nav class="">
        <div class="nav-wrapper">
        <form id="frm" method="GET" action="" target="_blank">
            <div class="input-field">
            <input id="search" type="search" name="query" placeholder="Search For Trips" required>
            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
            <i class="material-icons">close</i>
            </div>
        </form>
        </div>
    </nav>

    <div class="row" style="margin-top:4rem;">

        <div class="col s10 offset-s1">
            <ul class="collapsible">
                <li class="active">
                    <div class="collapsible-header"><i class="material-icons">info</i>Our Results: <?php echo count($data) ?></div>
                    <div class="collapsible-body">

                        <?php foreach($data as $item){?>

                            <div class="card-panel grey lighten-5 z-depth-1" data-aos="flip-up">
                                <div class="row valign-wrapper">
                                    <div class="col s2">
                                        <img class="responsive-img"alt="no image" src="<?php echo base_url('/uploads/prices-images/'.$item['price_image']); ?>">
                                    </div>
                                    <div class="col s10">
                                        <h4><?php echo $item['price_place'];?></h4>
                                        <p><b>From </b><?php echo $item['price_origin'];?> <b>To</b> <?php echo $item['price_destination'];?></p>
                                        <p><b>Pickup Spots: </b><?php echo $item['price_hotel'];?></p>
                                        <p><b>Group Price: </b> USD $<?php echo $item['display_price'];?> for 4 people.</p>
                                        <p><b>Each additional person: </b> USD $<?php echo $item['price_per_adult'];?></p>
                                        <p><b>Description: </b> <?php echo base64_decode($item['price_description']);?></p>
                                    </div>
                                    
                                </div>
                                <div class="card-action">
                                    <a class="waves-effect waves-light btn modal-trigger grey darken-3" id="<?php echo $item['package_unique_id'] ?>" onclick=addToCart('<?php echo $item['package_unique_id'] ?>') >Add To Cart</a>
                                    <a class="waves-effect waves-light btn modal-trigger grey darken-3" id="<?php echo $item['package_unique_id'] ?>" onclick=bookToCart('<?php echo $item['package_unique_id'] ?>') >Book Now</a>
                                </div>
                            </div>

                        <?php }?>

                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">info</i>Other Results: 0</div>
                    <div class="collapsible-body"></div>
                </li>
                
            </ul>
        </div>

    </div>

    
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


    $(document).ready(function(){
        $('.collapsible').collapsible();
    
        $('.fixed-action-btn').floatingActionButton({
            direction: 'top',
            hoverEnabled: true
        });
  
    });

  

</script>