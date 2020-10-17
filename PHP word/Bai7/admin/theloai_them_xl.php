<?php
	include_once('../connect.php');
	$icon = $_FILES['image']['name'];
	$anhminhhoa = $_FILES['image']['tmp_name'];
	move_uploaded_file($anhminhhoa, "../image" . $icon);
	$theloai = $_POST['theloai'];
	$thutu = $_POST['thutu'];
	$anhien = $_POST['anhien'];
	$sl = "insert into theloai (TenTL,ThuTu,AnHien,icon) Value('$theloai','$thutu','$anhien','$icon')";
	if (mysqli_query($connect,$sl)) {
		echo "<script language='javascript'>alert('Thêm thành công!');";
		echo "location.href='theloai.php';</script>";
	}
	else{
		echo "Lỗi: ",mysqli_error();
	}
?>