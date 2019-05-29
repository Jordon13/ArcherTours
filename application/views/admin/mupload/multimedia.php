<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('script');
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
            }

            .upover{
                position:absolute;
                background-color: rgba(5,5,5,0.7);
                z-index: 9;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .pr{
                width: 300px;
                border: 2px solid white;
                border-radius: 5px;
                height: 30px;
                padding:2px;
            }

            .bar{
                width: 100px;
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

        </style>
    </head>

    <body>
        <?php navigation();?>
        <section class="content-area">
            
            <div class="inner-content">

                <div class="row">
                
                    <form class="col l6 offset-l3 m6 offset-m3 s12 offset-s0 z-depth-1 grey lighten-4 my-form">
                    <div class="upover">

                        <div class="prog">
                            <div class="pr">
                                <div class="bar"></div>
                            </div>
                            <p class="white-text align-center">Uploading...30%</p>
                        </div>

                    </div>
<!--                
                        <div class="col l4 imgdiv">
                        <img src="http://www.stleos.uq.edu.au/wp-content/uploads/2016/08/image-placeholder-350x350.png" class="dimg"/>
                        </div> -->
                        
                        <div class="col s12">
                        
                            <div class="input-field col s12">
                                <input id="first_name" type="text" class="validate">
                                <label for="first_name">File Name (Optional)</label>
                            </div>

                            <div class="file-field input-field col s12">
                                <div class="btn blue-grey lighten-2">
                                    <span>File</span>
                                    <input type="file" id="file" class="fl" multiple>
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Choose A Picture .jpg or jpeg | Video mp4">
                                    <p class="res2"></p>
                                </div>
                                
                            </div>

                            <div class="input-field col s12">
                                <textarea id="description" class="materialize-textarea"></textarea>
                                <label for="description">Description</label>
                            </div>

                            <div class="input-field col s12">
                                <select class="sel">
                                <option class="" value="" disabled selected></option>
                                    <option class="" value="0">Create New Folder</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                                <label>Choose Folder</label>
                            </div>

                            <div class="input-field col s12 noshw" style="display:none;">
                                <input id="foname" type="text" class="validate">
                                <label for="foname">New Folder Name</label>
                            </div>

                        </div>

                        <div class="row bcenter">
                            <div class="input-field col">
                            <button class="btn waves-effect waves-light  blue accent-4" type="submit" name="action">Upload
                                <i class="material-icons right"></i>
                            </button>
                            </div>
                        </div>

                    </form>

                </div>

                <div class="divider"></div>

                <div class="row">
                    
                    <div class="col">
                        
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

        });

    </script>

</html>