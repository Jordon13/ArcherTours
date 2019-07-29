<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
// Autoload the required files
require_once( 'C:\xampp\htdocs\archertours\vendor\facebook\graph-sdk\src\Facebook\autoload.php' );
 
// Make sure to load the Facebook SDK for PHP via composer or manually
 
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
    $permissions = ['email','publish_to_groups','publish_pages']; // Optional permissions
    $loginUrl = $helper->getLoginUrl(base_url('/admin/callback'), $permissions);
    return $loginUrl;
  }

  public function getAccessToken(){

  }

  public function setAccessToken(){

  }

  public function getName(){
    try {
        // Returns a `Facebook\FacebookResponse` object
        $response = $this->fb->get('/me?fields=id,name', $_SESSION['fb_access_token']);
      } catch(Facebook\Exceptions\FacebookResponseException $e) {
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
      } catch(Facebook\Exceptions\FacebookSDKException $e) {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
      }
      
      $user = $response->getGraphUser();
      
      echo 'Name: ' . $user['name'];
  }
}