<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->helper('section');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blogs | check out our blogs to gain insight on the company and to what's our next move in making you happy.</title>
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
    <script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>
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

    .fpage {
        background-image: url(<?php echo base_url('assets/').$pageDetails['_blog_img'];?>);
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
        padding: 0.2em;
        margin-bottom: 1em!important;
      }

      .yel-tex{
        color:#fdd800!important;
      }

    .blogs{
      /* border: 0.9px solid rgba(224,224,224 ,1);
      background-color: rgba(35, 32, 32, 1)!important; */
      flex-flow: row wrap;
      align-items: center;
    }

    .social-stats{
      /* padding:0.3em!important; */
      font-size: 14px;
    }

    /* .social-stats p{
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-right:15px;
    }

    .social-stats p i{
      margin-right: 10px;
    }

    .h1text a{
      color:white;
      text-decoration: underline;
    } */


</style>
<body class="">

    <?php main_nav(); ?>
    <div class="row fpage">
      <div class="overlay"></div>
      
      <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0 center"  style="height:100%!important; z-index:4!important; position:relative;">
        <div class="row valign-wrapper" style="height:100%!important;">
          <div class="col s12" >
          <h5 class="white-text"><a class="custom-hone-link" href="<?php echo site_url('/')?>">Home</a> | <span style="color:rgba(255,255,255,0.8)!important;">Blogs</span></h5>
            <h1 class="white-text header"><?php echo $pageDetails['_blog_back_title'];?></h1>
          </div>
        </div>
      </div>

      

    </div>

    <div class="row valign-wrapper blogs">
    {data}

        <div class="col s12 l3 m4 item">
        <div class="card">
          <div class="card-image">
            <img src="{image}" alt="no image" class="">
          </div>
          <div class="card-content">

           <a class="" href="{url}"><b>{catch}</b></a> | <a class="" href="{url}"><b>{tags}</b></a> <!--<p class="">TAGS: <em>{tags}</em></p> -->
          <p class="grey-text lighten-1 social-stats">on {created} / <em>by {fullname}</em></p>

          <span class="card-title" style="padding-top:0.3em!important;padding-bottom:0.3em!important;"><a class="black-text" href="{url}">{title}</a></span>
            <p class="">{content}</p>
            
            
          <div class="card-action center-align">
            <a href="{url}">Continue Reading</a>
          </div>
        </div>
      </div>
      </div>

    {/data}

      
  </div>
    <?php main_footer(); ?>
</body>
</html>

<script>

    var loadCount = 0;

    const incremntBy = 8;

    $("document").ready(function(){
      $(window).scroll(function() {
        if($(window).scrollTop() + $(window).height() == $(document).height()) {
            $.get('<?php echo site_url("/client/GetMoreBlogs")?>'+'?position=' + nextPage(), function(datas){

                if(datas == 0){
                  return;
                }

                var data = JSON.parse(datas);
                z = 500;
                for(x = 0; x < data.length; x++){

                    z+=500;

                    $(`<div class="col s12 l3 m4 item" data-aos="fade-up" >
                      <div class="card">
                        <div class="card-image">
                          <img src="${data[x].image}" alt="no image" class="">
                        </div>
                        <div class="card-content">

                        <a class="" href="${data[x].url}"><b>${data[x].catch}</b></a> | <a class="" href="${data[x].url}"><b>${data[x].tags}</b></a> <!--<p class="">TAGS: <em>${data[x].tags}</em></p> -->
                        <p class="grey-text lighten-1 social-stats">on ${data[x].created} / <em>by ${data[x].fullname}</em></p>

                        <span class="card-title" style="padding-top:0.3em!important;padding-bottom:0.3em!important;"><a class="black-text" href="${data[x].url}">${data[x].title}</a></span>
                          <p class="">${data[x].content}</p>
                          
                          
                        <div class="card-action center-align">
                          <a href="${data[x].url}">Continue Reading</a>
                        </div>
                      </div>
                    </div>
                    </div>`).appendTo(".blogs").fadeIn(1000);
                }

          });
        }
      });
    });


    var nextPage = () =>{
      loadCount = loadCount+1;
      return loadCount * incremntBy;
    }



    

</script>