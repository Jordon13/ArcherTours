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

          .result{
                color: #388E3C;
                display:flex;
                justify-content:center;
            }


        .required{
              color:#f44336;
          }

        </style>
    </head>

    <body>
        <?php navigation($_GET['active']);?>
        <section class="content-area">

            <div class="inner-content">

              <div class="row rup">
                <form class="col l4 m6 s12 offset-l4 offset-m3 offset-s0 z-depth-1 grey lighten-4 my-form">
                    <div class="input-field">
                      <input type="text" id="title" name="title"/>
                      <label for="title">Title <span class="required">*</span></label>
                    </div>

                    <div class="input-field">
                      <input type="text" id="description" name="desc"/>
                      <label for="description">Description <span class="required">*</span></label>
                    </div>

                    <div class="file-field input-field">
                        <div class="btn blue-grey lighten-2">
                            <span>File <span class="required">*</span></span>
                            <input type="file" id="file" class="fl">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Choose A Picture .jpg or jpeg | Video mp4">
                            <p class="res2"></p>
                        </div>

                    </div>

                    <div class="row bcenter">
                        <div class="input-field col">
                        <button class="btn waves-effect waves-light  blue accent-4" type="submit" id="submit">Add Recent
                            <i class="material-icons right"></i>
                        </button>
                        </div>
                    </div>

                    <div class="row center-align result">
                            
                    </div>
                </form>
              </div>

              <div class="divider"></div>

              <div class="row posts">

                <div class="row">


                  <div class="col s12 heading white z-depth-1">

                      <div class="col l6 ">
                        <input type="search" placeholder="Search Recent Post" class="searchbox"/>
                      </div>

                      <div class="col l6 right-align folderOptions">
                        <i class="material-icons minimize" title="Minimize Window">remove</i>
                        <i class="material-icons maximize" title="Maximize Window">crop_din</i>
                      </div>
                  </div>

                </div>


                  <div class="row contents">

                    <div class="row">
                      <div class="col s12 l4 m3 rpost">
                        <div class="card">
                          <div class="card-image">
                            <img src="https://www.zen-communications.co.uk/wp-content/uploads/2015/03/sample.jpg">
                            <span class="card-title">Castille Rock3</span>
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

                      <div class="col s12 l4 m3 rpost">
                        <div class="card">
                          <div class="card-image">
                            <img src="https://www.zen-communications.co.uk/wp-content/uploads/2015/03/sample.jpg">
                            <span class="card-title">Castille Rock1</span>
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

                      <div class="col s12 l4 m3 rpost">
                        <div class="card">
                          <div class="card-image">
                            <img src="https://www.zen-communications.co.uk/wp-content/uploads/2015/03/sample.jpg">
                            <span class="card-title">Castille Rock2</span>
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

                      <div class="col s12 l4 m3 rpost">
                        <div class="card">
                          <div class="card-image">
                            <img src="https://www.zen-communications.co.uk/wp-content/uploads/2015/03/sample.jpg">
                            <span class="card-title">Castille Rock4</span>
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

                      <div class="col s12 l4 m3 rpost">
                        <div class="card">
                          <div class="card-image">
                            <img src="https://www.zen-communications.co.uk/wp-content/uploads/2015/03/sample.jpg">
                            <span class="card-title">Castille Rock5</span>
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

                      <div class="col s12 l4 m3 rpost">
                        <div class="card">
                          <div class="card-image">
                            <img src="https://www.zen-communications.co.uk/wp-content/uploads/2015/03/sample.jpg">
                            <span class="card-title">Castille Rock6</span>
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
            height: '0%'
          },1000);
        });

        $('.minimize').click(function(){
          $('.my-form').fadeIn('slow');
          $('.rup').animate( {
            height: originalHeight+"px"
          },1000);
        });

      });
    </script>

    <script>

      $('document').ready(()=>{
        var title = $('.card-title');

        var titleLen = title.length;


        $('.searchbox').keyup(function(){
            var text = $(this).val();

            var expr = new RegExp(text,"i");

            for(x = 0; x < titleLen; x++){

              var titleName = $(title).eq(x).text();

              var searchText = titleName.search(expr);

              if(searchText > -1){
                $('.rpost').eq(x).css('display','');
              }else{
                $('.rpost').eq(x).css('display','none');
              }

            }
        });

        $('#submit').click(function(e){
                
                e.preventDefault();
    
                $(".result").css("color","#388E3C");
    
                $('.result').html("Processing...");
    
                var form_data = new FormData();
    
                var files = $('#file')[0].files;
    
                var form = $('.my-form').serializeArray();
    
                for(var count = 0; count <files.length; count++){
                    form_data.append("upl[]",files[count]);
                }
    
                console.log(form);
    
                for(x = 0; x < form.length; x++){
                    form_data.append(form[x].name,form[x].value);
                }
    
                $.ajax({
                    url: "<?php echo site_url('/cms/AddRecentEvent');?>",
                    method: "POST",
                    data: form_data,
                    success: function(e) {
    
                        var result = undefined;
    
                        try{
                        result  = $.parseJSON(e);
                        }catch(exception){
                            console.log("Falied To Parse Json Data, No Json Returned. Please check with the site admin there exist an error in the response.");
    
                            $(".result").css("color","#d32f2f");
    
                            $(".result").html("An Error Has Occured");
    
                            $(".result").delay(2000).fadeOut(1000);
    
                            setTimeout(function(){
                                $('.result').html("Try Again").fadeIn(0);
                            },3000);
                            return;
                        }
    
                        $(".result").css("color","#388E3C");
    
                        $(".result").html(result.Message);
    
                        $(".result").delay(1000).fadeOut(1000);
    
                        setTimeout(function(){
                            $('.result').html("Add Another Record").fadeIn(0);
                        },2000);
                    },
                    statusCode:{
                        400:function(response){
    
                            var result = $.parseJSON(response.responseText);
    
                            $(".result").css("color","#d32f2f");
    
                            $(".result").html(result.Message);
    
                            $(".result").delay(2000).fadeOut(1000);
    
                            setTimeout(function(){
                                $('.result').html("Try Again").fadeIn(0);
                            },3000);
                        },
                        417:function(response){
    
                            var result = $.parseJSON(response.responseText);
    
                            $(".result").css("color","#d32f2f");
    
                            $(".result").html(result.Message);
    
                            $(".result").delay(2000).fadeOut(1000);
    
                            setTimeout(function(){
                                $('.result').html("Try Again").fadeIn(0);
                            },3000);
                        }
                    },
                    contentType: false,
                    cache: false,
                    processData:false,       
    
                });
            });

      });

    </script>

</html>
