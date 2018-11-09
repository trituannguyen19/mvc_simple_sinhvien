<?php 
define('CONTROLLER_DEFAULT', 'sinhvien');
define('ACTION_DEFAULT', 'home');

$controller = empty($_GET['controller']) ? constant("CONTROLLER_DEFAULT") : $_GET['controller'];
$action = empty($_GET['action']) ? constant("ACTION_DEFAULT") : $_GET['action'];


require_once PATH_SYSTEM . '/core/Controller.php';

$control = new Controller();
$control->load($controller, $action);

?>