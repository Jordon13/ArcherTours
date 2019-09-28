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
        <title>Service</title>
        <?php adminhead();?>

        <style>

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
                                    <input type="file" id="file" class="abt" name="_service_img" disabled>
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" value="<?php echo $data['_service_img'];?>" placeholder="Change Background Image" disabled>
                                    
                                </div>

                            </div>

                            <div class="col s12">
                                <input id="abt_bck_title" name="_service_ack_title" class="abt" id="me" type="text" value="<?php echo $data['_service_ack_title'];?>" disabled/>
                                <label for="abt_bck_title">Service Header</label>
                            </div>
                            

                            <div class="col s12 hidden_btn center-align" style="display:none;">
                                <div class="row">
                                    <button class="btn waves-effect waves-light green save_btn" onclick="save()">Save</button>
                                </div>
                            </div>

                        </div>

                        <div class="row white image-sec abt-about-us-msg z-depth-1">

                            <div class="col s12">
                                <input id="abt-header-name" name="_service_ptich" type="text" class="abt" value="<?php echo $data['_service_ptich'];?>" disabled/>
                                <label for="abt-header-name">Service Sales Pitch</label>
                            </div>

                            <div class="file-field input-field col s12">
                                <div class="btn blue-grey lighten-2">
                                    <span>Featured Video</span></span>
                                    <input type="file" id="file1" name="_service_vid" class="abt"  disabled>
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" value="<?php echo $data['_service_vid'];?>"  placeholder="Change Background Image"  disabled>
                                    
                                </div>

                            </div>
                            
                            <div class="col s12 hidden_btn center-align" style="display:none;">
                                <div class="row">
                                    <button class="btn waves-effect waves-light green save_btn" onclick="save()">Save</button>
                                </div>
                            </div>

                        </div>

                        <div class="row white image-sec abt-about-us-msg z-depth-1">

                            <div class="col s12">
                                <input id="abt-header-name" name="_service_airport_title" type="text" class="abt" value="<?php echo $data['_service_airport_title'];?>" disabled/>
                                <label for="abt-header-name">Airport Service Title</label>
                            </div>

                            <div class="col s12">
                                <textarea id="abt-header-name" name="_service_airport_desc" type="text" class="abt materialize-textarea" disabled><?php echo $data['_service_airport_desc'];?></textarea>
                                <label for="abt-header-name">Airport Service Description</label>
                            </div>

                            <div class="file-field input-field col s12">
                                <div class="btn blue-grey lighten-2">
                                    <span>Airport Image</span></span>
                                    <input type="file" id="file1" name="_service_airport_img" class="abt"  disabled>
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" value="<?php echo $data['_service_airport_img'];?>"  placeholder="Change Background Image"  disabled>
                                    
                                </div>

                            </div>
                            
                            <div class="col s12 hidden_btn center-align" style="display:none;">
                                <div class="row">
                                    <button class="btn waves-effect waves-light green save_btn" onclick="save()">Save</button>
                                </div>
                            </div>

                        </div>

                        <div class="row white image-sec abt-about-us-msg z-depth-1">

                            <div class="col s12">
                                <input id="abt-header-name" name="_service_taxi_title" type="text" class="abt" value="<?php echo $data['_service_taxi_title'];?>" disabled/>
                                <label for="abt-header-name">Taxi Service Title</label>
                            </div>

                            <div class="col s12">
                                <textarea id="abt-header-name" name="_service_taxi_desc" type="text" class="abt materialize-textarea" disabled><?php echo $data['_service_taxi_desc'];?></textarea>
                                <label for="abt-header-name">Taxi Service Description</label>
                            </div>

                            <div class="file-field input-field col s12">
                                <div class="btn blue-grey lighten-2">
                                    <span>Taxi Image</span></span>
                                    <input type="file" id="file1" name="_service_taxi_img" class="abt"  disabled>
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" value="<?php echo $data['_service_taxi_img'];?>"  placeholder="Change Background Image"  disabled>
                                    
                                </div>

                            </div>
                            
                            <div class="col s12 hidden_btn center-align" style="display:none;">
                                <div class="row">
                                    <button class="btn waves-effect waves-light green save_btn" onclick="save()">Save</button>
                                </div>
                            </div>

                        </div>


                        <div class="row white image-sec abt-about-us-msg z-depth-1">

                            <div class="col s12">
                                <input id="abt-header-name" name="_service_tours_title" type="text" class="abt" value="<?php echo $data['_service_tours_title'];?>" disabled/>
                                <label for="abt-header-name">Tours Service Title</label>
                            </div>

                            <div class="col s12">
                                <textarea id="abt-header-name" name="_service_tours_desc" type="text" class="abt materialize-textarea" disabled><?php echo $data['_service_tours_desc'];?></textarea>
                                <label for="abt-header-name">Tours Service Description</label>
                            </div>

                            <div class="file-field input-field col s12">
                                <div class="btn blue-grey lighten-2">
                                    <span>Tours Image</span></span>
                                    <input type="file" id="file1" name="_service_tours_img" class="abt"  disabled>
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" value="<?php echo $data['_service_tours_img'];?>"  placeholder="Change Background Image"  disabled>
                                    
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

            let form_data = new FormData();

            var globalIndex = undefined;

            var once = false;
    
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

                        imgs.set(attrValue);

                        var files = $(`.abt:eq(${index})`)[0].files;
    
                        for(var count = 0; count <files.length; count++){
                            form_data.append("upl[]",files[count]);
                        }

                        console.log(imgs);

                        return;
                    }

                    map.set(attrValue,val);

                    console.log(map);
                });

                $(".image-sec").on('click', function() {

                    var index = $(".image-sec").index(this);

                    globalIndex = index;

                    var elementsIndiv = $(`.image-sec:eq(${index})`).find(".abt")
                    .each(function(){
                        $(this).prop('disabled', false);;
                    });

                    $(".hidden_btn").eq(index).show();

                    if(!once){
                        var toastHTML = '<span>Press \'esc on keyboard\' to close </span>';
                        M.toast({
                            html: toastHTML,
                            displayLength:10000
                        });
                    }

                    once = true;

                });

                $('.cncl').click(function(){
                    var elementsIndiv = $(`.image-sec:eq(${globalIndex})`).find(".abt")
                    .each(function(){
                    $(this).prop('disabled', true);
                    });

                    $(".hidden_btn").eq(globalIndex).hide();
                });
                
                $(document).keyup(function(e){
                    if (e.keyCode === 27){
                        var elementsIndiv = $(`.image-sec`).find(".abt")
                        .each(function(){
                        $(this).prop('disabled', true);;
                        });

                        $(".hidden_btn").hide();
                    }
                    
                });

            });


            var save = () =>{

                if(map.size <= 0 && imgs.size <= 0){
                    console.log("No changes made in dataset");
                    return;
                }

                

                if(map.size > 0){
                    map.forEach((val,key,map) =>{
                        form_data.append(key,val);
                    });
                }

                if(imgs.size > 0){
                    
                    form_data.append('images',Array.from(imgs));
                }

                

                $.ajax({
                    url: "<?php echo site_url('/cms/UpdateServicePage');?>",
                    method: "POST",
                    data: form_data,
                    beforeSend:function(){
                        $('.save_btn').html('Processing...');
                        $('.save_btn').prop('disabled',true);
                    },
                    success: function(res) {
                        map = new Map();
                        imgs = new Map();
                        form_data = new FormData();
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