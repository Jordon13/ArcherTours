<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->helper('section');

$fb = new \Facebook\Facebook([
  'app_id' => "664328337419492",
  'app_secret' => "7141e0003b340bc3aa7fd8ede2797de1",
  'default_graph_version' => 'v2.10',
  //'default_access_token' => '{access-token}', // optional
]);
# fb-login-callback.php
$jsHelper = $fb->getJavaScriptHelper();
// @TODO This is going away soon
$facebookClient = $fb->getClient();

print_r($jsHelper);

try {
    $accessToken = $jsHelper->getAccessToken($facebookClient);
} catch(Facebook\Exceptions\FacebookResponseException $e) {
    // When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage();
    return;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
    // When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    return;
}

if (isset($accessToken)) {
    echo (string) $accessToken;
    return;
} else {
  echo "loginfailed";
  return;
    // Unable to read JavaScript SDK cookie
}
?>
<html lang="en">
<head>
    <title>blogger-blogging-jm</title>
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
          <div class="col s12" >
          <h5 class="white-text"><a class="custom-hone-link" href="<?php echo site_url('/')?>">Home</a> | <span style="color:rgba(255,255,255,0.8)!important;">Blogs</span></h5>
            <h1 class="white-text header">Our Blogs</h1>
          </div>
        </div>
      </div>

    </div>
    <?php main_footer(); ?>
</body>
</html>