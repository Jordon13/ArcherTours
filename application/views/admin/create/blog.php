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
        <title>CreateBlog</title>
        <?php adminhead();?>

        <script src="https://cdn.tiny.cloud/1/qrye49zt83t2ywnehqrk36wlt1acm1xvs5964go6t6amc92w/tinymce/5/tinymce.min.js"></script>
        <script>tinymce.init({selector:'textarea'});</script>
        
        <style>

            .input-field input{
                border: none!important;
            }

            .row .input-field input:+label{
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

            



            .my-form{
                border: 0.9px solid rgba(224,224,224 ,1);
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

          .result{
                color: #388E3C;
                display:flex;
                justify-content:center;
            }

          .required{
              color:#f44336;
          }
            
            @media only screen and (max-height: 700px) {
                .content-area {
                    height: auto!important;
                    max-height: auto;
                }
                .inner-content {
                    height: auto!important;
                    max-height: auto;
                }
            }


            @media only screen and (max-width: 300px) {
                .bcenter div{
                    width: 100%;
                    padding: 0px;
                }
                .bcenter div button{
                    width: 100%;
                    font-size: 10px;
                    height: auto;
                }
            }

            .tox-notifications-container, .tox-statusbar__branding{
                display: none!important;
                visibility: hidden!important;
            }

            .tox-notification .tox-notification--in{
                display: none!important;
                visibility: hidden!important;
            }
        </style>
    </head>
    
    <body>

        <?php navigation($_GET['active']);?>
        <section class="content-area">
            
            <div class="inner-content">

                <div class="row">

                    

                </div>
                
                <div class="row valign-wrapper" style="margin-top: auto!important;
              margin-bottom: auto!important;">
                    

                    <form class="col l8 m10 s12 offset-l2 offset-m1 offset-s0 my-form z-depth-1 grey lighten-4">

                        <div class="row">

                            <div class="col s12">

                                <h5 class="grey-text lighter-3">Create A Blog</h5>

                                <div class="divider"></div>

                            </div>

                        </div>
                        

                        <div class="row">

                            <div class="input-field col l6 s12">
                                <input id="first_name" type="text" class="validate" name="blog_title" required>
                                <label for="first_name">Blog Title <span class="required">*</span></label>
                            </div>

                            <div class="input-field col l6 s12">
                                <input id="last_name" type="text" class="validate" name="blog_catch_phrase" required>
                                <label for="last_name">Catch Phrase <span class="required">*</span></label>
                            </div>

                            <div class="input-field col l6 s12">
                                <input id="ct" type="text" class="validate" name="blog_url">
                                <label for="ct">Custom Blog Url (Optional)</label>
                            </div>



                            <div class="input-field col l6 s12">
                                <select name="blog_user_visible" required>
                                    <option value="1">Default (User Shown)</option>
                                    <option value="2">Anonymous User</option>
                                </select>
                                <label>Post Options <span class="required">*</span></label>
                            </div>

                            <div class="input-field col s12">
                                <div class="chips chips-placeholder" name="blog_tags"></div>
                            </div>

                            <div class="input-field col s12">
                                <textarea id="content" name="blog_content" min="250" placeholder="Write content here...250 words minimum" required></textarea>
                            </div>


                            <div class="file-field input-field col s12">
                                <div class="btn blue-grey lighten-2">
                                    <span>Blog Cover Photo <span class="required">*</span></span>
                                    <input type="file" name="finfo" id="myupd" required>
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" name="blog_image" placeholder="Choose A Picture .jpg or jpeg">
                                </div>
                            </div>

                        </div>


                        <div class="row bcenter">
                            <div class="input-field col">
                            <button class="btn waves-effect waves-light  blue accent-4" type="submit" name="action" id="submit">Create Blog
                                <i class="material-icons right"></i>
                            </button>
                            
                            </div>
                            <div class="input-field col" style="width:10%!important;">
                                <label style="width:100%!important;">
                                    <input type="checkbox" name="fbpost" class="filled-in"  checked="checked"/>
                                    <span>FB Post</span>
                                </label>
                            </div>
                            
                        </div>

                        <div class="row center-align result">
                            
                        </div>

                    </form>

                </div>

            </div>

        </section>
    </body>

    <script>

            var data = new Array();

            var text = "";
            $('.mce-content-body').removeAttr("spellcheck");

            $('.mce-content-body').attr("spellcheck","true");
    
            $('document').ready(()=>{

               

                $('select').formSelect();

                $('.chips').chips();

                $('.chips-placeholder').chips({
                    placeholder: 'Enter a tag *',
                    secondaryPlaceholder: '+Tag',
                    onChipAdd: (event, chip) => {
                       var d = event[0].M_Chips.chipsData;
                        for(x =0; x < d.length; x++){
                            text = d[x].tag;
                        }
                        data.push(text);
                    }
                });

                $('#submit').click(function(e){

                    e.preventDefault();

                    var content = tinyMCE.get('content').getContent();

                    $(".result").css("color","#388E3C");
                    $('.result').html("Processing...");

                    if(content == '' || content.length < 250){
                        
                        $(".result").css("color","#d32f2f");

                        $(".result").html("The minimum content length is 250 words");

                        $(".result").delay(2000).fadeOut(1000);

                        setTimeout(function(){
                            $('.result').html("Try Again").fadeIn(0);
                        },3000);

                        return;
                    }

                    var files = $('#myupd')[0].files;

                    var form_data = new FormData();

                    for(var count = 0; count <files.length; count++){
                        
                        form_data.append("upl[]",files[count]);
                            
                    }

                    var form = $('.my-form').serializeArray();
                
                

                    for(x = 0; x < form.length; x++){
                        if(form[x].name == "blog_content"){
                            form_data.append(form[x].name,content);
                        }else{
                            form_data.append(form[x].name,form[x].value);
                        }
                        
                    }

                    form_data.append('blog_tags[]',data);

                    form_data.append('blog_content_copy',$(content).text());

                    $.ajax({
                        url: "<?php echo site_url('/cms/AddBlog');?>",
                        method: "POST",
                        data: form_data,
                        success: function(e) {

                            var result = undefined;

                            try{
                                result  = $.parseJSON(e);
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

                            setTimeout(function(){
                                $('.result').html("Add Another Record").fadeIn(0);
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

    </script>
    <?php adminjs();?>

</html>