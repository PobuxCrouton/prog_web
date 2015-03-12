<?php 
/**
 * @author Antoine LeBel
 *		   LEBA23068603
 * 
 * Construit selon MVC, sans getter ni setter cependant
 */

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

require('settings.php');
require('app/controleur/Router.php');

$router = new Router();
$router->dispatch();