<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Nội dung</title>
</head>
<body>
	Trang Quản Trị
	<?php
		if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
			echo $_SESSION['username'];
		}
		else{
			echo "<script language='javascript'>alert('Bạn chưa đăng nhập!');";
			echo "location.href='dangnhap.php';</script>";
		}
	?>
	<a href="logout.php">Thoát ra</a>
</body>
</html>