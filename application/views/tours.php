<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->helper('section');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Service | Tours</title>
    <?php main_head();?>

    <style>
    
    html {
        position: relative;
        height: 100%!important;
        font-family: "Nunito";
    }

    body {
        position: relative;
        height: 100%!important;
        list-style: circle!important;
    }

    .fpage {
        background-image: url(<?php echo base_url('assets/31.jpg')?>);
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

      .liItem{
        list-style: circle!important;
      }

      .liItem li{
        padding-top: 0.5em!important;
      }

      .book{
          position: fixed!important;
          background-color: rgba(35, 32, 32,0.4)!important;
          height:100%!important;
          width: 100%!important;
          z-index: 10!important;

      }

      .modal-open {
    /* disable scrollbar on both x and y axis */
    overflow: hidden;

    /* disable scrollbar on x-axis only */
    overflow-x: hidden;

    /* disable scrollbar on y-axis only */
    overflow-y: hidden;

    /* disable scroll */
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;

    /* OPTIONAL: none of dom element will be click-able */
    pointer-events: none;
}

.bcenter{
      display: flex;
      justify-content: center;
      width: 100%;
    }

    .result{
        display: flex;
        flex-flow: row wrap;
        justify-content: space-evenly;
    }

</style>

</head>
<body class="">
<!-- 
<div class="book">
        <div class="booknow">
            
        </div>
    </div> -->

    

<!-- Modal Structure -->
<div id="bookit" class="modal modal-fixed-footer">
  <div class="modal-content">
    <!-- <h4>Book Trip</h4> -->
    <div class="divider"></div>

    
    
    <form class="my-form">

        <div class="row">
            <div class="input-field col l6 s12">
                <input id="fname" type="text" name="fname" class="validate">
                <label for="fname">Firstname</label>
            </div>

            <div class="input-field col l6 s12">
                <input id="lname" type="text" name="lname" class="validate">
                <label for="lname">Lastname</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col l6 s12">
                <input id="email" type="email" name="email" class="validate">
                <label for="email">Email Address</label>
            </div>

            <div class="input-field col l6 s12">
                <input id="phone" type="text" name="phone" class="validate">
                <label for="phone">Phone Number</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col l6 s12">
            
            
                <input id="adultcount" name="adultcount" type="number" value="0" class="validate" >
                <label for="adultcount">No. Of Adults</label>
            </div>

            <div class="input-field col l6 s12">
                <input id="childcount" name="childcount" type="number" value="0" class="validate">
                <label for="childcount">No. Of Children</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col l3 s12">
                <input id="tripdate" name="tripdate" type="date" class="validate">
                <label for="tripdate">Date Of Trip</label>
            </div>

            <div class="input-field col l9 s12">
                <textarea name="adinfo" id="adinfo" type="text" class="materialize-textarea validate"></textarea>
                <label for="adinfo">Additional Information</label>
            </div>
        </div>

        <div class="row bcenter">
            <div class="input-field col">
            <button class="btn  btn-large yellow black-text waves-effect waves-light" type="submit" id="submit" style="border-radius:100px!important;">Book It!
                <i class="material-icons right"></i>
            </button>
            </div>
        </div>

        <div class="row center-align result green-text">
                
        </div>

        
        <div class="row center-align results">
                
        </div>

    </form>
    <div class="divider"></div>

    <blockquote>Please note we only process payments through paypal for this release.</blockquote>
      
    <blockquote>In the next release direct card payment will be available.</blockquote>
      
    <blockquote>There will be a popup to collect payment, please allow it for a successful booking.</blockquote>

    <blockquote>Only 10% of the original cost will be collected.</blockquote>

    </div>
    <!-- <div class="modal-footer">
        <a href="" class="modal-close waves-effect waves-red btn-flat">Close</a>
    </div> -->
    </div>
    <?php main_nav(); ?>
    
    <div class="row fpage" style="margin-bottom:0px!important;">
      <div class="overlay"></div>
      
      <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0 center"  style="height:100%!important; z-index:4!important; position:relative;">
        <div class="row valign-wrapper" style="height:100%!important;">
          <div class="col s12" >
          <h5 class="white-text"><a class="custom-hone-link" href="<?php echo site_url('/')?>">Home</a> | <span style="color:rgba(255,255,255,0.8)!important;">Tours</span></h5>
            <h1 class="white-text header">Tours & Excursion</h1>
          </div>
        </div>
      </div>

    </div>
    
    

    <?php if($datas !== 0){?>
    <div class="row" style="margin-top:1em!important;">
        
        <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0">
            <div class="row">
                
            {datas}
                <div class="col l4 m12 s12">
                    <div class="card sticky-action">
                        

                        <div class="card-image waves-effect waves-block waves-light">
                            <span class="card-title" style="font-size:20px!important;">{price_place} ({trip_type})</span>
                            <img class="activator" width="420" height="280" alt="no image"  src="<?php echo base_url('/uploads/prices-images/{price_image}')?>">
                        </div>

                        <div class="card-content">
                            <span class="activator grey-text text-darken-4"><i class="material-icons right">more_vert</i><b>Trip: From </b>{price_origin} <b>To</b> {price_destination}</span>
                            <br/><br/>
                            <p><b>Price Per Adult:</b> USD ${price_per_adult}</p>

                            <p><b>Price Per Child:</b> USD ${price_per_child}</p>

                            <p><b>Group Price:</b> USD ${display_price} for 4 people.</p><br/>

                            <p><b>Description: </b>{price_description}</p>
                        </div>

                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Additional Information<i class="material-icons right">close</i></span>
                            <ul style="list-style: circle!important; padding:1em!important;" class="liItem">
                            {price_addtional_info}<li>{item}</li>{/price_addtional_info}
                            </ul>
                        </div>

                        

                        <div class="card-action center"><a class="waves-effect waves-light btn modal-trigger grey darken-3" id="{package_unique_id}" onclick=getItem('{package_unique_id}') href="#bookit">Book Now</a></div>
                       

                    </div>
                </div>
            {/datas}

            </div>
        </div>

    </div>
  <?php }else{?>
    <div class="row white-text" style="background-color:rgba(35, 32, 32, 1);margin-bottom:0px!important;">
      
      <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0 center"  style="height:100%!important; z-index:4!important; position:relative;">
        <div class="row center" style="height:100%!important;">
          <h2>۞ No Packages Available, Sorry. ۞</h2>
        </div>
      </div>

    </div>
  <?php }?>

    <?php main_footer(); ?>
</body>

<script>

    var items = new Array();

    var totalCount = 0;

    var currentItem = undefined;

    var adults = 0;

    Object.defineProperty(String.prototype, "ToInt", {
        value: function ToInt() {
            return parseInt(this,10) || 0;
        },
        writable: true,
        configurable: true
    });

    $('document').ready(()=>{

        items = <?php echo json_encode($datas);?>

        $('.modal').modal();

        $('.modal').on("show", function () {
            $("body").addClass("modal-open");
        }).on("hidden", function () {
            $("body").removeClass("modal-open")
        });

        $('#adultcount').keyup(function(){
            var text = $('#adultcount').val();
            console.clear();
            
            totalCount = $('#childcount').val().ToInt() + text.ToInt();

            adults = text.ToInt();

            calculatePrice(text.ToInt(),$('#childcount').val().ToInt());
        });

        $('#childcount').keyup(function(){
            var text = $('#childcount').val();
            console.clear();
            
            totalCount = $('#adultcount').val().ToInt() + text.ToInt();

            calculatePrice($('#adultcount').val().ToInt(),text.ToInt());
        });

        $('#submit').click(function(e){
            
            e.preventDefault();

            var form = $('.my-form').serializeArray();
        
            if(totalCount <= 0){
                alert("Please specify the amount of people for this trip");
            }else if(adults <= 0){
                alert("Atleast one adult is needed to complete this transaction");
            }

            var form_data = new FormData();

            for(x = 0; x < form.length; x++){
                form_data.append(form[x].name,form[x].value);
            }

            form_data.append("PackageId",currentItem.package_unique_id)

            console.log(form_data);

            $.ajax({
                url: "<?php echo site_url('/client/CreatePayment');?>",
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
                    //result  = $.parseJSON(e);
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

                    $(".result").html(e);

                    $(".result").delay(6000).fadeOut(1000);

                    $('.overlay-post').fadeOut(600);

                    setTimeout(function(){
                        $('.result').html("Add Another Record").fadeIn(0);
                    },2000);
                },
                contentType: false,
                cache: false,
                processData:false,       

            });
            

        });

    });


    function calculatePrice(adultCount, childCount){

        $('.result').html("");

        console.log("total count: "+totalCount);

        var baseAdultPrice = currentItem.price_per_adult == "" ? 0 : currentItem.price_per_adult.ToInt();

        var baseChildPrice = currentItem.price_per_child == "" ? 0 : currentItem.price_per_child.ToInt();

        var displayPrice = currentItem.display_price == "" ? 0 : currentItem.display_price.ToInt();

        var fourGenDiscount = 4;

        if(totalCount === fourGenDiscount){
            $('.result').html("<p><b>Total Adult Price: $ "+baseAdultPrice*adultCount+" USD</b></p>");
            $('.result').append("<p><b>Total Children Price: $ "+baseChildPrice*childCount+" USD</b></p>");
            $('.result').append("<p><b>Total Price (Original): $ "+((baseAdultPrice*adultCount) + (baseChildPrice*childCount))+" USD</b></p>");
            $('.result').append("<p><b>Total Price (Discounted): $ "+displayPrice+" USD</b></p>");
        }else{

            $('.result').html("<p><b>Total Adult Price: $ "+baseAdultPrice*adultCount+" USD</b></p>");
            $('.result').append("<p><b>Total Children Price: $ "+baseChildPrice*childCount+" USD</b></p>");
            $('.result').append("<p><b>Total Price: $ "+((baseAdultPrice*adultCount) + (baseChildPrice*childCount))+" USD</b></p>");

        }

        console.log(adultCount);

        var TotalPrice = 0;

    }

    function getItem(id){
        if(id === undefined || id == ""){
            currentItem = null;
        }

        if(items == null){
            currentItem = null;
        }

        var item = items.filter(i => i.package_unique_id == id);

        if(item === null || item === undefined){
            currentItem = null;
        }

        currentItem = item[0];

    }

</script>
</html>