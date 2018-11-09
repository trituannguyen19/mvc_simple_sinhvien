<?php 
	/**
	 * 
	 */
	class Models
	{
		private $hostname = "localhost";
		private $username = "root";
		private $pass = "";
		private $dbname = "quanlysinhvien";

		private $conn = null;
		private $result = null;

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


		// lấy toàn bộ records sv
		public function getAllDataSv($table)
		{
			$sql = "SELECT *FROM $table";
			$this->execute($sql);
			if (isset($this->result)) {
				$data = $this->getAllData();
			}else{
				$data = 0;
			}	
			return $data;
		}

		// lấy data theo id
		public function getDataSv($id, $table)
		{
			$sql = "SELECT *FROM $table WHERE id = $id";
			$this->execute($sql);
			
			$data = mysqli_fetch_array($this->result);
			
			return $data;
		}

		// add data
		public function insertData($name, $email, $address)
		{
			$sql = "INSERT INTO sinhvien (name, email, address) VALUES ('$name', '$email', '$address')";
			$this->execute($sql);
		}


		// update data
		public function editData($id, $name, $email, $address)
		{
			$sql = "UPDATE sinhvien SET name = '$name', email = '$email', address = '$address' WHERE id = '$id'";
			$this->execute($sql);
		}


		// xoa data theo id
		public function deleteData($id)
		{
			$sql = "DELETE FROM sinhvien WHERE id = $id";
			$this->execute($sql);
		}

	}

 ?>