<?php
/**
 * @author Samrat Khan - Apr 7, 2013
 */
/** MySQL database information
 * 
 */
error_reporting(E_ALL);
error_reporting( error_reporting() & ~E_NOTICE );

$timezone = "Asia/Dhaka";
date_default_timezone_set($timezone);

define('ROOT', 'http://192.168.1.4:8081/');

define('DB_HOST', 'localhost');
define('DB_NAME', 'warehouse');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

$dbname = DB_NAME;
$dbhost = DB_HOST;

$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

try {
    $db = new PDO("mysql:host={$dbhost};dbname={$dbname};charset=utf8", DB_USER, DB_PASSWORD, $options);
} catch(PDOException $ex) {
    die("Failed to connect to the database: " . $ex->getMessage());
}
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


if(function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc()) {

    function undo_magic_quotes_gpc(&$array) {
        foreach ($array as &$value) {
            if (is_array($value)) {
                undo_magic_quotes_gpc($value);
            } else {
                $value = stripslashes($value);
            }
        }
    }

    undo_magic_quotes_gpc($_POST);
    undo_magic_quotes_gpc($_GET);
    undo_magic_quotes_gpc($_COOKIE);
}
header('Content-Type: text/html; charset=utf-8');
session_start();

/** Directory Separator **/
if (!defined('DS'))
    define ('DS', '/');
/** Absolute path to the foo_ directory. */
if (!defined('ABSPATH'))
    define('ABSPATH', $_SERVER['DOCUMENT_ROOT']);

/** Absolute path to the foo_root directory. */
if (!defined('FOOROOT'))
    define('FOOROOT', 'foowms');
/** Absolute path to the foo_root directory. */



/************* APPLICATION DIRECTORY ****************/
if (!defined('FOOAPPS'))
    define('FOOAPPS', 'foo-apps');

require FOOAPPS . DS . 'arr' . DS . 'Labels.php';
require FOOAPPS . DS . 'arr' . DS . 'Message.php';
require FOOAPPS . DS . 'arr' . DS . 'Headings.php';
require FOOAPPS . DS . 'arr' . DS . 'BasicInfo.php';

require FOOAPPS . DS . 'fn' . DS . 'custom.php';
require FOOAPPS . DS . 'fn' . DS . 'form.php';

require FOOAPPS . DS . 'cls' . DS . 'users.php';


/************* THE DRAWER ***************************/
if (!defined('FOODRAWER'))
    define('FOODRAWER', 'foo-drawer');

if (!defined('CONTENTPATH'))
    define('CONTENTPATH', ROOT . FOOROOT );