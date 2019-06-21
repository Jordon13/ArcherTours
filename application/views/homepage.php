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

        .inids{
          display:flex!important;
          justify-content: center!important;
        }

        .inid{
          border-radius: 100%;
          height: 5px!important;
          width: 5px!important;
          background-color: transparent;
          border: 2px solid #fdd800!important;
          padding: 0.3em;
          margin:1em;
          transition: background-color 0.5s;
        }

        .inid-active{
          background-color: #fdd800!important;
          /* border: 2px solid rgba(255,255,255,0.2)!important; */
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
          /* padding:0.5em!important; */
          position:absolute;
          z-index:100;
          height:100%!important;
          width: 100%!important;
          display:flex;
          flex-flow: row wrap;
          align-items: center;
          justify-content: center;
          background-color: rgba(253,216,0,0.9);
          cursor: pointer;
        }

        .overlay2{
          background-color: rgba(0,0,0,0.5);
          height: 100%;
          position: absolute;
          width: 100%;
          z-index: 1!important;
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

        .custom-btn{
          padding: 1em!important;
          margin: 1em!important;
          border-radius: 30px!important;
          border: 0.5px solid white!important;
          outline: none!important;
          background-color: white!important;
          color: rgba(253,216,0,0.9)!important;
          font-weight: bolder!important;
          cursor: pointer!important;
          font-size:15px!important;
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

      .whyus{
        position: relative!important;
        background-image: url(<?php echo base_url('assets/13.jpg')?>);
          background-size: cover!important;
          background-repeat: no-repeat!important;
          background-position: center!important;
          /* height:100%!important; */
          width:100%!important;
          background-attachment: fixed!important;
      }

      .uscont{
        border-radius: 10px!important;
        margin: 2.5em!important;
        padding-bottom: 1em!important;
      }

      .center-ilayer{
        position: relative;
        display:flex!important;
        justify-content: center;
        margin-bottom:1.3em!important;
      }

      .iconlayer{
        position: absolute;
          color: white!important;
          background-color: #fdd800!important;
          border-radius: 100px!important;
          padding:1em;
          top:-35px;
          width:70px;
          height:70px;
          display:flex;
          justify-content: center;
          align-items: center;
      }

      .custom-row{
        display:flex!important;
        justify-content: center!important;
        flex-flow:row wrap;
      }

      #rqrate{
        background-color: white!important;
        color: #424242!important;
        padding: 0.2em!important;
        font-weight: bold;
        font-family: 'Hind', sans-serif!important;
        border: none!important;
        border-radius: 10px!important;
        text-align: center!important;
        /* box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.4)!important; */
      }

      .test-area{
        position: relative!important;
      }

      .carousel-controls-custom{
        position:absolute;
        width:80%;
        height:80%;
        left:10%;
        /* background-color:#fdd800!important; */
        display: flex;
        flex-flow: row wrap;
        justify-content:space-between;
        align-items: center;
      }

      .controller{
        display: flex;
        align-items: center;
        justify-content:center;
        height:50px;
        width:50px;
        padding:1em!important;
        border: 0.5px solid #fdd800!important;
        color:#fdd800!important;
        border-radius:100%;
        font-weight: bolder!important;
      }

      .controller:hover{
        background-color:#fdd800!important;
        color:#fff!important;
        cursor: pointer;
        transition: background-color 0.3s;
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

      <div class="row" data-aos="fade-up" data-aos-duration="2000">
          <div class="col l8 m8 s12 offset-l2 offset-m2 offset-s0">
          <div class="divider cdiv grey lighten-3"></div>
          </div>
      </div>

      <div class="row" data-aos="fade-up" data-aos-duration="2000">
        
        <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0">
            <h2 class="header center-align blackText">
              Services
            </h2>
        </div>

        <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0 custom-border-area">
          <div class="divider custom-divider"></div>
        </div>

        <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0">
          <p class="center-align blackText lead">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, 
            or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
             hidden in the middle of text.</p>
        </div>

        <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0">

          <div class="row center-align">
            <div class="col l4 m6 s12">
              <div class="card">
                <div class="card-image custom-hover" >
                  <div class="custom-overlay-discount" style="display:none">

                    <div class="input-field col s12" style="width:100%!important; height:auto!important">
                        <input id="rqrate" type="search" class="z-depth-1" placeholder="Enter Email Address..."/>
                        <button class="custom-btn">Request Rates</button>
                    </div>                   

                  </div>
                  <img src="<?php echo base_url('assets/trips/13.jpeg');?>" >
                  <span class="card-title">Airport Transfer</span>
                </div>
                <div class="card-content">
                  <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action modify-action">
                  <a href="#" class="custom-link">View Packages</a>
                </div>
              </div>
            </div>
            <div class="col l4 m6 s12">
              <div class="card">
                <div class="card-image custom-hover" >
                  <div class="custom-overlay-discount" style="display:none">

                    <div class="input-field col s12" style="width:100%!important; height:auto!important">
                        <input id="rqrate" type="search" class="z-depth-1" placeholder="Enter Email Address..."/>
                        <button class="custom-btn">Request Rates</button>
                    </div>                   

                  </div>
                  <img src="<?php echo base_url('assets/trips/5.jpeg');?>" >
                  <span class="card-title">Taxi</span>
                </div>
                <div class="card-content">
                  <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action modify-action">
                  <a href="#" class="custom-link">View Packages</a>
                </div>
              </div>
            </div>
            <div class="col l4 m6 s12">
              <div class="card">
                <div class="card-image custom-hover" >
                  <div class="custom-overlay-discount" style="display:none">

                    <div class="input-field col s12" style="width:100%!important; height:auto!important">
                        <input id="rqrate" type="search" class="z-depth-1" placeholder="Enter Email Address..."/>
                        <button class="custom-btn">Request Rates</button>
                    </div>                   

                  </div>
                  <img src="<?php echo base_url('assets/trips/3.jpeg');?>" >
                  <span class="card-title">Tours & Excursion</span>
                </div>
                <div class="card-content">
                  <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action modify-action">
                  <a href="#" class="custom-link">View Packages</a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>


      <div class="row grey lighten-5" data-aos="fade-up" data-aos-duration="2000" style="margin-bottom:0px!important;">
        <div class="row whyus valign-wrapper" >
          <div class="overlay2"></div>

          <div class="row cont" >
            <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0">
                  <h2 class="header center-align white-text">
                    Why Choose Us
                  </h2>
              </div>

              <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0 custom-border-area">
                <div class="divider custom-divider"></div>
              </div>

              <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0">
                <p class="center-align lead white-text">It is a long established fact that a reader will be distracted by 
                  the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal 
                  distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. 
                </p>
              </div>

              <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0">
                <div class="row custom-row">
                  <div class="col l3 m6 s12 center-align white z-depth-1 uscont">
                    <div class="col s12 center-ilayer ">
                      <div class="iconlayer">
                        <i class="material-icons search-trigger">terrain</i>
                      </div>
                    </div>
                    <div class="col s12">
                      <h4>Diverse Destinations</h4>
                    </div>
                    <div class="col s12">
                      <p class="center-align blackText">It is a long established fact that a reader will be distracted by 
                        the readable content of a page when looking at its layout. 
                      </p>
                    </div>
                  </div>
                  <div class="col l3 m6 s12 center-align white z-depth-1 uscont">
                    <div class="col s12 center-ilayer ">
                      <div class="iconlayer">
                        <i class="material-icons search-trigger">monetization_on</i>
                      </div>
                    </div>
                    <div class="col s12">
                      <h4>Value For Money</h4>
                    </div>
                    <div class="col s12">
                      <p class="center-align blackText">It is a long established fact that a reader will be distracted by 
                        the readable content of a page when looking at its layout. 
                      </p>
                    </div>
                  </div>
                  <div class="col l3 m6 s12 center-align white z-depth-1 uscont">
                    <div class="col s12 center-ilayer ">
                      <div class="iconlayer">
                        <i class="material-icons search-trigger">wc</i>
                      </div>
                    </div>
                    <div class="col s12">
                      <h4>Passionate Travel</h4>
                    </div>
                    <div class="col s12">
                      <p class="center-align blackText">It is a long established fact that a reader will be distracted by 
                        the readable content of a page when looking at its layout. 
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            
          </div>
        </div>

        <div class="row">

          <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0">

            <div class="row">
              <div class="col l3 m6 s12 center-align stats">
                <h5>20,000</h5>
                <p>Happy Customers</p>
              </div>

              <div class="col l3 m6 s12 center-align stats">
                <h5>420K</h5>
                <p>Trips</p>
              </div>

              <div class="col l3 m6 s12 center-align stats">
                <h5>2000</h5>
                <p>Unique Destinations</p>
              </div>

              <div class="col l3 m6 s12 center-align stats">
                <h5>20+</h5>
                <p>Years Of Experience</p>
              </div>
            </div>

          </div>
          
        </div>
      </div>


      <!-- data-aos="fade-up" data-aos-duration="2000"  -->

      <div class="row" data-aos="fade-up"  data-aos-duration="2000" style="background-color: rgba(35, 32, 32, 1)!important;">
    
          <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0">
              <h2 class="header center-align white-text">
                What Our Clients Say
              </h2>
          </div>

          <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0 custom-border-area">
            <div class="divider custom-divider"></div>
          </div>

          <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0">
          <p class="center-align white-text lead"><em>~ Serving Our Clients Is Essential ~</em></p>
          </div>

          <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0">

            <div class="row  valign-wrapper center-align test-area">

              <div class="col l4 m6 s12 offset-l4 offset-m3 offset-s0">
                <div class="card-panel z-depth-3">
                  <div class="col s12">
                    <img src="https://www.qmul.ac.uk/busman/media/sbm/postgraduate/staff/administrative-staff/profiles/RipaParvin200x200.jpg" alt="no img" width="200px" height="200px" class="circle responsive-img"> <!-- notice the "circle" class -->
                  </div>

                  <div class="col s12">
                    <p class="lead">
                      Shana Brown
                    </p>
                  </div>

                  <div class="col s12">
                    <p class="lead grey-text lighten-3">
                      <em>"Day At Dunns Rivier Falls"</em>
                    </p>
                  </div>

                  <span class="">I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
                  </span>
                </div>
              </div>

            
              
              

              <div class="carousel-controls-custom">
              
                <div class="controller z-depth-1">
                  <i class="material-icons">keyboard_arrow_left</i>
                </div>
                <div class="controller z-depth-1">
                  <i class="material-icons">keyboard_arrow_right</i>
                </div>

              </div>
              

            </div>

            <div class="row  valign-wrapper center-align">

              <div class="col s12 inids">
                <div class="inid"></div>
                <div class="inid inid-active"></div>
                <div class="inid"></div>
                <div class="inid"></div>
              </div>

            </div>

          </div>
        
      </div>
      

      <div class="row" data-aos="fade-up" data-aos-duration="2000">
        
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