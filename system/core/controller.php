<?php 

	/**
	 * 
	 */
	class Controller
	{
		public function load($controller, $action)
		{
			$controller = ucfirst(strtolower($controller)).'_Controller';
			$action = strtolower($action).'Action';

			if (!file_exists(constant("PATH_ADMIN").'/controller/'.$controller.'.php')) {
				die('Controller không tồn tại');
			}

			require_once constant("PATH_ADMIN").'/controller/'.$controller.'.php';

			if (!class_exists($controller)) {
				die('Class không tồn tại');
			}

			$run = new $controller();

			if (!method_exists($run, $action)) {
				die("không tồn tại");
			}

			$run->$action();

		}
	}
 ?>