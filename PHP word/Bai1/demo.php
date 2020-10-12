<!DOCTYPE html>
<html>
<head>
	<title>Bài 1</title>
</head>
<body>
	<?php
		if ($_POST['name'] != '') {
		 	$name = 'Xin chào ' . $_POST['name'];
		}
		else{
			$name = '';
		}
	?>
	<form action="demo.php" method="post">
		<table border="1" align="center">
			<tr>
				<td colspan="2" bgcolor="sky blue">In lời chào</td>
			</tr>
			<tr>
				<td>Họ và tên</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><?php echo $name; ?></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="" value="Xuất"></td>
			</tr>
		</table>
	</form>
</body>
</html>