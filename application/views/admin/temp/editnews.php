<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
if(!($this->ses->has_userdata("user_ses"))){
    redirect(site_url("Admin/login")."?error=Unauthorized Access: please login to use services");
}else{
    $this->load->helper('script');
}
$linkId = $this->uri->segment(3,-1);

$filename = FCPATH."uploads/recent/".$data['recent_file_name'];
            
if(file_exists ($filename)){
     $mime = mime_content_type($filename);

      $exp = explode("/",$mime);

      $type = $exp[0];
}else{
    $type == "";
} 

$isImage = false;

if($type == "image"){
    $isImage = true;
}

?>

<!Doctype html>


<html>

    <head>
        <title>Edit Price</title>
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

            #staticimg{
                margin-top:1em!important;
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;
                /* filter: blur(1px); */
            }

            input[disabled] {pointer-events:none}
        
        </style>
    </head>

    <body>
        <?php navigation(2);?>
        <section class="content-area">
            
            <div class="inner-content">

                <div class="row valign-wrapper" style="align-item:center;">

                <div class="col l8 m10 s12 offset-m1 offset-l2 offset-s0" style="margin-top:50px;">

                    <div class="row white image-sec z-depth-1">


                        <?php if($isImage){?>
                            <div class="col s12">
                            
                                <img id="staticimg" src="<?php echo base_url('uploads/recent/').$data['recent_file_name'];?>" width="100%" class=""/>

                            </div>
                        <?php }else{ ?>
                            <div class="col s12">
                            
                            <video controls class="player materialboxed" data-caption="" id="staticimg"
                                width="100%" loop muted poster=""
                                preload="auto" src="<?php echo site_url("uploads/recent/").$data['recent_file_name'];?>"
                                tabindex="0" title="MediaElement">
                            </video>

                            </div>
                        <?php }?>

                        <div class="file-field input-field col s12">
                            <div class="btn blue-grey lighten-2">
                                <span>News Image</span></span>
                                <input type="file" id="file" class="abt" name="recent_file_name" disabled>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" value="<?php echo $data['recent_file_name'];?>" placeholder="Change Image" disabled>
                                
                            </div>
                        </div>

                        <div class="col s12">
                            <input id="fname" name="recent_title" class="abt" type="text" value="<?php echo $data['recent_title']; ?>" disabled/>
                            <label for="fname">Title</label>
                        </div>

                        <div class="col s12">
                            <input id="lname" name="recent_desc" class="abt"  type="text" value="<?php echo $data['recent_desc']; ?>" disabled/>
                            <label for="lname">Description</label>
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

                    $(".hidden_btn").hide();
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

                form_data.append('id',<?php echo $linkId;?>);

                $.ajax({
                    url: "<?php echo site_url('/cms/EditRecentNews');?>",
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