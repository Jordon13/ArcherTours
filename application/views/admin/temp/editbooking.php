<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
if(!($this->ses->has_userdata("user_ses"))){
    redirect(site_url("Admin/login")."?error=Unauthorized Access: please login to use services");
}else{
    $this->load->helper('script');
}
$linkId = $this->uri->segment(3,-1);

?>

<!Doctype html>


<html>

    <head>
        <title>Edit Booking</title>
        <?php adminhead();?>

        <style>

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
        
            .image-sec{
                border-radius:10px;
                cursor: pointer;
            }

            .switchsec{
                justify-content: center;
            }

            input[disabled] {pointer-events:none}
        
        </style>
    </head>

    <body>
        <?php navigation(2);?>
        <section class="content-area">
            
            <div class="inner-content">

                <div class="row valign-wrapper" style="align-item:center;">

                <div class="col l8 m10 s12 offset-m1 offset-l2 offset-s0" style="margin-top:50px;">

                    <div class="row white image-sec z-depth-1">

                        

                        <div class="col s12">
                            <input id="fname" name="booking_first_name" class="" type="text" value="<?php echo $data['booking_first_name']; ?>" disabled/>
                            <label for="fname">First Name</label>
                        </div>

                        <div class="col s12">
                            <input id="lname" name="booking_last_name" class=""  type="text" value="<?php echo $data['booking_last_name']; ?>" disabled/>
                            <label for="lname">Last Name</label>
                        </div>

                        <div class="col s12">
                            <input id="lname" name="booking_phone_number" class=""  type="text" value="<?php echo $data['booking_phone_number']; ?>" disabled/>
                            <label for="lname">Phone</label>
                        </div>

                        <div class="col s12">
                            <input id="lname" name="booking_last_name" class=""  type="text" value="<?php echo $data['booking_adults']; ?>" disabled/>
                            <label for="lname"># People</label>
                        </div>

                        <div class="col s12">
                            <input id="lname" name="booking_last_name" class=""  type="text" value="<?php echo $data['booking_origin']; ?>" disabled/>
                            <label for="lname">Origin</label>
                        </div>

                        <div class="col s12">
                            <input id="lname" name="booking_last_name" class=""  type="text" value="<?php echo $data['booking_dest']; ?>" disabled/>
                            <label for="lname">Destination</label>
                        </div>

                        <div class="col s12">
                            <input id="price" name="booking_price" class="abt"  type="text" value="<?php echo $data['booking_price']; ?>" disabled/>
                            <label for="price">Booking Price</label>
                        </div>

                        <div class="col s12">
                            <input id="eml" name="booking_email" class="abt"  type="email" value="<?php echo $data['booking_email']; ?>" disabled/>
                            <label for="eml">Email</label>
                        </div>
                        
                        <div class="col s12">
                            <input id="phone" name="booking_date" class="abt"  type="date" value="<?php echo $data['booking_date']; ?>" disabled/>
                            <label for="phone">Booking Date</label>
                        </div>


                        <div class="col s12">
                            <input id="email" name="booking_status" class="abt"  type="text" value="<?php echo strtolower($data['booking_status']);?>" disabled/>
                            <!-- <select>
                                <option value="nego">negotitation</option>
                                <option value="booked">booked</option>
                                <option value="inprog">in progress</option>
                                <option value="completed">completed</option>
                                <option value="cancelled">cancelled</option>
                            </select> -->
                            <label for="email">Booking Status</label>
                        </div>

                        

                        

                        <div class="col s12 hidden_btn center-align" style="display:none;">
                            <div class="row">
                                <button class="btn waves-effect waves-light green save_btn" onclick="save()">Save</button>
                            </div>
                        </div>

                    </div>


                    </div>


                </div>

            </div>

        </section>

        
    </body>
    <?php adminjs();?>

    <script>
        $('select').formSelect();
            let map = new Map();

            let imgs = new Map();

            let form_data = new FormData();

            var globalIndex = undefined;

            var once = false;
    
            $('document').ready(function(){

                $('.abt').click(function(){

                    var index = $('.abt').index(this);

                    console.log(index);

                });

                $('.abt').on('change',function(){

                    var index = $('.abt').index(this);

                    var image = $('.abt').eq(index).attr('type');

                    var val = $(".abt").eq(index).val();

                    var attrValue = $(`.abt:eq(${index})`).attr('name');

                    if(image  == "file"){

                        var attrValue = $(`.abt:eq(${index})`).attr('name');

                        imgs.set(attrValue);

                        var files = $(`.abt:eq(${index})`)[0].files;
    
                        for(var count = 0; count <files.length; count++){
                            form_data.append("upl[]",files[count]);
                        }

                        console.log(imgs);

                        return;
                    }

                    map.set(attrValue,val);

                    console.log(map);
                });

                $(".image-sec").on('click', function() {

                    var index = $(".image-sec").index(this);

                    globalIndex = index;

                    var elementsIndiv = $(`.image-sec:eq(${index})`).find(".abt")
                    .each(function(){
                        $(this).prop('disabled', false);;
                    });

                    $(".hidden_btn").eq(index).show();

                    if(!once){
                        var toastHTML = '<span>Press \'esc on keyboard\' to close </span>';
                        M.toast({
                            html: toastHTML,
                            displayLength:10000
                        });
                    }

                    once = true;

                });

                $('.cncl').click(function(){
                    var elementsIndiv = $(`.image-sec:eq(${globalIndex})`).find(".abt")
                    .each(function(){
                    $(this).prop('disabled', true);
                    });

                    $(".hidden_btn").hide();
                });
                
                $(document).keyup(function(e){
                    if (e.keyCode === 27){
                        var elementsIndiv = $(`.image-sec`).find(".abt")
                        .each(function(){
                        $(this).prop('disabled', true);;
                        });

                        $(".hidden_btn").hide();
                    }
                    
                });

            });


            var save = () =>{

                if(map.size <= 0 && imgs.size <= 0){
                    console.log("No changes made in dataset");
                    return;
                }

                

                if(map.size > 0){
                    map.forEach((val,key,map) =>{
                        form_data.append(key,val);
                    });
                }

                if(imgs.size > 0){
                    
                    form_data.append('images',Array.from(imgs));
                }

                form_data.append('id',<?php echo $linkId;?>);

                $.ajax({
                    url: "<?php echo site_url('/cms/EditBooking');?>",
                    method: "POST",
                    data: form_data,
                    beforeSend:function(){
                        $('.save_btn').html('Processing...');
                        $('.save_btn').prop('disabled',true);
                    },
                    success: function(res) {
                        map = new Map();
                        imgs = new Map();
                        form_data = new FormData();
                        $('.save_btn').text('Saved!');

                        setTimeout(function(){
                            
                            $('.save_btn').text('Save');
                            $('.save_btn').prop('disabled',false);
                        },2000);
                        console.log(res);
                    },
                    contentType: false,
                    cache: false,
                    processData:false
                });

            }

            function kFormatter(num) {
                return Math.abs(num) > 999 ? Math.sign(num)*((Math.abs(num)/1000).toFixed(1)) + 'k' : Math.sign(num)*Math.abs(num)
            }

    </script>

</html>