<?php 
	/**
	 * 
	 */
	class News_Controller
	{
		private $db = null;
		
		public function __construct()
		{
			$this->db = new Models();
			$this->db->connect();
		}
	}

 ?>