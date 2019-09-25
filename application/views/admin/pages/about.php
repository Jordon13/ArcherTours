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
                cursor: pointer;
            }

            .switchsec{
                justify-content: center;
            }

            input[disabled] {pointer-events:none}
        
        </style>
    </head>

    <body>
        <?php navigation($_GET['active']);?>
        <section class="content-area">
            
            <div class="inner-content">

                <div class="row">

                    <div class="col l8 m10 s12 offset-m1 offset-l2 offset-s0" style="margin-top:50px;">

                        <div class="row white image-sec  abt-header-sec z-depth-1">

                            <div class="file-field input-field col s12">
                                <div class="btn blue-grey lighten-2">
                                    <span>Background Image</span></span>
                                    <input type="file" id="file" class="abt" name="_about_us_back_img" disabled>
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" value="<?php echo $data['_about_us_back_img'];?>" placeholder="Change Background Image" disabled>
                                    
                                </div>

                            </div>

                            <div class="col s12">
                                <input id="abt_bck_title" name="_about_us_back_title" class="abt" id="me" type="text" value="<?php echo $data['_about_us_back_title'];?>" disabled/>
                                <label for="abt_bck_title">About Us Header</label>
                            </div>

                        </div>

                        <div class="row white image-sec abt-why-choose-us-sec z-depth-1">

                            <div class="col s12">
                                <textarea id="abt-header-name" name="_about_diverse" type="text" class="abt materialize-textarea" disabled> <?php echo $data['_about_diverse'];?></textarea>
                                <label for="abt-header-name">Diverse Destinations</label>
                            </div>

                            <div class="col s12">
                                <textarea id="abt-header-name" name="_about_value" type="text" class="abt materialize-textarea"  disabled><?php echo $data['_about_value'];?></textarea>
                                <label for="abt-header-name">Value For Money</label>
                            </div>


                            <div class="col s12">
                                <textarea id="abt-header-name" name="_about_passionate" type="text" class="abt materialize-textarea"  disabled><?php echo $data['_about_passionate'];?></textarea>
                                <label for="abt-header-name">Passionate Travel</label>
                            </div>

                            

                        </div>

                        <div class="row white image-sec abt-about-us-msg z-depth-1">

                            <div class="col s12">
                                <input id="abt-header-name" name="_about_title" type="text" class="abt" value="<?php echo $data['_about_title'];?>" disabled/>
                                <label for="abt-header-name">Title</label>
                            </div>

                            <div class="col s12">
                                <textarea id="abt-header-name" name="_about_msg" type="text" class="abt materialize-textarea" disabled><?php echo $data['_about_msg'];?></textarea>
                                <label for="abt-header-name">About Us</label>
                            </div>

                            <div class="file-field input-field col s12">
                                <div class="btn blue-grey lighten-2">
                                    <span>About Us Image</span></span>
                                    <input type="file" id="file1" name="_about_title_img" class="abt"  disabled>
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" value="<?php echo $data['_about_title_img'];?>"  placeholder="Change Background Image"  disabled>
                                    
                                </div>

                            </div>
                            

                        </div>

                        <div class="row white image-sec abt-cs-tally z-depth-1">

                            <div class="col s12">
                                <input id="abt-header-name" name="_about_happy_cus" type="text" class="abt" value="<?php echo $data['_about_happy_cus'];?>" disabled/>
                                <label for="abt-header-name">Happy Customers</label>
                            </div>

                            <div class="col s12">
                                <input id="abt-header-name" name="_about_trips" type="text" class="abt" value="<?php echo $data['_about_trips'];?>" disabled/>
                                <label for="abt-header-name">Trips</label>
                            </div>


                            <div class="col s12">
                                <input id="abt-header-name" name="_about_unique_dest" type="text" class="abt" value="<?php echo $data['_about_unique_dest'];?>" disabled/>
                                <label for="abt-header-name">Unique Destinations</label>
                            </div>

                            <div class="col s12">
                                <input id="abt-header-name" name="_about_years_of_exp" type="text" class="abt" value="<?php echo $data['_about_years_of_exp'];?>" disabled/>
                                <label for="abt-header-name">Years Of Experience</label>
                            </div>

                            <div class="file-field input-field col s12">
                                <div class="btn blue-grey lighten-2">
                                    <span>Stats Background Image</span></span>
                                    <input type="file" name="_about_stat_img" id="file2" class="abt" disabled>
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" value="<?php echo $data['_about_stat_img'];?>" placeholder="Change Background Image" disabled>
                                    <p class="res2"></p>
                                </div>

                            </div>

                            <div class="row valign-wrapper switchsec">
                                <div class="switch">
                                    <label>
                                    Manual Handling
                                    <input type="checkbox" name="SystemHandle" class="abt">
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

    <script>
    
            $('document').ready(function(){

                $('.abt').click(function(){

                    var index = $('.abt').index(this);

                    console.log(index);

                });

                $(".image-sec").on('click', function() {

                    var index = $(".image-sec").index(this);

                    var elementsIndiv = $(`.image-sec:eq(${index})`).find(".abt")
                    .each(function(){
                        $(this).prop('disabled', false);;
                    });

                }).mouseleave(function(){
                    var index = $(".image-sec").index(this);

                    var elementsIndiv = $(`.image-sec:eq(${index})`).find(".abt")
                    .each(function(){
                        $(this).prop('disabled', true);;
                    });
                });


            });

    </script>

</html>