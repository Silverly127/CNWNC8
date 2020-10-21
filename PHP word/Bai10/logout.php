<?php
	session_start();
	ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Đăng xuất</title>
</head>
<body>
	<?php 
	session_destroy();
	header("location:dangnhap.php");
	?>
</body>
</html>