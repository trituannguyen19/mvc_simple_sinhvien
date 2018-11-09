<?php 
	/**
	 * 
	 */
	class Controller
	{
		private $db = null;
		
		public function __construct()
		{
			$this->db = new Models();
			$this->db->connect();
		}
		public function action($controller, $action){
			switch ($action) {
				case 'add':
				{
					if (isset($_POST['add'])) {
						$name = $_POST['name'];
						$email = $_POST['email'];
						$address = $_POST['address'];

						if ($this->db->insertData($name, $email, $address)) {
							echo "<p>Insert Success</p>";
						}
					}
					require_once 'view/add_sv.php';
					break;
				}
				
				case 'edit':
				{
					if (isset($_GET['id'])) {
						$id = $_GET['id'];
					}
					$data = $this->db->getDataSv($id, "sinhvien");

					if (isset($_POST['edit'])) {
						$name = $_POST['name'];
						$email = $_POST['email'];
						$address = $_POST['address'];

						$db->editData($id, $name, $email, $address);
						$message[] = "update_success";
					}
					require_once 'view/edit_sv.php';
					break;
				}

				case 'list':
				{
					$listsv = $this->db->getAllDataSv("sinhvien");
					require_once 'view/list_sv.php';
					break;	
				}

				case 'delete':
				{
					require_once 'view/delete_sv.php';
					break;
				}

				case 'home':
				{
					require_once 'view/home.php';
					break;
				}

				default:
					require_once 'view/home.php';
					break;
			}
		}
	}

 ?>