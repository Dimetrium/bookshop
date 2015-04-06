<?php
require_once 'config.php';
// Autoload classes from /controllers dir
//function __autoload($class_name) {
//
//    $filename = strtolower($class_name) . '.php';
//    $file = site_path . 'controllers' . DIR_SEPRTR . $filename;
//
//    if (file_exists($file) == false) {
//        return false;
//    }
//
//    include ($file);
//
//}
//
//function autoload($class)
//{
//    $paths = explode(PATH_SEPARATOR, get_include_path());
//    $flags = PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE;
//    $file = strtolower(str_replace("\\", DIRECTORY_SEPARATOR, trim($class, "\\"))).".php";
//    foreach ($paths as $path)
//    {
//        $combined = $path.DIRECTORY_SEPARATOR.$file;
//        if (file_exists($combined))
//        {
//            include($combined);
//            return;
//        }
//    }
//    throw new Exception("{$class} not found");
//}
//class Autoloader
//{
//    public static function autoload($class)
//    {
//        autoload($class);
//    }
//}
//spl_autoload_register('autoload');
//spl_autoload_register(array('autoloader', 'autoload'));
// these can only be called within a class context…
// spl_autoload_register(array($this, 'autoload'));
// spl_autoload_register(__CLASS__.'::load');



//require_once 'config.php';
//$controller = new Controller;
//
//
require_once 'app/bootstrap.php';
//
//error_reporting (E_ALL);
//
//if (version_compare(phpversion(), '5.1.0', '<') == true) { die ('PHP5.1 Only'); }
//
//// Узнаём путь до файлов сайта
//$site_path = realpath(dirname(__FILE__) . DIR_SEPRTR ) . DIR_SEPRTR;
////var_dump($site_path);
//$registry = new Registry;
//
//$dbh = new PDO('mysql:host='.HOST.';dbname='.DB_NAME, USER, PASSWORD);
//
//$registry->set ('db', $dbh);