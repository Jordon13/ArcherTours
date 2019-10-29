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
        <title>Calender</title>
        <?php adminhead();?>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
        <style>

          .input-field input:+label{
              color: rgba(224,224,224 ,1);
          }

          .row .input-field input{
              border-bottom: 0.5px solid rgba(224,224,224 ,1) !important;
              box-shadow: 0 0.5px 0 0 rgba(224,224,224 ,1) !important
          }

          .input-field input:focus + label {
              color: rgba(3,169,244 ,1) !important;
          }

          .row .input-field textarea{
              border-bottom: 0.5px solid rgba(224,224,224 ,1) !important;
              box-shadow: 0 0.5px 0 0 rgba(224,224,224 ,1) !important
          }

          .input-field textarea:focus + label {
              color: rgba(3,169,244 ,1) !important;
          }

          .row .input-field textarea:focus {
              border-bottom: 0.5px solid rgba(3,169,244 ,1) !important;
              box-shadow: 0 0.5px 0 0 rgba(3,169,244 ,1) !important
          }

          .row .input-field input:focus {
              border-bottom: 0.5px solid rgba(3,169,244 ,1) !important;
              box-shadow: 0 0.5px 0 0 rgba(3,169,244 ,1) !important
          }

          .bcenter{
              display: flex;
              justify-content: center;
              width: 100%;
          }

          /* .content-area{
              height: auto!important;
              min-height: 100%;
          }

          .inner-content{
              margin-top: 2em;
              height: auto!important;
              min-height: 100%!important;
          } */

          table tbody tr td{
              border: 1px solid gray!important;
              padding: 2.7em!important;
          }

          table {
              background-color: rgba(255,255,255,0.8);
              border-radius: 10px!important;
              padding:0.5em!important;
          }

        </style>
    </head>

    <body>
        <?php navigation($_GET['active']);?>
        <section class="content-area">

            <div class="inner-content">
                <?php print_r($data); ?>
            
            </div>

        </section>


    </body>
    <?php adminjs();?>
    <script>
        
    </script>

</html>
