<?php
// lấy ra được đường dẫn vật lý thư muục mẹ chứa file hiện tại
$site_path = dirname(__FILE__);

// định nghĩa các hằng số ở phần site dùng cho ứng dụng ngoài frontend
define('APP_PATH', $site_path . '/app');
define('CONTROLLER_PATH', $site_path . '/app/controllers');
define('MODEL_PATH', $site_path . '/app/models');
define('VIEW_PATH', $site_path . '/app/views');
define('CORE_PATH', $site_path . '/core');
define('DB_PATH', $site_path . '/core/database');
define('HELPER_PATH', $site_path . '/core/helper');
define('URL', 'http://localhost/phpmvc/');
define('URL_ASSETS', 'http://localhost/phpmvc/assets/');


echo '<br> APP_PATH ' . APP_PATH;
echo '<br> CONTROLLER_PATH ' . CONTROLLER_PATH;
echo '<br> VIEW_PATH ' . VIEW_PATH;
echo '<br> MODEL_PATH ' . MODEL_PATH;
echo '<br> CORE_PATH ' . CORE_PATH;
echo '<br> DB_PATH ' . DB_PATH;
echo '<br> HELPER_PATH ' . HELPER_PATH;
echo '<br> URL ' . URL;
echo '<br> URL_ASSETS ' . URL_ASSETS;