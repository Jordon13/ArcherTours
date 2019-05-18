<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('script');
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

            .row .input-field input{
                border-bottom: 0.5px solid rgba(224,224,224 ,1) !important;
                box-shadow: 0 0.5px 0 0 rgba(224,224,224 ,1) !important
            }

            .input-field input:focus + label {
                color: rgba(3,169,244 ,1) !important;
            }

            .row .input-field input:focus {
                border-bottom: 0.5px solid rgba(3,169,244 ,1) !important;
                box-shadow: 0 0.5px 0 0 rgba(3,169,244 ,1) !important
            }



            .my-form{
                border: 0.9px solid rgba(224,224,224 ,1);
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
        <?php navigation();?>
        <section class="content-area">
            
            <div class="inner-content">

                <div class="row">

                    

                </div>
                
                <div class="row ">
                    

                    <form class="col m6 s12 offset-m3 offset-s0 my-form z-depth-1 grey lighten-4">
                        <div class="row">

                            <div class=" col s12">

                                <h5 class="grey-text lighter-3">Create New Employee</h5>

                                <div class="divider"></div>

                            </div>

                        </div>
                        

                        <div class="row">

                            <div class="input-field col l6 s12">
                                <input id="first_name" type="text" class="validate">
                                <label for="first_name">First Name</label>
                            </div>

                            <div class="input-field col l6 s12">
                                <input id="last_name" type="text" class="validate">
                                <label for="last_name">Last Name</label>
                            </div>

                        </div>

                        <div class="row">
                            <div class="input-field col l6 s12">
                                <input id="email" type="email" class="validate">
                                <label for="email">Email</label>
                            </div>

                            <div class="input-field col l6 s12">
                                <input pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" id="phone" type="text" class="validate" title="Telephone Number: ###-###-####">
                                <label for="phone">Telephone#</label>
                            </div>

                        </div>

                        <div class="row">

                            <div class="input-field col l4 s12">
                                <input id="city" type="text" class="validate">
                                <label for="city">City</label>
                            </div>
                            
                            <div class="input-field col l4 s12">
                                <input id="parish" type="text" class="validate">
                                <label for="parish">Parish</label>
                            </div>

                            <div class="input-field col l4 s12">
                                <input id="zip" type="text" class="validate">
                                <label for="zip">Zip Code</label>
                            </div>
                        </div>


                        <div class="row">
                            <div class="input-field col s12">
                                <select>
                                    <option value="Manager">Manager</option>
                                    <option value="Employee">Employee</option>
                                </select>
                                <label>Position</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col l2 s3 offset-l5 offset-s4">
                            <button class="btn waves-effect waves-light light-blue darken-1" type="submit" name="action">Submit
                                <i class="material-icons right">send</i>
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