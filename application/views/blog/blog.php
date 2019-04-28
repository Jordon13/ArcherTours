<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->helper('script');

?>
<html lang="en">
<head>
    <title>Gallery</title>
    <?php archerHeader();?>

    <style>
    
        .bkg{
            width: 100%;
            height: 600px;
            background-image: url(<?php echo base_url('assets/blogs/blog.jpg')?>);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
           /* background-attachment: fixed;*/
            z-index: 1;
        }

    </style>
</head>
<body>
    <?php navBar("blog");?>
    <?php floatingMessage();?>

    <div class="fluid-container col-md-12 bkg">
    </div>


    <div class="fluid-container col-md-12">

        <div class="row col-md-12 m-0 p-3 justify-content-center">
            <div class="col-md-7 border rounded">
                <h2 class="h2">Ricks Cafe Outings</h2>
                <p class="lead">Great Experience Bro</p>
                <p class="font-weight-light font-italic">Posted By: <span class="font-weight-bold font-italic">Vincent </span>on August 10, 2019</p>
            </div>
            <hr class="my-7 col-md-6" style="background-color: rgba(255,255,255, 0.7);" />
        </div>

        <div class="row col-md-12 m-0 p-3 justify-content-center">
            <div class="col-md-7 border rounded">
                <h2 class="h2">Ricks Cafe Outings</h2>
                <p class="lead">Great Experience Bro</p>
                <p class="font-weight-light font-italic">Posted By: <span class="font-weight-bold font-italic">Vincent </span>on August 10, 2019</p>
            </div>
            <hr class="my-7 col-md-6" style="background-color: rgba(255,255,255, 0.7);" />
        </div>

        <div class="row col-md-12 m-0 p-3 justify-content-center">
            <div class="col-md-7 border rounded">
                <h2 class="h2">Ricks Cafe Outings</h2>
                <p class="lead">Great Experience Bro</p>
                <p class="font-weight-light font-italic">Posted By: <span class="font-weight-bold font-italic">Vincent </span>on August 10, 2019</p>
            </div>
            <hr class="my-7 col-md-6" style="background-color: rgba(255,255,255, 0.7);" />
        </div>
        

    </div>

    <?php footer();?>
</body>

</html>