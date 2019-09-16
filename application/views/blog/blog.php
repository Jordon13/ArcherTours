<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->helper('section');
?>
<html lang="en">
<head>
    <title>Blogs</title>
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
        background-image: url(<?php echo base_url('assets/24.jpg')?>);
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
            <h1 class="white-text header">Our Blogs</h1>
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

                for(x = 0; x < data.length; x++){
                    $(`<div class="col s12 l3 m4 item">
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