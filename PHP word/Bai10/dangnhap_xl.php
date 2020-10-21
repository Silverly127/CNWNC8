<?php
	session_start();
	ob_start();
	include('connect.php');
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sl = "select * from users where Username='".$username."' and Password='".$password."'";
	$kq = mysqli_query($connect,$sl);
	$row = mysqli_fetch_array($kq);
	if (mysqli_num_rows($kq)>0) {
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['hoten'] = $row['Hoten'];
		echo "<script language='javascript'>alert('Đăng nhập thành công');";
		echo "location.href='noidung.php';</script>";
	}
	else {
		echo "<script language='javascript'>alert('Đăng nhập thất bại');";
		echo "location.href='dangnhap.php';</script>";
	}
?>