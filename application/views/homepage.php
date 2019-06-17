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
          margin-top: 150px;
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

      <?php main_nav(); ?>

      <div class="fpage">
        <div class="overlay"></div>

        <div class="row cont">
          
         

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
      


      <section>
            "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
            </section>

            <section>
            "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
            </section>

            <section>
            "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
            </section>

            <section>
            "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
            </section>

            <section>
            "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
            </section>

            <section>
            "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
            </section>

            <section>
            "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
            </section>

            <section>
            "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
            </section>


            <section>
            "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
            </section>

            <section>
            "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
            </section>

            <section>
            "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
            </section>

            <section>
            "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
            </section>

            <section>
            "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
            </section> 

    </body>


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