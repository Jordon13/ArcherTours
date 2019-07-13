<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->helper('section');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Service | Tours</title>
    <?php main_head();?>

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
        background-image: url(<?php echo base_url('assets/31.jpg')?>);
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

</head>
<body class="">

    <?php main_nav(); ?>

    <div class="row fpage">
      <div class="overlay"></div>
      
      <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0 center"  style="height:100%!important; z-index:4!important; position:relative;">
        <div class="row valign-wrapper" style="height:100%!important;">
          <div class="col s12" >
          <h5 class="white-text"><a class="custom-hone-link" href="<?php echo site_url('/')?>">Home</a> | <span style="color:rgba(255,255,255,0.8)!important;">Tours</span></h5>
            <h1 class="white-text header">Tours & Excursion</h1>
          </div>
        </div>
      </div>

  </div>
    
    <div class="row">
        
        <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0">
            <div class="row">

                <div class="col l4 m12 s12">
                    <div class="card sticky-action">
                        

                        <div class="card-image waves-effect waves-block waves-light">
                            <span class="card-title" style="font-size:20px!important;">Jimmy Cliff Boulevard (One Way Trip)</span>
                            <img class="activator" src="https://materializecss.com/images/office.jpg">
                        </div>

                        <div class="card-content">
                            <span class="activator grey-text text-darken-4">Depart From Montego Bay<i class="material-icons right">more_vert</i></span>
                            <br/>
                            <p>Price: USD $15 (1 - 4 passengers )</p>
                        </div>

                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Additional Information<i class="material-icons right">close</i></span>
                            <p>All inclusive of lunch, open bar, snorkeling, cliff jumping, swimming, live reggae band and transportation. </p>
                        </div>

                        

                        <div class="card-action center"><a href="#">Book Now</a></div>

                    </div>
                </div>

                <div class="col l4 m12 s12">
                    <div class="card sticky-action">
                        

                        <div class="card-image waves-effect waves-block waves-light">
                            <span class="card-title" style="font-size:20px!important;">Jimmy Cliff Boulevard (One Way Trip)</span>
                            <img class="activator" src="https://materializecss.com/images/office.jpg">
                        </div>

                        <div class="card-content">
                            <span class="activator grey-text text-darken-4">Depart From Montego Bay<i class="material-icons right">more_vert</i></span>
                            <br/>
                            <p>Price: USD $15 (1 - 4 passengers )</p>
                        </div>

                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Additional Information<i class="material-icons right">close</i></span>
                            <p>Each additional person  USD $4</p>
                            <p>Kids Special</p>
                        </div>

                        

                        <div class="card-action center"><a href="#">Book Now</a></div>

                    </div>
                </div>

                <div class="col l4 m12 s12">
                    <div class="card sticky-action">
                        

                        <div class="card-image waves-effect waves-block waves-light">
                            <span class="card-title" style="font-size:20px!important;">Jimmy Cliff Boulevard (One Way Trip)</span>
                            <img class="activator" src="https://materializecss.com/images/office.jpg">
                        </div>

                        <div class="card-content">
                            <span class="activator grey-text text-darken-4">Depart From Montego Bay<i class="material-icons right">more_vert</i></span>
                            <br/>
                            <p>Price: USD $15 (1 - 4 passengers )</p>
                        </div>

                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Additional Information<i class="material-icons right">close</i></span>
                            <p>Each additional person  USD $4</p>
                            <p>Kids Special</p>
                        </div>

                        

                        <div class="card-action center"><a href="#">Book Now</a></div>

                    </div>
                </div>

            </div>
        </div>

    </div>

    <?php main_footer(); ?>
</body>
</html>