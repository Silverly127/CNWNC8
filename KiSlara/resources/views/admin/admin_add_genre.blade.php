@extends('admin.admin_layout')
@section('admin_content')
<section class="wrapper" style="min-height: 500px">
	<div class="container">
		<hr class="border-danger">
		<h2>Thêm thể loại sản phẩm</h2><br>
		<form action="admin_add_genre_xl" method="post">
			{{ csrf_field() }}
			<div class="form-group">
				<label>Id của thể loại :</label>
				<input type="text" class="form-control" name="idTL" value="" style="width: 50%">
			</div>
			<div class="form-group">
				<label>Tên thể loại:</label>
				<input type="text" class="form-control" name="tenTL" value="" style="width: 50%">
			</div>
			<div class="form-group">
				<label>Trạng thái thể loại:</label>
				<input type="radio" name="statusTL" value="0"> Ẩn
				<input type="radio" name="statusTL" value="1"> Hiện
			</div>
			<button type="submit" class="btn btn-danger">Thêm thể loại</button>
		</form>
	</div>
	@if(Session::get('status'))	
	<script language='javascript'>alert('{{Session::get('status')}}');</script>;
	@endif
@endsection