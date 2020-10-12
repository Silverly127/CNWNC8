<!DOCTYPE html>
<html>
<head>
	<title>Bài 2</title>
</head>
<body>
	<?php
		if (isset($_POST['avalue']) && isset($_POST['bvalue']) && is_numeric($_POST['avalue']) && is_numeric($_POST['bvalue'])) {
			$a = $_POST['avalue'];
			$b = $_POST['bvalue'];
			if ($a == 0) {
				if ($b == 0) {
					$nghiem = 'Vô số nghiệm.';
				}
				else{
					$nghiem = 'Vô nghiệm.';
				}
			}
			else{
				$sol = -$b/$a;
				$sol = round($sol,2);
				$nghiem = "$sol";
			}
		}
	?>
	<form action="demo2.php" method="post">
		<table border="1" align="center">
			<tr>
				<td colspan="5" bgcolor="sky blue">Giải phương trình bậc 1</td>
			</tr>
			<tr>
				<td>Phương trình</td>
				<td><input type="text" name="avalue"></td>
				<td>X + </td>
				<td><input type="text" name="bvalue"></td>
				<td>= 0</td>
			</tr>
			<tr>
				<td colspan="5">Nghiệm x = <?php if (isset($nghiem)) echo $nghiem; ?></td>
			</tr>
			<tr>
				<td colspan="5" align="center"><input type="submit" name="" value="Xuất"></td>
			</tr>
		</table>
	</form>
</body>
</html>