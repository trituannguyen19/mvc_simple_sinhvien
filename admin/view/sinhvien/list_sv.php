<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List Sv</title>
</head>
<body>

	<div>
		<h2>List Sv</h2>
		<a href="index.php?controller=sinhvien&action=add">Add Sv</a><br><br>
		<a href="index.php?controller=sinhvien&action=home">HOME</a><br><br>
		<table>
			<thead>
				<th>id</th>
				<th>name</th>
				<th>email</th>
				<th>address</th>
				<th>Edit</th>
				<th>Delete</th>
			</thead>
			<tbody>
				<?php 
					foreach ($listsv as $sv) {
						?>
						<tr>
							<td><?php echo $sv['id']; ?></td>
							<td><?php echo $sv['name']; ?></td>
							<td><?php echo $sv['email']; ?></td>
							<td><?php echo $sv['address']; ?></td>
							<td><a href="index.php?controller=sinhvien&action=edit&id=<?php echo $sv['id']; ?>">edit</a></td>
							<td><a href="index.php?controller=sinhvien&action=delete&id=<?php echo $sv['id']; ?>">delete</a></td>
						</tr>
						<?php 
					}
				 ?>
				
			</tbody>
		</table>
	</div>
</body>
</html>