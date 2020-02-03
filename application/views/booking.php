<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->helper('section');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Booking | dont miss an oppurtunity to book with the best site around town.</title>
    <?php main_head();?>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/icons/logo.png'); ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="generator" content="Gatsby 2.15.6">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta  name="description" 
    content="We take pride in providing exceptional services to our clients/guests here in Jamaica. We provide airport transfer to and from Sangster International Airport. We will take care of you and yours the minute you exit the custom area at the ports whether you travel by air or sea No matter how small or how large the group is whether you are here on vacation, business, church or school mission our reliable, knowledgeable, courteous and trustworthy drivers will puntually take care of you and yours from day one to the day you leave We will fullfill your needs for taxi services for any Tours/Excursion or if you just want go on a JOYRIDE">
    <meta name="author" content="Archer1062Tours">
    <meta  name="keywords" content="money, booking, save, saving, cheap, flight, book, tour, trips, trip, taxi, jamaica
    jamaican, jamaican food, places in jamaica, trip in jamaica, tour jamaica, jamaica culture, jamaican culture, jamaican song,
    airport transfer, airport, food, dancehall, reggae, rasta, flight to jamaica, hotels in jamaica, hotels in the caribbean, places in jamaica,
    best places in jamaica to visit, jamaica gleaner, jamaica lagoon, activities in jamaica, usa, united, people, love, one love,bob marley,
    bob marley meseum, sport in jamaica, ackee, ackee and salt fish, jamaican ackee, jamaican people, trip to jamaica, montego bay,
    kingston, negril, ohco rios, falmouth, trelawny, usain bolt, fastest man in the world, tracks and record, restaurants in jamaica,
    restaurants jamaica, jamaica restaurants, jamaican restaurants, restaurants, best price, best, best rates, best trips, best trip, best tour">
    

    <meta property="og:title" content="Archer 1062 Tours">
    <meta property="og:description" content="We take pride in providing exceptional services to our clients/guests here in Jamaica. We provide airport transfer to and from Sangster International Airport. We will take care of you and yours the minute you exit the custom area at the ports whether you travel by air or sea No matter how small or how large the group is whether you are here on vacation, business, church or school mission our reliable, knowledgeable, courteous and trustworthy drivers will puntually take care of you and yours from day one to the day you leave We will fullfill your needs for taxi services for any Tours/Excursion or if you just want go on a JOYRIDE">
    <meta property="og:type" content="website">
    <meta property="og:image" content="">
    <style>
    
    html {
        position: relative;
        height: 100%!important;
        font-family: "Nunito";
    }

    body {
        position: relative;
        height: 100%!important;
    }


    .inputs .input-field input{
        border: none!important;
        color: white!important
    }

    .inputs .input-field input:+label{
        color: white!important;
    }

    .inputs .input-field input{
        border-bottom: 0.5px solid rgba(224,224,224 ,0.02) !important;
        box-shadow: 0 0.5px 0 0 rgba(224,224,224 ,1) !important
    }

    .inputs .input-field input:focus + label {
        color: #fdd800!important;
    }

    .inputs .input-field textarea{
        border-bottom: 0.5px solid rgba(224,224,224 ,0.02) !important;
        box-shadow: 0 0.5px 0 0 rgba(224,224,224 ,1) !important
    }

    .inputs .input-field textarea:focus + label {
        color: #fdd800!important;
    }

    .inputs .input-field textarea:focus {
        border-bottom: 0.5px solid #fdd800!important;
        box-shadow: 0 0.5px 0 0 #fdd800!important;
    }

    .inputs .input-field input:focus {
        border-bottom: 0.5px solid #fdd800!important;
        box-shadow: 0 0.5px 0 0 #fdd800!important;
    }

    .fpage {
        background-image: url(<?php echo base_url('assets/').$data['_booking_img']?>);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        height: 100%!important;
        width: 100%!important;
        background-attachment: fixed;
        position: relative;
    }
    .overlay {
          top: 0px;
          background-color: rgba(0, 0, 0, 0.3);
          height: 100%;
          position: absolute;
          width: 100%;
          z-index: 2!important;
      }

      .custom-hone-link{
        color:white!important;
      }

      .custom-card-header{
        font-weight: bolder;
      }

      .lead {
        font-size: 18px;
        padding: 0.5em;
        margin-bottom: 1em!important;
      }

      .my-form{
        border: 0.9px solid rgba(224,224,224 ,1);
        background-color: rgba(35, 32, 32, 1)!important;
        padding: 0px!important;
      }

      .datepicker-table td.is-selected{
          background-color: #fdd800!important;
      }

      .datepicker-date-display{
          background-color: #fdd800!important;
      }

      .datepicker-table td.is-today{
          color: #e53935!important;
      }


      .datepicker-cancel, .datepicker-clear, .datepicker-today, .datepicker-done{
          color: #fdd800!important;
      }

      .dropdown-content li>a, .dropdown-content li>span {
          color: #fdd800!important;
      }

    .required{
        color:#f44336;
    }

    .bcenter{
      display: flex;
      justify-content: center;
      width: 100%;
    }

    .overlay-post{
      width:100%;
      height:100%;
      position: absolute;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 4;
      background-color: rgba(255,255,255,0.8);
    }


</style>
</head>
<body class="">

    <?php main_nav(); ?>
    <div class="row fpage">
      <div class="overlay"></div>
      
      <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0 center"  style="height:100%!important; z-index:4!important; position:relative;">
        <div class="row valign-wrapper" style="height:100%!important;">
          <div class="col s12" >
          <h5 class="white-text"><a class="custom-hone-link" href="<?php echo site_url('/')?>">Home</a> | <span style="color:rgba(255,255,255,0.8)!important;">Booking</span></h5>
            <h1 class="white-text header"><?php echo $data['_booking_back_title']?></h1>
          </div>
        </div>
      </div>

    </div>

    <div class="row">

      <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0">
  
        <form action="" class="col l8 s12 offset-l2 offset-s0 my-form z-depth-1" style="position:relative;">

          <div class="overlay-post" style="display:none;">

            <div class="preloader-wrapper big active">
              <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                  <div class="circle"></div>
                </div><div class="gap-patch">
                  <div class="circle"></div>
                </div><div class="circle-clipper right">
                  <div class="circle"></div>
                </div>
              </div>

              <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                  <div class="circle"></div>
                </div><div class="gap-patch">
                  <div class="circle"></div>
                </div><div class="circle-clipper right">
                  <div class="circle"></div>
                </div>
              </div>

              <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                  <div class="circle"></div>
                </div><div class="gap-patch">
                  <div class="circle"></div>
                </div><div class="circle-clipper right">
                  <div class="circle"></div>
                </div>
              </div>

              <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                  <div class="circle"></div>
                </div><div class="gap-patch">
                  <div class="circle"></div>
                </div><div class="circle-clipper right">
                  <div class="circle"></div>
                </div>
              </div>
            </div>

          </div>

          <div class="row" style="padding:0.5em!important">

            <div class="col s12">

                <h5 class="white-text lighter-3 center">Request Booking</h5>

                <!-- <div class="divider"></div> -->

            </div>

            </div>

            <div class="row inputs" style="padding:0.5em!important">

              <div class="col s12">

                  <h6 class="white-text lighter-3">General Information</h6>

                  <!-- <div class="divider"></div> -->

              </div>

              <div class="input-field col l6 s12">
                  
                  <input id="fname" type="text" name="fname"  class="validate"/>
                  <label for="fname">First Name <span class="required">*</span></label>

              </div>

              <div class="input-field col l6 s12">
                  
                  <input id="lname" type="text" name="lname"  class="validate"/>
                  <label for="lname">Last Name <span class="required">*</span></label>

              </div>

              <div class="input-field col l6 s12">
                  
                  <input id="email" type="text" name="email"  class="validate"/>
                  <label for="email">Email Address <span class="required">*</span></label>

              </div>

              <div class="input-field col l6 s12">
                  
                  <input id="phone" type="text" name="phone"  class="validate"/>
                  <label for="phone">Phone Number</label>

              </div>


              <div class="input-field col l6 s12">
                  
                  <input id="adult" type="text" name="adult"  class="validate"/>
                  <label for="adult">Adults <span class="required">*</span></label>

              </div>

              <div class="input-field col l6 s12">
                  
                  <input id="kid" type="text" name="kid"  class="validate"/>
                  <label for="kid">Kids</label>

              </div>

              <div class="input-field col l6 s12">
                  <select name="origin">
                      <option value="Lucea, Hanover">Lucea, Hanover</option>
                      <option value="Black River, St. Elizabeth">Black River, Saint Elizabeth</option>
                      <option value="Montego Bay, St. James">Montego Bay, Saint James</option>
                      <option value="Falmouth, Trelawny">Falmouth, Trelawny</option>
                      <option value="Savanna-la-Mar, Westmoreland">Savanna-la-Mar, Westmoreland</option>
                      <div class="divider"></div>
                      <option value="May Pen, Clarendon">May Pen, Clarendon</option>
                      <option value="Mandeville, Manchester">Mandeville, Manchester</option>
                      <option value="St. Ann's Bay, St. Ann">St. Ann's Bay, Saint Ann</option>
                      <option value="Spanish Town, St. Catherine">Spanish Town, Saint Catherine</option>
                      <option value="Port Maria, St. Mary">Port Maria, Saint Mary</option>
                      <div class="divider"></div>
                      <option value="Kingston, Kingston">Kingston, Kingston</option>
                      <option value="Port Antonio, Portland">Port Antonio, Portland</option>
                      <option value="Half Way Tree, St. Andrew">Half Way Tree, Saint Andrew</option>
                      <option value="Morant Bay, St. Thomas">Morant Bay, Saint Thomas</option>
                  </select>
                  <label>Pickup <span class="required">*</span></label>
              </div>

              <div class="input-field col l6 s12">
                  <select name="dest">
                      <option value="Lucea, Hanover">Lucea, Hanover</option>
                      <option value="Black River, St. Elizabeth">Black River, Saint Elizabeth</option>
                      <option value="Montego Bay, St. James">Montego Bay, Saint James</option>
                      <option value="Falmouth, Trelawny">Falmouth, Trelawny</option>
                      <option value="Savanna-la-Mar, Westmoreland">Savanna-la-Mar, Westmoreland</option>
                      <div class="divider"></div>
                      <option value="May Pen, Clarendon">May Pen, Clarendon</option>
                      <option value="Mandeville, Manchester">Mandeville, Manchester</option>
                      <option value="St. Ann's Bay, St. Ann">St. Ann's Bay, Saint Ann</option>
                      <option value="Spanish Town, St. Catherine">Spanish Town, Saint Catherine</option>
                      <option value="Port Maria, St. Mary">Port Maria, Saint Mary</option>
                      <div class="divider"></div>
                      <option value="Kingston, Kingston">Kingston, Kingston</option>
                      <option value="Port Antonio, Portland">Port Antonio, Portland</option>
                      <option value="Half Way Tree, St. Andrew">Half Way Tree, Saint Andrew</option>
                      <option value="Morant Bay, St. Thomas">Morant Bay, Saint Thomas</option>
                  </select>
                  <label>Destination <span class="required">*</span></label>
              </div>

              <div class="input-field col s12">
                  
                  <input id="dealspec" type="text" name="dealspec"  class="validate"/>
                  <label for="dealspec">Deal / Special Ref#</label>

              </div>

              <div class="input-field col s12">
                                
                  <input type="date" class="" name="tripdate" id="tripdate" placeholder="date of trip">
                  
              </div>

              <div class="input-field col s12">
                  <select name="package_type">
                      <option value="1">Airport Transfer</option>
                      <option value="2">Tours & Excursion</option>
                      <option value="3">Taxi Service</option>
                  </select>
                  <label>Service Type <span class="required">*</span></label>
              </div>

              <div class="col s12">

                <h6 class="white-text lighter-3">Addtional Information</h6>

                <!-- <div class="divider"></div> -->

            </div>

              <div class="input-field col s12">
                  
                  <textarea name="desc" id="desc" type="text" class="white-text materialize-textarea validate"></textarea>
                  <label for="desc">Special Instructions</label>

              </div>


              <div class="file-field input-field col s12">
                  <div class="btn yellow black-text waves-effect waves-light">
                      <span>Who are you?</span>
                      <input type="file" name="finfo" id="myupd">
                  </div>
                  <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" placeholder="Upload a photo (optional)">
                  </div>
              </div>
            </div>

            <div class="row bcenter">

                <div class="input-field col">
                <button class="btn  btn-large yellow black-text waves-effect waves-light" type="submit" id="submit" style="border-radius:100px!important;">Request A Quote
                    <i class="material-icons right"></i>
                </button>
                </div>
            </div>

            <div class="row center-align result">
                
            </div>

        </form>

      </div>

    </div>
    <?php main_footer(); ?>

    <script>
    
      $('document').ready(function(){

        $('select').material_select();

        $('.datepicker').eq(0).pickadate({
            showDaysInNextAndPreviousMonths: false,
            minDate: new Date()
        });


        $('#submit').click(function(e){
                
            e.preventDefault();

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
                url: "<?php echo site_url('/client/AddBooking');?>",
                method: "POST",
                data: form_data,
                beforeSend: function(){
                  $(".result").css("color","#fdd800");

                  $('.result').html("Processing...");

                  $('.overlay-post').fadeIn(600);
                },
                success: function(e) {

                    var result = undefined;

                    try{
                    result  = $.parseJSON(e);
                    }catch(exception){
                        console.log("Falied To Parse Json Data, No Json Returned. Please check with the site admin there exist an error in the response.");

                        $(".result").css("color","#d32f2f");

                        $(".result").html("An Error Has Occured");

                        $(".result").delay(2000).fadeOut(1000);

                        $('.overlay-post').fadeOut(600);

                        setTimeout(function(){
                            $('.result').html("Try Again").fadeIn(0);
                        },3000);
                        return;
                    }

                    $(".result").css("color","#388E3C");

                    $(".result").html(result.Message);

                    $(".result").delay(6000).fadeOut(1000);

                    $('.overlay-post').fadeOut(600);

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

                        $('.overlay-post').fadeOut(600);

                        setTimeout(function(){
                            $('.result').html("Try Again").fadeIn(0);
                        },3000);
                    },
                    417:function(response){

                        var result = $.parseJSON(response.responseText);

                        $(".result").css("color","#d32f2f");

                        $(".result").html(result.Message);

                        $(".result").delay(2000).fadeOut(1000);

                        $('.overlay-post').fadeOut(600);

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


      });
    
    </script>
</body>
</html>