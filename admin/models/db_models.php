<?php 
	/**
	 * 
	 */
	class Database
	{
		private $hostname = "localhost";
		private $username = "root";
		private $pass = "";
		private $dbname = "quanlysinhvien";

		public $conn = null;
		public $result = null;

		public function connect()
		{
			$this->conn = new mysqli($this->hostname, $this->username, $this->pass, $this->dbname);

			if (!$this->conn) {
				exit();
			}else{
				mysqli_set_charset($this->conn, "utf8");
			}
		}

		// truy vấn và trả về result 
		public function execute($sql)
		{
			$this->result = $this->conn->query($sql);
			return $this->result;
		}

		// get data
		public function getData()
		{
			if ($this->result) {
				$data = mysqli_fetch_array($this->result);
			}else{
				$data = 0;
			}
		}

		// get all data
		public function getAllData()
		{
			if (!$this->result) {
				$data = 0;
			}else{
				while ($rows = mysqli_fetch_array($this->result, MYSQLI_ASSOC)) {
				$data[] = $rows;
				}
			}
			return $data;
		}
	}

 ?>