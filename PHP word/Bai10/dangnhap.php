<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
</head>
<body>
	<form action="dangnhap_xl.php" method="post">
		<table border="1">
			<tr>
				<td>Username: </td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password: </td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="checkbox" name="remember">Remember</td>
			</tr>
			<tr>
				<td><input type="submit" value="Đăng nhập"></td>
				<td><input type="reset" value="Hủy"></td>
			</tr>
		</table>
	</form>
</body>
</html>