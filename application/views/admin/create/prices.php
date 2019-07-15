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


            
            .content-area{
              height: auto!important;
              min-height: 100%;
          }

          .inner-content{
              margin-top: 2em;
              height: auto!important;
              min-height: 100%!important;
          }

            .fadeIn{
                opacity:1;
                transition: opacity 0.4s;
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

            .result{
                color: #388E3C;
                display:flex;
                justify-content:center;
            }

            .required{
              color:#f44336;
          }
            
        </style>
    </head>

    <body>
        <?php navigation($_GET['active']);?>
        <section class="content-area">
            
            <div class="inner-content">

                <div class="row">

                    <!-- <div class="col l6 s12 offset-s0 offset-l3">
                        <h5>Add A New Price</h5>
                        <div class="divider"></div>
                    </div> -->

                    <div class="col l6 m10 s12 offset-s0 offset-l3 offset-m1 my-div">
                         
                        <div id="airport" class="data col s12 z-depth-1 grey lighten-4">
                            <form class="col s12 my-form">

                                <div class="col s12">
                                    <h5 class="grey-text lighter-3">Add Package</h5>
                                    <div class="divider"></div>
                                </div>

                                <div class="row">

                                    <div class="input-field col l6 s12">
                                        <input pattern="^[a-zA-z0-9\s]{1,2}[a-zA-z0-9].*" name="price_origin" id="org" type="text" class="validate" title="Enter A Valid Address">
                                        <label for="org">Origin <span class="required">*</span></label>
                                    </div>

                                    <div class="input-field col l6 s12">
                                        <input pattern="^[a-zA-z0-9\s]{1,2}[a-zA-z0-9].*" name="price_destination" id="dest" type="text" class="validate" title="Enter A Valid Address">
                                        <label for="dest">Destination <span class="required">*</span></label>
                                    </div>

                                    <div class="input-field col s12">
                                        <input name="price_place" id="place" type="text" class="validate" title="Enter A Valid Address">
                                        <label for="place">Place / Hotel Name <span class="required">*</span></label>
                                    </div>

                                </div>

                                <div class="row">

                                
                                    <div class="input-field col l4 s12">
                                        
                                        <input pattern="[0-9]{1,8}\.[0-9]{1,2}" name="display_price" id="price1" type="number"  class="validate" title="Enter A Valid Price 12.99"/>
                                        <label for="price1">Display Price <span class="required">*</span></label>

                                    </div>
                                    
                                    <div class="input-field col l4 s12">
                                        
                                        <input pattern="[0-9]{1,8}\.[0-9]{1,2}" name="price_per_adult" id="price2" type="number"  class="validate" title="Enter A Valid Price 12.99"/>
                                        <label for="price2">Price Per Adult <span class="required">*</span></label>

                                    </div>

                                    <div class="input-field col l4 s12">
                                        
                                        <input pattern="[0-9]{1,8}\.[0-9]{1,2}" name="price_per_child" id="price3" type="number"  class="validate" title="Enter A Valid Price 12.99"/>
                                        <label for="price3">Price Per Child</label>

                                    </div>
                                    
                                    <div class="input-field col l8 s12">
                                        
                                        <textarea pattern="^[a-zA-z0-9\s]{1,2}[a-zA-z0-9].*" name="price_description" data-length="120" id="desc" type="text" class="materialize-textarea validate"></textarea>
                                        <label for="desc">Description <span class="required">*</span></label>

                                    </div>

                                    <div class="input-field col l4 s12">
                                        <select name="package_type">
                                            <option value="1">Airport Transfer</option>
                                            <option value="2">Tours & Excursion</option>
                                            <option value="3">Taxi Service</option>
                                        </select>
                                        <label>Package Category <span class="required">*</span></label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s10 newinfo">
                                        
                                        <input id="info0" type="text" placeholder="additional info" class="validate"/>

                                    </div>

                                    <div class="input-field col addbtn">
                                        <a class="btn-floating btn-large waves-effect waves-light light-blue accent-4"><i class="material-icons">add</i></a>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="input-field col l6 s12">
                                        <select name="trip_type">
                                            <option value="1">Default (One Way Trip)</option>
                                            <option value="2">Round Trip</option>
                                        </select>
                                        <label>Trip Type <span class="required">*</span></label>
                                    </div>

                                    <div class="input-field col l6 s12">
                                        <input name="price_discount" id="discount" type="number" class="validate" title="Enter Discounted %">
                                        <label for="discount">Discount %</label>
                                    </div>
                                    
                                    <div class="file-field input-field col s12">
                                        <div class="btn blue-grey lighten-2">
                                            <span>Display Photo <span class="required">*</span></span>
                                            <input type="file" name="displayfile" id="myupd">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="Choose A Picture .jpg or jpeg">
                                        </div>
                                    </div>


                                   

                                </div>

                                <div class="row bcenter">
                                    <div class="input-field col">
                                    <button class="btn waves-effect waves-light  blue accent-4" id="submit" type="submit">Create Package
                                        <i class="material-icons right"></i>
                                    </button>
                                    </div>
                                </div>

                                <div class="row center-align result">
                            
                                </div>

                            </form>
                        </div>
                    </div>

                </div>

                        
            </div>

        </section>

        
    </body>
    <script>
        var counter = 1;
         $(document).ready(function(){
            $('.tabs').tabs();

            // $('textarea#info').characterCounter();

            $('select').formSelect();

            

            $('.addbtn').click(function(){
                $('.newinfo').append('<input id="info'+counter+'" type="text" placeholder="additional info'+counter+'" class="validate"  style="display:none;"/>');
                $('#info'+counter).fadeIn(1000);
                counter++;
            });

            $('#submit').click(function(e){

                e.preventDefault();

                var items = new Array();
                
                var form_data = new FormData();

                var files = $('#myupd')[0].files;

                for(x = 0; x < counter; x++){
                
                    var item = $('#info'+x).val();
                
                    if(item != ""){
                        items.push(item);
                    }   
                
                }


                for(var count = 0; count <files.length; count++){
                    form_data.append("upl[]",files[count]);
                }

                var form = $('.my-form').serializeArray();
                
                for(x = 0; x < form.length; x++){
                    form_data.append(form[x].name,form[x].value);
                }

                form_data.append('price_addtional_info[]',items);

                console.log(form_data);


                $.ajax({
                        url: "<?php echo site_url('/cms/AddPricePackage');?>",
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


                counter = 1;
            });

            
        });
    </script>
    <?php adminjs();?>

</html>