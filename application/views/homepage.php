<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->helper('script');

?>

    <!doctype html>

    <html lang="en">

    <style>
        .background-area{
            width: 100%;
            background-image: url(<?php echo base_url('assets/whitebg.jpg')?>);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
           /* background-attachment: fixed;*/
            z-index: 1;
            
        }
    </style>

    <head>
        <title>ArcherTours</title>
        <?php archerHeader();?>
    </head>

    <body>
        
    <?php floatingMessage();?>
        <!-- sction1-->

        <!--Section1 end -->

        <div class="container col-12 m-0 p-0">

            <div class="row m-0 p-0 col-md-12 justify-content-center align-items-start" id="bg-image">
                <div class="overlay"></div>

                <?php navBar();?>

                <div class="container" style="z-index: 3;" data-aos="fade-up">
                    <div class="row justify-content-center">
                        <h1 class="h1 text-white text-center text-shadow">Experience Jamaica's paradise through drivers that are reliable, knowledgeable and trustworthy</h1>
                        <hr class="my-7 col-md-6" style="background-color: rgba(255,255,255, 0.7);" />

                        <blockquote class="blockquote text-center col-md-12 text-white ">
                            <p class="mb-0 text-center text-shadow">The world is a book, and those who do not travel read only a page.</p>
                            <footer class="blockquote-footer text-white lead">Saint Augustine <cite title="Source Title ">Binary Quotes</cite></footer>
                        </blockquote>
                        <button type="button" class="btn btn-outline-light text-lg p-2 m-4 bounce" style="" data-toggle="modal" data-target="#exampleModalCenter1">Book A Trip</button>
                    </div>

                </div>

            </div>

        </div>

        <!--Book a trip -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">Book A trip</h5>
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
                                    <input type="text" class="form-control" placeholder="Pickup">
                                </div>
                            </div>

                            <div class="row col-m-12 m-2">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Destination">
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
                                    <textarea class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-outline-success">Book Trip</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- -->

        <!-- section 2-->
        <div class="container col-md-12 p-4" data-aos="fade-up">

            <div class="row col-md-12 p-4 m-0" style="background-color: #EEEEEE;">

                <div class="col-md-6">
                    <!--<iframe width="100%" height="500px" src="https://www.youtube.com/embed/32ZG9WiR4wg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                        <video controls class="player" id="player1" height="100%"
	                        width="100%" loop muted poster="<?php echo base_url('assets/trips/19.jpeg') ?>"
	                        preload="auto" src="<?php echo base_url('assets/trips/23.mp4') ?>"
	                        tabindex="0" title="MediaElement">
                        </video>
                </div>
                <div class=" col-md-6">

                    <h1 class="h2 text-dark">Welcome to Archer 1062 Tours since 2015 established far far away.</h1>
                    <p class="text-black-50">
                        <br/>
                        <br/>We take pride in providing exceptional services to our clients/guests here in Jamaica.
                        <br/>
                        <br/> We provide airport transfer to and from Sangster International Airport. We will take care of you and yours the minute you exit the custom area at the ports whether you travel by air or sea
                        <br/>
                        <br/> We will fulfill you needs for taxi services for any Tours/Excursion or if you just want to go on a "JOYRIDE"</p>

                </div>

            </div>

            <div class="row">
                <!-- Testimonials -->
                <div class="container-fluid" data-aos="fade-up">
                    <h1 class="text-center my-3">Testimonials</h1>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner row w-100 mx-auto">
                            <div class="carousel-item col-md-4 active">
                                <div class="card shadow-sm">
                                    <img src="<?php echo base_url('assets/6.jpg') ?>" class="card-img-top" alt="blank">
                                    <div class="card-body">
                                        <h4 class="card-title">Card 1</h4>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item col-md-4">
                                <div class="card shadow-sm">
                                    <img src="<?php echo base_url('assets/6.jpg') ?>" class="card-img-top" alt="blank">
                                    <div class="card-body">
                                        <h4 class="card-title">Card 2</h4>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item col-md-4">
                                <div class="card shadow-sm">
                                    <img src="<?php echo base_url('assets/6.jpg') ?>" class="card-img-top" alt="blank">
                                    <div class="card-body">
                                        <h4 class="card-title">Card 3</h4>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item col-md-4">
                                <div class="card shadow-sm">
                                    <img src="<?php echo base_url('assets/6.jpg') ?>" class="card-img-top" alt="blank">
                                    <div class="card-body">
                                        <h4 class="card-title">Card 4</h4>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item col-md-4">
                                <div class="card shadow-sm">
                                    <img src="<?php echo base_url('assets/6.jpg') ?>" class="card-img-top" alt="blank">
                                    <div class="card-body">

                                        <h4 class="card-title">Card 5</h4>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item col-md-4">
                                <div class="card shadow-sm">
                                    <img src="<?php echo base_url('assets/6.jpg') ?>" class="card-img-top" alt="blank">
                                    <div class="card-body">
                                        <h4 class="card-title">Card 6</h4>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item col-md-4">
                                <div class="card shadow-sm">
                                    <img src="<?php echo base_url('assets/6.jpg') ?>" class="card-img-top" alt="blank">
                                    <div class="card-body">
                                        <h4 class="card-title">Card 7</h4>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-12 text-center mt-4">
                                    <a class="btn btn-outline-secondary mx-1 prev" href="javascript:void(0)" title="Previous">
                                        <i class="fa fa-lg fa-chevron-left"></i>
                                    </a>
                                    <a class="btn btn-outline-secondary mx-1 next" href="javascript:void(0)" title="Next">
                                        <i class="fa fa-lg fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <h1 class="text-center my-3 col-md-12">Recent Places</h1>
                <div class="container col-md-12">
                    <div class="row">
                        <div class="col-md-4" data-aos="zoom-in">
                            <figure class="figure shadow-sm col-md-12 p-0 m-0 border rounded">
                                <img src="<?php echo base_url('assets/trips/6.jpeg') ?>" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                                <figcaption class="figure-caption">A caption for the above image.</figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in">
                            <figure class="figure shadow-sm col-md-12 p-0 m-0 border rounded">
                                <img src="<?php echo base_url('assets/trips/1.jpeg') ?>" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                                <figcaption class="figure-caption">A caption for the above image.</figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in">
                            <figure class="figure shadow-sm col-md-12 p-0 m-0 border rounded">
                                <img src="<?php echo base_url('assets/trips/9.jpeg') ?>" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                                <figcaption class="figure-caption">A caption for the above image.</figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in-up">
                            <figure class="figure shadow-sm col-md-12 p-0 m-0 border rounded">
                                <img src="<?php echo base_url('assets/trips/16.jpeg') ?>" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                                <figcaption class="figure-caption">A caption for the above image.</figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in-up">
                            <figure class="figure shadow-sm col-md-12 p-0 m-0 border rounded">
                                <img src="<?php echo base_url('assets/trips/4.jpeg') ?>" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                                <figcaption class="figure-caption">A caption for the above image.</figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in-up">
                            <figure class="figure shadow-sm col-md-12 p-0 m-0 border rounded">
                                <img src="<?php echo base_url('assets/trips/9.jpeg') ?>" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                                <figcaption class="figure-caption">A caption for the above image.</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- section 2 end-->

        <!-- Section 3-->
        <div class="container col-md-12 p-0 m-0">
            <div class="row col-md-12 p-0 m-0">
                <div class="" id="bg-image2">
                    <div class="overlay1"></div>
                </div>
            </div>

        </div>
        <!-- Section 3 End -->

        <!-- Section 4-->
        <div class="container col-md-12 mb-4">
            <div class="row col-md-12 justify-content-center">
                <div class="col-md-12">
                    <h1 class="h1 text-center">Services</h1></div>
                <div class="col-md-12">
                    <div class="card-deck">
                        <div class="card col-md-4 p-0 shadow-sm" data-aos="flip-right">
                            <img class="card-img-top" src="<?php echo base_url('assets/trips/3.jpeg') ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Tours</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <a href="#" class="btn btn-success">Read More...</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Price: $12,000 JMD</small>
                            </div>
                        </div>
                        <div class="card col-md-4 p-0 shadow-sm" data-aos="flip-right">
                            <img class="card-img-top" src="<?php echo base_url('assets/trips/5.jpeg') ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Taxi Service</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-success">Read More...</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Price: $12,000 JMD</small>
                            </div>
                        </div>
                        <div class="card col-md-4 p-0 shadow-sm" data-aos="flip-right">
                            <img class="card-img-top" src="<?php echo base_url('assets/trips/13.jpeg') ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Airport Transfer</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                <a href="#" class="btn btn-success">Read More...</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Price: $12,000 JMD</small>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        </div>
        
    </body>
    <?php footer("home");?>  

    </html>