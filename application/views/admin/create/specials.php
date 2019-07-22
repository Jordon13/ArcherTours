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
        <title>Add Special</title>
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

        .result{
                color: #388E3C;
                display:flex;
                justify-content:center;
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

                                <h5 class="grey-text lighter-3">Create A Special</h5>

                                <div class="divider"></div>

                            </div>

                        </div>

                        <div class="row">

                            <div class="input-field col l6 m6 s12">
                                
                                <input id="deal_place" type="text" name="place"  class="validate"/>
                                <label for="deal_place">Place / Hotel <span class="required">*</span></label>

                            </div>

                            <div class="input-field col l6 m6 s12">
                                
                                <input id="price" type="number" name="price" class="validate"/>
                                <label for="price">Price <span class="required">*</span></label>

                            </div>

                            <div class="input-field col l6 m6 s12">
                                
                                <input id="discount" type="number" name="discount" class="validate"/>
                                <label for="discount">Discount %</label>

                            </div>

                            <div class="input-field col l6 m6 s12">
                                
                                <input id="cphrase" type="text" name="catch_phrase" class="validate"/>
                                <label for="cphrase">Catch Phrase</label>

                            </div>


                            <div class="input-field col l6 m6 s12">
                                
                                <input type="text" class="datepicker" name="sdate" id="sdate">
                                <label for="sdate">Start Date <span class="required">*</span></label>

                            </div>


                            <div class="input-field col l6 m6 s12">
                                
                                <input type="text" class="datepicker" name="edate" id="edate">
                                <label for="edate">Expiry Date <span class="required">*</span></label>

                            </div>

                            <div class="input-field col l6 m6 s12">
                                <select name="package_type">
                                    <option value="1">Family Pack</option>
                                    <option value="2">Single Parent's</option>
                                    <option value="3">Couple's Pack</option>
                                    <option value="4">New Wedded Pack</option>
                                    <option value="4">First Time</option>
                                    <option value="5">Mother's / Father's Day</option>
                                    <option value="6">Loner's Pack</option>
                                    <option value="7">Summer Pack</option>
                                    <option value="8">Winter Pack</option>
                                    <option value="9">Authum Pack</option>
                                    <option value="10">Spring Pack</option>
                                    <option value="11">Christmas Special</option>
                                    <option value="12">Independence Day Pack</option>
                                    <option value="13">Birthday Pack</option>
                                    <option value="14">Party Pack</option>
                                    <option value="15">Sumfest Pack</option>
                                    <!-- <option value="16"></option> -->
                                </select>
                                <label>Package Category <span class="required">*</span></label>
                            </div>

                            <div class="input-field col l6 m6 s12">
                                
                                <input name="packdesc" id="packdesc" type="text"  class="validate"/>
                                <label for="packdesc">Pack Description</label>

                            </div>

                            <div class="input-field col s12">
                                
                                <textarea name="description" id="desc" type="text" class="materialize-textarea validate"></textarea>
                                <label for="desc">Description <span class="required">*</span></label>

                            </div>


                            <div class="file-field input-field col s12">
                                <div class="btn blue-grey lighten-2">
                                    <span>Background Image<span class="required">*</span></span>
                                    <input type="file" name="finfo" id="myupd">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Choose A Picture .jpg or jpeg">
                                </div>
                            </div>



                        </div>

                        <div class="row bcenter">

                            <div class="input-field col">
                            <button class="btn waves-effect waves-light  blue accent-4" type="submit" id="submit">Create Special
                                <i class="material-icons right"></i>
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
    
        $('document').ready(function(){
            $('.datepicker').eq(0).datepicker({
                showDaysInNextAndPreviousMonths: false,
                minDate: new Date()
            });

            $('.datepicker').eq(0).on('change',function(){

                // console.log($(this).val());
                $('.datepicker').eq(1).datepicker({
                    showDaysInNextAndPreviousMonths: false,
                    minDate: new Date($(this).val())
                });
            });

            $('select').formSelect();
        });

        $('#submit').click(function(e){
                
            e.preventDefault();

            $(".result").css("color","#388E3C");

            $('.result').html("Processing...");

            var items = new Array();
                
            var form_data = new FormData();

            var files = $('#myupd')[0].files;

            var form = $('.my-form').serializeArray();

            for(var count = 0; count <files.length; count++){
                form_data.append("upl[]",files[count]);
            }

            console.log(form);

            for(x = 0; x < form.length; x++){
                form_data.append(form[x].name,form[x].value);
            }

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
    <?php adminjs();?>

</html>

