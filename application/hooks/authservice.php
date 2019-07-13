<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

    

    function IsLoggedIn()
    {
        $RTR =& load_class('Router');

        if ($RTR->class == "CmsController"){
            echo "You are logged in.";
        }

    }  
?> 