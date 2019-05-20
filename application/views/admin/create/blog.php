<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('script');
?>

<!Doctype html>


<html>

    <head>
        <title>CreateBlog</title>
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



            .my-form{
                border: 0.9px solid rgba(224,224,224 ,1);
            }


            .bcenter{
                display: flex;
                justify-content: center;
                width: 100%;
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
        </style>
    </head>

    <body>
        <?php navigation();?>
        <section class="content-area">
            
            <div class="inner-content">

                <div class="row">

                    

                </div>
                
                <div class="row ">
                    

                    <form class="col m6 s12 offset-m3 offset-s0 my-form z-depth-1 grey lighten-4">

                        <div class="row">

                            <div class="col s12">

                                <h5 class="grey-text lighter-3">Create A Blog</h5>

                                <div class="divider"></div>

                            </div>

                        </div>
                        

                        <div class="row">

                            <div class="input-field col l6 s12">
                                <input id="first_name" type="text" class="validate">
                                <label for="first_name">Blog Title</label>
                            </div>

                            <div class="input-field col l6 s12">
                                <input id="last_name" type="text" class="validate">
                                <label for="last_name">Catch Phrase</label>
                            </div>

                            <div class="input-field col l6 s12">
                                <input id="ct" type="text" class="validate">
                                <label for="ct">Custom Blog Title (Optional)</label>
                            </div>



                            <div class="input-field col l6 s12">
                                <select>
                                    <option value="1">Default (User Shown)</option>
                                    <option value="2">Anonymous User</option>
                                </select>
                                <label>Post Options</label>
                            </div>

                            <div class="input-field col s12">
                                <textarea id="content" class="materialize-textarea"></textarea>
                                <label for="content">Content Message</label>
                            </div>


                            <div class="file-field input-field col s12">
                                <div class="btn blue-grey lighten-2">
                                    <span>Blog Cover Photo</span>
                                    <input type="file" multiple>
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Choose A Picture .jpg or jpeg">
                                </div>
                            </div>

                        </div>



                        <div class="row bcenter">
                            <div class="input-field col">
                            <button class="btn waves-effect waves-light  blue accent-4" type="submit" name="action">Create Blog
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
    
            $('document').ready(()=>{

                $('select').formSelect();

            });

    </script>
    <?php adminjs();?>

</html>