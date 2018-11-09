<?php 
	/**
	 * 
	 */
	require_once constant("PATH_ADMIN").'/models/news_models.php';
	class News_Controller
	{
		private $db = null;
		
		public function __construct()
		{
			$this->db = new Database();
			$this->db->connect();
		}
	}

 ?>