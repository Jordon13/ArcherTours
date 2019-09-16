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
        <title>UploadMedia</title>
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

            .dimg{
                width:100%!important;
                height: 100%!important;
            }

            .imgdiv{
                /* border:1px solid black; */
                display:flex!important;
                justify-content: center!important;
            }

            .res{
                display: flex!important;
                align-items: center!important;
                height:100%!important;
            }

            .my-form{
                padding: 0px!important;
                position: relative;
            }

            .upover{
                position:absolute;
                background-color: rgba(5,5,5,0.7);
                z-index: 9;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100%!important;
            }

            .pr{
                width: 300px;
                border: 2px solid white;
                border-radius: 5px;
                height: 30px;
                padding:2px;
            }

            .bar{
                width: 0px;
                height:100%;
                background-color:white;
                border-radius: 5px;
            }

            .prog{
                width: 300px;
                display: flex;
                justify-content: center;
                flex-flow:row wrap;
                cursor: progress;
            }

            .prog .pr{
                width: 100%;
            }

            .folder {
                cursor: pointer;
                outline: blue;
                /* width: auto!important; */
            }

            .folder:hover{
                border-radius:10px;
                box-shadow: 0px 0px 3px inset  rgba(3,169,244 ,1);
            }

            .folder-hover{
                border-radius:10px;
                box-shadow: 0px 0px 5px inset  rgba(3,169,244 ,1);
            }

            .folder img{
                display:block!important;
                margin-right: auto!important;
                margin-left:auto!important;
            }

            .album{
                /* granny - 876-341-6852 */
                position: absolute!important;
                height: 100%!important;
                width: 100%!important;
                z-index: 1;
                background-color: rgba(244,244,244,1);

            }

            .htab{
                text-align: center;
            }


            .htab:hover{
                color: rgba(3,169,244 ,1);
                cursor: pointer;
            }

            .tabactive{
                color: rgba(3,169,244 ,1);
            }

            .close:hover{
                color: rgba(255,0,0 ,0.8);
                cursor: pointer;
            }

            .htab:nth-child(1){
                border-right: 1px solid rgba(150,150,150,0.4);
            }

            .hgr{
                border: 1px solid rgba(150,150,150,0.4);
            }

            .formatt{
                padding:1em!important;
                height:100%;
            }

            .im{
                width:100%;
                height: 220px;
            }

            .bx{
                padding: 1em!important;
            }

            .photos{
              overflow: scroll!important;
            }

            .videos{
              overflow: scroll!important;
            }


        </style>

        <style>

            .menu{

                width: 200px;
                height: 181px;
                background-color: rgba(253,253,253,1);
                position: absolute;
            }

            .menu ul{
                width:100%;
            }

            .menu ul li{
                padding: 0.5em;
                font-size: 12px;
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

          .progress{
              margin-bottom: 0px!important;
              padding-top: 0.3em!important;
              padding-bottom: 0.3em!important;
          }



          #progressWrap{
	background-color: inherit!important;
	box-shadow: inset 0px 0px 10px rgba(10,10,10,0.5);
	width: 400px!important;
	height: 40px!important;
	padding: 0px!important;
	display: flex;
	align-items: center;
	padding: 0.2em!important;
	margin: 0px!important;
	margin-top: 2%!important;
}
#progressBar{
	position: absolute;
	background-color: #E65100;
	width: 0px;
	height: 40px;
	margin: 0px!important;
}

#progress{
	padding: 0px!important;
	background-color: transparent!important;
	color: white;
	z-index: 1000;
	margin-left: 45%!important;
	margin-top: 6%!important;
	text-shadow: 0px 0px 10px rgba(10,10,10,0.5);
}

        </style>
    </head>

    <body>
        <?php navigation($_GET['active']);?>
        <section class="content-area">

        <div class="menu z-depth-1" style="display:none">
            <ul>
                <li class="open">Open</li>
                <li>Rename</li>
                <li>Delete</li>
                <li>Share</li>
                <li>Properties</li>
                <li>Change Folder Color</li>
            </ul>
        </div>

            <div class="inner-content">

                <div class="row">

                    <form class="col l6 offset-l3 m6 offset-m3 s12 offset-s0 z-depth-1 grey lighten-4 my-form">

                        <div class="upover" style="display:none;">

                            <div class="prog">
                                <div class="pr">
                                    <div class="bar"></div>
                                </div>
                                <p class="white-text align-center percent"></p>
                            </div>

                        </div>

                        <div class="col s12">

                            <div class="file-field input-field col s12">
                                <div class="btn blue-grey lighten-2">
                                    <span>Contents <span class="required">*</span></span>
                                    <input type="file" id="file" class="fl" multiple>
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Choose A Picture .jpg or jpeg | Video mp4">
                                    <p class="res2"></p>
                                </div>

                            </div>

                            <div class="input-field col s12">
                                <textarea id="description" name="desc" class="materialize-textarea"></textarea>
                                <label for="description">Description <span class="required">*</span></label>
                            </div>

                            <div class="input-field col s12">
                                <select class="sel" name="fopt">
                                <option class="" value="" disabled selected></option>
                                    <option class="" value="0">New Folder (Enter Name)</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                                <label>Choose Album / Create Album <span class="required">*</span></label>
                            </div>
                            <div class="noshw"></div>
                            <div class="input-field col s12 " >
                                <input id="foname" type="text" value="General" class="validate" name="folder" placeholder="Old / New Album Name">
                                <!-- <label for="foname">Old / New Album Name</label> -->
                            </div>

                        </div>

                        <div class="row bcenter">
                            <div class="input-field col">
                            <button class="btn waves-effect waves-light  blue accent-4" type="submit" id="submit" name="action">Upload
                                <i class="material-icons right"></i>
                            </button>
                            </div>
                        </div>

                        <div class="row center-align result">
                            
                        </div>

                    </form>
                
                </div>

                <div class="divider"></div>

                <div class="row" style="padding: 10px;">
                    <div class="col l6 m8 s12 offset-l3 offset-m2 offset-s0">
                        <input type="search" class="white searchbox" placeholder="Search Albums" style="border-radius: 10px;"/>
                    </div>
                </div>

                <div class="row ">


                    <div class="col l2 folder">
                        <img clas="" src="<?php echo base_url('assets/folder.png')?>" width="80px" />
                        <p class="center-align foldername">General</p>
                    </div>

                    <div class="col l2 folder">
                        <img clas="" src="<?php echo base_url('assets/folder.png')?>" width="80px" />
                        <p class="center-align foldername">Upnorth</p>
                    </div>

                    <div class="col l2 folder">
                        <img clas="" src="<?php echo base_url('assets/folder.png')?>" width="80px" />
                        <p class="center-align foldername">VendettaWay</p>
                    </div>



                </div>



            </div>

            <div class="row album scale-transition" style="display:none;">

                <div class="row">
                    <hgroup class="col s12 hgr">

                        <h4 class="col l2 m4 s5 htab tabactive">Photos</h4>

                        <h4 class="col l2 m4 s5 htab">Videos</h4>

                        <h4 class="col l1 s1 m1 offset-m2 offset-l7 offset-s0 right-align close"><i class="material-icons">close</i></h4>

                    </hgroup>
                </div>


                <div class="row photos formatt">

                    <div class="col l3 m4 s12 bx">
                        <img class="materialboxed im z-depth-1" src="https://materializecss.com/images/sample-1.jpg" />
                    </div>

                    <div class="col l3 m4 s12 bx">
                        <img class="materialboxed im z-depth-1" src="data:image/jpeg;base64,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" />
                    </div>

                    <div class="col l3 m4 s12 bx">
                        <img class="materialboxed im z-depth-1" src="data:image/jpeg;base64,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" />
                    </div>

                    <div class="col l3 m4 s12 bx">
                        <img class="materialboxed im z-depth-1" src="https://www.cameraegg.org/wp-content/uploads/2013/02/Leica-M-Sample-Image.jpg" />
                    </div>

                    <div class="col l3 m4 s12 bx">
                        <img class="materialboxed im z-depth-1" src="https://www.cameraegg.org/wp-content/uploads/2015/06/canon-powershot-g3-x-sample-images-1.jpg" />
                    </div>

                    <div class="col l3 m4 s12 bx">
                        <img class="materialboxed im z-depth-1" src="https://www.zen-communications.co.uk/wp-content/uploads/2015/03/sample.jpg" />
                    </div>

                    <div class="col l3 m4 s12 bx">
                        <img class="materialboxed im z-depth-1" src="https://materializecss.com/images/sample-1.jpg" />
                    </div>

                    <div class="col l3 m4 s12 bx">
                        <img class="materialboxed im z-depth-1" src="https://materializecss.com/images/sample-1.jpg" />
                    </div>

                    <div class="col l3 m4 s12 bx">
                        <img class="materialboxed im z-depth-1" src="https://www.zen-communications.co.uk/wp-content/uploads/2015/03/sample.jpg" />
                    </div>

                    <div class="col l3 m4 s12 bx">
                        <img class="materialboxed im z-depth-1" src="https://materializecss.com/images/sample-1.jpg" />
                    </div>

                    <div class="col l3 m4 s12 bx">
                        <img class="materialboxed im z-depth-1" src="https://materializecss.com/images/sample-1.jpg" />
                    </div>

                    <div class="col l3 m4 s12 bx">
                        <img class="materialboxed im z-depth-1" src="https://www.zen-communications.co.uk/wp-content/uploads/2015/03/sample.jpg" />
                    </div>

                    <div class="col l3 m4 s12 bx">
                        <img class="materialboxed im z-depth-1" src="https://materializecss.com/images/sample-1.jpg" />
                    </div>

                    <div class="col l3 m4 s12 bx">
                        <img class="materialboxed im z-depth-1" src="https://materializecss.com/images/sample-1.jpg" />
                    </div>
                </div>

                <div class="row videos formatt" style="display:none">

                    <div class="col l3 m4 s12 bx">
                        <video controls class="player materialboxed z-depth-1" id="player1" height="100%"
	                        width="100%" loop muted poster="<?php echo base_url('assets/trips/19.jpeg') ?>"
	                        preload="auto" src="<?php echo base_url('assets/trips/23.mp4') ?>"
	                        tabindex="0" title="MediaElement">
                        </video>
                    </div>

                    <div class="col l3 m4 s12 bx">
                        <video controls class="player materialboxed z-depth-1" id="player1" height="100%"
	                        width="100%" loop muted poster="<?php echo base_url('assets/trips/19.jpeg') ?>"
	                        preload="auto" src="<?php echo base_url('assets/trips/23.mp4') ?>"
	                        tabindex="0" title="MediaElement">
                        </video>
                    </div>

                    <div class="col l3 m4 s12 bx">
                        <video controls class="player materialboxed z-depth-1" id="player1" height="100%"
	                        width="100%" loop muted poster="<?php echo base_url('assets/trips/19.jpeg') ?>"
	                        preload="auto" src="<?php echo base_url('assets/trips/23.mp4') ?>"
	                        tabindex="0" title="MediaElement">
                        </video>
                    </div>

                    <div class="col l3 m4 s12 bx">
                        <video controls class="player materialboxed z-depth-1" id="player1" height="100%"
	                        width="100%" loop muted poster="<?php echo base_url('assets/trips/19.jpeg') ?>"
	                        preload="auto" src="<?php echo base_url('assets/trips/23.mp4') ?>"
	                        tabindex="0" title="MediaElement">
                        </video>
                    </div>

                    <div class="col l3 m4 s12 bx">
                        <video controls class="player materialboxed z-depth-1" id="player1" height="100%"
	                        width="100%" loop muted poster="<?php echo base_url('assets/trips/19.jpeg') ?>"
	                        preload="auto" src="<?php echo base_url('assets/trips/23.mp4') ?>"
	                        tabindex="0" title="MediaElement">
                        </video>
                    </div>

                    <div class="col l3 m4 s12 bx">
                        <video controls class="player materialboxed z-depth-1" id="player1" height="100%"
	                        width="100%" loop muted poster="<?php echo base_url('assets/trips/19.jpeg') ?>"
	                        preload="auto" src="<?php echo base_url('assets/trips/23.mp4') ?>"
	                        tabindex="0" title="MediaElement">
                        </video>
                    </div>

                </div>
            </div>

        </section>


    </body>
    <?php adminjs();?>

    <script>

            var nf = 0;

        $(document).ready(function(){
            $('select').formSelect();

            $('.sel').on('change',()=>{
                var selectValue = $('.sel').val();

                if(selectValue == 0){
                    $('.noshw').fadeIn(1000);
                }else{
                    $('.noshw').fadeOut(1000);
                }
                //
            });

            $('.fl').on('change',()=>{
                $('.res2').text(document.getElementById('file').files.length+" file(s)");
            });
            console.log($('.my-form').width());
            $('.upover').css({
                'width': $('.my-form').width()+'px',
                'height': $('.my-form').height()+'px'
            });

            $(window).resize( ()=>{
                $('.upover').css({
                'width': $('.my-form').width()+'px',
                'height': $('.my-form').height()+'px'
            });
            });

            $(document).click(()=>{
                $('.menu').hide();

            });

        });

        var folderIndex = -1;

        var pre = -1;

        $('.menu').click(function(e){

            //$('.folder').


        });

        $('.folder').click(function(e){

            $('.folder').removeClass('folder-hover');
            folderIndex = $('.folder').index(this);

        });

        $('.folder').dblclick(function(e){


            $('.folder').eq(pre).removeClass('folder-hover');

            $(this).addClass('folder-hover');

            pre =  $('.folder').index(this);

            $('.album').fadeIn(500);
                $("html, body").animate({ scrollTop: 0 }, "slow");
                $('body').css("overflow","hidden");
                $('.photos .videos').css("overflow","auto");
        });



        $('.folder').contextmenu((e)=>{

            var w = $('.folder').eq(folderIndex).width();

            var h = $('.folder').eq(folderIndex).height();

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

    </script>


    <script>

        $(document).ready( ()=>{
           // $('.carousel').carousel();
           $('.materialboxed').materialbox();

            var names = $('.foldername');

            var nameslen = names.length;

            $('.searchbox').keyup(()=>{

                var counter = 0;

                var text = $('.searchbox').val();

                //console.log(text);

                var ptr = new RegExp(text,'i');

                for(x = 0; x < nameslen; x++){

                    var t = $(names).eq(x).text();



                    var sres = t.search(ptr);

                    //console.log(sres);

                    if(sres > -1){
                        $('.folder').eq(x).css('display','');
                        //break;
                    }else{
                        $('.folder').eq(x).css('display','none');
                    }

                }

                // if(text === ""){
                //     $('.folder').css('display','');
                // }
            });

            $('.htab').click(function(){

                var index = $('.htab').index(this);

                console.log(index);

                if(index === 0 ){
                    $('.photos').fadeIn(500);
                    $('.videos').fadeOut(0);
                    $('.htab').eq(index).addClass('tabactive');
                    $('.htab').eq(index+1).removeClass('tabactive');
                }else{
                    $('.photos').fadeOut(0);
                    $('.videos').fadeIn(500);
                    $('.htab').eq(index-1).removeClass('tabactive');
                    $('.htab').eq(index).addClass('tabactive');
                }

            });

            $('.close').click(()=>{
                $('.album').fadeOut(500);
                $('body').css("overflow-y","auto");
            });

            $('.open').click(()=>{
                $('.album').fadeIn(500);
                $("html, body").animate({ scrollTop: 0 }, "slow");
                $('body').css("overflow","hidden");
                $('.photos .videos').css("overflow","auto");
            });


            $(".sel").change(function(e){
                var item = $(".sel :selected").text();
                $('#foname').html(item);
                $('#foname').attr('value',item);
            });

            $('#foname').keyup(function(){
                $('#foname').attr('value',$(this).val());
            });

            $('#foname').click(function(){
                console.log($('#foname').val());
            });
            

        });

    </script>


    <script>
    
        $('document').ready(function(){

            $('#submit').click(function(e){

                e.preventDefault();

                $(".result").css("color","#388E3C");

                $('.result').html("Processing...");

                

                var form_data = new FormData();

                var files = $('#file')[0].files;

                var form = $('.my-form').serializeArray();

                for(var count = 0; count <files.length; count++){
                    form_data.append("upl[]",files[count]);
                }

                console.log(form);

                for(x = 0; x < form.length; x++){
                    form_data.append(form[x].name,form[x].value);
                }


                $.ajax({
                    url: "<?php echo site_url('/cms/UploadItems');?>",
                    method: "POST",
                    data: form_data,
                    xhr: function() {
                        var myXhr = $.ajaxSettings.xhr();
                        if(myXhr.upload){
                            myXhr.upload.addEventListener('progress',progress, false);
                        }
                        return myXhr;
                    },
                    beforeSend:function(){
					    $(".result").html("File upload in progress please wait...");
                        $('.upover').fadeIn(600);
                    },
                    complete: function(xhr) {

                        var result = undefined;

                        try{
                        result  = $.parseJSON(xhr.responseText);
                        }catch(exception){
                            console.log("Falied To Parse Json Data, No Json Returned. Please check with the site admin there exist an error in the response.");

                            $(".result").css("color","#d32f2f");

                            $(".result").html("An Error Has Occured");

                            $(".result").delay(2000).fadeOut(1000);

                            setTimeout(function(){
                                $('.result').html("Try Again").fadeIn(0);
                            },3000);
                            return;
                        }

                        $(".result").css("color","#388E3C");

                        $(".result").html(result.Message);

                        $(".result").delay(1000).fadeOut(1000);

                        $('.upover').fadeOut(600);

                        setTimeout(function(){
                            $('.result').html("Add Another Record").fadeIn(0);
                            $(".determinate").css("width","0%");
                        },2000);
                    },
                    statusCode:{
                        400:function(response){

                            var result = $.parseJSON(response.responseText);

                            $(".result").css("color","#d32f2f");

                            $(".result").html(result.Message);

                            $(".result").delay(2000).fadeOut(1000);

                            setTimeout(function(){
                                $('.result').html("Try Again").fadeIn(0);
                            },3000);
                        },
                        417:function(response){

                            var result = $.parseJSON(response.responseText);

                            $(".result").css("color","#d32f2f");

                            $(".result").html(result.Message);

                            $(".result").delay(2000).fadeOut(1000);

                            setTimeout(function(){
                                $('.result').html("Try Again").fadeIn(0);
                            },3000);
                        }
                    },
                    contentType: false,
                    cache: false,
                    processData:false,       

                });
            });

            

        });


        function progress(e){

            if(e.lengthComputable){
                var max = e.total;
                var current = e.loaded;
                var percent = (event.loaded / event.total) * 100;
                var Percentage = (Math.round(percent) / 100) * $(".pr").width();

                //console.log(percent);

                $(".bar").css("width",Percentage+"px");

                $(".percent").html("Uploading...."+percent+"%");

                if(percent>= 100)
                {
                    //console.log(e.response);
                console.log("file uploaded Successfully!"); 
                }
            }
        }  

    </script>

</html>
