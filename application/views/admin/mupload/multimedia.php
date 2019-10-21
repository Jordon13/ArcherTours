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
                height: 90px;
                background-color: rgba(253,253,253,1);
                position: absolute;
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
                <li class="rename">Rename</li>
                <li class="delete">Delete</li>
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
                                    <?php $counter =1;?>
                                    <?php foreach($data as $d){?>
                                        <option value="<?php echo $counter;?>"><?php echo $d['media_folder_name']?></option>
                                        $counter++;
                                    <?php }?>
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
                    
                    <?php foreach($data as $d){?>
                        <div class="col l2 folder" id="<?php echo $d['auto_generated_id']; ?>">
                            <img clas="" src="<?php echo base_url('assets/folder.png')?>" width="80px" />
                            <p class="center-align foldername"><?php echo $d['media_folder_name']?></p>
                        </div>
                    <?php }?>

                </div>



            </div>

        </section>


    </body>
    <?php adminjs();?>

    <script>

            var nf = 0;

            var id = undefined;

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

        $('.folder').click(function(){

            $('.folder').removeClass('folder-hover');
            folderIndex = $('.folder').index(this);

        });

        $('.folder').hover(function(){

            $('.folder').removeClass('folder-hover');
            folderIndex = $('.folder').index(this);

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

            

            $('.open').click(async ()=>{
                await open();
            });

            $('.folder').dblclick(async () =>{
                id = $('.folder').eq(folderIndex).attr('id');
                await open(id);
            });

            //delete

            $('.delete').click(()=>{
                
                $.post("<?php echo site_url('cms/DeleteFolderFiles')?>",{id:id},async function(data){
                    await $('.folder').eq(folderIndex).fadeOut();
                });

                
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


        async function open(isd = undefined){
            location.href = "<?php echo site_url('admin/viewfiles/')?>"+getId(isd);
        }

        function getId(isd = undefined){
            if(isd == undefined){
                return this.id;
            }else{
                return isd;
            }
        }

    </script>

</html>
