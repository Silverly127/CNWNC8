<!DOCTYPE html>
<html>
<head>
	<title>Sửa thể loại</title>
</head>
<body>
	<?php
		include_once '../connect.php';
		if (isset($_GET['idTL'])) {
			$sl = "select * from theloai where idTL=" . $_GET['idTL'];
		}
		$result = mysqli_query($connect,$sl);
		$d = mysqli_fetch_array($result);
	?>
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td align="right">Tên thể loại: </td>
				<td><input type="text" name="TenTL" value="<?php echo $d['TenTL'] ?>"></td>
			</tr>
			<tr>
				<td align="right">Thứ tự: </td>
				<td><input type="text" name="ThuTu" value="<?php echo $d['ThuTu'] ?>"></td>
			</tr>
			<tr>
				<td align="right">Ẩn hiện: </td>
				<td><select name="AnHien"> 
					<option value="0" <?php if($d['AnHien'] == 0) echo "selected"; ?>>Ẩn</option>
					<option value="1" <?php if($d['AnHien'] == 1) echo "selected"; ?>>Hiện</option>
				</select></td>
			</tr>
			<tr>
				<td align="right">Icon: </td>
				<td><img src="../image/<?php echo $d['icon'] ?>" width="40" height="40"></td>
			</tr>
			<tr>
				<td align="right"></td>
				<td>
					<input type="file" name="image">
					<input type="hidden" name="tenanh" value="<?php echo $d['icon']; ?>">
				</td>
			</tr>
			<tr>
				<td align="right">
					<input type="hidden" name="idTL" value="<?php echo $d['idTL']; ?>">
					<input type="submit" name="sua" value="Sửa">
				</td>
				<td><input type="reset" value="Hủy"></td>
			</tr>
		</table>
	</form>

	<?php
		include("../connect.php");
		if(isset($_POST['TenTL'])) $theloai = $_POST['TenTL'];
		if(isset($_POST['ThuTu'])) $thutu = $_POST['ThuTu'];
		if(isset($_POST['AnHien'])) $anhien = $_POST['AnHien'];
		$tenanhtailen = "";
		if(isset($_FILES['image']['name'])) $tenanhtailen = $_FILES['image']['name'];
		if ($tenanhtailen != "") {
			$icon = $tenanhtailen;
		}
		else{
			if(isset($_POST['tenanh'])) $icon = $_POST['tenanh'];
		}
		if (isset($_GET['idTL'])) $key = $_GET['idTL'];
		if (isset($_POST['sua'])) {
			$sl = "select count(*) from theloai where icon = '$icon'";
			$result = mysqli_query($connect,$sl);
			$d = mysqli_fetch_array($result);
			if ($d[0]==0 or $tenanhtailen="") {
				$sl= "update theloai set TenTL='$theloai',ThuTu='$thutu',AnHien='$anhien',icon='$icon' where idTL='$key'";
				if ($tenanhtailen!="") {
					move_uploaded_file($_FILES['image']['tmp_name'], "../image/".$tenanhtailen);
					$anhcu = "../image".filter_input(INPUT_POST, "tenanh");
					unlink($anhcu);
				}
				if (mysqli_query($connect,$sl)) {
					echo "<script language='javascript'>alert('Sửa thành công!');";
					echo "location.href='theloai.php';</script>";
				}
			}
			else{
				echo "<script language='javascript'>alert('anh bi trung ten');";
				echo "location.href='theloai_sua.php?idTL=$key';</script>";
			}
		}
	?>
</body>
</html>