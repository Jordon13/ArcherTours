<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->helper('script');

?>
<html lang="en">
<head>
    <title>Gallery</title>
    <?php archerHeader();?>

    <style>
    
        .activeLink{
            color: #03A9F4;
        }

        .pictures{
            cursor: pointer;
        }

        .pictures:hover{
            color:#0277BD;
            transition: color 0.4s;
        }

        .videos:hover{
            color:#0277BD;
            transition: color 0.4s;
        }

        .videos {
            cursor: pointer;
        }


        #vids{
            display:none;
        }

        #pics{
            display:show;
        }

        .bkg{
            width: 100%;
            height: 600px;
            background-image: url(<?php echo base_url('assets/gallery/gallery.jpg')?>);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
           /* background-attachment: fixed;*/
            z-index: 1;
        }

    </style>
</head>
<body>
    <?php navBar("gallery");?>
    <?php floatingMessage();?>

    <div class="fluid-container col-md-12 bkg">
    </div>

    <div class="row m-0 p-0 justify-content-center p-3 m-0">

        <div class="col-md-12">
            <p class="lead" style="font-size: 35px;" ><span class="pictures">Pictures</span> | <span class="videos">Videos</span></p>
        </div>
    </div>
    
    <div class="fluid-container p-3" id="pics">

        <figure class="figure shadow-sm col-md-3 p-0 m-0 border rounded">
            <img src="<?php echo base_url('assets/1.jpg')?>" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
            <figcaption class="figure-caption">A caption for the above image.</figcaption>
        </figure>

    </div>


    <div class="fluid-container p-3" id="vids" >

        <figure class="figure shadow-sm col-md-3 p-0 m-0 border rounded">
            <video controls class="player" id="player1"
                width="100%" poster="<?php echo base_url('assets/trips/19.jpeg') ?>"
                preload="auto" src="<?php echo base_url('assets/trips/23.mp4') ?>"
                tabindex="0" title="MediaElement">
            </video>
            <figcaption class="figure-caption">A caption for the above image.</figcaption>
        </figure>

    </div>

    <?php footer();?>
</body>

<script>

        $('document').ready(function(){
            $(".pictures").addClass('activeLink');

            $(".pictures").on('click', function(){
                $(".pictures").addClass('activeLink');
                $(".videos").removeClass('activeLink');
                $("#pics").delay(1000).fadeIn(1000);
                $("#vids").fadeOut(1000);
            });

            $(".videos").on('click', function(){
                $(".pictures").removeClass('activeLink');
                $(".videos").addClass('activeLink');
                $("#pics").fadeOut(1000);
                $("#vids").delay(1000).fadeIn(1000);
            });
        });

</script>
</html>