<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->helper('section');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us</title>
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
            background-image: url(<?php echo base_url('assets/21.jpg')?>);
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

      .modify-img img{
        width:100%!important;
      }
      .custom-input{
        margin:0px!important;
        margin-bottom:10px!important;
        height:auto!important;
      }

      .custom-input:first-child{
        margin-top:10px!important;
      }

      .custom-input input, .custom-input textarea{
        border: 1px solid #e0e0e0!important;
        border-radius:10px!important;
        width:100%!important;
        outline:none!important;
        padding:1em!important;
      }

      .custom-input input:focus, .custom-input textarea:focus{
        box-shadow: inset 0px 0px 3px rgba(253, 216, 0, 1);
        border:none!important;
      }

      .custom-input textarea{
        min-height:100px!important;
      }

      .custom-input button{
        /* padding: 1em; */
        /* margin: 1em; */
        border-radius: 30px;
        border: none!important;
        color:white;
        outline: none;
        background-color:rgba(253, 216, 0, 1);
        color: white!important;
        font-weight: bolder;
        cursor: pointer;
      }

      .custom-input button:hover{
        background-color: rgba(253, 216, 0, 0.5)!important;
      }

      .custom-input button:focus{
        background-color: rgba(253, 216, 0, 1)!important;
      }

      
    .overlay-post{
      width:100%;
      height:100%;
      position: absolute;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 4;
      background-color: rgba(255,255,255,0.8);
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
          <h5 class="white-text"><a class="custom-hone-link" href="<?php echo site_url('/')?>">Home</a> | <span style="color:rgba(255,255,255,0.8)!important;">Contact</span></h5>
            <h1 class="white-text header">Contact Us</h1>
          </div>
        </div>
      </div>

    </div>

    <div class="row">
      
      <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0">

        <div class="row">

          <div class="col s12">
            <h3>Contact Information</h3>
          </div>

          <div class="col l3 m12 s12">
            <p class="lead">Address:  198 West 21th Street, Suite 721 New York NY 10016</p>
          </div>

          <div class="col l3 m12 s12">
            <p class="lead">Phone: + 1235 2355 98</p>
          </div>

          <div class="col l3 m12 s12">
            <p class="lead">Email: info@yoursite.com</p>
          </div>

          <div class="col l3 m12 s12">
            <p class="lead">Website yoursite.com</p>
          </div>

        </div>

      </div>
    
    </div>

    <div class="row">
      
      <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0">
      
        <div class="row">
          
          <div class="col l6 m12 s12 modify-img" style="position:relative!important; ">
            <!-- <div class="overlay"></div> -->
            <img src="<?php echo base_url('assets/map.png');?>" alt="no image">
          </div>
          
          <form class="col l6 m12 s12 my-form"
          style="position:relative;" >
          <div class="overlay-post" style="display:none;">

            <div class="preloader-wrapper big active">
              <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                  <div class="circle"></div>
                </div><div class="gap-patch">
                  <div class="circle"></div>
                </div><div class="circle-clipper right">
                  <div class="circle"></div>
                </div>
              </div>

              <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                  <div class="circle"></div>
                </div><div class="gap-patch">
                  <div class="circle"></div>
                </div><div class="circle-clipper right">
                  <div class="circle"></div>
                </div>
              </div>

              <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                  <div class="circle"></div>
                </div><div class="gap-patch">
                  <div class="circle"></div>
                </div><div class="circle-clipper right">
                  <div class="circle"></div>
                </div>
              </div>

              <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                  <div class="circle"></div>
                </div><div class="gap-patch">
                  <div class="circle"></div>
                </div><div class="circle-clipper right">
                  <div class="circle"></div>
                </div>
              </div>
            </div>

            </div>

            <div class="input-field col s12 custom-input">
              <input placeholder="Name" name="name" type="text" class="validate browser-default">
            </div>

            <div class="input-field col s12 custom-input">
              <input name="email_address" placeholder="Email" type="email" class="validate browser-default">
            </div>

            <div class="input-field col s12 custom-input">
              <input name="subject" type="text" placeholder="Subject" class="validate browser-default">
            </div>

            <div class="input-field col s12 custom-input">
              <textarea rows="6" id="textarea1" placeholder="Message" class="" name="message"></textarea>
            </div>

            <div class="input-field col s12 custom-input">
              <button class="btn btn-large z-depth-0" id="submit">Send Message</button>
            </div>

            <div class="row center-align result">
                
            </div>

    </form>

        </div>

      </div>
    
    </div>
    
    <?php main_footer(); ?>

    <script>
    
      $("#submit").click(function(e){
        e.preventDefault();

        var items = new Array();
                
            var form_data = new FormData();

            var form = $('.my-form').serializeArray();

            console.log(form);

            for(x = 0; x < form.length; x++){
                form_data.append(form[x].name,form[x].value);
            }

            $.ajax({
              url: "<?php echo site_url('/client/ContactUs')?>",
                method: "POST",
                data: form_data,
                beforeSend: function(){
                  $(".result").css("color","#fdd800");

                  $('.result').html("Processing...");
                  $('.overlay-post').fadeIn(600);
                },
                success: function(result) {
                  $(".result").css("color","#388E3C");

                    $(".result").html(result);

                    $(".result").delay(2000).fadeOut(1000);

                    $('.overlay-post').fadeOut(600);
                },
                contentType: false,
                cache: false,
                processData:false, 
            });

      });

    </script>
</body>
</html>