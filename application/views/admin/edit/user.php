<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('script');
?>

    <!Doctype html>

    <html>

    <head>

        <title>ViewUsers</title>
        <?php adminhead();?>
        <style>
            .content-area{
                height: 100%!important;
                min-height: 100%;
            }

            .inner-content{
                margin-top: 2em;
                height: 100%!important;
                min-height: 100%!important;
            }
            .searchArea {
                display: flex;
                width: 50%;
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
        </style>

    </head>

    <body>
        <?php navigation();?>
            <section class="content-area">

                <div class="inner-content">

                    <div class="row sbox">

                        <div class="col l6 m8 s12 offset-l1">
                            <div class="searchArea z-depth-1">
                                <div class="searchbox">
                                    search table...
                                </div>
                                <i class="material-icons searchIcon">search</i>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col 18 m10 s12 offset-l1 offset-m1 offset-s0">
                            <table class="highlight white z-depth-1">
                                <thead class=" blue accent-4 white-text">
                                    <tr>
                                        <th>Select</th>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>
                                            <p>
                                                <label>
                                                    <input id="indeterminate-checkbox" class="filled-in" type="checkbox" />
                                                    <span></span>
                                                </label>
                                            </p>
                                        </td>
                                        <td>0</td>
                                        <td>Alvin</td>
                                        <td>Eclair</td>
                                        <td>alvine32@mail.com</td>
                                        <td><i class="material-icons blue-text accent-4">mode_edit</i></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>
                                                <label>
                                                    <input id="indeterminate-checkbox" class="filled-in" type="checkbox" />
                                                    <span></span>
                                                </label>
                                            </p>
                                        </td>
                                        <td>1</td>
                                        <td>Alan</td>
                                        <td>Jellybean</td>
                                        <td>alr32212anj@mail.com</td>
                                        <td><i class="material-icons blue-text accent-4">mode_edit</i></td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p>
                                                <label>
                                                    <input id="indeterminate-checkbox" class="filled-in" type="checkbox" />
                                                    <span></span>
                                                </label>
                                            </p>
                                        </td>
                                        <td>2</td>
                                        <td>Alan</td>
                                        <td>Jelly867bean</td>
                                        <td>alanj@mail.com</td>
                                        <td><i class="material-icons blue-text accent-4">mode_edit</i></td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p>
                                                <label>
                                                    <input id="indeterminate-checkbox" class="filled-in" type="checkbox" />
                                                    <span></span>
                                                </label>
                                            </p>
                                        </td>
                                        <td>3</td>
                                        <td>Alan</td>
                                        <td>Je975llybean</td>
                                        <td>alanj@mail.com</td>
                                        <td><i class="material-icons blue-text accent-4">mode_edit</i></td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p>
                                                <label>
                                                    <input id="indeterminate-checkbox" class="filled-in" type="checkbox" />
                                                    <span></span>
                                                </label>
                                            </p>
                                        </td>
                                        <td>4</td>
                                        <td>Alqqzxan</td>
                                        <td>Jellybean</td>
                                        <td>alanj@mail.com</td>
                                        <td><i class="material-icons blue-text accent-4">mode_edit</i></td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p>
                                                <label>
                                                    <input id="indeterminate-checkbox" class="filled-in" type="checkbox" />
                                                    <span></span>
                                                </label>
                                            </p>
                                        </td>
                                        <td>5</td>
                                        <td>Alan</td>
                                        <td>Jellybean</td>
                                        <td>alanj@mail.com</td>
                                        <td><i class="material-icons blue-text accent-4">mode_edit</i></td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <p>
                                                <label>
                                                    <input id="indeterminate-checkbox" class="filled-in" type="checkbox" />
                                                    <span></span>
                                                </label>
                                            </p>
                                        </td>
                                        <td>6</td>
                                        <td>Alan</td>
                                        <td>Jellybean</td>
                                        <td>alanj@mail.com</td>
                                        <td><i class="material-icons blue-text accent-4">mode_edit</i></td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p>
                                                <label>
                                                    <input id="indeterminate-checkbox" class="filled-in" type="checkbox" />
                                                    <span></span>
                                                </label>
                                            </p>
                                        </td>
                                        <td>7</td>
                                        <td>Alan</td>
                                        <td>Jellybean</td>
                                        <td>alanj@mail.com</td>
                                        <td><i class="material-icons blue-text accent-4">mode_edit</i></td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p>
                                                <label>
                                                    <input id="indeterminate-checkbox" class="filled-in" type="checkbox" />
                                                    <span></span>
                                                </label>
                                            </p>
                                        </td>
                                        <td>8</td>
                                        <td>Alan</td>
                                        <td>Jellybean</td>
                                        <td>alanj@mail.com</td>
                                        <td><i class="material-icons blue-text accent-4">mode_edit</i></td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p>
                                                <label>
                                                    <input id="indeterminate-checkbox" class="filled-in" type="checkbox" />
                                                    <span></span>
                                                </label>
                                            </p>
                                        </td>
                                        <td>9</td>
                                        <td>Alan</td>
                                        <td>Jellybean</td>
                                        <td>alanj@mail.com</td>
                                        <td><i class="material-icons blue-text accent-4">mode_edit</i></td>
                                    </tr>

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
                    $('.searchArea').animate({
                        'width': '50%'
                    }, 500);
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

                        for(j = 1; j < tdlen-1; j++){

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

        </script>

    </html>