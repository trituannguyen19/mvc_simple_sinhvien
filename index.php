<?php 
	define('PATH_SYSTEM', __DIR__ .'/system');
	define('PATH_ADMIN', __DIR__ . '/admin');

	define('CONTROLLER_DEFAULT', 'sinhvien');
	define('ACTION_DEFAULT', 'home');

	require_once constant("PATH_ADMIN").'/models/db_models.php';

	$controller = empty($_GET['controller']) ? constant("CONTROLLER_DEFAULT") : $_GET['controller'];
	$action = empty($_GET['action']) ? constant("ACTION_DEFAULT") : $_GET['action'];

	require_once PATH_SYSTEM . '/core/Controller.php';

	$control = new Controller();
	$control->load($controller, $action);


 ?>