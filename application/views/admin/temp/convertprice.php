<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
if(!($this->ses->has_userdata("user_ses"))){
    redirect(site_url("Admin/login")."?error=Unauthorized Access: please login to use services");
}else{
    $this->load->helper('script');
}
$linkId = $this->uri->segment(3,-1);
?>

<!Doctype html>


<html>

    <head>
        <title>Convert Price To Deal</title>
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
                padding: 1em!important;
            }

            .switchsec{
                justify-content: center;
            }

            #content{
                margin:1em!important;
                height:400px!important;
            }

            #staticimg{
                margin-top:0.9em!important;
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

                <form class="my-form col l6 m10 s12 offset-m1 offset-l3 offset-s0 white image-sec z-depth-1" style="margin-top:50px;">

                    <div class="input-field col s12">
                        <input id="discount" type="number" name="special_discount" class="validate">
                        <label for="discount">Discount%</label>
                    </div>

                    <div class="input-field col s12">
                        <textarea id="description" name="special_description" class="materialize-textarea"></textarea>
                        <label for="description">Description</label>
                    </div>

                    <div class="input-field col s12">
                        <input id="specialcatch" type="text" name="special_catch" class="validate">
                        <label for="specialcatch">Catch Phrase</label>
                    </div>

                    <div class="input-field col s12">
                        <input id="sdate" type="date" name="special_start_date" class="validate">
                        <label for="sdate">Start Date</label>
                    </div>

                    <div class="input-field col s12">
                        <input id="edate" type="date" name="special_end_date" class="validate">
                        <label for="edate">End Date</label>
                    </div>

                    <div class="row bcenter">
                        <div class="input-field col">
                        <button class="btn waves-effect waves-light  blue accent-4" type="submit" id="submit">Create Deal
                            <i class="material-icons right"></i>
                        </button>
                        </div>
                    </div>

                    <div class="row center-align result">
                            
                    </div>

                </form>

        </section>

        
    </body>
    <?php adminjs();?>

    <script>

        $('document').ready(function(){
            M.textareaAutoResize($('#description'));
        });
            
            $('#submit').click(function(e){
                
                e.preventDefault();
    
                $(".result").css("color","#388E3C");
    
                $('.result').html("Processing...");
    
                var items = new Array();
                    
                var form_data = new FormData();
    
                var form = $('.my-form').serializeArray();

                console.log(form);
    //return;
                for(x = 0; x < form.length; x++){
                    form_data.append(form[x].name,form[x].value);
                }

                form_data.append('_service_id','<?php echo $data['package_unique_id']; ?>');
    
                $.ajax({
                    url: "<?php echo site_url('/cms/AddSpecial');?>",
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

    </script>

</html>