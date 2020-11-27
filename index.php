<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));
define('URLROOT', 'WebModel');
define('VIEWS', ROOT.DS.'views');
define('CLASSES', ROOT.DS.'classes');
define('CSS', 'css');
define('SCRIPTS', 'js');

require_once CLASSES.DS.'view.php';

$v = new View();
$v->renderHTML("model3d");

exit();

?>