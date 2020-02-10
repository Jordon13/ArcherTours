<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!Doctype html>
<html lang="en">

    <head>
        <title>Package Detials</title>
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
        <meta property="og:image" content=""><link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/icons/logo.png'); ?>">
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
            }
        
        </style>
    </head>

    <body>
        <?php main_nav(); ?>
            <div class="container">

                <div class="row valign-wrapper">
            
                    <div class="col l4 m8 s12 offset-l4 offset-m2 offset-s0">
                        <div class="card sticky-action">
                            

                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" width="420" height="280" alt="no image"  src="<?php echo base_url('/uploads/prices-images/').$data->price_image;?>">
                            </div>

                            <div class="card-content">
                                
                                <p><b>Trip Type: </b><?php echo $data->trip_type == '1' ? 'One Way Trip':'Round Trip' ;?></p> <br/>

                                <p><b>Origin Place: </b><?php echo $data->price_hotel == '' ? 'none' :$data->price_hotel ;?></p> <br/>

                                <p><b>Discount (%): </b><?php echo $data->price_discount == '' ? '0':$data->price_discount;?></p> <br/>

                                <p><b>Destination Place: </b><?php echo $data->price_place;?></p><br/>

                                <p><b>1 - 4 Persons:</b> USD $<?php echo $data->display_price;?>.</p><br/>
                                
                                <p><b>Each additional person:</b> USD $<?php echo $data->price_per_adult;?></p><br/>

                                <p><b>Description: </b><?php echo base64_decode($data->price_description);?></p><br/>

                                <?php $itms = explode(',', sanitizeInput2(base64_decode($data->price_addtional_info)));?>

                                <p><b>Addtional Information: </b><ul ><?php foreach($itms as $itm){echo "<li> - ".$itm."</li>";}?></ul></p>

                            </div>

                            <div class="card-action center">
                            <a class="waves-effect waves-light btn modal-trigger grey darken-3" onclick=addToCart('<?php echo $data->package_unique_id;?>') >Add To Cart</a>
                            <a class="waves-effect waves-light btn modal-trigger grey darken-3" onclick=bookToCart('<?php echo $data->package_unique_id;?>') >Book Now</a>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

       

        <?php main_footer(); ?>
    </body>


    <script>

        Object.defineProperty(String.prototype, "toInt", {
            value: function toInt() {
                return parseInt(this,10) || 0;
            },
            writable: true,
            configurable: true
        });

        Object.defineProperty(String.prototype, "toFlt", {
            value: function toFlt() {
                return parseFloat(this,10) || 0;
            },
            writable: true,
            configurable: true
        });

        function toMoney(money) {
            return money.toLocaleString('en-US', {style: 'currency',currency: 'USD',}) || 0;
        }

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

    </script>

</html>