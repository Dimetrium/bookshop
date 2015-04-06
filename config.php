<?
define ('ADDRESS', 'http://bookmag/');
define ('TITLE', 'Book Magazine');
define ('CSS', '/public/css/');
define ('IMG', '/public/img/');
//define ('CSS', $_SERVER['REQUEST_URI'].'/public/css/');
//define ('IMG', $_SERVER['REQUEST_URI'].'/public/img/');

define ('PATH', 'http://localhost/');
define ('ADMIN_INC', 'public/inc/');
define ('ADMIN_TEMPLATE', 'public/');
define ('ADM_CONTROLLER', 'controllers/controller_main.php');
define ('ADM_MODEL', 'models/AdminSQL.php');
define ('ADMIN_IMG', 'public/img/');

define ('PDO_ENGINE', 'mysql');
define ('PDO_HOST', 'localhost');
define ('PDO_DB_NAME', 'book_shop');
//define ('PDO_DB_NAME', 'user5');
define ('PDO_USER', 'root');
//define ('PDO_USER', 'user5');
define ('PDO_PASSWORD', '');
//define ('PDO_PASSWORD', 'tuser5');
    define ('PDO_DSN', PDO_ENGINE . ':host=' . PDO_HOST . ';dbname=' . PDO_DB_NAME);

