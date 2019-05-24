<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('script');
?>

<!Doctype html>


<html>

    <head>
        <title>ViewBlogs</title>
        <?php adminhead();?>

        <style>
        
            .ds p{
                display:flex;
                height:100%;
                align-items: center;
                justify-content: flex-end;
            }

            .b1{
                border-left:1px solid #eceff1;
            }

            .b2{
                border-right:1px solid #eceff1;
                display:flex!important;
                height:100%;
                align-items: center;
                justify-content: flex-end;
            }
        
        
        </style>
    </head>

    <body>
        <?php navigation();?>
        <section class="content-area">
            
            <div class="inner-content">

                <div class="row white z-depth-1 valign-wrapper" style="padding: 0px!important;">


                    <div class="col s9">

                        <div class="col">
                        <input type="text" placeholder="search blogs..."/>
                        </div>

                        <div class="col b1">
                        <input type="date"/>
                        </div>

                        <div class="col">
                        <input type="date"/>
                        </div>


                        <div class="col b2">
                        <button class="btn">send request</button>
                        </div>

                        

                    </div>

                    <div class="col s3 right-align ds">
                        <p>Sort By Date <i class="material-icons">keyboard_arrow_up</i></p>
                    </div>



                </div>

                <div class="divider"></div>

                <div class="row">

                    <div class="col s12 m8 l8 offset-s0 offset-m2 offset-l2">
                        
                        <div class="card ">
                            <div class="card-content">
                            <span class="card-title">Card Title <i class="material-icons">mode_edit</i></span>
                            <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                            <em><span>Date Posted: 33/33/33</span>
                            <span>By: JGayle</span></em>
                        </div>

                    </div>
                    
                    
                    </div>

                    <div class="col s12 m8 l8 offset-s0 offset-m2 offset-l2">
                        
                        <div class="card ">
                            <div class="card-content">
                            <span class="card-title">Card Title<i class="material-icons">mode_edit</i></span>
                            <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                            <em><span>Date Posted: 33/33/33</span>
                            <span>By: JGayle</span></em>
                        </div>

                    </div>
                    
                    
                    </div>


                    <div class="col s12 m8 l8 offset-s0 offset-m2 offset-l2">
                        
                        <div class="card ">
                            <div class="card-content">
                            <span class="card-title">Card Title <i class="material-icons">mode_edit</i></span>
                            <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                            <em><span>Date Posted: 33/33/33</span>
                            <span>By: JGayle</span></em>
                        </div>

                    </div>
                    
                    
                    </div>

                    <div class="col s12 m8 l8 offset-s0 offset-m2 offset-l2">
                        
                        <div class="card ">
                            <div class="card-content">
                            <span class="card-title">Card Title<i class="material-icons">mode_edit</i></span>
                            <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                            <em><span>Date Posted: 33/33/33</span>
                            <span>By: JGayle</span></em>
                        </div>

                    </div>
                    
                    
                    </div>

                </div>


                <div class="row">

                    <div class="col s12 m8 l8 offset-s0 offset-m2 offset-l2 center-align">
                        <div class="col"><p class="active">1</p></div>
                        <div class="col"><p>2</p></div>
                        <div class="col"><p>3</p></div>
                        <div class="col"><p>4</p></div>
                        <div class="col"><p>5</p></div>

                    </div>

                </div>
            </div>

        </section>

        
    </body>
    <?php adminjs();?>

</html>