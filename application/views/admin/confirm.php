<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
if(!($this->ses->has_userdata("user_ses")) ){
    redirect(site_url("Admin/login")."?error=Unauthorized Access: please login to use services");
}else{

    if(($this->ses->has_userdata("first_time"))){
        if($this->ses->userdata("first_time") == 0){
            redirect(site_url("Admin/dashboard")."?error=You already have a password set and you aren't a firstime user");
        }
        
        $this->load->helper('script');
        $error = "";
        if(isset($_GET['error'])){
            $error = $_GET['error'];
        }else{
            $error = "";
        }

    }

    
}
?>

<!Doctype html>


<html>

    <head>
        <title>Create Password</title>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
		<link rel="shortcut icon" type="image/x-icon" href=" <?php echo base_url('assets/cmsicon.png');?>">
        <script src="https://code.jquery.com/jquery-3.4.0.js" integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin="anonymous"></script>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


        <style>
        
            body{
                width: 100%;
                height: 900px;
                background-image: url(<?php echo base_url('assets/bg-01.jpg');?>);
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                padding: 1em;
            }
            .input-field:hover{
                 cursor:pointer;
            }

             .input-field input:+label{
                color: rgba(224,224,224 ,1);
            }

            .row .input-field input{
                border-bottom: 0.5px solid rgba(224,224,224 ,1) !important;
                box-shadow: 0 0.5px 0 0 rgba(224,224,224 ,1) !important
            }

            .input-field input:focus + label {
                color: #aa00ff !important;               
            }

            .row .input-field input:focus {
                border-bottom: 0.5px solid #aa00ff !important;
                box-shadow: 0 0.5px 0 0 #aa00ff !important;
            }

            .input-field i{
                color:rgba(224,224,224 ,1);
            }

            .active{
                color:#aa00ff!important;
            }


            .content-area{
                /* border: 1px solid white; */
                border-radius: 10px;
                width: 100%;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 1em;
            }

            .inner-content{
                border-radius: 10px;
            }

            form div{
                margin: 0.7em;
            }


            @media only screen and (max-height: 400px) {
                .content-area {
                    border: none;
                }
            }

            .bcenter{
                display: flex;
                justify-content: center;
                width: 100%;
                height:auto;
                
            }

            .bcenter button{
                padding-top: 0.4em;
                padding-bottom: 0.4em;
                background-image: linear-gradient(315deg, rgba(170,0,255,1) 40%, rgba(98,0,234,1) 93%)!important;
                border-radius:30px;
                height: auto;
            }

            .results{
                text-align: center!important;
                color: #E65100!important;
                font-weight: bold;
                font-size: 12px;
                font-style: italic;
            }

            .result{
                color: #388E3C;
                display:flex;
                justify-content:center;
            }
            

        </style>
    </head>

    <body>

        <section class="content-area">

            <div class="row">

                <div class="col s12 l8 m8 offset-l2 offset-m2 offset-s0 white inner-content z-depth-2">

                    <div class="row">
                        <form class="col s12 my-form"  >
                            
                            <div class="col s12">
                                <h4 class="col s12 center purple-text accent-4">Create New Password</h4>
                                <div class="col s12 divider"></div>
                            </div>

                            <div class="col s12">
                                <div class="input-field col s12">
                                <i class="material-icons prefix">security</i>
                                    <input id="icon_prefix" type="password" name="user_password" class="validate" required>
                                    <label for="icon_prefix">New Password</label>
                                </div>
                            </div>

                            <div class="col s12">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">security</i>
                                    <input id="icon_prefix1" type="password" name="password" class="validate" required>
                                    <label for="icon_prefix1">Confirm Password</label>
                                </div>
                            </div>

                            <div class="row bcenter">
                                <div class="input-field col">
                                <button class="btn waves-effect waves-light z-depth-2" type="submit" name="action" id="submit">Save
                                    <i class="material-icons right">arrow_forward</i>
                                </button>
                                </div>

                                
                            </div>

                            <div class="row center-align result">
                            
                            </div>
                        
                        </form>

                        

                        <?php $data = $error == "" ? "" : '<p class="results">* '.$error.' *</p>'; echo $data;?>
                    </div>


                </div>

                <div class="row" >
                    <div class="col s12 center" style="margin-top:2em!important;">
                        <a href="<?php echo site_url('Admin/dashboard?sucess=login sucessfully')?>" style="color:white!important;"> Create Later</a>
                    </div>
                </div>

            </div>

        </section>

        
    </body>


    <script>
    
            $('document').ready(function(){

                $('body').css('height',$(window).height()+"px");
                
                $(window).resize(()=>{
                    $('body').css('height',currentSize()+"px");
                });
            });

            var currentSize = () =>{
                return $(window).height();
            }
            
    </script>

<script>
    
    $('document').ready(()=>{
        $('#submit').click(function(e){

            e.preventDefault();
            $(".result").css("color","#388E3C");
            $('.result').html("Processing...");
            $.post('<?php echo site_url('/client/UpdateUserData');?>', $('.my-form').serialize(), function(data){
                
                console.log(data);

                var result = $.parseJSON(data);

                if(result.IsSuccess){
                    
                    $(".result").css("color","#388E3C");

                    $(".result").html(result.Message);
                
                }else{

                    $(".result").css("color","#d32f2f");

                    $(".result").html(result.Message);

                    $(".result").delay(2000).fadeOut(1000);
                
                    setTimeout(function(){
                        $('.result').html("Enter a valid password: <em>12ddD0ooQQ</em>").fadeIn(0);
                    },3000);
                }
                
                
                
                console.log(result);
                
                
                
            });
           
        });

        
    });

</script>

</html>