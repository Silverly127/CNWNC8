<!DOCTYPE html>
<html>
<head>
	<title>Bài 6 phần 2</title>
</head>
<body>
	<?php
	function xuatmang($mang)
	{
		return implode(" ", $mang);
	}
	function gtln($mang)
	{
		$max = $mang[0];
		for ($i=1; $i < count($mang) ; $i++) { 
			if ($mang[$i] > $max) {
				$max = $mang[$i];
			}
		}
		return $max;
	}
	function gtnn($mang)
	{
		$min = $mang[0];
		for ($i=1; $i < count($mang) ; $i++) { 
			if ($mang[$i] < $min) {
				$min = $mang[$i];
			}
		}
		return $min;
	}
	function tong($mang)
	{
		$tong = 0;
		for ($i=0; $i < count($mang) ; $i++) { 
				$tong += $mang[$i];
		}
		return $tong;
	}
	if (isset($_POST['quantity']) && is_numeric($_POST['quantity'])) {
		$n = $_POST['quantity'];
		$mang = array($n);
		for ($i=0; $i < $n ; $i++) { 
			$mang[$i] = mt_rand(0,20);
		}
		$xuatmang = xuatmang($mang);
		$max = gtln($mang);
		$min = gtnn($mang);
		$tong = tong($mang);
	}
	?>
	<form action="demo6p2.php" method="post">
		<table align="center">
			<tr>
				<td colspan="2" bgcolor="sky blue" height="40" align="center"><b>PHÁT SINH MẢNG VÀ TÍNH TOÁN</b></td>
			</tr>
			<tr>
				<td>Nhập số phần tử: </td>
				<td><input type="text" name="quantity"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Phát sinh và tính toán"></td>
			</tr>
			<tr>
				<td>Mảng</td>
				<td><input type="text" name="mang" value="<?php if(isset($mang)) echo $xuatmang; ?>"></td>
			</tr>
			<tr>
				<td>GTLN (MAX) trong mảng: </td>
				<td><input type="text" name="max" value="<?php if(isset($max)) echo $max; ?>"></td>
			</tr>
			<tr>
				<td>GTNN (MIN) trong mảng: </td>
				<td><input type="text" name="min" value="<?php if(isset($min)) echo $min; ?>"></td>
			</tr>
			<tr>
				<td>Tổng mảng: </td>
				<td><input type="text" name="tongmang" value="<?php if(isset($tong)) echo $tong; ?>"></td>
			</tr>
		</table>
	</form>
</body>
</html>