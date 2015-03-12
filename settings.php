<?php 

// Constant
//Base directory
define('BASE_DIR', dirname(__FILE__));

//Relative (removing GET)
$rel_path = explode('?', $_SERVER['REQUEST_URI']);
//@todo http:// https://
define('REL_PATH', 'http://'.$_SERVER['SERVER_NAME'].$rel_path[0]);

?>
