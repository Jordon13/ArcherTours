<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->helper('script');

?>
<html lang="en">
<head>
    <title>Contact</title>
    <?php archerHeader();?>

    <style>
    
        .background-area{
            width: 100%;
            height: 1000px;
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
            background-image: url(<?php echo base_url('assets/contact/contact.jpg')?>);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
           /* background-attachment: fixed;*/
            z-index: 1;
        }

    </style>
</head>
<body class="">
    
    <?php floatingMessage();?>
    <?php navBar("contact");?>

    <div class="fluid-container col-md-12 bkg">
    </div>
    <section class="container col-md-12 m-0 p-0">
        

        <div class="row  p-4 m-0 h-100">
        
            <div class="col p-0 m-0">
                <div class="container col-lg-4 p-0" style="height: auto;" data-aos="fade-up">
                    <h3 class="h2 p-2 text-white text-center m-0" style="background-color: #388E3C;">Contact Us <i class="fa fa-mobile" aria-hidden="true"></i></h3>
                    <form class="col-lg-12 border rounded m-0">
                        <div class="form-row p-4">
                            
                            <div class="input-group mb-3 input-group-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-success"><i class="fa fa-user-o fa-2x" aria-hidden="true"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Firstname">
                            </div>

                            <div class="input-group mb-3 input-group-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-success"><i class="fa fa-user-o fa-2x" aria-hidden="true"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Lastname">
                            </div>

                            <div class="input-group mb-3 input-group-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-success"><i class="fa fa-at fa-2x" aria-hidden="true"></i></span>
                                </div>
                                <input type="email" class="form-control" placeholder="Email Address">
                            </div>

                            <div class="input-group mb-3 input-group-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-success"><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Your Address">
                            </div>

                            <div class="input-group mb-3 input-group-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-success"><i class="fa fa-mobile fa-2x" aria-hidden="true"></i></span>
                                </div>
                                <input type="number" class="form-control" placeholder="Phone Number">
                            </div>

                            <div class="input-group mb-3 input-group-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-success"><i class="fa fa-comments-o fa-2x" aria-hidden="true"></i></span>
                                </div>
                                <textarea class="form-control" id="formGroupExampleInput3" placeholder="Message"></textarea>
                            </div>

                            <div class="row w-100 justify-content-center">
                                <div class="">
                                    <button type="button" class="btn btn-outline-success text-lg p-2" style="" >Send Message</button>
                                </div>
                            </div>
                        

                        </div>
                        
                    </form>
                </div>
            </div>
            
        </div>
        

    </section>
    
    <?php footer();?>
</body>
</html>