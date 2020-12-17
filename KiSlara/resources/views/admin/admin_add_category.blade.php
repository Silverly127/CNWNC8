@extends('admin.admin_layout')
@section('admin_content')
<section class="wrapper" style="min-height: 500px">
	<div class="container">
		<hr class="border-danger">
		<h2>Thêm danh mục sản phẩm</h2><br>
		<form action="admin_add_category_xl" method="post">
			{{ csrf_field() }}
			<div class="form-group">
				<label>Id của danh mục :</label>
				<input type="text" class="form-control" name="idDM" value="" style="width: 50%">
			</div>
			<div class="form-group">
				<label>Tên danh mục:</label>
				<input type="text" class="form-control" name="tenDM" value="" style="width: 50%">
			</div>
			<div class="form-group">
				<label>Trạng thái danh mục:</label>
				<input type="radio" name="statusDM" value="0"> Ẩn
				<input type="radio" name="statusDM" value="1"> Hiện
			</div>
			<button type="submit" class="btn btn-danger">Thêm danh mục</button>
		</form>
	</div>
	@if(Session::get('status'))	
	<script language='javascript'>alert('{{Session::get('status')}}');</script>;
	@endif
@endsection