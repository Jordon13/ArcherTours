<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
if(!($this->ses->has_userdata("user_ses"))){
    redirect(site_url("Admin/login")."?error=Unauthorized Access: please login to use services");
}else{
    $this->load->helper('script');
}
$linkId = $this->uri->segment(3,-1);

$errorMessage = "";

$image = array();

$videos = array();

$hasImages = false;

$hasVideos = false;

if($data == 0){
    $errorMessage = "No Content";
}else{
    if(count($data['images']) > 0){
        $images = $data['images'];
        $hasImages = true;
    }

    if(count($data['videos']) > 0){
        $videos = $data['videos'];
        $hasVideos = true;
    }
}

?>

<!Doctype html>


<html>

    <head>
        <title>View Gallery</title>
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

            .lead {
        font-size: 23px;
        padding: 0.5em;
        margin-bottom: 0.5em!important;
        cursor: pointer;
      }


      .lead:hover{
        color: rgba(35, 32, 32, 0.6);
      }

      .activeView{
        color: rgba(35, 32, 32, 0.6);
      }

      .custom-img{
        padding:1em!important;
      }
      .custom-img img{
        width:100%;
        /* height:220px; */
      }

      .media-option{
        font-size: 20px;
      }

      .formatt{
          padding:1em!important;
          height:100%;
      }

      .videos{
        
      }

      .menu{

width: 200px;
height: 60px;
background-color: rgba(253,253,253,1);
position: absolute;
z-index: 100;
}

.menu ul{
width:100%;
}

.menu ul li{
padding: 0.5em;
font-size: 12px;
cursor: pointer;
}

.menu ul li:nth-child(2){
border-bottom: 0.5px solid rgba(244,244,244,1);
}

.menu ul li:nth-child(4){
border-bottom: 0.5px solid rgba(244,244,244,1);
}

.menu ul li:hover{
background-color: rgba(140,140,140,0.2);
/* font-weight: bolder; */
transition: background-color 0.4s;

}


.result{
color: #388E3C;
display:flex;
justify-content:center;
}


.required{
color:#f44336;
}

            input[disabled] {pointer-events:none}
        
        </style>
    </head>

    <body>
        <?php navigation(3);?>
        <section class="content-area">
        <div class="menu z-depth-1" style="display:none">
            <ul>
                <li class="edit">Edit Caption</li>
                <li class="delete">Delete</li>
            </ul>
        </div>
            <div class="inner-content">

                <div class="row valign-wrapper" style="align-item:center;">

                <div class="col l8 m10 s12 offset-m1 offset-l2 offset-s0" style="margin-top:50px;">

                    <?php if($errorMessage == ""){?>

                        <div class="row">
                            <div class="col s12">

                                <div class="row media-option" style="margin-bottom:0px!important;">

                                    <div class="col lead imgclick">Photos</div>
                                    <div class="col lead vidclick">Videos</div>

                                </div>

                                <div class="divider"></div>

                            </div>
                        </div>

                        <?php if($hasImages){?>

                            <div class="row photos valign-wrapper" style="align-items:baseline;flex-flow:row wrap;justify-content:center;">
                            <?php foreach($images as $img){?>

                                <div class="col folder l4 m12 s12 custom-img" id="<?php echo $img['_id'];?>">
                                    <img class="z-depth-1 materialboxed" width="300" height="250" data-caption="<?php echo $img['media_file_desc']?>" src="<?php echo base_url('uploads/media/')?><?php echo $img['media_folder_name']?>/photos/<?php echo $img['media_file_name']?>"/> 
                                </div>
                            <?php }?>
                            </div>

                        <?php }else{?>
                            <div class="row photos valign-wrapper" style="justify-content:center;align-items:center;">
                                <h1>No Image</h1>
                            </div>
                        <?php }?>

                        <?php if($hasVideos){?>
                            <div class="row videos valign-wrapper" style="display:none;align-items:baseline;flex-flow:row wrap;justify-content:flex-start;">
                            <?php foreach($videos as $vid){?>
                                    <div class="col folder l4 m12 s12 custom-img" id="<?php echo $vid['_id'];?>">
                                    <video controls class="player materialboxed" data-caption="<?php echo $vid['media_file_desc']?>" id="player1"
                                        width="100%" loop muted
                                        preload="auto" src="<?php echo base_url('uploads/media/')?><?php echo $vid['media_folder_name']?>/videos/<?php echo $vid['media_file_name']?>"
                                        tabindex="0" title="MediaElement">
                                    </video>
                                    </div>
                                    
                                    <?php }?>
                            </div>
                        <?php }else{?>
                            <div class="row videos valign-wrapper" style="justify-content:center;align-items:center;">
                                <h1>No Video</h1>
                            </div>
                        <?php }?>

                    <?php }else{ ?>
                        <div class="row valign-wrapper" style="justify-content:center;align-items:center;">
                            <h1>No Content</h1>
                        </div>
                    <?php }?>
                </div>


                </div>

            </div>

        </section>

        
    </body>
    <?php adminjs();?>


    <script>
var folderIndex = -1;

var pre = -1;

$('.menu').click(function(e){

    //$('.folder').


});

$('.folder').click(function(){

    $('.folder').removeClass('folder-hover');
    folderIndex = $('.folder').index(this);

});

$('.folder').hover(function(){

    $('.folder').removeClass('folder-hover');
    folderIndex = $('.folder').index(this);

});
        

$('document').ready( ()=>{
  $('.materialboxed').materialbox();

  $(".imgclick").on('click',function(){

    $(".videos").fadeOut(800);
    $(".photos").delay(800).fadeIn(800);
    $(this).addClass("activeView");
    $(".vidclick").removeClass("activeView");

  });

  $(".vidclick").on('click',function(){

    $(".photos").fadeOut(800);
    $(".videos").delay(800).fadeIn(800);
    $(".imgclick").removeClass("activeView");
    $(this).addClass("activeView");

  });

  $(document).click(()=>{
                $('.menu').hide();

            });


  $('.folder').contextmenu((e)=>{

            

var w = $('.folder').eq(folderIndex).width();

var h = $('.folder').eq(folderIndex).height();

id = $('.folder').eq(folderIndex).attr('id');

var left,top;

left = e.pageX - w;

top = e.pageY - (h/2);

if(left < 0){
    left = 0;
}

if(left > $(window).width()){
    left= $(window).width() - $('.menu').width();
}

$('.menu').css({
    "top": top+"px",
    "left":  left +"px"
}).show();
e.preventDefault();
});

$('.delete').click(()=>{
                
                $.post("<?php echo site_url('cms/DeleteMedia')?>",{id:id},async function(data){
                    await $('.folder').eq(folderIndex).fadeOut();
                });

                
            });

});

</script>

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
                    url: "<?php echo site_url('/cms/EditUser');?>",
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