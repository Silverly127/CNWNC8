<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>Trang chủ KiS Game Shop</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="public/frontend/image/favlogo.png">
	<link rel="stylesheet" type="text/css" href="public/frontend/css/register.css">
</head>
<body background="public/frontend/image/bg2.jpg">
	<br>
	<div class="container bg-light shadow" id="registercont">
		<br><br>
		<div class="text-center">
			<h2>ĐĂNG KÝ</h2>
		</div>
		<hr class="border-danger">
		<form action="register_xl" method="post">
			{{ csrf_field() }}
			<div class="form-group">
				<input type="text" class="form-control form-control-sm" placeholder="Họ và tên" name="tenUS">
			</div>
			<div class="form-group">
				<input type="text" class="form-control form-control-sm" placeholder="Tên tài khoản" name="tkUS">
			</div>
			<div class="form-group">
				<input type="Email" class="form-control form-control-sm" placeholder="Địa chỉ Email" name="emailUS">
			</div>
			<div class="form-group">
				<input type="text" class="form-control form-control-sm" placeholder="Số điện thoại" name="sdtUS">
			</div>
			<div class="form-group">
				<input type="password" class="form-control form-control-sm" placeholder="Mật khẩu" name="mkUS">
			</div>
			<div class="form-group">
				<input type="password" class="form-control form-control-sm" placeholder="Nhập lại mật khẩu" name="mkUS2">
			</div>
			<div class="form-check">
				<label><input type="checkbox" name="ck" value="1"> Tôi đã đọc và đồng ý với điều khoản dịch vụ</label>
			</div><br>
			<button type="submit" class="btn btn-danger btn-md btn-block" >Đăng ký</button>
		</form>
		<br>
		<p class="float-right">Đã có tài khoản?<a href="home" style="color: firebrick">
			Trang chủ <i class="fa fa-angle-right" aria-hidden="true"></i></a></p>
			<br><br>

		</div>
		<br>
		@if(Session::get('status'))	
		<script language='javascript'>alert('{{Session::get('status')}}');</script>;
		@endif
	</body>
	</html>

