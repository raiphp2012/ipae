<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
$route['cancel-order/(:any)'] = "welcome/cancelOrder/$1";
$route['default_controller'] = "welcome";
$route['contact-us'] = "welcome/contact_us/";
$route['about-us'] = "welcome/About_Us/";
$route['privacy-policy'] = "welcome/privacy_policy";
$route['term-condition'] = "welcome/Term_Condition/";
$route['refund-policy'] = "welcome/refund_policy";
$route['cancel-policy'] = "welcome/cancel_policy";
$route['faqs'] = "welcome/faqs";
$route['cancellation-policy'] = "welcome/cancel_policy";

$route['Login'] = "welcome/login_Registration/";

$route['login'] = "welcome/login";
$route['otp'] = "welcome/checkotp";

$route['forget-password'] = "welcome/forget_password/";
$route['accessories'] = "welcome/accesseries/";
$route['product/(:any)'] = "ipae/subid/$1";
$route['category/(:any)'] = "welcome/subcate_page/$1";
$route['account'] = "welcome/User_Profile/";


$route['(:any)/(:any)/product/(:any)'] = "ipae/description/$1/$2/$3";
$route['(:any)/subcategory/(:any)'] = "ipae/subid/$1/$2";
$route['category/(:any)'] = "welcome/subcate_page/$1";

$route['addcart/(:num)/(:any)'] = "ipae/addTocart/$1/$2";
$route['checkout'] = "ipae/checkout";

$route['checkoutmain'] = "ipae/checkoutmain";



$route['tech-speces/(:any)'] = "welcome/tech_speces/$1";

$route['bag'] = "ipae/Bag";
$route['legal'] = "welcome/legal";
$route['event'] = "welcome/event";
//$route['(:any)/(:any)']="ipae/description/$1/";
$route['404_override'] = 'welcome/PageNotFound';
/* End of file routes.php */


$route['guestcheckout'] = "ipae/guestCheckout";
$route['checkoutlogin'] = "ipae/checkoutlogin2/";
$route['checkout-registration'] = "ipae/checkoutRegistration/";

$route['resendotp'] = "welcome/resendotp";


/* Location: ./application/config/routes.php */