<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('section');
?>
<!Doctype html>
<html lang="en">

    <head>

    <?php main_head(); ?>
    

      <style>

        html {
          position:relative;
          height: 100%!important;
          
          font-family: "Nunito";
        }

        body{
          position:relative;
          height: 100%!important;
        }

        
        .fpage{

          background-image: url(<?php echo base_url('assets/17.jpg')?>);
          background-size: cover;
          background-repeat: no-repeat;
          background-position: center;
          height:100%!important;
          width:100%!important;
          background-attachment: fixed;
          
        }

        .overlay{
          top:0px;
          background-color: rgba(0,0,0,0.3);
          height: 100%;
          position: absolute;
          width: 100%;
          z-index: 2!important;
        }

        .cont{
          /* position: relative; */
          
          z-index: 3!important;
          
        }

        .indicators{
          display:flex!important;
          justify-content: center;
        }

        .indicator{
          border-radius: 100%;
          height: 5px;
          width: 5px;
          background-color: transparent;
          border: 2px solid white;
          padding: 0.3em;
          margin:1em;
          transition: background-color 0.5s;
        }

        .indicator-active{
          background-color: rgba(255,255,255,1);
          border: 2px solid rgba(255,255,255,0.2)!important;
          transition: background-color 2s;
        }

        .booknow{
          border-radius:30px;
          vertical-align: center!important; 
          background-color: #fdd800!important;
          font-family: 'Merienda One', cursive!important;
          animation: bounce 2s infinite ease-in-out;
        }

        .mybtn{
          border-radius:30px;
          background-color: transparent;
          border: 1px solid white;
        }

        .ltext{
          color: white;
          font-size: 18px;
          padding:0.5em;
        }

        .myhead{
          
          font-family: 'Merienda One', cursive!important;
          text-shadow: 2px 2px 3px rgba(58,58,58,0.89);
          font-size: 70px;
        }

        .mybtn:hover{
          background-color: rgba(255,255,255,1)!important;
          color:#fdd800!important;
        }

        .mybtn:focus{
          background-color:transparent!important;
          color: rgba(255,255,255 ,1);
        }

        .booknow:hover{
          background-color: rgba(255,255,255,1)!important;
          color:#fdd800!important;
        }

        .booknow:focus{
          background-color: rgba(2,136,209 ,1);
        }


        
        @keyframes bounce {
            0% { transform: translateY(-1px)  }
            50% { transform: translateY(2px) }
            100% { transform: translateY(-1px) }
        }

        .blackText{
          color:rgba(35, 32, 32, 1)!important;
        }

        .custom-divider{
          background-color: #fdd800!important;
          padding: 3px!important;
          width: 80px;
          margin-bottom: 1.5em!important;
        }

        .custom-border-area{
          display:flex!important;
          justify-content: center!important;  
        }

        .lead{
          font-size: 18px;
          padding:0.5em;
          margin-bottom: 1em!important;
        }

        .ltext1{
          color: white!important;
          font-size: 30px!important;
          padding:0.5em!important;
          font-weight: bolder;
          text-shadow: 1px 1px 1px rgba(58,58,58,0.89);
        }

        .custom-overlay-discount{
          position:absolute;
          z-index:100;
          height:100%!important;
          width: 100%!important;
          display:flex;
          align-items: center;
          justify-content: center;
          background-color: rgba(253,216,0,0.9);
          cursor: pointer;
        }

        .custom-link{
          padding: 0.7em!important;
          margin: 1em!important;
          border-radius: 30px!important;
          border: 0.5px solid rgba(253,216,0,0.9)!important;
          outline: none!important;
          background-color: transparent!important;
          color: rgba(253,216,0,0.9)!important;
          font-weight: bolder!important;
          cursor: pointer!important;
          font-size:12px!important;
        }

        .custom-link:hover{
          /* background-color: rgba(0, 145, 234, 1)!important; */
          color: white!important;
          background-color: #fdd800!important;
          border: 0.5px solid transparent!important;
          transition: background-color 0.5s!important;
      }

      .modify-action{
        padding: 1.5em!important;
      }

      </style>
    </head>

    <body>

      <!-- First Page -->

      <?php main_nav(); ?>
      <div class="row fpage valign-wrapper">
        <div class="overlay"></div>

        <div class="row cont">
          
         

          <div class="col s12 ncontent">

            <div  data-aos="zoom-in-down" data-aos-delay="400" data-aos-offset="0" class="col l6 m8 s12 offset-l3 offset-m2 offset-s0 center-align">
              <h1 class="header myhead white-text">Welcome</h1>
            </div>

            <div class="row mbtn" data-aos="zoom-in" data-aos-delay="800" data-aos-offset="0">
              <div class="col l6 m8 s12 offset-l3 offset-m2 offset-s0  center-align" >

                <div class="contents" >
                  <h3 class="white-text center-align">Get Great1 Deals On Dunns River Falls</h3>
                  <p class="center ltext center-align col s10 offset-s1">Contrary to popular belief, Lorem Ipsum is not simply random text.
                     It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                  <button class="mybtn btn z-depth-0">Read More</button>
                </div>

                <div class="contents" style="display:none">
                  <h3 class="white-text center-align">Get Great2 Deals On Dunns River Falls</h3>
                  <p class="center ltext center-align col s10 offset-s1">Contrary to popular belief, Lorem Ipsum is not simply random text.
                     It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                  <button class="mybtn btn z-depth-0">Read More</button>
                </div>

                <div class="contents" style="display:none">
                  <h3 class="white-text center-align">Get Great3 Deals On Dunns River Falls</h3>
                  <p class="center ltext center-align col s10 offset-s1">Contrary to popular belief, Lorem Ipsum is not simply random text.
                     It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                  <button class="mybtn btn z-depth-0">Read More</button>
                </div>

              </div>
            </div>


            <div class="row" data-aos="zoom-in" data-aos-delay="1200">
            <div class="col l6 m8 s12 offset-l3 offset-m2 offset-s0 center-align indicators">
              <div class="indicator indicator-active">
              </div>
            </div>
              
            </div>

            <div class="row mbtn" data-aos="zoom-in" data-aos-delay="1600">
              <div class="col l6 m8 s12 offset-l3 offset-m2 offset-s0 center-align">
                <button class="booknow btn btn-large waves-effect waves-light">Book Now</button>
              </div>
            </div>

          </div>


        </div>
        
      </div>
      
      <!-- Second Section -->
      <div class="row" data-aos="fade-up" data-aos-duration="2000">
        
        <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0">
            <h2 class="header center-align blackText">
              Specials
            </h2>
        </div>

        <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0 custom-border-area">
          <div class="divider custom-divider"></div>
        </div>

        <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0">
          <p class="center-align blackText lead">30% off all pacages offer ends Decenber 31, 2019</p>
        </div>

        <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0">

          <div class="row center-align">
            <div class="col l4 m6 s12">
              <div class="card">
                <div class="card-image custom-hover" >
                  <div class="custom-overlay-discount" style="display:none">
                    <p class="ltext1">30% off<br/>Book Now</p>
                  </div>
                  <img src="<?php echo base_url('assets/18.jpg');?>" >
                  <span class="card-title">Dunns River Falls</span>
                </div>
                <div class="card-content">
                  <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action modify-action">
                  <a href="#" class="custom-link">Request Quote</a>
                </div>
              </div>
            </div>
            <div class="col l4 m6 s12">
              <div class="card">
                <div class="card-image custom-hover">
                <div class="custom-overlay-discount" style="display:none">
                    <p class="ltext1">30% off<br/>Book Now</p>
                  </div>
                  <img src="<?php echo base_url('assets/18.jpg');?>">
                  <span class="card-title">Green Grotto Cave</span>
                </div>
                <div class="card-content">
                  <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action modify-action">
                  <a href="#" class="custom-link">Request Quote</a>
                </div>
              </div>
            </div>
            <div class="col l4 m6 s12">
              <div class="card">
                <div class="card-image custom-hover">
                <div class="custom-overlay-discount" style="display:none">
                    <p class="ltext1">30% off<br/>Book Now</p>
                  </div>
                  <img src="<?php echo base_url('assets/18.jpg');?>">
                  <span class="card-title">Appleton Estate Tour</span>
                </div>
                <div class="card-content">
                  <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action modify-action">
                  <a href="#" class="custom-link">Request Quote</a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>


      <div class="row">

      </div>

      
      <?php //testData(); ?>

    </body>

    <script>
      
      $('document').ready(function(){

        $('.custom-hover').hover(function(){
          var index = $('.custom-hover').index(this);
          $('.custom-overlay-discount').eq(index).fadeIn(500);
          
        }).mouseleave(function(){
          $('.custom-overlay-discount').fadeOut(500);
        });

      });

    </script>

</html>