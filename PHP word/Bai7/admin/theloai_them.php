<!DOCTYPE html>
<html>
<head>
	<title>Thêm thể loại</title>
</head>
<body>
	<form action="theloai_them_xl.php" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td align="right">Tên thể loại: </td>
				<td><input type="text" name="theloai"></td>
			</tr>
			<tr>
				<td align="right">Thứ tự: </td>
				<td><input type="text" name="thutu"></td>
			</tr>
			<tr>
				<td align="right">Ẩn hiện: </td>
				<td>
					<select name="anhien">
						<option value="0">Ẩn</option>
						<option value="1">Hiện</option>
					</select>
				</td>
			</tr>
			<tr>
				<td align="right">Icon: </td>
				<td><input type="file" name="image"></td>
			</tr>
			<tr>
				<td align="right"><input type="submit" value="Thêm"></td>
				<td><input type="submit" value="Hủy"></td>
			</tr>
		</table>
	</form>
</body>
</html>