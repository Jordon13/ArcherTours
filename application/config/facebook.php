<?php


$config['facebook']['api_id']       = '664328337419492';
$config['facebook']['app_secret']   = '7141e0003b340bc3aa7fd8ede2797de1';
$config['facebook']['redirect_url'] = "http://localhost/archertours/admin/login";
$config['facebook']['callback']     = "http://localhost/archertours/admin/login/fb-callback";
$config['facebook']['permissions']  = array(
                                        'email',
                                        'user_location',
                                        'user_birthday'
                                      );

?>