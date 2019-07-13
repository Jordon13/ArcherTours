<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
if(!($this->ses->has_userdata("user_ses"))){
    redirect(site_url("Admin/login")."?error=Unauthorized Access: please login to use services");
}else{
    $this->load->helper('script');
}
?>

<!Doctype html>


<html>

    <head>
        <title>Testimonials</title>
        <?php adminhead();?>
        <script src="https://code.iconify.design/1/1.0.2/iconify.min.js"></script>

        <style>
        
        .content-area{
                height: auto!important;
                min-height: 100%;
            }

            .inner-content{
                margin-top: 2em;
                height: auto!important;
                min-height: 100%!important;
            }

            .iconify{
                color: #eeeeee;
            }
        
            .para{}

            .card-image img{
                height: 300px!important;
                width: 100%!important;
            }

        </style>
    </head>

    <body>
        <?php navigation($_GET['active']);?>
        <section class="content-area">
            
            <div class="inner-content">

                <div class="row">

                    <div class="col l4 m6 s12 offset-l0 offset-s0">
                        <div class="card">
                            <div class="card-image">
                                <img src="http://andamanemeraldholidays.com/image/cache/catalog/aaaaa/holidays/image1/Andaman%20Family%20Tour1-1250x917.jpg">
                                <span class="card-title">Alcia Ricketts</span>
                                <a class="btn-floating halfway-fab waves-effect waves-light blue"><i class="material-icons">edit</i></a>
                            </div>
                            <div class="card-content">
                                <div class="row">
                                    <div class="col">
                                    <p class="para"><blockquote><em>"Our gulet cruise from Kos to Patmos was everything and more than expected. 
                                        It lived up to the Peter Sommer Travels' emphasis on culture, history, archaeology,
                                         comfort and camaraderie. Exceptional guides attended to each guest's interests and needs 
                                         and were exceptional hosts. "</em></blockquote></p>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col s12">
                                        <p><b>Trip:</b> Appleton Tour</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col s12 rating">
                                    <span class="iconify yellow-text accent-3" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    <span class="iconify yellow-text accent-3" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    <span class="iconify yellow-text accent-3" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    <span class="iconify yellow-text accent-3" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    <span class="iconify" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col l4 m6 s12 offset-l0 offset-s0">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpuQAqo7AbMcl8u291SJbnINqgLxPTgtYWk0B_eO5WJooo_C-P">
                                <span class="card-title">Alcia Ricketts</span>
                                <a class="btn-floating halfway-fab waves-effect waves-light blue"><i class="material-icons">edit</i></a>
                            </div>
                            <div class="card-content">
                                <div class="row">
                                    <div class="col">
                                    <p class="para"><blockquote><em>"Our gulet cruise from Kos to Patmos was everything and more than expected. 
                                        It lived up to the Peter Sommer Travels' emphasis on culture, history, archaeology,
                                         comfort and camaraderie. Exceptional guides attended to each guest's interests and needs 
                                         and were exceptional hosts. "</em></blockquote></p>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col s12">
                                        <p><b>Trip:</b> Appleton Tour</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col s12 rating">
                                    <span class="iconify yellow-text accent-3" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    <span class="iconify yellow-text accent-3" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    <span class="iconify yellow-text accent-3" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    <span class="iconify yellow-text accent-3" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    <span class="iconify" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col l4 m6 s12 offset-l0 offset-s0">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://previews.123rf.com/images/tidty/tidty1803/tidty180300102/98757438-happy-asian-friends-having-a-good-time-together-while-travel-camping-vacation-trip-by-the-lake.jpg">
                                <span class="card-title">Alcia Ricketts</span>
                                <a class="btn-floating halfway-fab waves-effect waves-light blue"><i class="material-icons">edit</i></a>
                            </div>
                            <div class="card-content">
                                <div class="row">
                                    <div class="col">
                                    <p class="para"><blockquote><em>"Our gulet cruise from Kos to Patmos was everything and more than expected. 
                                        It lived up to the Peter Sommer Travels' emphasis on culture, history, archaeology,
                                         comfort and camaraderie. Exceptional guides attended to each guest's interests and needs 
                                         and were exceptional hosts. "</em></blockquote></p>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col s12">
                                        <p><b>Trip:</b> Appleton Tour</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col s12 rating">
                                    <span class="iconify yellow-text accent-3" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    <span class="iconify yellow-text accent-3" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    <span class="iconify yellow-text accent-3" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    <span class="iconify yellow-text accent-3" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    <span class="iconify" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l4 m6 s12 offset-l0 offset-s0">
                        <div class="card">
                            <div class="card-image">
                                <img src="http://andamanemeraldholidays.com/image/cache/catalog/aaaaa/holidays/image1/Andaman%20Family%20Tour1-1250x917.jpg">
                                <span class="card-title">Alcia Ricketts</span>
                                <a class="btn-floating halfway-fab waves-effect waves-light blue"><i class="material-icons">edit</i></a>
                            </div>
                            <div class="card-content">
                                <div class="row">
                                    <div class="col">
                                    <p class="para"><blockquote><em>"Our gulet cruise from Kos to Patmos was everything and more than expected. 
                                        It lived up to the Peter Sommer Travels' emphasis on culture, history, archaeology,
                                         comfort and camaraderie. Exceptional guides attended to each guest's interests and needs 
                                         and were exceptional hosts. "</em></blockquote></p>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col s12">
                                        <p><b>Trip:</b> Appleton Tour</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col s12 rating">
                                    <span class="iconify yellow-text accent-3" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    <span class="iconify yellow-text accent-3" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    <span class="iconify yellow-text accent-3" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    <span class="iconify yellow-text accent-3" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    <span class="iconify" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l4 m6 s12 offset-l0 offset-s0">
                        <div class="card">
                            <div class="card-image">
                                <img src="http://andamanemeraldholidays.com/image/cache/catalog/aaaaa/holidays/image1/Andaman%20Family%20Tour1-1250x917.jpg">
                                <span class="card-title">Alcia Ricketts</span>
                                <a class="btn-floating halfway-fab waves-effect waves-light blue"><i class="material-icons">edit</i></a>
                            </div>
                            <div class="card-content">
                                <div class="row">
                                    <div class="col">
                                    <p class="para"><blockquote><em>"Our gulet cruise from Kos to Patmos was everything and more than expected. 
                                        It lived up to the Peter Sommer Travels' emphasis on culture, history, archaeology,
                                         comfort and camaraderie. Exceptional guides attended to each guest's interests and needs 
                                         and were exceptional hosts. "</em></blockquote></p>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col s12">
                                        <p><b>Trip:</b> Appleton Tour</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col s12 rating">
                                    <span class="iconify yellow-text accent-3" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    <span class="iconify yellow-text accent-3" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    <span class="iconify yellow-text accent-3" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    <span class="iconify yellow-text accent-3" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    <span class="iconify" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l4 m6 s12 offset-l0 offset-s0">
                        <div class="card">
                            <div class="card-image">
                                <img src="http://andamanemeraldholidays.com/image/cache/catalog/aaaaa/holidays/image1/Andaman%20Family%20Tour1-1250x917.jpg">
                                <span class="card-title">Alcia Ricketts</span>
                                <a class="btn-floating halfway-fab waves-effect waves-light blue"><i class="material-icons">edit</i></a>
                            </div>
                            <div class="card-content">
                                <div class="row">
                                    <div class="col">
                                    <p class="para"><blockquote><em>"Our gulet cruise from Kos to Patmos was everything and more than expected. 
                                        It lived up to the Peter Sommer Travels' emphasis on culture, history, archaeology,
                                         comfort and camaraderie. Exceptional guides attended to each guest's interests and needs 
                                         and were exceptional hosts. "</em></blockquote></p>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col s12">
                                        <p><b>Trip:</b> Appleton Tour</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col s12 rating">
                                    <span class="iconify yellow-text accent-3" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    <span class="iconify yellow-text accent-3" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    <span class="iconify yellow-text accent-3" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    <span class="iconify yellow-text accent-3" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    <span class="iconify" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l4 m6 s12 offset-l0 offset-s0">
                        <div class="card">
                            <div class="card-image">
                                <img src="http://andamanemeraldholidays.com/image/cache/catalog/aaaaa/holidays/image1/Andaman%20Family%20Tour1-1250x917.jpg">
                                <span class="card-title">Alcia Ricketts</span>
                                <a class="btn-floating halfway-fab waves-effect waves-light blue"><i class="material-icons">edit</i></a>
                            </div>
                            <div class="card-content">
                                <div class="row">
                                    <div class="col">
                                    <p class="para"><blockquote><em>"Our gulet cruise from Kos to Patmos was everything and more than expected. 
                                        It lived up to the Peter Sommer Travels' emphasis on culture, history, archaeology,
                                         comfort and camaraderie. Exceptional guides attended to each guest's interests and needs 
                                         and were exceptional hosts. "</em></blockquote></p>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col s12">
                                        <p><b>Trip:</b> Appleton Tour</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col s12 rating">
                                    <span class="iconify yellow-text accent-3" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    <span class="iconify yellow-text accent-3" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    <span class="iconify yellow-text accent-3" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    <span class="iconify yellow-text accent-3" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    <span class="iconify" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l4 m6 s12 offset-l0 offset-s0">
                        <div class="card">
                            <div class="card-image">
                                <img src="http://andamanemeraldholidays.com/image/cache/catalog/aaaaa/holidays/image1/Andaman%20Family%20Tour1-1250x917.jpg">
                                <span class="card-title">Alcia Ricketts</span>
                                <a class="btn-floating halfway-fab waves-effect waves-light blue"><i class="material-icons">edit</i></a>
                            </div>
                            <div class="card-content">
                                <div class="row">
                                    <div class="col">
                                    <p class="para"><blockquote><em>"Our gulet cruise from Kos to Patmos was everything and more than expected. 
                                        It lived up to the Peter Sommer Travels' emphasis on culture, history, archaeology,
                                         comfort and camaraderie. Exceptional guides attended to each guest's interests and needs 
                                         and were exceptional hosts. "</em></blockquote></p>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col s12">
                                        <p><b>Trip:</b> Appleton Tour</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col s12 rating">
                                    <span class="iconify yellow-text accent-3" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    <span class="iconify yellow-text accent-3" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    <span class="iconify yellow-text accent-3" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    <span class="iconify yellow-text accent-3" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    <span class="iconify" data-icon="mdi:star" data-inline="false" data-width="30px" data-height="30px"></span>
                                    </div>
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
    </script>

</html>