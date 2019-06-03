<?php

defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('script');
?>

<!Doctype html>


<html>

    <head>
        <title>RecentActivities</title>
        <?php adminhead();?>
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

          .my-form{

          }

          .posts {
            margin-top: 1em!important;
          }

          .folderOptions{
            margin-top: auto!important;
            margin-bottom: auto!important;
            padding: 0.6em!important;
          }

          .folderOptions i:hover{
            color: rgba(3,169,244 ,1);
            cursor: pointer;
          }


          .folderOptions i{
            font-size: 30px;
          }

          .contents{
            margin-top: 1em!important;
          }

          .card-action{
            height: auto!important;
            padding: 1em!important;
          }

          .card-action p{
            display: flex!important;
            align-items: center;
            justify-content: space-between;
            color: rgba(120,120,120,0.4);
          }

        </style>
    </head>

    <body>
        <?php navigation();?>
        <section class="content-area">

            <div class="inner-content">

              <div class="row rup">
                <form class="col l4 m6 s12 offset-l4 offset-m3 offset-s0 z-depth-1 grey lighten-4 my-form">
                    <div class="input-field">
                      <input type="text" id="title"/>
                      <label for="title">Title</label>
                    </div>

                    <div class="input-field">
                      <input type="text" id="description"/>
                      <label for="description">Description</label>
                    </div>

                    <div class="file-field input-field">
                        <div class="btn blue-grey lighten-2">
                            <span>File</span>
                            <input type="file" id="file" class="fl" multiple>
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Choose A Picture .jpg or jpeg | Video mp4">
                            <p class="res2"></p>
                        </div>

                    </div>

                    <div class="row bcenter">
                        <div class="input-field col">
                        <button class="btn waves-effect waves-light  blue accent-4" type="submit" name="action">Add Recent
                            <i class="material-icons right"></i>
                        </button>
                        </div>
                    </div>
                </form>
              </div>

              <div class="divider"></div>

              <div class="row posts">

                  <div class="col s12 heading white z-depth-1">

                      <div class="col l6 ">
                        <input type="search" placeholder="Search Recent Post"/>
                      </div>

                      <div class="col l6 right-align folderOptions">
                        <i class="material-icons minimize" title="Minimize Window">remove</i>
                        <i class="material-icons maximize" title="Maximize Window">crop_din</i>
                      </div>
                  </div>


                  <div class="row contents">

                    <div class="row">
                      <div class="col s12 l4 m3">
                        <div class="card">
                          <div class="card-image">
                            <img src="https://www.zen-communications.co.uk/wp-content/uploads/2015/03/sample.jpg">
                            <span class="card-title">Castille Rock</span>
                          </div>
                          <div class="card-content">
                            <p>THis was a great day ofc</p>
                          </div>
                          <div class="card-action">

                            <a><div class="col">
                              <p>
                                <i class="material-icons">visibility</i>
                                127 k
                              </p>
                            </div></a>

                            <a><div class="col">
                              <p>
                                <i class="material-icons">thumb_up</i>
                                7 k
                              </p>
                            </div></a>

                            <a><div class="col">
                              <p>
                                <i class="material-icons">comment</i>
                                123
                              </p>
                            </div></a>

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
      $('document').ready(function(){
        $('select').formSelect();
        var originalHeight = $('.rup').height();
        $('.maximize').click(function(){
          $('.my-form').fadeOut('slow');
          $('.rup').animate( {
            height: '5%'
          },1000);
        });

        $('.minimize').click(function(){
          $('.my-form').fadeIn('slow');
          $('.rup').animate( {
            height: originalHeight+"px"
          },1000);
        });
        // $('.heading').hover(function(){
        //   $(this).addClass('z-depth-1');
        // }).mouseleave(function(){
        //   $(this).removeClass('z-depth-1');
        // });

      });
    </script>

</html>
