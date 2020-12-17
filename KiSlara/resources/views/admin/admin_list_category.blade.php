@extends('admin.admin_layout')
@section('admin_content')
<section class="wrapper" style="min-height: 500px">
	<table class="table border border-danger bg-light" >
		<thead>
			<tr>
				<th scope="col">Tên danh mục</th>
				<th scope="col">Ngày tạo danh mục</th>
				<th scope="col">Lần cuối cập nhật</th>
				<th scope="col">Tình trạng danh mục</th>
				<th scope="col">Thay đổi tình trạng</th>
				<th scope="col">Xóa danh mục</th>
			</tr>
		</thead>
		<tbody>
			@foreach($list as $key)
			<tr >
				<th scope="row">{{ $key->tenDM }}</th>
				<td>{{ $key->ngayDM }}</td>
				<td>{{ $key->capnhatDM }}</td>
				<td class=" text-center">
				@if($key->statusDM==1)
				Hiện
				@else
				Ẩn
				@endif
				</td>
				<td>
					<form action="admin_status_category" method="post">
						{{ csrf_field() }}
						<input type="hidden" name="idDM" value="{{ $key->idDM }}">
						@if($key->statusDM==1)
						<input type="hidden" name="statusDM" value="0">
						@else
						<input type="hidden" name="statusDM" value="1">
						@endif
						<button class="btn btn-sm btn-success" type="submit">&nbsp;&nbsp;Thay đổi&nbsp;</button>
					</form>
				</td>
				<td>
					<form action="admin_delete_category" method="post">
					{{ csrf_field() }}
					<input type="hidden" name="idDM" value="{{ $key->idDM }}">
					<button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Xóa danh mục này?');">&nbsp;&nbsp;&nbsp;&nbsp;
					Xoá&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
				</form></td>
			</tr>
			@endforeach
		</tbody>
	</table>
	@if(Session::get('status'))	
	<script language='javascript'>alert('{{Session::get('status')}}');</script>;
	@endif
	@endsection