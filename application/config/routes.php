<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//cutom routes

//$route['archer-tours/'] = "Home/index/";

$route['blogs1062/(:any)']['GET'] = "home/blogs1062";

// $route['templ/(:any)'] = "home/price";

//dynamic routes


$route['about'] = "home/about";
$route['abt'] = "home/about";
$route['a'] = "home/about";
$route['ab'] = "home/about";

$route['deal'] = "home/deals";
$route['news'] = "home/recentstories";
$route['testimonial'] = "home/testimonials";


$route['booking/(:any)'] = "home/booking";
$route['booking'] = "home/booking";
$route['b'] = "home/booking";
$route['book'] = "home/booking";
$route['books'] = "home/booking";
$route['bo'] = "home/booking";
$route['bk'] = "home/booking";

$route['contact'] = "home/contact";
$route['c'] = "home/contact";
$route['co'] = "home/contact";
$route['contact-us'] = "home/contact";

$route['gallery'] = "home/gallery";
$route['pics'] = "home/gallery";
$route['pictures'] = "home/gallery";
$route['gal'] = "home/gallery";
$route['gall'] = "home/gallery";
$route['vids'] = "home/gallery";
$route['video'] = "home/gallery";

$route['pricing'] = "home/pricing";
$route['pri'] = "home/pricing";
$route['price'] = "home/pricing";
$route['p'] = "home/pricing";
$route['pr'] = "home/pricing";
$route['prices'] = "home/pricing";

$route['services'] = "home/services";
$route['s'] = "home/services";
$route['sr'] = "home/services";
$route['ser'] = "home/services";
$route['serve'] = "home/services";
$route['service'] = "home/services";
$route['archer-service'] = "home/services";
$route['archer-services'] = "home/services";

$route['airport'] = "home/airporttransfer";
$route['apr'] = "home/airporttransfer";
$route['port'] = "home/airporttransfer";
$route['ap'] = "home/airporttransfer";
$route['air'] = "home/airporttransfer";
$route['airport-prices'] = "home/airporttransfer";
$route['airport-price'] = "home/airporttransfer";
$route['airport-pricing'] = "home/airporttransfer";

$route['taxi'] = "home/taxiservice";
$route['ta'] = "home/taxiservice";
$route['taxi-price'] = "home/taxiservice";
$route['taxi-prices'] = "home/taxiservice";
$route['taxi-pricing'] = "home/taxiservice";

$route['tour'] = "home/tours";
$route['tourp'] = "home/tours";
$route['trip'] = "home/tours";
$route['tours-prices'] = "home/tours";
$route['tours-price'] = "home/tours";
$route['tours-pricing'] = "home/tours";
$route['roundtrip'] = "home/tours";

$route['blogs'] = "home/blog";
$route['blog'] = "home/blog";

$route['header'] = "home/header";

$route['footer'] = "home/footer";

$route['checkout'] = "home/cart";

// $route['cuser'] = "home/cuser";
// $route['blog'] = "home/cblog";
// $route['prices'] = "home/cprices";

$route['(:any)'] = "home/index";