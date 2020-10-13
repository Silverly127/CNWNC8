<!DOCTYPE html>
<html>
<head>
	<title>Bài 3</title>
</head>
<body>
	<?php
		if (isset($_POST['number']) && is_numeric($_POST['number'])) {
			switch ($_POST['number']) {
				case 0:
					$chu = "Không";
					break;
				case 1:
					$chu = "Một";
					break;
				case 2:
					$chu = "Hai";
					break;
				case 3:
					$chu = "Ba";
					break;
				case 4:
					$chu = "Bốn";
					break;
				case 5:
					$chu = "Năm";
					break;
				case 6:
					$chu = "Sáu";
					break;
				case 7:
					$chu = "Bảy";
					break;
				case 8:
					$chu = "Tám";
					break;
				case 9:
					$chu = "Chín";
					break;
				default:
					$chu = "Không hợp lệ";
					break;
			}
		}
	?>
	<form action="demo3.php" method="post">
		<table border="1" align="center">
			<tr>
				<td colspan="3">Đọc số</td>
			</tr>
			<tr>
				<td>Nhập số (0-9)</td>
				<td rowspan="2"><input type="submit" value="Submit"></td>
				<td>Bằng chữ</td>
			</tr>
			<tr>
				<td><input type="text" name="number"></td>
				<td><input type="text" value="<?php if(isset($chu)) echo $chu; ?>"></td>
			</tr>
		</table>
	</form>
</body>
</html>