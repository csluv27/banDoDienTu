<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'indexController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
//home
$route['danh-muc/(:any)']['GET'] = 'indexController/category/$1';
$route['thuong-hieu/(:any)']['GET'] = 'indexController/brand/$1';
$route['san-pham/(:any)']['GET'] = 'indexController/product/$1';
$route['gio-hang']['GET'] = 'indexController/cart';
$route['add-to-cart']['POST'] = 'indexController/add_to_cart';
$route['dang-nhap']['GET'] = 'indexController/login';
$route['delete-all-cart']['GET'] = 'indexController/delete_all_cart';
$route['delete-item/(:any)']['GET'] = 'indexController/delete_item/$1';
$route['update-cart-item']['POST'] = 'indexController/update_cart_item';
$route['dang-xuat']['GET'] = 'indexController/dang_xuat';
$route['checkout']['GET'] = 'indexController/checkout';
$route['confirm-checkout']['POST'] = 'indexController/confirm_checkout';
$route['huong-dan']['GET']='indexController/huong_dan';
$route['thanks']['GET'] = 'indexController/thanks';
$route['contact']['GET'] = 'indexController/contact';
$route['send-contact']['POST'] = 'indexController/send_contact';
$route['tim-kiem']['GET'] = 'indexController/tim_kiem';
//pagination
$route['phan-trang/index/(:num)'] = 'indexController/index/$1';
$route['phan-trang/index'] = 'indexController/index/';
$route['danh-muc/(:any)/(:num)']['GET'] = 'indexController/category/$1';
$route['thuong-hieu/(:any)/(:num)']['GET'] = 'indexController/brand/$1';
$route['danh-sach-san-pham/(:num)']['GET'] = 'productController/list/$1';
$route['danh-sach-order'] = 'orderController/list';
$route['danh-sach-order/(:num)'] = 'orderController/list/$1'; 
$route['danh-sach-binh-luan'] = 'indexController/comment_contact_list';
$route['danh-sach-binh-luan/(:num)'] = 'indexController/comment_contact_list/$1';
$route['danh-sach-review'] = 'indexController/review_list';
$route['danh-sach-review/(:num)'] = 'indexController/review_list/$1';

$route['tim-kiem/(:num)']['GET'] = 'indexController/tim_kiem/$1';
$route['danh-sach-san-pham']['GET'] = 'productController/list';
//email
$route['test-mail'] = 'indexController/send_mail';
//review
$route['review/send']['POST'] = 'indexController/review_send';
//trangThem
$route['information']['GET'] = 'indexController/information';
$route['security']['GET'] = 'indexController/security';
$route['guarantee']['GET'] = 'indexController/guarantee';



//login
$route['login']['GET'] = 'loginController/index';
$route['login-user']['POST'] = 'loginController/login';
$route['login-customer']['POST'] = 'indexController/login_customer';
$route['dang-ky']['POST'] = 'indexController/dang_ky';
$route['xac-thuc-dang-ky']['GET'] = 'indexController/xac_thuc_dang_ky';
//dashboard
// $route['dashboard']['GET'] = 'dashboardController/index';
$route['logout']['GET'] = 'dashboardController/logout';
$route['register-admin']['GET'] = 'loginController/register_admin';
$route['register-insert']['POST'] = 'loginController/register_insert';
$route['adminManage/list'] = 'loginController/list';
$route['dashboard'] = 'DashboardController/viewDashboard';


$route['adminManage/edit/(:any)'] = 'loginController/edit/$1';
$route['adminManage/update/(:any)'] = 'loginController/update/$1';

$route['adminManage/delete/(:any)'] = 'loginController/delete/$1';

//brand
$route['brand/list']['GET'] = 'brandController/list';
$route['brand/create']['GET'] = 'brandController/create';
$route['brand/edit/(:any)']['GET'] = 'brandController/edit/$1';
$route['brand/update/(:any)']['POST'] = 'brandController/update/$1';
$route['brand/store']['POST'] = 'brandController/store';
$route['brand/delete/(:any)']['GET'] = 'brandController/delete/$1';
//slider
$route['slider/list'] = 'sliderController/list';
$route['slider/create'] = 'sliderController/create';
$route['slider/edit/(:any)'] = 'sliderController/edit/$1';
$route['slider/update/(:any)'] = 'sliderController/update/$1';
$route['slider/store'] = 'sliderController/store';
$route['slider/delete/(:any)'] = 'sliderController/delete/$1';
//category
$route['category/list']['GET'] = 'categoryController/list';
$route['category/create']['GET'] = 'categoryController/create';
$route['category/edit/(:any)']['GET'] = 'categoryController/edit/$1';
$route['category/update/(:any)']['POST'] = 'categoryController/update/$1';
$route['category/store']['POST'] = 'categoryController/store';
$route['category/delete/(:any)']['GET'] = 'categoryController/delete/$1';
//product
$route['product/list']['GET'] = 'productController/list';
$route['product/create']['GET'] = 'productController/create';
$route['product/edit/(:any)']['GET'] = 'productController/edit/$1';
$route['product/update/(:any)']['POST'] = 'productController/update/$1';
$route['product/store']['POST'] = 'productController/store';
$route['product/delete/(:any)']['GET'] = 'productController/delete/$1';
//order
$route['order/list']['GET'] = 'orderController/list';
$route['order/process']['POST'] = 'orderController/process';
$route['order/view/(:any)']['GET'] = 'orderController/view/$1';
$route['order/delete/(:any)']['GET'] = 'orderController/delete_order/$1';
$route['user/orders']['GET'] = 'orderController/userOrderList';
$route['user/order/view/(:any)']['GET'] = 'orderController/userView/$1';


//reviewSP
$route['review/list']['GET'] = 'IndexController/review_list';
$route['review/edit/(:num)']['GET'] = 'IndexController/edit_review/$1';
$route['review/update/(:num)']['POST'] = 'IndexController/update_review/$1';
//commentContact
$route['comment-contact/list']['GET'] = 'IndexController/comment_contact_list';




