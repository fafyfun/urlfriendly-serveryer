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

$route['default_controller'] = "home";
$route['404_override'] = '';
$route['question2/(:any)'] = "question2/index/$1";
$route['question3/(:any)'] = "question3/index/$1";
$route['question4/(:any)'] = "question4/index/$1";
$route['question5/(:any)'] = "question5/index/$1";
$route['question6/(:any)'] = "question6/index/$1";
$route['question7/(:any)'] = "question7/index/$1";
$route['question8/(:any)'] = "question8/index/$1";
$route['question9/(:any)'] = "question9/index/$1";
$route['userdetails/(:any)'] = "userdetails/index/$1";
$route['newuserdetails/(:any)'] = "newuserdetails/index/$1";
/* End of file routes.php */
/* Location: ./application/config/routes.php */