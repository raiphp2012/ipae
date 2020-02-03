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
$route['cancelOrder/(:any)'] = "welcome/cancelOrder/$1";
$route['default_controller'] = "welcome";
$route['Contact-Us'] = "welcome/contact_us/";
$route['About-Us'] = "welcome/About_Us/";
$route['Privacy-Policy'] = "welcome/Privacy_Policy/";
$route['Term-Condition'] = "welcome/Term_Condition/";
$route['Refund-Policy'] = "welcome/Refund_Policy/";
$route['Login'] = "welcome/login_Registration/";

$route['login'] = "welcome/login";

$route['Forget-Password'] = "welcome/Forget_Password/";
$route['Accessories'] = "welcome/accesseries/";
$route['Product/(:any)'] = "ipae/subcat_id/$1";
$route['category/(:any)'] = "welcome/subcate_page/$1";
$route['Account'] = "welcome/User_Profile/";
$route['ipae/Bag']="ipae/Bag";

$route['(:any)/(:any)/Product/(:any)'] = "ipae/description/$1/$2/$3";
$route['(:any)/subcategory/(:any)'] = "ipae/subcat_id/$1/$2";
$route['category/(:any)'] = "welcome/subcate_page/$1";

$route['monu'] = "ipae/addTocart";
$route['Checkout'] = "ipae/checkout";

$route['Bag'] = "ipae/Bag";
//$route['(:any)/(:any)']="ipae/description/$1/";
$route['404_override'] = 'welcome/PageNotFound';
/* End of file routes.php */




/* Location: ./application/config/routes.php */