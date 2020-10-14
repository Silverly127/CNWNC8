<!DOCTYPE html>
<html>
<head>
	<title>Bài 6 phần 3</title>
</head>
<body>
	<?php
		$mangso = array();
		$mangduynhat = array();
		$solan = array();
		if (isset($_POST['mang']) && $_POST['mang'] != null) {
			$mangso = explode(",", $_POST['mang']);
			$mangduynhat = array_unique($mangso);
			$solan = array_count_values($mangso);
			$chuoi = "|";
			foreach ($solan as $key => $value) {
				$chuoi = $chuoi . $key . ": " . $value . "|"; 
			}
		}
	?>
	<form action="demo6p3.php" method="post">
		<table align="center">
			<tr>
				<td colspan="2" bgcolor="sky blue" height="40"><b>ĐẾM SỐ LẦN XUẤT HIỆN VÀ TẠO MẢNG DUY NHẤT</b></td>
			</tr>
			<tr>
				<td>Mảng: </td>
				<td><input type="text" name="mang"></td>
			</tr>
			<tr>
				<td>Số lần xuất hiện: </td>
				<td><input type="text" name="" value="<?php if(isset($chuoi)) echo $chuoi; ?>" disabled="on"></td>
			</tr>
			<tr>
				<td>Mảng duy nhất: </td>
				<td><input type="text" name="" value="<?php if(isset($_POST['btn'])) echo implode(" ", $mangduynhat);?>" disabled="on"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="btn" value="Thực hiện" style="width: 100%"></td>
			</tr>
		</table>
	</form>
</body>
</html>