<?php return [
  'root_dir' => '%ROOT_DIR%',
  'root_urlpath' => env('ECCUBE_ROOT_URLPATH', null),
  'template_code' => env('ECCUBE_TEMPLATE_CODE','default'),
  'admin_route' => env('ECCUBE_ADMIN_ROUTE','admin'),
  'user_data_route' => env('ECCUBE_USER_DATA_ROUTE', 'user_data'),
  'public_path' => '/html',
  'public_path_realdir' => '%ROOT_DIR%/html',
  'image_save_realdir' => '%ROOT_DIR%/html/upload/save_image',
  'image_temp_realdir' => '%ROOT_DIR%/html/upload/temp_image',
  'user_data_realdir' => '%ROOT_DIR%/html/user_data',
  'block_default_realdir' => '%ROOT_DIR%/src/Eccube/Resource/template/default/Block',
  'block_realdir' => '%ROOT_DIR%/app/template/default/Block',
  'template_default_realdir' => '%ROOT_DIR%/src/Eccube/Resource/template/default',
  'template_default_html_realdir' => '%ROOT_DIR%/html/template/default',
  'template_admin_realdir' => '%ROOT_DIR%/src/Eccube/Resource/template/admin',
  'template_admin_html_realdir' => '%ROOT_DIR%/html/template/admin',
  'template_realdir' => '%ROOT_DIR%/app/template/default',
  'template_html_realdir' => '%ROOT_DIR%/html/template/default',
  'template_temp_realdir' => '%ROOT_DIR%/app/cache/eccube/template',
  'csv_temp_realdir' => '%ROOT_DIR%/app/cache/eccube/csv',
  'plugin_realdir' => '%ROOT_DIR%/app/Plugin',
  'plugin_temp_realdir' => '%ROOT_DIR%/app/cache/plugin',
  'plugin_html_realdir' => '%ROOT_DIR%/html/plugin',
  'admin_urlpath' => '/html/template/admin',
  'front_urlpath' => '/html/template/default',
  'image_save_urlpath' => '/html/upload/save_image',
  'image_temp_urlpath' => '/html/upload/temp_image',
  'user_data_urlpath' => '/html/user_data',
  'plugin_urlpath' => '/html/plugin',
];
