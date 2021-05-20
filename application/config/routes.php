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
$route['default_controller'] = 'Cdashboard';
$route['login'] = 'Clogin/index';
$route['logout'] = 'Clogin/logout';

$route['dashboard'] = 'Cdashboard/index';

$route['user'] = 'Cuser/index';
$route['user/tambah'] = 'Cuser/tambah';
$route['user/ubah/(:num)'] = 'Cuser/ubah/$1';
$route['user/hapus/(:num)'] = 'Cuser/hapus/$1';

$route['apoteker'] = 'Capoteker/index';
$route['apoteker/tambah'] = 'Capoteker/tambah';
$route['apoteker/ubah/(:num)'] = 'Capoteker/ubah/$1';
$route['apoteker/hapus/(:num)'] = 'Capoteker/hapus/$1';

$route['satuan'] = 'Csatuan/index';
$route['satuan/tambah'] = 'Csatuan/tambah';
$route['satuan/ubah/(:num)'] = 'Csatuan/ubah/$1';
$route['satuan/hapus/(:num)'] = 'Csatuan/hapus/$1';

$route['obat'] = 'Cobat/index';
$route['obat/tambah'] = 'Cobat/tambah';
$route['obat/ubah/(:num)'] = 'Cobat/ubah/$1';
$route['obat/hapus/(:num)'] = 'Cobat/hapus/$1';

$route['penjualan'] = 'Cpenjualan/index';
$route['penjualan/bayar'] = 'Cpenjualan/bayar';

$route['lappenjualan'] = 'Clappenjualan/index';
$route['lapterlaris'] = 'Clapterlaris/index';


$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;
