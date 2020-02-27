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
        <title>CreateUser</title>
        <?php adminhead();?>

        <style>

            .input-field input:+label{
                color: rgba(224,224,224 ,1);
            }

            input{
                border-bottom: 0.5px solid rgba(224,224,224 ,1) !important;
                box-shadow: 0 0.5px 0 0 rgba(224,224,224 ,1) !important
            }

            .input-field input:focus + label {
                color: rgba(3,169,244 ,1) !important;
            }

            input:focus {
                border-bottom: 0.5px solid rgba(3,169,244 ,1) !important;
                box-shadow: 0 0.5px 0 0 rgba(3,169,244 ,1) !important
            }



            .my-form{
                border: 0.9px solid rgba(224,224,224 ,1);
            }

            .send{
                justify-content:center!important;
                margin-bottom:1em!important;
            }

            .result{
                color: #388E3C;
                display:flex;
                justify-content:center;
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
        </style>
    </head>

    <body>
        <?php navigation($_GET['active']);?>
        <section class="content-area">
            
            <div class="inner-content">

                <div class="row">

                    

                </div>
                
                <div class="row ">
                    

                    <form class="col m6 s12 offset-m3 offset-s0 my-form z-depth-1 grey lighten-4"  >
                        <div class="row">

                            <div class=" col s12">

                                <h5 class="grey-text lighter-3">Create New Employee</h5>

                                <div class="divider"></div>

                            </div>

                        </div>
                        

                        <div class="row">

                            <div class="input-field col l6 s12">
                                <input id="first_name" type="text" name="first_name" class="validate" required>
                                <label for="first_name">First Name</label>
                            </div>

                            <div class="input-field col l6 s12">
                                <input id="last_name" type="text" name="last_name" class="validate" required>
                                <label for="last_name">Last Name</label>
                            </div>

                        </div>

                        <div class="row">
                            <div class="input-field col l6 s12">
                                <input id="email" type="email" name="email_address" class="validate" required>
                                <label for="email">Email</label>
                            </div>

                            <div class="input-field col l6 s12">
                                <input pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="user_phone" id="phone" type="text" class="validate" title="Telephone Number: ###-###-####" required>
                                <label for="phone">Telephone#</label>
                            </div>

                        </div>

                        <div class="row">

                            <div class="input-field col l4 s12">
                                <input id="city" type="text" name="user_city" class="validate" required>
                                <label for="city">City</label>
                            </div>
                            
                            <div class="input-field col l4 s12">
                                <input id="parish" type="text" name="user_state" class="validate" required>
                                <label for="parish">Parish</label>
                            </div>

                            <div class="input-field col l4 s12">
                                <input id="zip" type="text" name="user_zip" class="validate">
                                <label for="zip">Zip Code</label>
                            </div>
                        </div>


                        <div class="row">
                            <div class="input-field col s12">
                                <select name="user_role" required>
                                    <option value="Manager">Manager</option>
                                    <option value="Employee">Employee</option>
                                </select>
                                <label>Position</label>
                            </div>
                        </div>

                        <div class="valign-wrapper send">
                            <div class="">
                            <button class="btn waves-effect waves-light  blue accent-4"  id="submit">Submit
                                <i class="material-icons right">send</i>
                            </button>
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
    
            $('document').ready(()=>{

                $('select').formSelect();

                $('#submit').click(function(e){

                    e.preventDefault();
                    $(".result").css("color","#388E3C");
                    $('.result').html("Processing...");
                    $.post('<?php echo site_url('/cms/CreateUser');?>', $('.my-form').serialize(), function(data){
                        
                        console.log(data);

                        var result = $.parseJSON(data);

                        if(result.IsSuccess){
                            
                            $(".result").css("color","#388E3C");

                            $(".result").html(result.Message);

                            $(".result").delay(1000).fadeOut(1000);
                        
                            setTimeout(function(){
                                $('.result').html("Add Another Record").fadeIn(0);
                            },2000);
                        }else{

                            $(".result").css("color","#d32f2f");

                            $(".result").html(result.Message);

                            $(".result").delay(2000).fadeOut(1000);
                        
                            setTimeout(function(){
                                $('.result').html("Try Again").fadeIn(0);
                            },3000);
                        }
                        
                        
                        
                        console.log(result);
                        
                        
                        
                    });
                   
                });

                
            });

    </script>
    <?php adminjs();?>

</html>