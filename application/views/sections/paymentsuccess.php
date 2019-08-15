<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('section');
?>
<!Doctype html>

<html lang="en">
<head>
    <title>Payment Success</title>
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
     
        height: 100%!important;
        width: 100%!important;
        background-attachment: fixed;
        position: relative;
        margin-bottom: 0px!important;
        margin-top: 0px!important;
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

    <div class="row fpage" >
      
      <?php //main_nav();?>
      <div class="col l6 m8 s12 offset-l3 offset-m2 offset-s0"  style="height:100%!important; z-index:4!important; position:relative;">
        <div class="row valign-wrapper" style="height:100%!important;">
          <div class="col l6 m10 s12 offset-l3 offset-m1 offset-s0" >
            <div class="card">
            <div class="card-image white">
                <img width="250" height="250" src="<?php echo base_url('assets/success.png')?>" class="responsive-img">
            </div>
            <div class="card-stacked">
                <div class="card-content">
                
                <p><b>Transaction Id: </b><? echo $result['txn_id']?></p>
                <p><b>Transaction State: </b><? echo $result['txn_state']?></p>
                <p><b>Item Amount: </b><? echo $result['item_quantity']?></p>
                <p><b>Invoice Id: </b><? echo $result['invoice_number']?></p>
                <p><b>Currency: </b><? echo $result['currency']?></p>
                <p><b>Total Price: </b><? echo $result['total_price']?></p>
                </div>
                <div class="card-action center">
                    <a class="waves-effect waves-light btn modal-trigger green darken-3" href="#">Print</a>
                    <a class="waves-effect waves-light btn modal-trigger green darken-3" href="#"onclick="close_window();return false;" id="closeWindow">Close</a>
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>

    </div>


    <script>
    
      $("document").ready(()=>{
        //   $("#closeWindow").on('click',()=>{
              
        //   });
      });


      function close_window(){
        window.close();
      }
    
    </script>
</body>
</html>