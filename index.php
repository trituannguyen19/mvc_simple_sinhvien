<?php 
	define('PATH_SYSTEM', __DIR__ .'/system');
	define('PATH_ADMIN', __DIR__ . '/admin');

	require_once constant("PATH_ADMIN").'/models/db_models.php';
	
	require_once 'routes.php';
	
 ?>