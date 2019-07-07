<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
if(!($this->ses->has_userdata("user_ses"))){
    redirect(site_url("Admin/login")."?error=Unauthorized Access: please login to use services");
}else{
    $this->load->helper('script');
}
?>

<!Doctype html>


<html>

    <head>
        <title>Contact</title>
        <?php adminhead();?>
    </head>

    <body>
        <?php navigation();?>
        <section class="content-area">
            
            <div class="inner-content">

            </div>

        </section>

        
    </body>
    <?php adminjs();?>

</html>