<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->helper('script');

?>
<html lang="en">
<head>
    <title>About</title>
    <?php archerHeader();?>
    <style>
    
    .background-area{
        width: 100%;
        background-image: url(<?php echo base_url('assets/whitebg.jpg')?>);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
       /* background-attachment: fixed;*/
        z-index: 1;
        
    }

    .overlay {
                position: absolute;
                width: 100%;
                height: 100%;
                z-index: 0;
                background-color: rgba(10,10,10,0.5);
                margin: 0px;
                padding: 0px;
            }

            .bkg{
            width: 100%;
            height: 600px;
            background-image: url(<?php echo base_url('assets/about/about.jpg')?>);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
           /* background-attachment: fixed;*/
            z-index: 1;
        }



</style>
</head>
<body class="">

    <?php navBar("about");?>
    <div class="fluid-container col-md-12 bkg">
    </div>
    <div class="container col-xl-12 m-0 p-0">

        <div class="row justify-content-center p-3 m-0" >

            <div class="col-xl-6 p-0 m-0" data-aos="fade-up" >
                <h1 class="h1 text-center w-100">About Us</h1>
                <hr class="my col-lg-3" style="background-color: rgba(255,255,255, 0.7);" />
                <p class=" w-100 text-center lead">
                    We take pride in providing exceptional services to our clients/guests 
                    here in Jamaica. We provide airport transfer to and from Sangster International Airport.
                     We will take care of you and yours the minute you exit the custom area at the ports whether
                     you travel by air or sea No matter how small or how large the group is whether you are here
                     on vacation, business, church or school mission our reliable, knowledgeable, courteous and
                     trustworthy drivers will puntually take care of you and yours from day one to the day you
                     leave We will fullfill your needs for taxi services for any Tours/Excursion or if you just
                     want go on a "JOYRIDE"
                </p>  
            </div>

        </div>
        
        
</div>
    <?php floatingMessage();?>
    
    <?php footer();?>
</body>
</html>