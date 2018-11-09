<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Sv</title>
</head>
<body>
	<div>
		<h2>Sửa SV</h2>
		<a href="index.php?controller=sinhvien&action=list">Back to List SV</a>
		<br>
		<?php 
			if (isset($message) && in_array("update_success", $message)) {
				echo "<p>UpDate Success</p>";
			}
		 ?>
		<form action="" method="POST">
			<input type="text" name="name" value="<?php echo $data['name']; ?>" >
			<input type="email" name="email" value="<?php echo $data['email']; ?>" >
			<input type="text" name="address" value="<?php echo $data['address']; ?>" >
			<input type="submit" name="edit" value="Submit">
		</form>
	</div>
</body>
</html>