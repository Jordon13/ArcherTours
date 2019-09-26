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

            /* input:+label{
                color: rgba(224,224,224 ,1);
            }

            input{
                border-bottom: 0.5px solid rgba(224,224,224 ,1) !important;
                box-shadow: 0 0.5px 0 0 rgba(224,224,224 ,1) !important
            }

            input:focus + label {
                color: rgba(3,169,244 ,1) !important;
            }

            textarea{
                border-bottom: 0.5px solid rgba(224,224,224 ,1) !important;
                box-shadow: 0 0.5px 0 0 rgba(224,224,224 ,1) !important
            }

            textarea:focus + label {
                color: rgba(3,169,244 ,1) !important;
            }

            textarea:focus {
                border-bottom: 0.5px solid rgba(3,169,244 ,1) !important;
                box-shadow: 0 0.5px 0 0 rgba(3,169,244 ,1) !important
            }

            input:focus {
                border-bottom: 0.5px solid rgba(3,169,244 ,1) !important;
                box-shadow: 0 0.5px 0 0 rgba(3,169,244 ,1) !important
            } */

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

                            <div class="col s12 hidden_btn center-align" style="display:none;">
                                <div class="row">
                                    <button class="btn waves-effect waves-light green save_btn" onclick="save()">Save</button>
                                </div>
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

                            <div class="col s12 hidden_btn center-align" style="display:none;">
                                <div class="row">
                                    <button class="btn waves-effect waves-light green save_btn" onclick="save()">Save</button>
                                </div>
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
                            
                            <div class="col s12 hidden_btn center-align" style="display:none;">
                                <div class="row">
                                    <button class="btn waves-effect waves-light green save_btn" onclick="save()">Save</button>
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

                            <div class="col s12 hidden_btn center-align" style="display:none;">
                                <div class="row">
                                    <button class="btn waves-effect waves-light green save_btn" onclick="save()">Save</button>
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
            let map = new Map();

            let imgs = new Map();
    
            $('document').ready(function(){

                $('.abt').click(function(){

                    var index = $('.abt').index(this);

                    console.log(index);

                });

                $('.abt').on('change',function(){

                    var index = $('.abt').index(this);

                    var image = $('.abt').eq(index).attr('type');

                    var val = $(".abt").eq(index).val();

                    var attrValue = $(`.abt:eq(${index})`).attr('name');

                    if(image  == "file"){

                        var attrValue = $(`.abt:eq(${index})`).attr('name');

                        imgs.set(attrValue,val);

                        console.log(imgs);

                        return;
                    }

                    map.set(attrValue,val);

                    console.log(map);
                });

                $(".image-sec").on('click', function() {

                    var index = $(".image-sec").index(this);

                    var elementsIndiv = $(`.image-sec:eq(${index})`).find(".abt")
                    .each(function(){
                        $(this).prop('disabled', false);;
                    });

                    $(".hidden_btn").eq(index).show();

                }).mouseleave(function(){
                    var index = $(".image-sec").index(this);

                    var elementsIndiv = $(`.image-sec:eq(${index})`).find(".abt")
                    .each(function(){
                        $(this).prop('disabled', true);;
                    });

                    $(".hidden_btn").eq(index).hide();
                });




            });


            var save = () =>{

                if(map.size <= 0){
                    console.log("No changes made in dataset");
                    return;
                }

                var form_data = new FormData();

                map.forEach((val,key,map) =>{
                    form_data.append(key,val);
                });

                $.ajax({
                    url: "<?php echo site_url('/cms/UpdateAboutPage');?>",
                    method: "POST",
                    data: form_data,
                    beforeSend:function(){
                        $('.save_btn').html('Processing...');
                        $('.save_btn').prop('disabled',true);
                    },
                    success: function(res) {
                        map = new Map();
                        imgs = new Map();
                        $('.save_btn').text('Saved!');

                        setTimeout(function(){
                            
                            $('.save_btn').text('Save');
                            $('.save_btn').prop('disabled',false);
                        },2000);
                        console.log(res);
                    },
                    contentType: false,
                    cache: false,
                    processData:false
                });

            }

            function kFormatter(num) {
                return Math.abs(num) > 999 ? Math.sign(num)*((Math.abs(num)/1000).toFixed(1)) + 'k' : Math.sign(num)*Math.abs(num)
            }

    </script>

</html>