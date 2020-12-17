@extends('pages.layout')
@section('content')
<script type="text/javascript">
	function updateCart(qty,rowId) {
		$.get('update_cart',{qty:qty,rowId:rowId},function() {
			location.reload();
		});
	}
</script>
<br>
<div class="container" style="min-height: 500px">
@if(!$data)
	<div style="height: 470px">
		<p class="text-dark">Không có sản phẩm để hiển thị! </p>
	</div>
@else
	<form action="delete_cart" method="post">
		{{ csrf_field() }}
		<input type='hidden' name='update_cart' value='co' >
		<table class="table border border-danger text-danger">
			<thead>
				<tr>
					<th scope="col">Giỏ hàng</th>
					<th scope="col">Tên</th>
					<th scope="col">Số lượng</th>
					<th scope="col">Giá</th>
					<th scope="col">Giảm giá</th>
					<th scope="col">Thành tiền</th>
					<th scope="col">Xóa</th>
				</tr>
			</thead>
			<tbody>
				<?php $total=0;$d=1 ?>
				@foreach($data as $item)
				<tr>
					<th scope="row">{{ $d }}</th>
					<td>{{ $item->name }}</td>
					<td>
						<input type="number" name="" value="{{ $item->qty }}" onchange="updateCart(this.value,'{{ $item->rowId }}')" min="1" max="5">
					</td>
					<td>{{ number_format($item->price,0,",",".") }}đ</td>
					<td>{{ $item->options->giamSP }}%</td>
					<td>{{ number_format(($item->price-$item->price/100*$item->options->giamSP)*$item->qty,0,",",".") }}đ</td>
					<?php $total += ($item->price-$item->price/100*$item->options->giamSP)*$item->qty;$d++; ?> 
					<td><input type="checkbox" name="rowId[]" value="{{ $item->rowId }}"></td>
				</tr>
				@endforeach
				<tr>
					<th scope="row"><input class="btn btn-danger" type="submit" value="Cập nhật"></th>
					<td></td>
					<td></td>
					<td></td>
					<td scope="row">Tổng cộng:</td>
					<td>{{ number_format($total,0,",",".") }}đ</td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</form><br><br><br>
</div> 
@endif
@endsection