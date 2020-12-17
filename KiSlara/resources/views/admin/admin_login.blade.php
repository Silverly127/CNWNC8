
<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Đăng nhập admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="public/backend/css/style.css" type="text/css" media="all" />  
<link rel="stylesheet" href="public/backend/css/font-awesome.css"> 
<script type="text/javascript" src="public/backend/js/jquery-2.1.4.min.js"></script>
<link href="//fonts.googleapis.com/css?family=Oleo+Script:400,700&amp;subset=latin-ext" rel="stylesheet">
<link rel="shortcut icon" type="image/png" href="public/frontend/image/favlogo.png">
</head>
<body>
	<script src="public/backend/js/jquery.vide.min.js"></script>
	<div data-vide-bg="public/backend/video/game">
		<div class="center-container">
			<div class="header-w3l">
				<h1>KiS Game Shop</h1>
			</div>
			<div class="main-content-agile">
				<div class="sub-main-w3">	
					<div class="wthree-pro">
						<h2>Admin Login</h2>
					</div>
					<form action="admin_dashboard" method="post">
						{{ csrf_field() }}
						<input placeholder="Tên đăng nhập" name="tkAD" class="user" type="text" required="">
						<span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span><br><br>
						<input  placeholder="Mật khẩu" name="mkAD" class="pass" type="password" required="">
						<span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span><br>
						<div class="sub-w3l">
							<h6><a href="home">Về trang chủ-></a></h6>
							<div class="right-w3l">
								<input type="submit" value="Login">
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="footer">
				<p>&copy; 2020 KiS Game Shop. All rights reserved.</p>
			</div>
		</div>
	</div>
</body>
</html>
<?php
$message = Session::get('message');
if($message){
	echo "<script language='javascript'>alert('".$message."');</script>";
	Session::put('message',null);
}
?>