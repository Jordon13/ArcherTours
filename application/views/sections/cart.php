<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!Doctype html>
<html lang="en">

    <head>
        <title>Cart Checkout</title>
        <?php main_head(1);?>

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


    .input-field input{
        border: none!important;
        color: white!important
    }

    .row .input-field input:+label{
        color: white!important;
    }

    .row .input-field input{
        border-bottom: 0.5px solid rgba(224,224,224 ,0.02) !important;
        box-shadow: 0 0.5px 0 0 rgba(224,224,224 ,1) !important
    }

    .input-field input:focus + label {
        color: #fdd800!important;
    }

    .row .input-field textarea{
        border-bottom: 0.5px solid rgba(224,224,224 ,0.02) !important;
        box-shadow: 0 0.5px 0 0 rgba(224,224,224 ,1) !important
    }

    .input-field textarea:focus + label {
        color: #fdd800!important;
    }

    .row .input-field textarea:focus {
        border-bottom: 0.5px solid #fdd800!important;
        box-shadow: 0 0.5px 0 0 #fdd800!important;
    }

    .row .input-field input:focus {
        border-bottom: 0.5px solid #fdd800!important;
        box-shadow: 0 0.5px 0 0 #fdd800!important;
    }
        
        .my-form{
        /* background-color: rgba(35, 32, 32, 1)!important; */
        padding: 10px!important;
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

      .bcenter{
            display: flex!important;
            justify-content: center!important;
            width: 100%!important;
        }

    .required{
        color:#f44336;
    }

    tfoot{

    }

    tr.noBorder{
    border: none!important;
    }

    tr.noBorder td{
    border: none!important;
    border-left: 1px solid inherit;
    }

    tr.noBorder th{
    border: none!important;
    border-top: 2px solid black!important;
    }

    .del{
        cursor:pointer;
    }

    .del i:hover{
        color: rgba(255,68,54,0.6)!important;
        transition: color 0.2s ease-in-out;
    }
        
        </style>
    </head>

    <body>

    <?php main_nav(); ?>

    <div class="row">

        <div class="col l8 m8 s12 offset-l1 offset-m0 offset-s0">
            <div class="col"><b><h3 class="h2">Shopping Cart</h3></b></div>
        </div>

    </div>

    

    <?php if(isset($_COOKIE[CARTNAME]) !== null && !empty($_COOKIE[CARTNAME])){?>
        <?php $item = json_decode(base64_decode($_COOKIE[CARTNAME]));?>
        <?php if(count($item) > 0){?>
            
                <div class="row">
                <div class="col l6 m12 offset-l1 offset-m0 offset-s0 s12">
                    <div class="row">
                        <table class="z-depth-1 grey lighten-5">

                            <thead class="grey darken-4 white-text">
                                <tr>
                                    <th>Origin</th>
                                    <th>Desitination</th>
                                    <th>Type</th>
                                    <th>Price</th>
                                    <th>Amount</th>
                                    <th>Discount</th>
                                    <th>Total</th>
                                    <th>Deposit</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>

                            <?php $itms = json_decode(base64_decode($_COOKIE[CARTNAME])); $gt = 0?>

                            <tbody>
                                <?php foreach($itms as $item){?>
                                <tr>
                                    <td><?php echo $item->type;?></td>
                                    <td><?php echo $item->type;?></td>
                                    <td><?php echo $item->type;?></td>
                                    <td>$<?php echo $item->price;?></td>
                                    <td><input class="quan" type="number" value="<?php echo $item->quantity;?>"/></td>
                                    <td>%<?php echo $item->discount;?></td>
                                    <td class="tot">$<?php $totalAmt = ($item->quantity * $item->price) - (($item->discount / 100) * ($item->quantity * $item->price)); echo $totalAmt; ?></td>
                                    <td class="dep">$<?php echo $totalAmt * 0.10; $gt+=($totalAmt * 0.10);?></td>
                                    <td class="del"><i class="material-icons red-text">delete</i></td>
                                </tr>
                                <?php }?>
                                
                            </tbody>

                            <tfoot class="grey darken-4 white-text">
                                <tr class="noBorder">
                                    <th colspan="9" class="right-align">Grand Total (Total Deposits)</th>
                                </tr>
                                <tr class="noBorder">
                                    <td colspan="9" class="right-align" id="gt">$<?php echo $gt;?></td>
                                </tr>
                            </tfoot>

                        </table>
                    </div>

                    <div class="row">
                        <div class="divider"></div>

                        <blockquote>Please note we only process payments through paypal for this release.</blockquote>
                        
                        <blockquote>In the next release direct card payment will be available.</blockquote>
                        
                        <blockquote>There will be a popup to collect payment, please allow it for a successful booking.</blockquote>

                        <blockquote>Only 10% of the original cost will be collected. Remainder must be payed in person.</blockquote>
                    </div>

                    <div class="row bcenter">
                        
                        <a href="<?php echo base_url('/services');?>" class="btn btn-large grey lighten-4 black-text waves-effect waves-light">
                        Continue Shopping<i class="material-icons right">thumb_up</i>
                        </a>
                        
                    </div>

                </div>

                <div class="col l4 m12 s12 offset-m0 offset-s0">
                    <form class="my-form grey darken-4 z-depth-1">

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
                            <div class="input-field col s12">
                                <input id="tripdate" name="tripdate" type="text" class="datepicker validate">
                                <label for="tripdate">Date Of Trip</label>
                            </div>

                            <div class="input-field col s12">
                                <textarea name="adinfo" id="adinfo" type="text" class="materialize-textarea white-text validate"></textarea>
                                <label for="adinfo">Additional Information</label>
                            </div>
                        </div>

                        <div class="row bcenter" style="margin-bottom:0px!important;">
                            <div class="input-field col" style="margin-bottom:0px!important;">
                            <button class="btn btn-large yellow black-text waves-effect waves-light" type="submit" id="submit" style="border-radius:100px!important;">
                            Book Now<i class="material-icons right">forward</i>
                            </button>
                            </div>
                        </div>

                        <div class="row center-align result green-text">
                        </div>

                    </form>
                </div>
        
            <?php }else{?>

            <div class="row valign-wrapper center">
                <div class="col s12"><h5>No Items In Cart</h5></div>
            </div>

            <div class="row bcenter">  
                <a href="<?php echo base_url('/services');?>" class="btn btn-large grey lighten-4 black-text waves-effect waves-light">
                Continue Shopping<i class="material-icons right">thumb_up</i>
                </a>
            </div>

            <?php }?>    
    </div>
    <?php }else{?>

        <div class="row valign-wrapper center">
            <div class="col s12"><h5>No Items In Cart</h5></div>
            
        </div>

        <div class="row bcenter">
                
            <a href="<?php echo base_url('/services');?>" class="btn btn-large grey lighten-4 black-text waves-effect waves-light">
            Continue Shopping<i class="material-icons right">thumb_up</i>
            </a>
                
        </div>

    <?php }?>


    <?php main_footer(); ?>
    </body>


    <script>

        Object.defineProperty(String.prototype, "toInt", {
            value: function toInt() {
                return parseInt(this,10) || 0;
            },
            writable: true,
            configurable: true
        });

        Object.defineProperty(String.prototype, "toFlt", {
            value: function toFlt() {
                return parseFloat(this,10) || 0;
            },
            writable: true,
            configurable: true
        });

        function toMoney(money) {
            return money.toLocaleString('en-US', {style: 'currency',currency: 'USD',}) || 0;
        }

        var json = <?php echo json_encode(json_decode(base64_decode($_COOKIE[CARTNAME])),JSON_PRETTY_PRINT);?>

        var quan = $('.quan');

        quan.keyup('change',function(){

            var index = quan.index(this);

            var cur = quan.eq(index);

            var item = getItem(index);

            var quantity  = cur.val() == undefined || cur.val() <= 0 ? 0 : cur.val().toInt();

            var total = (quantity * item.price.toFlt()) - ((quantity * item.price.toFlt()) * (item.discount.toFlt() / 100));

            var dep = total * 0.10;

            $(".tot").eq(index).text(toMoney(total));

            $(".dep").eq(index).text(toMoney(dep));

            var gt = 0;

            for(x =0; x< quan.length; x++){

                var clean1 = $(".dep").eq(x).text().replace('$', '');

                clean1 = clean1.replace(',', '');

                gt+=clean1.toFlt();
            }

            $("#gt").text(toMoney(gt));
        });

        $(".del").click(function(){
            
            index = $(".del").index(this);

            var dep = $(".dep").eq(index).text().replace('$', '');

            var gt = $("#gt").text().replace('$', '');

            var total = gt - dep;

            $("#gt").text(toMoney(total));

            $('tbody>tr').eq(index).fadeOut();

            $('tbody>tr').eq(index).remove();

            $.post("<?php echo site_url("/client/DeleteCartItem")?>",{id:getItem(index).id},function(data){

                $(".cartTotal").text($('tbody>tr').length);

                //console.table(json);

                json = json.filter(r => r.id !== getItem(index).id);

                if(data.trim() == "none"){
                    //console.table(json);
                    return;
                }else{
                    //console.table(json);
                    document.write(data);
                    return;
                }

                
                
            });

        });

        $('.datepicker').eq(0).datepicker({
            showDaysInNextAndPreviousMonths: false,
            minDate: new Date()
        });


        $("#submit").on('click',(e) =>{
            e.preventDefault();

            var form_data = new FormData();

            var form = $('.my-form').serializeArray();

            for(x = 0; x < form.length; x++){
                form_data.append(form[x].name,form[x].value);
            }

            form_data.append("items",JSON.stringify(json));

            $.ajax({
                url: "<?php echo site_url('/client/CreatePayment');?>",
                method: "POST",
                data: form_data,
                beforeSend: function(){
                  //$(".result").css("color","#fdd800");

                  $('.result').html("Processing...");
                },
                success: function(e) {
                    console.table(e);
                   //$(".result").css("color","#fdd800");
                    $('.result').html("Booked Successfully!");
                },
                contentType: false,
                cache: false,
                processData:false,       

            });

        });

    
    
        var total = 0;

        var getItem = (index) => json[index];

    </script>

</html>