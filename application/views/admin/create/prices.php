<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('script');
?>

<!Doctype html>


<html>

    <head>
        <title>CreatePrices</title>
        <?php adminhead();?>

        <style>
            /* .tab a{
                color: white!important;
            }

            .tabs .indicator{
                background-color: transparent!important;
            }

            .tabs .tab .active{
                font-weight: bolder!important;
                background-color: rgba(0,0,0,0.2)!important;
            } */

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


            .data{
                border: 0.9px solid rgba(224,224,224 ,1);
                height: auto;
                border-bottom-right-radius:10px;
                border-bottom-left-radius:10px;
            }
            .bcenter{
                display: flex;
                justify-content: center;
                width: 100%;
            }

            @media only screen and (max-width: 993px) {
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

                    <!-- <div class="col l6 s12 offset-s0 offset-l3">
                        <h5>Add A New Price</h5>
                        <div class="divider"></div>
                    </div> -->

                    <div class="col l6 m10 s12 offset-s0 offset-l3 offset-m1 my-div">
                         
                        <div id="airport" class="data col s12 z-depth-1 grey lighten-4">
                            <form class="col s12">

                                <div class="col s12">
                                    <h5 class="grey-text lighter-3">Add Package</h5>
                                    <div class="divider"></div>
                                </div>

                                <div class="row">

                                    <div class="input-field col l6 s12">
                                        <input pattern="^[a-zA-z0-9\s]{1,2}[a-zA-z0-9].*" id="org" type="text" class="validate" title="Enter A Valid Address">
                                        <label for="org">Origin</label>
                                    </div>

                                    <div class="input-field col l6 s12">
                                        <input pattern="^[a-zA-z0-9\s]{1,2}[a-zA-z0-9].*" id="dest" type="text" class="validate" title="Enter A Valid Address">
                                        <label for="dest">Destination</label>
                                    </div>

                                </div>

                                <div class="row">
                                    
                                    <div class="input-field col l4 s12">
                                        
                                        <input pattern="[0-9]{1,8}\.[0-9]{1,2}" id="price" type="text"  class="validate" title="Enter A Valid Price 12.99"/>
                                        <label for="price">Price Per Person</label>

                                    </div>
                                    
                                    <div class="input-field col l8 s12">
                                        
                                        <textarea pattern="^[a-zA-z0-9\s]{1,2}[a-zA-z0-9].*" data-length="120" id="info" type="text" class="materialize-textarea validate"></textarea>
                                        <label for="info">Addional Information</label>

                                    </div>

                                    <div class="input-field col l6 s12">
                                        
                                        <textarea pattern="^[a-zA-z0-9\s]{1,2}[a-zA-z0-9].*" data-length="120" id="desc" type="text" class="materialize-textarea validate"></textarea>
                                        <label for="desc">Description</label>

                                    </div>

                                    <div class="input-field col l6 s12">
                                        <select>
                                            <option value="1">Airport Transfer</option>
                                            <option value="2">Tours & Excursion</option>
                                            <option value="2">Taxi Service</option>
                                        </select>
                                        <label>Package Category</label>
                                    </div>
                                </div>

                                <div class="row">
                                    
                                    <div class="input-field col l4 s12">
                                        <select>
                                            <option value="1">Default (One Way Trip)</option>
                                            <option value="2">Round Trip</option>
                                        </select>
                                        <label>Trip Type</label>
                                    </div>
                                    
                                    <div class="file-field input-field col l8 s12">
                                        <div class="btn blue-grey lighten-2">
                                            <span>Display Photo</span>
                                            <input type="file" multiple>
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="Choose A Picture .jpg or jpeg">
                                        </div>
                                    </div>

                                </div>

                                <div class="row bcenter">
                                    <div class="input-field col">
                                    <button class="btn waves-effect waves-light  blue accent-4" type="submit" name="action">Create Package
                                        <i class="material-icons right"></i>
                                    </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>

                        
            </div>

        </section>

        
    </body>
    <script>
         $(document).ready(function(){
            $('.tabs').tabs();

            $('textarea#info').characterCounter();

            $('select').formSelect();
        });
    </script>
    <?php adminjs();?>

</html>