<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->helper('section');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Testimonials | share your experience with our service.</title>
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

    .input-field input{
        border: none!important;
        color: white!important
    }

    .row .input-field input:+label{
        color: white!important;
    }

    .row .input-field input{
        border-bottom: 0.5px solid rgba(224,224,224 ,0.02) !important;
        box-shadow: 0 0.5px 0 0 rgba(224,224,224 ,1) !important
    }

    .input-field input:focus + label {
        color: #fdd800!important;
    }

    .row .input-field textarea{
        border-bottom: 0.5px solid rgba(224,224,224 ,0.02) !important;
        box-shadow: 0 0.5px 0 0 rgba(224,224,224 ,1) !important
    }

    .input-field textarea:focus + label {
        color: #fdd800!important;
    }

    .row .input-field textarea:focus {
        border-bottom: 0.5px solid #fdd800!important;
        box-shadow: 0 0.5px 0 0 #fdd800!important;
    }

    .row .input-field input:focus {
        border-bottom: 0.5px solid #fdd800!important;
        box-shadow: 0 0.5px 0 0 #fdd800!important;
    }

    .fpage {
      background-image: url(<?php echo base_url('assets/').$data['_testimonial_img']?>);
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

      .centerbtn{
        justify-content: center;
      }

      .centerbtn button{
        border-radius: 30px;
      }

      .dataoverlay{
        position: fixed;
        width: 100%!important;
        height: 100%!important;
        z-index: 100;
        background-color: rgba(50,50,50, 0.6);
      }

      .form-item{
        height:100%;
        width: 100%;
        justify-content: center;
      }

      .my-form{
        padding: 0.5em;
        width:400px;
        border-radius: 20px;
      }

      .custombtn button{
        margin: 0.3em;
      }

      .character-counter{
        color:white!important;
      }

</style>
<body class="">

    <?php main_nav(); ?>
    <div class="row fpage">

      <div class="containter dataoverlay" style="display:none;">
        <div class="row form-item valign-wrapper">

          <form action="" class="my-form grey darken-4 z-depth-3">
            
            <div class="input-field col s12">
              <input  id="username" type="text" name="_username" class="validate">
              <label for="username">Name</label>
            </div>

            <div class="input-field col s12">
              <input  id="useremail" type="email" name="_useremail" class="validate">
              <label for="useremail">Email</label>
            </div>

            <div class="input-field col s12">
              <textarea  id="message" type="text" name="_user_msg" class="white-text materialize-textarea validate" data-length="210"></textarea>
              <label for="message">Message</label>
            </div>

            <div class="input-field col s12">
              <div class="row valign-wrapper"style="justify-content:center;margin-bottom:0px;">
                
                <div class="my-rating-4"></div>

              </div>
            </div>

            <div class="input-field col s12">
              <div class="row valign-wrapper custombtn" style="justify-content:center;margin-bottom:0px;">
                <button class="btn black-text yellow send">Submit</button>
                <button class="btn black-text red cancel">Close</button>
              </div>
            </div>

            <div class="input-field col s12">
              <p class="result white-text center-align"></p>
            </div>
          
          </form>

        </div>
      </div>

      <div class="overlay"></div>
      
      <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0 center"  style="height:100%!important; z-index:4!important; position:relative;">
        <div class="row valign-wrapper" style="height:100%!important;">
          <div class="col s12">
            <h5 class="white-text"><a class="custom-hone-link" href="<?php echo site_url('/')?>">Home</a> | <span style="color:rgba(255,255,255,0.8)!important;">Testimonials</span></h5>
            <h1 class="white-text header"><?php echo $data['_testimonial_title'];?></h1>
            <div class="row valign-wrapper centerbtn">
              <button class="btn btn-large yellow black-text waves-effect waves-light pulse shareexp ">Share your experience</button>
            </div>
          </div>
          
        </div>
        
      </div>

    </div>

    <div class="container">

    
      <div class="row" >


        <?php foreach($items as $item){ ?>

        <div class="col animated l4 m6 s12" data-aos="fade-up"><!-- Repeating section-->

            <div class="card-panel grey lighten-5 z-depth-1" style="border-radius:10px;">
              <div class="row valign-wrapper">
                <div class="col s3"><img class="circle responsive-img" src="http://budotrader.pl/wp-content/uploads/2018/12/placeholder-image-sq-2.png"></div>  
                <div class="col s9">
                  <p><b><?php echo strtoupper($item['_username']); ?></b></p>
                  <p class="grey-text" style="margin-bottom:10px!important;font-size:12px;"><b><?php echo date("F d, Y",strtotime($item['date_created'])); ?></b></p>
                  
                </div>
              </div>

              <div class="container">
                <div class="row">
                <span class=""style="font-size:14px;"><?php echo $item['_user_msg']; ?></span>
                </div>
              </div>

              <div class="container">
                <div class="row valign-wrapper" style="justify-content:center;">
                  <div class="rating" data-rating="<?php echo $item['_rating']; ?>"></div>
                </div>
              </div>
            
            </div>

          </div><!-- Repeating section ends-->

        <?php }?>

        

        
      </div>


    </div>


    
    <?php main_footer(); ?>

    <script>
    
      $('document').ready(function(){
        $('textarea#message').characterCounter();
        $(".my-rating-4").starRating({
          totalStars: 5,
          starShape: 'rounded',
          starSize: 35,
          emptyColor: 'lightgray',
          hoverColor: '#ffff8d',
          ratedColor: '#ffd600',
          useGradient: false,
          useFullStars: true,
          disableAfterRate: false
        });


        $(".rating").starRating({
          totalStars: 5,
          starShape: 'rounded',
          starSize: 20,
          emptyColor: 'lightgray',
          hoverColor: '#ffff8d',
          ratedColor: '#ffd600',
          useGradient: false,
          useFullStars: true,
          readOnly: true
        });

        $(".animated").hover(function(){

          var index = $(".animated").index(this);

          $(".animated").eq(index).addClass("infinite pulse delay-0s");//infinite bounce delay-2s

        }).mouseleave(function(){
          $(".animated").removeClass("infinite pulse delay-0s");
        });

      });

      $('.send').click(function(e){

        e.preventDefault();

        var form_data = new FormData();
        
        var rating = $('.my-rating-4').starRating('getRating');

        var form = $('.my-form').serializeArray();

        for(x = 0; x < form.length; x++){
            form_data.append(form[x].name,form[x].value);
        }

        form_data.append('_rating',rating);


        $.ajax({
          url: "<?php echo site_url('/client/AddTestimonial');?>",
          method: "POST",
          data: form_data,
          beforeSend: function(){
            $(".send").html("Processing");
            $(".send").prop("disabled",true);
          },
          success: function(e) {
            $(".send").html("Submit");
            $(".send").prop("disabled",false);

            $('.result').html(`*${e}*`);
            $('.result').fadeIn(500).delay(2000).fadeOut(1000);
          },
          contentType: false,
          cache: false,
          processData:false    
        });

        //$('.dataoverlay').fadeOut(500);
      });

      $('.shareexp').click(function(){

        $('.dataoverlay').fadeIn(500);

      });


      $(".cancel").click(function(e){
        e.preventDefault();
        $('.dataoverlay').fadeOut(500);
      });
    
    </script>
</body>
</html>