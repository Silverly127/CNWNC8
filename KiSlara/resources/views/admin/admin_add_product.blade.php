@extends('admin.admin_layout')
@section('admin_content')
<section class="wrapper" style="min-height: 500px">
	<div class="container">
		<hr class="border-danger">
		<h2>Thêm sản phẩm</h2><br>
		<form action="admin_add_product_xl" method="post">
			{{ csrf_field() }}
			<div class="form-group">
				<label>Tên sản phẩm :</label>
				<input type="text" class="form-control" name="tenSP" value="" style="width: 50%">
			</div>
			<div class="form-group">
				<label>Ảnh sản phẩm :</label>
				<input type="file" name="anhSP">
			</div>
			<div class="form-group">
				<label>Trạng thái sản phẩm:</label>
				<input type="radio" name="statusSP" value="0"> Ẩn
				<input type="radio" name="statusSP" value="1"> Hiện
			</div>
			<button type="submit" class="btn btn-danger">Thêm sản phẩm</button>
		</form>
	</div>
@endsection