@extends('pages.layout')
@section('content')
<style type="text/css">
	p
	{
		font-size: 18px;
	}
</style>
<br>
<div class="container">
	<a href="{{URL::to('kislara/home')}}"><button type="button" class="btn btn-danger float-right">Về trang chủ</button></a>
	<h2>HƯỚNG DẪN TẠO TÀI KHOẢN</h2>
	<hr class="border border-danger">
	<br>
	<h3>Bước 1:</h3>
	<p>Ở giao diện trang chủ KiS Game Shop, click vào Đăng nhập</p>
	<div class="container d-flex justify-content-center"><img src="public/frontend/image/anh1.png" width="80%"></div>
	<h3>Bước 2:</h3>
	<p>Click vào Đăng ký</p>
	<div class="container d-flex justify-content-center"><img src="public/frontend/image/anh2.png" width="80%"></div>
	<h3>Bước 3:</h3>
	<p>Điền đầy đủ các thông được yêu cầu:</p>
	<div class="container d-flex justify-content-center"><img src="public/frontend/image/anh3.png" width="50%"></div><br>
	<div style="background-color: #f1f1f1;">
		<ul><h3 class="text-danger">!Lưu ý</h3></ul>
		<li><b>Username</b> viết liền không dấu, không chứa kí tự đặc biệt. Nên viết dễ đọc dễ nhớ vì nó sẽ nằm trong chú pháp nạp tiền để thanh toán tại Shop.</li>
		<li><b>Email</b> điền chính xác, vì các sản phẩm key game cũng như các thông báo qua trọng sẽ được Shop gửi qua email tới khách hàng.</li>
	</div><br>
	<h3>Bước 4:</h3>
	<p>
		<ul>
			<li>Tích chọn <b>Tôi đã đọc và đồng ý với Điều khoản dịch vụ</b></li>
			<li>Cuối cùng là bấm<b> Đăng Ký</b></li>
		</ul>
	</p>
	<p><b>Như vậy là bạn đã đăng ký tài khoản thành công rồi đó</b></p>
</div>
@endsection