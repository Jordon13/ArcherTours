<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

?>

<!Doctype html>


<html>

    <head>
        <title>Admin Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        
        <style>
        
        .bkg{
            width: 100%;
            height: 100%;
            background-image: url(<?php echo base_url('assets/login/login.jpg')?>);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
           /* background-attachment: fixed;*/
            z-index: 1;
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

    <body class="bkg">
    <div class="overlay"></div>
        <div class="fluid-container col-md-12">
        
            <div class="row col-md-12 justify-content-center align-content-center" style="height: 700px;">
                
                
                <div class="col-md-4">

                <h3 class="h3 p-2 m-0 col-md-12 text-center" style="background-color: rgba(255,255,255,0.8)">Archer CMS Portal</h3>
                    <form class="form-row p-3 col-md-12  border-right border-bottom border-left border-right-light border-bottom-light border-left-light m-0">
                        
                        <input type="email" class="form-control m-2" placeholder="Email">

                        <input type="password" class="form-control m-2" placeholder="Password">

                        <div class="col-md-12 row justify-content-center">
                        <a href="#" class="btn btn-outline-light m-2 text-center">Login</a>
                        </div>

                    </form>
                </div>
            
            </div>
            

        </div>

    </body>

</html>