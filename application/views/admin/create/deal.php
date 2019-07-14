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
        <title>Add Deal</title>
        <?php adminhead();?>
    </head>

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


            .content-area{
              height: auto!important;
              min-height: 100%;
          }

          .inner-content{
              margin-top: 2em;
              height: auto!important;
              min-height: 100%!important;
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

            .datepicker-table td.is-selected{
                background-color:rgba(3,169,244 ,1)!important;
            }

            .datepicker-date-display{
                background-color:rgba(3,169,244 ,1)!important;
            }

            .datepicker-table td.is-today{
                color: #e53935!important;
            }


            .datepicker-cancel, .datepicker-clear, .datepicker-today, .datepicker-done{
                color:rgba(3,169,244 ,1)!important;
            }

            .dropdown-content li>a, .dropdown-content li>span {
                color:rgba(3,169,244 ,1)!important;
            }

            .bcenter{
                display: flex;
                justify-content: center;
                width: 100%;
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

            



            .my-form{
                border: 0.9px solid rgba(224,224,224 ,1);
            }
    
        .content{
            /* justify-content: center; */
        }

        .required{
              color:#f44336;
          }

    </style>

    <body>
        <?php navigation($_GET['active']);?>
        <section class="content-area">
            
            <div class="inner-content">
                <div class="row valign-wrapper content" style="height:100%;width:100%;">

                    <form action="" class="col l8 s12 offset-s0 offset-l2 my-form z-depth-1 grey lighten-4">

                        <div class="row">

                            <div class="col s12">

                                <h5 class="grey-text lighter-3">Create A Deal</h5>

                                <div class="divider"></div>

                            </div>

                        </div>

                        <div class="row">

                            <div class="input-field col l6 m6 s12">
                                
                                <input name="" id="deal_place" type="text"  class="validate"/>
                                <label for="deal_place">Place / Hotel <span class="required">*</span></label>

                            </div>

                            <div class="input-field col l6 m6 s12">
                                
                                <input name="" id="price" type="number"  class="validate"/>
                                <label for="price">Price <span class="required">*</span></label>

                            </div>

                            <div class="input-field col l6 m6 s12">
                                
                                <input name="" id="discount" type="number"  class="validate"/>
                                <label for="discount">Discount %</label>

                            </div>

                            <div class="input-field col l6 m6 s12">
                                
                                <input name="" id="cphrase" type="text"  class="validate"/>
                                <label for="cphrase">Catch Phrase</label>

                            </div>


                            <div class="input-field col l6 m6 s12">
                                
                                <input type="text" class="datepicker" id="sdate">
                                <label for="sdate">Start Date <span class="required">*</span></label>

                            </div>


                            <div class="input-field col l6 m6 s12">
                                
                                <input type="text" class="datepicker" id="edate">
                                <label for="edate">Expiry Date <span class="required">*</span></label>

                            </div>

                            <div class="input-field col s12">
                                
                                <textarea pattern="^[a-zA-z0-9\s]{1,2}[a-zA-z0-9].*" name="price_description" data-length="120" id="desc" type="text" class="materialize-textarea validate"></textarea>
                                <label for="desc">Description <span class="required">*</span></label>

                            </div>


                            <div class="file-field input-field col s12">
                                <div class="btn blue-grey lighten-2">
                                    <span>Background Image<span class="required">*</span></span>
                                    <input type="file" name="finfo" id="myupd">
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
                        </div>

                    </form>

                </div>
            </div>

        </section>

        
    </body>
    <script>
    
        $('document').ready(function(){
            $('.datepicker').datepicker();
        });
        
    </script>
    <?php adminjs();?>

</html>