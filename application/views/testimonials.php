<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->helper('section');
?>
<html lang="en">
<head>
    <title>Testimonials</title>
    <?php main_head();?>
    <script src="<?php echo base_url('js/')?>jquery.star-rating-svg.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/')?>star-rating-svg.css">

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
              <textarea  id="message" type="text" name="_user_msg" class="white-text materialize-textarea validate"></textarea>
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
            <h5 class="white-text"><a class="custom-hone-link" href="<?php echo site_url('/')?>">Home</a> | <span style="color:rgba(255,255,255,0.8)!important;">Deals</span></h5>
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

        <div class="animated col l3 m6 s12" data-aos="fade-up-right">
          <div class="card-panel grey lighten-4 " style="border-radius:10px;">
            <h3 class="flow-text" style="margin:0px;vertical-align:center"><b><?php echo $item['_username']; ?></b></h3>
            <p class="grey-text" style="margin-bottom:10px!important;font-size:12px;"><?php echo date("F d, Y",strtotime($item['date_created'])); ?></p>
            <p style="margin:20px!important;"><em><?php echo $item['_user_msg']; ?></em></p>
            <div class="rating" data-rating="<?php echo $item['_rating']; ?>"></div>
          </div>
        </div>

        <?php }?>

        

        
      </div>


    </div>


    
    <?php main_footer(); ?>

    <script>
    
      $('document').ready(function(){

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