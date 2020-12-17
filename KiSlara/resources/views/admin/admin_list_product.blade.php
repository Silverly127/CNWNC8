@extends('admin.admin_layout')
@section('admin_content')
<section class="wrapper" style="min-height: 500px">
	<div class="row">
		@foreach($list as $key)
		<div class="col-lg-6 col-sm-12">
			<img src="public/frontend/image/{{ $key->anhSP }}" width="20%" class="float-left">
			<div class="dropdown float-right">
				<form action="admin_set_product">
					{{ csrf_field() }}
					<input type="hidden" name="idSP" value="{{ $key->idSP }}">
					<button class="btn btn-sm btn-success" type="submit">Chỉnh sửa</button>
				</form><br>
				<form action="admin_delete_product">
					{{ csrf_field() }}
					<input type="hidden" name="idSP" value="{{ $key->idSP }}">
					<button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Chắc chắn xóa sản phẩm này?');">&nbsp;&nbsp;&nbsp;&nbsp;
					Xoá&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
				</form>
			</div>
			<div style="margin-left: 120px;word-wrap: break-word;" id="contentsp">
				<h4>{{ $key->tenSP }}</h4>
				<p>{{ number_format($key->giaSP-$key->giaSP/100*$key->giamSP,0,",",".") }}đ</p>
				@if($key->giamSP!=0)
				<i class="fa fa-shopping-cart" aria-hidden="true"></i><s>{{ number_format($key->giaSP,0,",",".") }}đ</s>
				<span class="badge badge-danger" id="saleoff">-{{ $key->giamSP }}%</span>
				@endif
			</div>
			<div class="clearfix"></div><br><br>
		</div>
		@endforeach
	</div>
	{{ $list->links() }}
	@if(Session::get('status'))	
	<script language='javascript'>alert('{{Session::get('status')}}')</script>;
	@endif
	@endsection