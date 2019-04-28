<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->helper('script');

?>
<html lang="en">
<head>

    <title>Airport Transfer</title>
    <?php archerHeader();?>

    <style>
        .bg1{
            width: 100%;
            background-image: url(<?php echo base_url('assets/whitebg.jpg')?>);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
           /* background-attachment: fixed;*/
            z-index: 1;
            
        }

        .card-back{
            background-color: #5cb85c;
            color: white;
        }

        .overlay {
                position: absolute;
                width: 100%;
                height: 100%;
                z-index: 0;
                background-color: rgba(10,10,10,0.5);
                margin: 0px;
                padding: 0px;
            }
    </style>

</head>
<body>
    <?php navBar("service");?>
    <?php floatingMessage();?>
    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">Airport Taxi Request</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="">
                            <div class="row col-m-12 m-2">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Fullname">
                                </div>
                            </div>

                            <div class="row col-m-12 m-2">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="No. Passengers">
                                </div>
                            </div>

                            <div class="row col-m-12 m-2">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>

                            <div class="row col-m-12 m-2">
                                <div class="col">
                                    <input type="number" class="form-control" placeholder="Telephone#">
                                </div>
                            </div>

                            <div class="row col-m-12 m-2">
                                <div class="col">
                                    <textarea class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-outline-success">Send Request</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container col-lg-12 p-0 m-0 bg1">
        <div class="overlay"></div>
            <div class="row justify-content-center p-3 m-0">

                <div class="card col-lg-3 m-3 p-0">
                    <h5 class="card-header card-back">Departure From Montego Bay - Jimmy Cliff Boulevard (1-4 passengers)</h5>
                    <div class="card-body">
                        <h6 class="card-title">One Way Trip</h6>
                        <p class="card-text"><strong>Price:</strong> USD $15</p>
                        <p class="card-text"><strong>Price Per Person:</strong> USD $4 (5 and over)</p>
                        <p class="card-text"><a href="https://www.decameron.com/images/destinos/jamaica/cornwall-beach/cornwall-beach-006.jpg">View Jimmy Cliff Boulevard</a></p>
                        <a href="#" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModalCenter1">Request Taxi</a>
                    </div>
                </div>

            </div>

        </div>
    <?php footer();?>
</body>
</html>