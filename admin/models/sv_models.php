<?php 
	/**
	 * 
	 */
	class Sv_models extends Database
	{
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