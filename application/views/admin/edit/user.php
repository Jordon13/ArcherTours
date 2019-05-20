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
                    height: auto!important;
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
            </style>
    </head>

    <body>
        <?php navigation();?>
            <section class="content-area">

                <div class="inner-content">

                    <div class="row sbox">

                        <div class="col l6 m8 s12 offset-l1">
                            <!-- contenteditable="true" -->
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
                                        <td>alvine@mail.com</td>
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
                                        <td>1</td>
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
                                        <td>1</td>
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
                                        <td>1</td>
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
                                        <td>1</td>
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
                                        <td>1</td>
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
                                        <td>1</td>
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
                                        <td>1</td>
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
                                        <td>1</td>
                                        <td>Alan</td>
                                        <td>Jellybean</td>
                                        <td>alanj@mail.com</td>
                                        <td><i class="material-icons blue-text accent-4">mode_edit</i></td>
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

    </html>