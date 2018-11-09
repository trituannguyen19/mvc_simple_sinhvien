<?php 
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}

$this->db->deleteData($id);
header("location: index.php?controller=sinhvien&action=list");

 ?>