<!DOCTYPE html>
<html>
<head>
	<title>Bài 6 phần 1</title>
</head>
<body>
	<?php
	if (isset($_POST['mang']) && $_POST['mang'] != null) {
		$sol = 0;
		$mang = array();
		$mang = explode(",", $_POST['mang']);
		$n = count($mang);
		for ($i=0; $i < $n ; $i++) { 
			$sol += $mang[$i];
		}
	}
	?>
	<form action="demo6p1.php" method="post">
		<table align="center">
			<tr>
				<td colspan="2" align="center" bgcolor="sky blue" height="40"><b>NHẬP VÀ TÍNH TRÊN DÃY SỐ</b></td>
			</tr>
			<tr>
				<td>Nhập dãy số: </td>
				<td><input type="text" name="mang"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tổng dãy số"></td>
			</tr>
			<tr>
				<td>Tổng dãy số: </td>
				<td><input type="text" name="sol" value="<?php if(isset($sol)) echo $sol ?>"></td>
			</tr>
		</table>
	</form>
</body>
</html>