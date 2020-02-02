<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->helper('section');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Recent Stories | view our recent places leave a like</title>
    <?php main_head();?>
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
      background-image: url(<?php echo base_url('assets/').$data['_news_img']?>);
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

      .tup,.dup{
        cursor:pointer;
      }

      .tup:hover{
        color: rgba(0,160,10,0.6);
      }

      .tup:visited{
        color: rgba(0,160,10,0.6);
      }

      .dup:hover{
        color: rgba(160,0,10,0.6);
      }

      .dup:visited{
        color: rgba(160,0,10,0.6);
      }
      
      .bgt{
          background-color: rgba(0,0,0,0.8);
          width:100%!important;
          font-size:15px!important;
      }


</style>
<body class="">

    <?php main_nav(); ?>
    <div class="row fpage">
      <div class="overlay"></div>
      
      <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0 center"  style="height:100%!important; z-index:4!important; position:relative;">
        <div class="row valign-wrapper" style="height:100%!important;">
          <div class="col s12">
          <h5 class="white-text"><a class="custom-hone-link" href="<?php echo site_url('/')?>">Home</a> | <span style="color:rgba(255,255,255,0.8)!important;">News</span></h5>
            <h1 class="white-text header"><?php echo $data['_news_title'];?></h1>
          </div>
          
        </div>
        
      </div>

    </div>

    <div class="container">
      <div class="row">

      <?php foreach($items as $item){ ?>

        <?php 
        
        
          
          $filename = FCPATH."uploads/recent/".$item['recent_file_name'];
            
            if(file_exists ($filename)){
                 $mime = mime_content_type($filename);

                  $exp = explode("/",$mime);
        
                  $type = $exp[0];
            }else{
                $type == "";
            }   
    
         

          if($type == "image"){
          
        ?>
          <div class="col s12 m6 l4">
            <div class="card" onclick="view(<?php echo $item['auto_generated_id']?>)">
              <div class="card-image">
                <img width="300" height="250" class="materialboxed" src="<?php echo site_url("uploads/recent/").$item['recent_file_name'];?>">
                <span class="card-title bgt"><?php echo $item['recent_title'];?></span>
              </div>
              <div class="card-content">
                <p><?php echo $item['recent_desc'];?></p>
              </div>
              <div class="card-action">
                
                <div class="row valign-wrapper" style="justify-content:space-evenly; align-items:center;margin-bottom:0px;">

                  <div class="col grey-text light-4">
                    <p>Likes: <?php echo $item['recent_likes'];?></p>
                  </div>
                  <div class="col grey-text light-4">
                    <p>Dislikes: <?php echo $item['recent_dislikes'];?></p>
                  </div>
                </div>

              </div>

              <div class="card-action">

                <div class="row valign-wrapper" style="justify-content:center; margin-bottom:0px;">

                  <div class="col grey-text light-4" onclick="like(<?php echo $item['auto_generated_id']?>)"><i class="material-icons tup">thumb_up</i></div>
                  <div class="col grey-text light-4" onclick="dislike(<?php echo $item['auto_generated_id']?>)"><i class="material-icons dup">thumb_down</i></div>

                </div>
              </div>
            </div>
          </div>

        

          <?php }else if($type == "video"){ ?>

              <div class="col s12 m6 l4">
                <div class="card" onclick="view(<?php echo $item['auto_generated_id']?>)">
                  <div class="card-image">
                    <video controls class="player materialboxed" data-caption="" id="player1"
                    width="100%" loop muted poster=""
                    preload="auto" src="<?php echo site_url("uploads/recent/").$item['recent_file_name'];?>"
                    tabindex="0" title="MediaElement">
                    </video>
                    <span class="card-title"><?php echo $item['recent_title'];?></span>
                  </div>
                  <div class="card-content">
                    <p><?php echo $item['recent_desc'];?></p>
                  </div>
                  <div class="card-action">
                    

                    

                    <div class="row valign-wrapper" style="justify-content:space-evenly; align-items:center;margin-bottom:0px;">

                      <div class="col grey-text light-4">
                        <p>Likes: <?php echo $item['recent_likes'];?></p>
                      </div>
                      <div class="col grey-text light-4">
                        <p>Dislikes: <?php echo $item['recent_dislikes'];?></p>
                      </div>
                      <div class="col grey-text light-4">
                        <p>Views: <?php echo $item['recent_views'];?></p>
                      </div>
                    </div>

                    <!-- <div class="divider"></div> -->
                    
                    

                    
                  </div>

                  <div class="card-action">

                    <div class="row valign-wrapper" style="justify-content:center; margin-bottom:0px;">

                      <div class="col grey-text light-4" onclick="like(<?php echo $item['auto_generated_id']?>)"><i class="material-icons tup">thumb_up</i></div>
                      <div class="col grey-text light-4" onclick="dislike(<?php echo $item['auto_generated_id']?>)"><i class="material-icons dup">thumb_down</i></div>

                    </div>
                  </div>
                </div>
              </div>

          <?php }?>
      <?php }?>
      </div>
    </div>


    
    <?php main_footer(); ?>
</body>


<script>


            var like = (id) =>{

              $.post('<?php echo site_url('client/like')?>', {id:id}, function(data){
                console.log(data);
              });

            }


            var dislike = (id) =>{
              $.post('<?php echo site_url('client/dislike')?>', {id:id}, function(data){
                //console.log(data);
              });
            }

            var view = (id) =>{
              $.post('<?php echo site_url('client/view')?>', {id:id}, function(data){
                //console.log(data);
              });
            }

</script>
</html>

