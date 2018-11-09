<?php 
	/**
	 * 
	 */
	require_once constant("PATH_ADMIN").'/models/sv_models.php';
	class Sinhvien_Controller
	{
		private $db = null;
		
		public function __construct()
		{
			$this->db = new Database();
			$this->db->connect();
		}

		public function addAction()
		{
			if (isset($_POST['add'])) {
				$name = $_POST['name'];
				$email = $_POST['email'];
				$address = $_POST['address'];

				if ($this->db->insertData($name, $email, $address)) {
					echo "<p>Insert Success</p>";
				}
			}
			require_once constant("PATH_ADMIN").'/view/sinhvien/add_sv.php';
		}

		public function editAction()
		{
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
			}
			$data = $this->db->getDataSv($id, "sinhvien");

			if (isset($_POST['edit'])) {
				$name = $_POST['name'];
				$email = $_POST['email'];
				$address = $_POST['address'];

				$this->db->editData($id, $name, $email, $address);
				$message[] = "update_success";
			}
			require_once constant("PATH_ADMIN").'/view/sinhvien/edit_sv.php';
		}

		public function deleteAction()
		{
			require_once constant("PATH_ADMIN").'/view/sinhvien/delete_sv.php';
		}

		public function listAction()
		{
			$listsv = $this->db->getAllDataSv("sinhvien");
			require_once constant("PATH_ADMIN").'/view/sinhvien/list_sv.php';
		}

		public function homeAction()
		{
			require_once constant("PATH_ADMIN").'/view/sinhvien/home.php';
		}
	}
 ?>