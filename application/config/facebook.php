<?php


$config['facebook']['api_id']       = '413554662903444';
$config['facebook']['app_secret']   = '051420dd178cb30bcb79542172c65711';
$config['facebook']['redirect_url'] = "http://localhost/archertours/admin/login";
$config['facebook']['callback']     = "http://localhost/archertours/admin/login/fb-callback";
$config['facebook']['permissions']  = array(
                                        'email',
                                        'user_location',
                                        'user_birthday'
                                      );

?>