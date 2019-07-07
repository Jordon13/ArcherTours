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
        <title>ViewBlogs</title>
        <?php adminhead();?>
        <script src="https://code.iconify.design/1/1.0.2/iconify.min.js"></script>
        <style>

            .content-area{
                height: auto!important;
                min-height: 100%;
            }

            .inner-content{
                margin-top: 2em;
                height: auto!important;
                min-height: 100%!important;
            }
            
            .ct{
                display: flex!important;
                justify-content: space-between;
                align-items: center;
                background-color: #2962ff;
                color: white;
                font-size: 20px;
                font-weight: bolder;
                padding: 0.6em!important;
                border-top-left-radius: 30px!important;
            }


            .searchbox {
                width: 100%;
                word-break: break-all; 
                word-wrap: break-word;
                font-size: 17px;
                outline: none;
                cursor: text;
                height: 50px;
                vertical-align: center;
                border-right: 2px solid #f5f5f5;
                display: flex;
                align-items: center;
            }

            .sa{
                background-image: linear-gradient(65deg, rgba(41,98,255,1) 81%, rgba(0,145,234,1) 100%);
                border-radius:10px;
            }

            .filter{
                display: flex;
                align-items: center;
                justify-content: space-between;
                border: 1px solid #f5f5f5;
                border-radius: 10px;
                padding: 1em;
                height: 100%;
                cursor: pointer;
            }

            .filter:hover{
               color: #2962ff;
               border: 1px solid #2962ff;
            }

            .filter-active{
               color: #2962ff;
               border: 1px solid #2962ff;
            }

            .pd{
                height: 50px;
            }

            .pad{
                padding: 0.2em!important;
                
            }

            .lightText {
                color: #ccc;
            }

            .nopad{
                padding: 0px!important;
            }

            .cont{
                border-top-left-radius: 30px!important;
                border-bottom-right-radius: 30px!important;
                margin-top: 1em!important;
            }

            .cc{
                padding-top:0.6em!important;
            }

            .blogs{
                padding:1em!important;
                
            }


            .iedit{
                cursor: pointer;
            }

        </style>
    </head>

    <body>
        <?php navigation();?>
        <section class="content-area">
            
            <div class="inner-content">

                <div class="row  valign-wrapper sa  z-depth-1" style="padding: 0px!important;">


                    <div class="col s12">
                    <!-- contenteditable="true" -->
                        <div class="col s12 white pad">
                        
                            <div class="col l7 m5 s4 searchbox" contenteditable="true">  
                                <em>Search Blog....</em>
                            </div>

                            <div class="col l5 m7 s8 pd">
                            
                                <div class="col s5 offset-s1 filter">
                                    Author  <i class="material-icons">sort</i>
                                </div>

                                <div class="col s5  offset-s1 filter">
                                    Date <i class="material-icons ">sort</i>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="divider"></div>

                <div class="row blogs">     
                    
                    <div class="col s12 m8 l8 offset-s0 offset-m2 offset-l2 nopad white cont z-depth-1">
                        
                  
                        <div class="col s12 nopad">
                            <span class="card-title ct header"><span class="card-t">A Day Well Spent On The Beach at Westrose</span> <span class="iconify" data-icon="mdi:square-edit-outline" data-inline="false" data-width="30px" data-height="30px"></span></span>
                        </div>      
                       
                        
                        <div class="col">
                            <div class="card transparent z-depth-0 cc">
                                <div class="card-content">

                                    
                                

                                    <div class="row">
                                        <div class="col">
                                            <p>I am a very simple card. I am good at containing small bits of information.
                                            I am convenient because I require little markup to use effectively.</p>
                                        </div>
                                        
                                    </div>

                                    <div class="row">

                                        <div class="col">
                                            Author: Jordaine Gayle
                                        </div>

                                        <div class="col">
                                            Date Posted: 12/12/19
                                        </div>

                                        <div class="col">
                                            View: 1299
                                        </div>

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
    
            $('document').ready(()=>{

                $('.tooltipped').tooltip();

                $('.searchbox').click(() => {
     

                    $('.searchbox').attr('contenteditable', 'true');

                    $('.searchbox').focus();

                    $('.searchbox').text("");

                    $('.searchbox').addClass('lightText');

                }).mouseleave(() => {

                    if ($('.searchbox').text() == "") {
                        $('.searchbox').text("Search Blog...");
                    }
                    $('.searchbox').removeAttr('contenteditable', 'true');
                    $('.searchbox').removeClass('lightText');
                });


                var filent = $('.filter').length;

                var preidx = filent;

                var toggle = 0;

                $('.filter').click(function(){

                    console.log(preidx+" - "+$('.filter').index(this));
                    if(preidx == $('.filter').index(this)){

                        if(toggle == 0){
                            $(this).removeClass('filter-active');
                            toggle = 1;
                        }else{
                            $(this).addClass('filter-active');
                            toggle = 0;
                        }
                        
                    }else{
                        $('.filter').eq(preidx).removeClass('filter-active');

                        $(this).addClass('filter-active');
                    }

                    preidx = $('.filter').index(this);

                });

            });
            
    </script>
</html>