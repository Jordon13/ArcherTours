<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->helper('script');

?>
<html lang="en">
<head>
    <title>Booking</title>
    <?php archerHeader();?>

    <style>
        .required{
            color: rgba(255,0,0,0.8);
        }

        .bkg{
            width: 100%;
            height: 600px;
            background-image: url(<?php echo base_url('assets/booking/travel.jpg')?>);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
           /* background-attachment: fixed;*/
            z-index: 1;
        }
    </style>
</head>
<body>
    <?php navBar("booking");?>
    <?php floatingMessage();?>
    
    <div class="fluid-container col-md-12 bkg">
    </div>
    
    <div class="fluid-container col-md-12 m-0 p-3">

        <div class="row col-md-12 m-0 p-3 justify-content-center">
        
            <div class="col-md-6 border rounded shadow-lg">
            <div class="h3 col-md-6 p-3 text-success">Request A Quote
            </div>

            <div class="col-md-12 p-0 m-0">
            <hr class="my-2 col-md-11" style="background-color: rgba(255,255,255, 0.7);" />
            </div>
            
                <form class="col-md-12 p-3">
                <div class="form-row">
                    
                    <div class="form-group col-md-6">
                        <label for="firstname"><span class="required">* </span>Firstname</label>
                        <input type="email" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter Firstname">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your information</small>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="lastname"><span class="required">* </span>Lastname</label>
                        <input type="email" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Enter Lastname">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your information</small>
                    </div>

                    <hr class="my-7 col-md-12" style="background-color: rgba(255,255,255, 0.7);" />
                    <div class="form-group col-md-6">
                        <label for=""><span class="required">* </span>Pickup</label>
                        <input type="email" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter Firstname">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your information</small>
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""><span class="required">* </span>Destination</label>
                        <input type="email" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter Firstname">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your information</small>
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""><span class="required">* </span>Number Of People</label>
                        <input type="email" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter Firstname">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your information</small>
                    </div>

                    <div class="form-group col-md-6 row">
                        <label for="" class="col-md-12"><span class="required">* </span>Date/Time Of Service</label>
                        <input type="date" class="form-control col-md-6 ml-3" >
                        <select class="form-control col-md-4  ml-3">
                            <option>Select Time</option>
                            <option>12:00 AM</option>
                            <option>1:00 AM</option>
                            <option>2:00 AM</option>
                            <option>3:00 AM</option>
                            <option>4:00 AM</option>
                            <option>5:00 AM</option>
                            <option>6:00 AM</option>
                            <option>7:00 AM</option>
                            <option>8:00 AM</option>
                            <option>9:00 AM</option>
                            <option>10:00 AM</option>
                            <option>11:00 AM</option>
                            <option>12:00 PM</option>
                            <option>1:00 PM</option>
                            <option>2:00 PM</option>
                            <option>3:00 PM</option>
                            <option>4:00 PM</option>
                            <option>5:00 PM</option>
                            <option>6:00 PM</option>
                            <option>7:00 PM</option>
                            <option>8:00 PM</option>
                            <option>9:00 PM</option>
                            <option>10:00 PM</option>
                            <option>11:00 PM</option>

                        </select>
                        <small id="emailHelp" class="form-text text-muted ml-3">We'll never share your information</small>
                    </div>

                    <hr class="my-7 col-md-12" style="background-color: rgba(255,255,255, 0.7);" />
                    <div class="form-group col-md-6">
                        <label for=""><span class="required">* </span>Email Address</label>
                        <input type="email" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter Firstname">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your information</small>
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""><span class="required"></span>Phone Number</label>
                        <input type="email" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter Firstname">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your information</small>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="">Details</label>
                        <textarea class="form-control" id="formGroupExampleInput3" placeholder="Give Some Details About Your Travel...."></textarea>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your information</small>
                    </div>

                    <div class="form-group col-md-12">
                        <p class="w-100 text-center"><a href="#" class="btn btn-outline-success text-lg">Get Price</a></p>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>

    <?php footer();?>
</body>
</html>