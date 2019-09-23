<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
if(!($this->ses->has_userdata("user_ses"))){
    redirect(site_url("Admin/login")."?error=Unauthorized Access: please login to use services");
}else{
    $this->load->helper('script');
}
// phpinfo();
?>

<!Doctype html>


<html>

    <head>
        <title>About</title>
        <?php adminhead();?>

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

            .content-area{
                height: auto!important;
                min-height: 100%;
            }

            .inner-content{
                margin-top: 2em;
                height: auto!important;
                min-height: 100%!important;
            }
        
            .image-sec{
                border-radius:10px;
            }

            .switchsec{
                justify-content: center;
            }
        
        </style>
    </head>

    <body>
        <?php navigation($_GET['active']);?>
        <section class="content-area">
            
            <div class="inner-content">

                <div class="row">

                    <div class="col l8 m10 s12 offset-m1 offset-l2 offset-s0" style="margin-top:15px;">

                        <div class="row white image-sec z-depth-1">

                            <div class="file-field input-field col s12">
                                <div class="btn blue-grey lighten-2">
                                    <span>Background Image</span></span>
                                    <input type="file" id="file" class="fl" multiple>
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Change Background Image">
                                    <p class="res2"></p>
                                </div>

                            </div>
                            
                            <div class="col s12">
                                <input type="text" placeholder="or image url (optional)"/> 
                            </div>

                            <div class="col s12">
                                <input id="abt-header-name" type="text" value="About Us" disabled/>
                                <label for="abt-header-name">About Us Header</label>
                            </div>

                        </div>

                        <div class="row white image-sec why-choose-us-sec z-depth-1">

                            <div class="col s12">
                                <input id="abt-header-name" type="text" value="About Us" disabled/>
                                <label for="abt-header-name">Diverse Destinations</label>
                            </div>

                            <div class="col s12">
                                <input id="abt-header-name" type="text" value="About Us" disabled/>
                                <label for="abt-header-name">Value For Money</label>
                            </div>


                            <div class="col s12">
                                <input id="abt-header-name" type="text" value="About Us" disabled/>
                                <label for="abt-header-name">Passionate Travel</label>
                            </div>

                            

                        </div>

                        <div class="row white image-sec abt-cs-tally z-depth-1">

                            <div class="col s12">
                                <input id="abt-header-name" type="text" value="About Us" disabled/>
                                <label for="abt-header-name">Title</label>
                            </div>

                            <div class="col s12">
                                <input id="abt-header-name" type="text" value="About Us" disabled/>
                                <label for="abt-header-name">About Us</label>
                            </div>

                            <div class="file-field input-field col s12">
                                <div class="btn blue-grey lighten-2">
                                    <span>Background Image</span></span>
                                    <input type="file" id="file" class="fl" multiple>
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Change Background Image">
                                    <p class="res2"></p>
                                </div>

                            </div>
                            

                        </div>

                        <div class="row white image-sec abt-cs-tally z-depth-1">

                            <div class="col s12">
                                <input id="abt-header-name" type="text" value="About Us" disabled/>
                                <label for="abt-header-name">Happy Customers</label>
                            </div>

                            <div class="col s12">
                                <input id="abt-header-name" type="text" value="About Us" disabled/>
                                <label for="abt-header-name">Trips</label>
                            </div>


                            <div class="col s12">
                                <input id="abt-header-name" type="text" value="About Us" disabled/>
                                <label for="abt-header-name">Unique Destinations</label>
                            </div>

                            <div class="col s12">
                                <input id="abt-header-name" type="text" value="About Us" disabled/>
                                <label for="abt-header-name">Years Of Experience</label>
                            </div>

                            <div class="file-field input-field col s12">
                                <div class="btn blue-grey lighten-2">
                                    <span>Background Image</span></span>
                                    <input type="file" id="file" class="fl" multiple>
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Change Background Image">
                                    <p class="res2"></p>
                                </div>

                            </div>

                            <div class="row valign-wrapper switchsec">
                                <div class="switch">
                                    <label>
                                    Manual Handling
                                    <input type="checkbox">
                                    <span class="lever"></span>
                                    System Handling
                                    </label>
                                </div>
                            </div>

                            

                        </div>

                        

                    </div>


                </div>

            </div>

        </section>

        
    </body>
    <?php adminjs();?>

</html>