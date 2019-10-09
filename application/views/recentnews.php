<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->helper('section');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Recent Stories</title>
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

          $mime = mime_content_type($filename);

          $exp = explode("/",$mime);

          $type = $exp[0];

          if($type == "image"){
          
        ?>
          <div class="col s12 m6 l4">
            <div class="card">
              <div class="card-image">
                <img class="materialboxed" src="<?php echo site_url("uploads/recent/").$item['recent_file_name'];?>">
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
                </div>

              </div>

              <div class="card-action">

                <div class="row valign-wrapper" style="justify-content:center; margin-bottom:0px;">

                  <div class="col grey-text light-4"><i class="material-icons">thumb_up</i></div>
                  <div class="col grey-text light-4"><i class="material-icons">thumb_down</i></div>

                </div>
              </div>
            </div>
          </div>

        

          <?php }else if($type == "video"){ ?>

              <div class="col s12 m6 l4">
                <div class="card">
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

                      <div class="col grey-text light-4"><i class="material-icons">thumb_up</i></div>
                      <div class="col grey-text light-4"><i class="material-icons">thumb_down</i></div>

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
</html>