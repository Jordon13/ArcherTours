<?php
use SebastianBergmann\GlobalState\Exception;

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
require_once( 'C:\xampp\htdocs\archertours\vendor\facebook\graph-sdk\src\Facebook\autoload.php' );
ini_set("display_errors", "on");
class Facebook {
  public $ci;
  public $accessToken;
  public $fb;
 
  public function __construct() {
    // Get CI object.
    $this->ci =& get_instance();
 
    $this->fb = new \Facebook\Facebook([
      'app_id' => "664328337419492",
      'app_secret' => "7141e0003b340bc3aa7fd8ede2797de1",
      'default_graph_version' => 'v2.10',
      //'default_access_token' => '{access-token}', // optional
    ]);
  }

  public function login(){
    $helper = $this->fb->getRedirectLoginHelper();
    $permissions = ['email','publish_to_groups','publish_pages','manage_pages'];
    $loginUrl = $helper->getLoginUrl(base_url('/cms/FaceBookHandler'), $permissions);
    echo '<script>window.open("'.$loginUrl.'", "Facebook Popup", "height=500,width=400,resizable=no");</script>';
  }

  public function getAccessToken(){

    $helper = $this->fb->getRedirectLoginHelper();
    
    $accessToken = '';
    
    try {
    
      $accessToken = $helper->getAccessToken();
    
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
    
      return false;
    
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
    
      return false;
    
    }

    $oAuth2Client = $this->fb->getOAuth2Client();

    $tokenMetadata = $oAuth2Client->debugToken($accessToken);

    $tokenMetadata->validateAppId("664328337419492");

    $tokenMetadata->validateExpiration();

    if (! $accessToken->isLongLived()) {
      
      try {
      
        $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
      
      } catch (Facebook\Exceptions\FacebookSDKException $e) {
      
        return false;
      
      }
    }

    if(isset($accessToken) && !empty($accessToken)){
      return $accessToken;
    }
    return false;
  }

  public function setAccessToken($token){
    //$_SESSION['fb_access_token'] = (string) $accessToken;

    $_SESSION['fb_access_token'] = (string) $token->getValue();
    $_SESSION['fb_expires_at'] = "never";//strtotime($token->getExpiresAt()->format('Y-m-d H:i:s'));
  
    try {
    
      $response = $this->fb->get('/me?fields=id,name', (string) $token->getValue());
    
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
    
      return false;
    
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
    
      return false;
    
    }
    
    $user = $response->getGraphUser();

    $_SESSION['fb_user_id'] = $user->getId();


    return array(
      'fb_access_token'=>(string) $token->getValue(),
      'fb_expires_at'=>"never",//strtotime($token->getExpiresAt()->format('Y-m-d H:i:s')),
      'fb_user_id' => $user->getId());
  }

  public function PostBlog($data = NULL){

    try{
      $response = $this->fb->get('me/accounts', $_SESSION['fb_access_token']);
      $response = $response->getDecodedBody();
      $page= json_decode(json_encode($response['data'][0]));

      if(isset($_SESSION['fb_access_token'])){
        $res = $this->fb->post($page->id.'/feed/', $data,	$page->access_token);
        //$res->getDecodedBody()['id']
        $item = array(
          'Message' => $res->getDecodedBody()['id'],
          'Success' => true
        );
        return json_decode(json_encode($item));
      }else{
        echo $this->login();
      }

    }catch(Facebook\Exceptions\FacebookResponseException $e){
      $errorMessage = $e->getMessage();
      if(preg_match("/Duplicate/i", $errorMessage)){
        $item = array(
          'Message' => "You Cannot Have Duplicate Post",
          'Success' => false
        );
        return json_decode(json_encode($item));
      }else{
        $item = array(
          'Message' => "Unexpected Error Has Occured Try Again Later",
          'Success' => false
        );
        return json_decode(json_encode($item));
      }
      
    }

    

    

  }

  public function GetFeedData(){
    try{
      $response = $this->fb->get('me/accounts', $_SESSION['fb_access_token']);
      $response = $response->getDecodedBody();
      $page= json_decode(json_encode($response['data'][0]));

      if(isset($_SESSION['fb_access_token'])){
        $res = $this->fb->get($page->id.'/feed/',	$page->access_token);

        $res = $res->getDecodedBody();
        //echo "Id = ".$res['data'][0]['id'];
        $post = $this->fb->get('/'.$res['data'][0]['id'].'?fields=actions',$page->access_token);
        print_r($post->getDecodedBody());
       // print_r($res);
      }else{
        echo $this->login();
      }

    }catch(Facebook\Exceptions\FacebookResponseException $e){
      print_r($e);//->getMessage();
    }
  }

  public function GetCommentCount($ObjectId){
    try{
      if(isset($_SESSION['fb_access_token'])){
        $response = $this->fb->get('/'.$ObjectId.'/comments?summary=true', $_SESSION['fb_access_token']);
        $result = $response->getDecodedBody()['summary']['total_count'];
        return $result;
      }

      return NULL;

    }catch(Facebook\Exceptions\FacebookResponseException $e){
      return NULL;
    }
  }

  public function GetLikesCount($ObjectId){
    try{
      if(isset($_SESSION['fb_access_token'])){
        $response = $this->fb->get('/'.$ObjectId.'/likes?summary=true', $_SESSION['fb_access_token']);
        $result = $response->getDecodedBody()['summary']['total_count'];
        return $result;
      }

      return NULL;

      }catch(Facebook\Exceptions\FacebookResponseException $e){
        return NULL;
      }
  }

  public function GetSharesCount($ObjectId){
    try{
      if(isset($_SESSION['fb_access_token'])){
      $response = $this->fb->get('/'.$ObjectId.'/sharedposts', $_SESSION['fb_access_token']);
      $response = $response->getDecodedBody();
      return count($response['data']);
    }

    return NULL;

    }catch(Facebook\Exceptions\FacebookResponseException $e){
      return NULL;
    }
}
}