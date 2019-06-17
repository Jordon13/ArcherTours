<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!Doctype html>
<html lang="en">

    <head>

      <script src="https://code.jquery.com/jquery-3.4.0.js" integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin="anonymous"></script>
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">  
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Mali&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Dekko|Gamja+Flower|Itim|Merienda+One|Patrick+Hand+SC|Sriracha&display=swap" rel="stylesheet">

    

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

        nav{
          background-color: transparent!important;
        }

        .links li a{
          font-size: 20px!important;
          padding-right: 0.5em!important;
        }

        .fpage{

          background-image: url(<?php echo base_url('assets/17.jpg')?>);
          background-size: cover;
          background-repeat: no-repeat;
          background-position: center;
          height:100%!important;
          width:100%!important;
          
        }

        .overlay{
          top:0px;
          background-color: rgba(0,0,0,0.4);
          height: 100%;
          position: absolute;
          width: 100%;
          z-index: 2!important;
        }

        .cont{
          position: relative;
          height:100%!important;
          width:100%!important;
          z-index: 3!important;
          margin-bottom: 0px!important; 
        }

        .nbody{
          height: 100px;
          background-color: rgba(255,100,22,0.4);
        }

        .nitems{
          display:flex;
          height: 100%!important;
        }

        .nitems li{
          padding: 1em;
          font-size: 19px;
          cursor:pointer;
          
        }

        .nitems li:hover{
          border-bottom: 2px solid white;
        }

        .nitems li a{
          color: white;
        }

        .logo{
          padding:1em!important;
          height: 100%;
          background-color: rgba(255,255,255 ,0.8);
          padding: 1em;
          font-size: 1.4vw;
          font-weight: bolder;
          color:rgba(2,136,209 ,1);
          font-family: 'Merienda One', cursive;
          border-bottom-right-radius: 15px;
          border-bottom-left-radius: 15px;
        }

        .ncontent{
          height: auto;
          
        }

        .myhead{
          /* margin-top:1000px!important; */
          font-family: 'Merienda One', cursive!important;
          text-shadow: 2px 2px 3px rgba(58,58,58,0.89);
          font-size: 70px;
        }

        .ltext{
          color: white;
          font-size: 18px;
          padding:0.5em;
         
          /* font-style: italic; */
        }

        .mbtn{
          /* padding: 1em; */
        }

        .booknow{
          border-radius:30px;
          /* padding: 1em!important; */
          vertical-align: center!important;
          /* height: 50px; */
          background-color: rgba(2,136,209 ,1);
          font-family: 'Merienda One', cursive!important;
          animation: bounce 2s infinite ease-in-out;
        }

        .mybtn{
          border-radius:30px;
          background-color: transparent;
          border: 1px solid white;
        }

        .mybtn:hover{
          background-color: rgba(255,255,255 ,1)!important;
          color: rgba(2,136,209 ,1);
        }

        .mybtn:focus{
          background-color:transparent!important;
          color: rgba(255,255,255 ,1);
        }

        .booknow:hover{
          background-color: rgba(1,87,155 ,1)!important;
        }

        .booknow:focus{
          background-color: rgba(2,136,209 ,1);
        }


        /* @-webkit-keyframes bounce {
            0% { transform: translateY(-5px)  }
            50% { transform: translateY(4px) }
            100% { transform: translateY(-5px) }
        } */

        @keyframes bounce {
            0% { transform: translateY(-1px)  }
            50% { transform: translateY(2px) }
            100% { transform: translateY(-1px) }
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
        
        .nbody:last-child{
          display: flex!important;
          align-items:center!important;
        }

        .ico{
          font-size: 20px!important;
        }
        
        

      </style>
    </head>

    <body>

      <!-- First Page -->

      
      <div class="navbar-fixed" style="display:none">
        <nav class="z-depth-0 blue">
          <div class="nav-warpper">
          <a href="#" data-target="mobile-demo" class="sidenav-trigger white-text"><i class="material-icons">menu</i></a>
            <a href="#!" class="hide-on-med-and-down">Home</a>
            <ul class="right hide-on-med-and-down links">
              <li><a href="sass.html">Services</a></li>
              <li><a href="badges.html">Gallery</a></li>
              <li><a href="badges.html">About</a></li>
              <li><a href="badges.html">Contact</a></li>
              <li><a href="badges.html">Blog</a></li>
            </ul>
          </div>
        </nav>
      </div>

      <ul class="sidenav" id="mobile-demo">
        <li><a href="sass.html">Services</a></li>
        <li><a href="badges.html">Gallery</a></li>
        <li><a href="badges.html">About</a></li>
        <li><a href="badges.html">Contact</a></li>
        <li><a href="badges.html">Blog</a></li>
      </ul>

      <div class="fpage">
        <div class="overlay"></div>

        <div class="row cont">
          
          <div class="col l10 offset-l1 white-text nbody hide-on-med-and-down">
          
            <div  class="col l2 logo center-align z-depth-1">
              <!-- <img src="<?php echo base_url('assets/logo1.png');?>" width="100%"/> -->
              Archer 1062<br/>Tours
            </div>

            <div class="col l10 bd">
              <ul class="right nitems">
                <li><a href="sass.html">Home</a></li>
                <li><a href="sass.html">Services</a></li>
                <li><a href="badges.html">Gallery</a></li>
                <li><a href="badges.html">About</a></li>
                <li><a href="badges.html">Contact</a></li>
                <li><a href="badges.html">Blog</a></li>
              </ul>
            </div>
            

          </div>

          <div class="col l10 offset-l1 white-text nbody">
            <a href="#" data-target="mobile-demo" class="sidenav-trigger white-text ico"><i class="material-icons">menu</i></a>
          </div>

          <div class="col s12 ncontent">

            <div  data-aos="zoom-in-down" data-aos-delay="400"
     data-aos-offset="0" class="col l6 m8 s12 offset-l3 offset-m2 offset-s0 center-align">
              <h1 class="header myhead white-text">Welcome</h1>
            </div>

            <div class="row mbtn" data-aos="zoom-in" data-aos-delay="800"
     data-aos-offset="0">
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

            <div class="row mbtn" >
              <div class="col l6 m8 s12 offset-l3 offset-m2 offset-s0 center-align">
                <button class="booknow btn btn-large waves-effect waves-light">Book Now</button>
              </div>
            </div>

          </div>


        </div>
        
      </div>
      

      <!-- <div class="row cont">
        <div class="col l6 offset-l3 white-text">
          dadsd
        </div>
      </div> -->

    </body>

    <script type="text/javascript">
    
        $(document).ready(function(){
          $('.sidenav').sidenav();
        });

        
    </script>

<script>
  AOS.init();
</script>


  <script type="text/javascript">
      
      var counter = 0;

      $(document).ready(function(){

        

        for(x = 0; x < $('.contents').length-1; x++){
          $('.indicators').append('<div class="indicator"></div>');
        }

        //animateDivs();

        indicatorChange();

      });


      var animateDivs = () =>{

          var divs = $('.contents');
          var indicators = $('.indicator');

          console.log("Indicator Length: "+indicators.length);
          
          var divCount = divs.length;
          var count = 0;
          var firstrun = true;
          var divSlide = setInterval(() => {

            

            if(firstrun){
              count = 1;
              $(divs).fadeOut(1000);
              $(divs).eq(count).delay(1000-2).fadeIn(2000);
              $(indicators).removeClass('indicator-active');
              $(indicators).eq(count).addClass('indicator-active');
              firstrun = false;
            }else{

                $(divs).fadeOut(1000);
                $(divs).eq(count).delay(1000-2).fadeIn(2000);
                $(indicators).removeClass('indicator-active');
                $(indicators).eq(count).addClass('indicator-active');
            }

            count++
            if(count == divCount){
              count = 0;
            }
            console.log(count);

          }, 10000);

      }

      var indicatorChange = () =>{

          var divs = $('.contents');
          var indicators = $('.indicator');

          console.log("Indicator Length: "+indicators.length);
            
          var divCount = divs.length;
        
          var firstrun = true;

          

          $(indicators).click(function(){
            
            var currentIndex = indicators.index(this);

            $(divs).fadeOut(500);
            $(divs).eq(currentIndex).delay(500-5).fadeIn(1000);
            $(indicators).removeClass('indicator-active');
            $(indicators).eq(currentIndex).addClass('indicator-active');
          });

          

      }
      
  </script>
</html>