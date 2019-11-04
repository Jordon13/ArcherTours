<?php

defined('BASEPATH') OR exit('No direct script access allowed');
if(!($this->ses->has_userdata("user_ses"))){
    redirect(site_url("Admin/login")."?error=Unauthorized Access: please login to use services");
}else{
    $this->load->helper('script');
}

$nodata = false;

if($data == NULL){
    $nodata = true;
}


if(count($data) <= 0){
    $nodata = true;
}

?>

<!Doctype html>


<html>

    <head>
        <title>BookingAnalytics</title>
        <?php adminhead();?>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
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

          .tab a{
              color: white!important;
          }

          .tabs .tab a.active{
              background-color: #64b5f6!important;
          }

          .indicator{
              background-color:  #64b5f6!important;
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

          .divider{
              margin-bottom: 1em!important;
          }

          .responsive-table thead{
              position: sticky;
              top:100;
          }

          .responsive-table tbody:hover{
             overflow-y: scroll!important;
          }

          table tbody tr td{
              cursor: pointer;
          }

          table tbody tr:hover{
              background-color: #fafafa;
          }


          .parea{
            display: flex!important;
            width:100%!important;
            justify-content: space-between;
            /* height: 50px!important; */
            flex-flow: no warp;
            padding:0.5em;
            align-items: center;
            
          }

          .parea .circle{
            padding: 2em!important;
            /* margin: 1em; */
            width: 5.8em;
            text-align: center!important;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            border: 3px solid #ddd;
            border-radius: 3.5em;
            background-color: rgba(250,250,250,1);
            z-index: 2;
            font-size: 12px;
          }

          .active-circle{
              border-color: #2962ff!important;
          }

          .parea .circle:after{
            height: 3px;
            background-color: #ddd;
              width: 90%;
          }

          .parea .line{
              height: 3px;
              background-color: #ddd;
              width: 90%;
              align-self: center;
              margin-left: -90%;
              /* left: 10px; */
          }
          .maintab{
              /* min-height: 100%!important; */
             
          }

          .tabarea{
              /* height: 100%!important; */
              
          }

          .tabs-content{
              height: 23000px;
              
          }

          /* #Quote:hover{
            overflow-y: scroll!important;
          } */

        </style>
    </head>

    <body>
        <?php navigation($_GET['active']);?>
        <section class="content-area">

            <div class="inner-content">
            
                <?php if(!$nodata){?>
                <!-- <div class="row maintab">
                    <div class="col l10 m10 s12 offset-l1 offset-m1 offset-s0">
                        <div class="parea ">
                            <div class="circle active-circle">Nego</div>
                            <div class="circle">Booked</div>
                            <div class="circle">InProg</div>
                            <div class="circle">Comp</div>
                            
                        </div>
                    </div>
                </div>

                <div class="divider"></div> -->

                <div class="row">
                    <div class="col s12 tabarea">
                    
                        <ul id="tabs-swipe-demo" class="tabs tabs-fixed-width blue accent-4 white-text">
                           
                            <li class="tab col s3"><a class="" href="#Negotiation">Negotiation</a></li>
                            <li class="tab col s3"><a href="#Booked">Booked</a></li>
                            <li class="tab col s3"><a href="#InProgress">In Progress</a></li>
                            <li class="tab col s3"><a class="" href="#Completed">Completed</a></li>
                            <li class="tab col s3"><a href="#Cancelled">Cancelled</a></li>
                        </ul>

                        <!-- from here -->
                        

                        <div id="Negotiation" class="col s12 white" style="padding: 1em!important;">
                            <table class="responsive-table centered">
                                
                                <thead class="grey lighten-5">
                                    <tr>
                                        <th>Id</th>
                                        <th>Customer Name</th>
                                        <th>Origin</th>
                                        <th>Destination</th>
                                        <th>#People</th>
                                        <th>Date Of Trip</th>
                                        <th>Estimated Price</th>
                                    </tr>
                                <thead>

                                <tbody>

                                <?php foreach($data as $d){?>

                                <?php if($d['booking_status'] == "nego"){?>
                                    <tr onclick="openpage(<?php echo $d['auto_generated_id']; ?>)">

                                        <td><?php echo $d['auto_generated_id']?></td>
                                        <td><?php echo $d['booking_first_name'].' '.$d['booking_last_name'];?></td>
                                        <td><?php echo $d['booking_origin']?></td>
                                        <td><?php echo $d['booking_dest']?></td>
                                        <td><?php echo $d['booking_adults']?></td>
                                        <td><?php echo $d['booking_date']?></td>
                                        <td><?php echo $d['booking_price']?></td>

                                    </tr>
                                <?php }?>

                                <?php }?>

                                </tbody>
                                
                                <tfoot></tfoot>
                            
                            </table>
                        </div>

                        <div id="Booked" class="col s12 white" style="padding: 1em!important;">
                            <table class="responsive-table centered">
                                
                                <thead class="grey lighten-5">
                                    <tr>
                                        <th>Id</th>
                                        <th>Customer Name</th>
                                        <th>Origin</th>
                                        <th>Destination</th>
                                        <th>#People</th>
                                        <th>Date Of Trip</th>
                                        <th>Estimated Price</th>
                                    </tr>
                                <thead>

                                <tbody>

                                <?php foreach($data as $d){?>

                                <?php if($d['booking_status'] == "booked"){?>
                                    <tr onclick="openpage(<?php echo $d['auto_generated_id']; ?>)">

                                        <td><?php echo $d['auto_generated_id']?></td>
                                        <td><?php echo $d['booking_first_name'].' '.$d['booking_last_name'];?></td>
                                        <td><?php echo $d['booking_origin']?></td>
                                        <td><?php echo $d['booking_dest']?></td>
                                        <td><?php echo $d['booking_adults']?></td>
                                        <td><?php echo $d['booking_date']?></td>
                                        <td><?php echo $d['booking_price']?></td>

                                    </tr>
                                <?php }?>

                                <?php }?>

                                </tbody>
                                
                                <tfoot></tfoot>
                            
                            </table>
                        </div>

                        <div id="InProgress" class="col s12 white" style="padding: 1em!important;">
                            <table class="responsive-table centered">
                                
                                <thead class="grey lighten-5">
                                    <tr>
                                        <th>Id</th>
                                        <th>Customer Name</th>
                                        <th>Origin</th>
                                        <th>Destination</th>
                                        <th>#People</th>
                                        <th>Date Of Trip</th>
                                        <th>Estimated Price</th>
                                    </tr>
                                <thead>

                                <tbody>

                                <?php foreach($data as $d){?>

                                <?php if($d['booking_status'] == "inprog"){?>
                                    <tr onclick="openpage(<?php echo $d['auto_generated_id']; ?>)">

                                        <td><?php echo $d['auto_generated_id']?></td>
                                        <td><?php echo $d['booking_first_name'].' '.$d['booking_last_name'];?></td>
                                        <td><?php echo $d['booking_origin']?></td>
                                        <td><?php echo $d['booking_dest']?></td>
                                        <td><?php echo $d['booking_adults']?></td>
                                        <td><?php echo $d['booking_date']?></td>
                                        <td><?php echo $d['booking_price']?></td>

                                    </tr>
                                <?php }?>

                                <?php }?>

                                </tbody>
                                
                                <tfoot></tfoot>
                            
                            </table>
                        </div>
                        
                        <div id="Completed" class="col s12 white" style="padding: 1em!important;">
                            <table class="responsive-table centered">
                                
                                <thead class="grey lighten-5">
                                    <tr>
                                        <th>Id</th>
                                        <th>Customer Name</th>
                                        <th>Origin</th>
                                        <th>Destination</th>
                                        <th>#People</th>
                                        <th>Date Of Trip</th>
                                        <th>Estimated Price</th>
                                    </tr>
                                <thead>

                                <tbody>

                                <?php foreach($data as $d){?>

                                <?php if($d['booking_status'] == "completed"){?>
                                    <tr onclick="openpage(<?php echo $d['auto_generated_id']; ?>)">

                                        <td><?php echo $d['auto_generated_id']?></td>
                                        <td><?php echo $d['booking_first_name'].' '.$d['booking_last_name'];?></td>
                                        <td><?php echo $d['booking_origin']?></td>
                                        <td><?php echo $d['booking_dest']?></td>
                                        <td><?php echo $d['booking_adults']?></td>
                                        <td><?php echo $d['booking_date']?></td>
                                        <td><?php echo $d['booking_price']?></td>

                                    </tr>
                                <?php }?>

                                <?php }?>

                                </tbody>
                                
                                <tfoot></tfoot>
                            
                            </table>
                        </div>

                        <div id="Cancelled" class="col s12 white" style="padding: 1em!important;">
                            <table class="responsive-table centered">
                                
                                <thead class="grey lighten-5">
                                    <tr>
                                        <th>Id</th>
                                        <th>Customer Name</th>
                                        <th>Origin</th>
                                        <th>Destination</th>
                                        <th>Date Of Trip</th>
                                        <th>Estimated Price</th>
                                    </tr>
                                <thead>

                                <tbody>

                                <?php foreach($data as $d){?>

                                <?php if($d['booking_status'] == "cancelled"){?>
                                    <tr onclick="openpage(<?php echo $d['auto_generated_id']; ?>)">

                                        <td><?php echo $d['auto_generated_id']?></td>
                                        <td><?php echo $d['booking_first_name'].' '.$d['booking_last_name'];?></td>
                                        <td><?php echo $d['booking_origin']?></td>
                                        <td><?php echo $d['booking_dest']?></td>
                                        <td><?php echo $d['booking_date']?></td>
                                        <td><?php echo $d['booking_price']?></td>

                                    </tr>
                                <?php }?>

                                <?php }?>

                                </tbody>
                                
                                <tfoot></tfoot>
                            
                            </table>
                        </div>
                    
                    </div>
                </div>
                <?php }else{?>
                    <div class="col s12 center-align">
                        <h1>No Content</h1>
                    </div>
                <?php }?>
            </div>

        </section>


    </body>
    <?php adminjs();?>
    <script>

        $(document).ready(function(){
            $('.tabs').tabs({
                'swipeable': true
            });

            // $('.tabs-content').animate({
            //     'height':+"px"
            // },1200);

            //tabResize();
        });


        // var tabHeight = () =>{
            
        //     var mtabHeight = $('.maintab').outerHeight(true);

        //     var divider= $('.divider').outerHeight(true);

        //     var in1 = $('.inner-content').height();

        //     var in2 = $('.inner-content').outerHeight(true);

        //     var padding =  in2 - in1;

        //     return in1 - (mtabHeight+divider+padding);
        // }

        // var tabResize = () =>{
        //     $(window).resize( () => {
        //         $('.tabs-content').css({
        //             'height': tabHeight()+"px"
        //         });
        //     });
        // }


        var openpage = (id) =>{

            window.open(
            "<?php echo site_url('admin/editbooking/')?>"+id,
            '_blank' // <- This is what makes it open in a new window.
            );
            //window.location.href = ;
        }
    </script>

</html>
