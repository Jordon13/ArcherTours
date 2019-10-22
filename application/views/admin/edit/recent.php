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

        <title>View News</title>
        <?php adminhead();?>
        <style>
            

            
            .searchArea {
                display: flex;
                background-image: linear-gradient(65deg, rgba(41,98,255,1) 81%, rgba(0,145,234,1) 100%);
                align-items: center;
                padding: 0.7em;
                border-radius: 30px;
                cursor: pointer;
                justify-content: flex-end;
                color: white;
            }
            
            .pg {
                background-image: none;
                background-color: white;
            }
            
            .lightText {
                color: #ccc;
                height: 100%;
            }
            
            .searchbox {
                width: 87%;
                font-size: 17px;
                outline: none;
                cursor: text;

            }
            
            .searchIcon {
                width: 10%;
                text-align: center;
                font-size: 35px;
            }

            .inner-content .sbox{
                margin-top: 2em;
            }

            tbody tr td{
                padding:0.5em!important;
                vertical-align: center;
            }

            tbody > tr:hover{
                background-color:#eceff1!important;
                cursor: pointer;
            }

            tbody:hover{
             overflow-y: scroll!important;
          }

          #tbl{
             overflow-y: scroll!important;
          }

            
        </style>

    </head>

    <body>
        <?php navigation($_GET['active']);?>
            <section class="content-area">

                <div class="inner-content">

                    <div class="row sbox">

                        <div class="col l10 s10 offset-s1 offset-l1">
                            <div class="searchArea z-depth-1">
                                <div class="searchbox">
                                    search table...
                                </div>
                                <i class="material-icons searchIcon">search</i>
                            </div>
                        </div>

                    </div>

                    <div class="row " >

                        <div id="tbl"class="col 18 m10 s12 offset-l1 offset-m1 offset-s0" style="height:500px!important;">
                            <table  class="highlight white z-depth-1 " style="">
                                <thead class=" blue accent-4 white-text">
                                    <tr>
                                        <!-- $this->db->select("auto_generated_blog_id,recent_title,recent_desc,recent_likes,recent_dislikes,recent_views"); -->
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Likes</th>
                                        <th>Dislikes</th>
                                        <th>Views</th>
                                        <th>Edit</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    {data}
                                    <tr>
                                        <td>{auto_generated_id}</td>
                                        <td>{recent_title}</td>
                                        <td>{recent_desc}</td>
                                        <td>{recent_likes}</td>
                                        <td>{recent_dislikes}</td>
                                        <td>{recent_views}</td>
                                        <td id=""><a class="grey-text" href="<?php echo site_url('admin/editnews/')?>{auto_generated_id}"><i class="material-icons">mode_edit</i></a></td>
                                        <td id="{auto_generated_id}" onclick="del({auto_generated_id})"><i class="red-text material-icons">delete</i></td>
                                    </tr>
                                    {/data}

                                    <tr class="noshow" style="display:none;text-align:center;" >
                                        <td colspan="6" style="text-align:center;" ><em>no results found</em></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>

            </section>

    </body>
    <?php adminjs();?>

        <script>
            $('document').ready(() => {

                $('.searchArea').click(() => {
                    
                    $('tbody>tr').css('display','');
                    $('.noshow').hide();
                    $('.searchArea').animate({
                        'width': '100%'
                    }, 500);

                    $('.searchbox').attr('contenteditable', 'true');

                    $('.searchbox').focus();

                    $('.searchbox').text("");

                    $('.searchArea').addClass('pg');
                    $('.searchArea').addClass('lightText');

                }).mouseleave(() => {
                    // $('.searchArea').animate({
                    //     'width': '50%'
                    // }, 500);
                    if ($('.searchbox').text() == "") {
                        $('.searchbox').text("search table...");
                    }
                    $('.searchbox').removeAttr('contenteditable', 'true');
                    $('.searchArea').removeClass('pg');
                    $('.searchArea').removeClass('lightText');
                });

            });
        </script>

        <script>

            
        
            $('document').ready(()=>{

                var row = $('tbody>tr');
                let rowlen = row.length;
                $('.noshow').hide();
                  $('.searchbox').keyup((e)=>{
                    
                    var counter = 0;

                    if (e.keyCode === 13) {

                            e.preventDefault();

                            $('.searchArea').animate({
                                'width': '50%'
                            }, 500);
                            if ($('.searchbox').text() == "") {
                                $('.searchbox').text("search table...");
                            }
                            $('.searchbox').removeAttr('contenteditable', 'true');
                            $('.searchArea').removeClass('pg');
                            $('.searchArea').removeClass('lightText');

                    }
                      var text = $('.searchbox').text();

                      var ptr = new RegExp(text,'i');

                      for(x = 0; x < rowlen; x++){
                        var td = row[x].getElementsByTagName('td');  
                        var tdlen = row[x].getElementsByTagName('td').length;

                        for(j = 0; j < tdlen; j++){

                            var result = $(td[j]).text();
                            var sres = result.search(ptr);
                            if(sres > -1){

                                $(row).eq(x).css('display','');
                                
                                counter++;
                                break;
                               
                            }else{
                                $(row).eq(x).css('display','none');
                                
                            }
                            
                        }
                      }

                      if(counter == 0){

                            $('.noshow').show();
                        
                      }else{
                        $('.noshow').hide();
                      }
                  });

            });


            var del = (id) =>{
                $.post("<?php echo site_url('cms/DeleteNews')?>",{id:id},function(res){

                    if(res == 0){
                        $(`#${id}`).parent().fadeOut(1000);
                    }else{
                        console.log("Falied to delete record.");
                    }

                });
            }

        </script>

    </html>