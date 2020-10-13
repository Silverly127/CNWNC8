<!DOCTYPE html>
<html>
<head>
	<title>Bài 4</title>
</head>
<body>
	<?php
		if (isset($_POST['start']) && isset($_POST['end']) && is_numeric($_POST['start']) && is_numeric($_POST['end']) && 
			$_POST['start'] < $_POST['end']) {
			$start = $_POST['start'];
			$end = $_POST['end'];
			$tcc = 0; $tcci = 1; $tsc = 0; $tsl = 0;
			for ($i= $start; $i <= $end ; $i++) { 
				$tcc += $i;
				$tcci *= $i;
				if ($i %2 == 0) {
					$tsc += $i;
				}
				if ($i %2 != 0) {
					$tsl += $i;
				}
			}
		}
	?>
	<form action="demo4.php" method="post">
		<table border="1" align="center">
			<tr>
				<td></td>
				<td>Số bắt đầu</td>
				<td><input type="text" name="start"></td>
				<td>Số kết thúc</td>
				<td><input type="text" name="end"></td>
			</tr>
			<tr>
				<td colspan="5">Kết quả</td>
			</tr>
			<tr>
				<td>Tổng các số</td>
				<td colspan="4"><input type="text" name="tcc" value="<?php if(isset($tcc)) echo $tcc ?>"></td>
			</tr>
			<tr>
				<td>Tích các số</td>
				<td colspan="4"><input type="text" name="tcci" value="<?php if(isset($tcci)) echo $tcci ?>"></td>
			</tr>
			<tr>
				<td>Tổng các số chẵn</td>
				<td colspan="4"><input type="text" name="tsc" value="<?php if(isset($tsc)) echo $tsc ?>"></td>
			</tr>
			<tr>
				<td>Tổng các số lẻ</td>
				<td colspan="4"><input type="text" name="tsl" value="<?php if(isset($tsl)) echo $tsl ?>"></td>
			</tr>
			<tr>
				<td colspan="5"><input type="submit" value="Tính toán"></td>
			</tr>
		</table>
	</form>
</body>
</html>