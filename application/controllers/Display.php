<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Display extends CI_Controller {

    function __construct(){
        parent::__construct();
        if(!($this->ses->has_userdata("user_ses"))){
            redirect(site_url("Admin/login")."?error=Unauthorized Access: please login to use services");
        }
    }
        
}
        
    /* End of file  Display.php */
        
                            