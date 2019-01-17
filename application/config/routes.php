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
//$route['default_controller'] = 'MainController/default_page';
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route[FOLDER_ADMIN.'/logout'] = 'admin/logout';
$route[FOLDER_ADMIN.'/index'] = 'admin/index';
$route[FOLDER_ADMIN.'/login'] = 'admin/index';
$route[FOLDER_ADMIN.'/([a-zA-Z_-]+)/(.+)'] = '$1/admin/$2';
$route[FOLDER_ADMIN.'/([a-zA-Z_-]+)'] = '$1/admin';
$route[FOLDER_ADMIN] = "admin";

$route['home'] = 'home/index';
// user routes

// $route['en'] ='Lang/eng';
// $route['nep'] ='Lang/nep';

//$route['main'] ='MainController/default_page';
// $route['datasets'] ='MainController/dataset_page';
// $route['categorydatasets'] ='MainController/dataset_page_new';
// $route['incidentmanagement'] ='MainController/incidentmanagement';
// $route['map'] ='MainController/map';
// $route['drrinfodetail'] ='MainController/drrinfodetail';
// $route['dictionary'] ='MainController/dictionary';
// $route['datacategory'] ='MainController/datacategory';
// $route['municipalprofile'] ='MainController/municipalprofile';





// $route['about'] ='MainController/about_page';
// $route['publication'] ='MainController/publication';
// $route['inventory'] ='MainController/inventory';
//$route['contact'] ='MainController/contact';
// $route['get_csv_emergency'] ='MainController/get_csv_emergency';

// //$route['map'] ='MapController/map_page';
// $route['category'] ='MapController/category_map';
// $route['admin_category'] ='MapController/admin_category_map';
// $route['manage_popup'] ='MapController/manage_popup';
// $route['manage_style'] ='MapController/manage_style';
// $route['update_summary'] ='MapController/update_summary';
// $route['map_download'] ='MapController/map_download';
// $route['circle_marker'] ='MapController/circle_marker';
// $route['location_marker'] ='MapController/location_marker';
// $route['data_map'] ='MapController/data_map';

// $route['news_register'] ='NewsletterController/register';

// $route['site_setting'] ='Admin/SiteController/site_setting';
// $route['site_setting_nep'] ='Admin/SiteController/site_setting_nep';

// $route['manage_column_control'] ='MapController/manage_column_control';
// $route['manage_column_update'] ='MapController/manage_column_update';








// $route['report_page'] ='ReportController/report_page';
// $route['report_manage'] ='ReportController/report_manage';
// $route['report/delete'] = 'ReportController/delete_data';
// $route['map_reports_table'] ='ReportController/map_reports_table';
// $route['map_reports'] ='ReportController/map_reports';
// $route['verify_status'] ='ReportController/verify_status';

// $route['filter'] ='ReportController/date_test';

// $route['ghatana'] ='Admin/GhatanaController/view_ghatana';
// $route['add_ghatana'] ='Admin/GhatanaController/add_ghatana';
// $route['ghatana_edit'] ='Admin/GhatanaController/ghatana_edit';
// $route['ghatana_delete'] ='Admin/GhatanaController/ghatana_delete';

// // Admin routes

// $route['admin_control'] = 'Admin/LoginController';
// $route['logout'] = 'Admin/LoginController/logout';

// $route['feature'] = 'Admin/FeatureDataset/feature';
// $route['add_feature'] = 'Admin/FeatureDataset/add_feature';
// $route['add_feature_nep'] = 'Admin/FeatureDataset/add_feature_nep';
// $route['delete_feature'] = 'Admin/FeatureDataset/delete_feature';
// $route['edit_feature'] = 'Admin/FeatureDataset/edit_feature';
// $route['edit_feature_nep'] = 'Admin/FeatureDataset/edit_feature_nep';
// $route['feature_nep'] = 'Admin/FeatureDataset/feature_nep';


// $route['table_create'] = 'Admin/TableController/create_table';
// $route['dashboard'] = 'Admin/CategoriesController';
// $route['data_tables'] = 'Admin/CategoriesController/data_tables';
// //$route['csv_upload'] = 'Admin/CategoriesController/csv_upload';
// $route['edit'] = 'Admin/CategoriesController/edit';
// $route['create_col'] = 'Admin/CategoriesController/create_col';
// $route['create_categories_tbl'] = 'Admin/CategoriesController/create_categories_tbl';
// $route['create_categories'] = 'Admin/CategoriesController/create_categories';
// $route['create_categories_nep'] = 'Admin/CategoriesController/create_categories_nep';
// $route['view_cat_tables'] = 'Admin/CategoriesController/view_cat_tables';
// $route['categories_tbl'] = 'Admin/CategoriesController/categories_tbl';
// $route['categories_tbl_nep'] = 'Admin/CategoriesController/categories_tbl_nep';
// $route['edit_categories'] = 'Admin/CategoriesController/edit_categories';
// $route['drop_cat_table'] = 'Admin/CategoriesController/drop_cat_table';
// $route['delete_data'] = 'Admin/CategoriesController/delete_data';
// $route['csv_data_tbl'] = 'Admin/CategoriesController/csv_data_tbl';
// $route['sub_categories'] = 'Admin/CategoriesController/sub_categories';
// $route['sub_cat_insert'] = 'Admin/CategoriesController/sub_cat_insert';

// $route['proj/delete_data'] = 'Admin/ProjectController/delete_data';
// $route['proj/edit_proj'] = 'Admin/ProjectController/edit_proj';
// $route['add_proj'] = 'Admin/ProjectController/add_proj';
// $route['view_proj'] = 'Admin/ProjectController/view_proj';

// $route['csv_upload'] = 'Admin/TableController/copy_table';
// $route['csv_tbl'] = 'Admin/TableController/csv_tbl';
// $route['get_csv_dataset'] = 'Admin/TableController/get_csv_dataset';
// $route['get_geojson_dataset'] = 'Admin/TableController/get_geojson_dataset';

// $route['add_layers'] = 'Admin/LayersController/add_layers';
// $route['layers_view'] = 'Admin/LayersController/layers_view';
// $route['layers_detail'] = 'Admin/LayersController/layers_detail';
// $route['layers_edit'] = 'Admin/LayersController/layers_edit';


// $route['background'] = 'Admin/UploadController/bck_img';
// $route['emergency_contact'] = 'Admin/UploadController/emergency_contact';
// $route['emergency_contact_nep'] = 'Admin/UploadController/emergency_contact_nep';
// $route['emergency_personnel'] = 'Admin/UploadController/emergency_personnel';
// $route['emergency_personnel_nep'] = 'Admin/UploadController/emergency_personnel_nep';
// $route['delete_emergency'] = 'Admin/UploadController/delete_emerg';
// $route['edit_emergency'] = 'Admin/UploadController/edit_emerg';
// $route['edit_emergency_personnel'] = 'Admin/UploadController/edit_emerg_personnel';
// $route['add_emergency'] = 'Admin/UploadController/add_emergency';
// $route['add_emergency_personnel'] = 'Admin/UploadController/add_emergency_personnel';
// $route['add_icon'] = 'Admin/UploadController/add_icon';
// $route['upload_csv_emerg'] = 'Admin/UploadController/upload_csv_emerg';


// $route['view_publication'] = 'Admin/PublicationController/view_publication';
// $route['add_publication'] = 'Admin/PublicationController/add_publication';
// $route['delete_publication'] = 'Admin/PublicationController/delete_publication';
// $route['edit_publication'] = 'Admin/PublicationController/edit_publication';
// $route['download'] = 'Admin/PublicationController/download';

// $route['view_about'] = 'Admin/AboutController/view_about';
// $route['edit_about'] = 'Admin/AboutController/edit_about';

// $route['map_show'] ='Admin/MapDownload/map_show';
// $route['add_maps'] ='Admin/MapDownload/add_maps';
// $route['edit_map'] ='Admin/MapDownload/edit_map';
// $route['delete_map'] ='Admin/MapDownload/delete_map';

// $route['dashboard'] ='Admin/DashController/dashboard';
// $route['view_table'] ='MapController/view_table';

// $route['change_order_caegory'] = 'Admin/CategoriesController/change_order_caegory';
// $route['ajax_change_order'] = 'Admin/CategoriesController/ajax_change_order';


