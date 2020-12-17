@extends('pages.layout')
@section('content')
<link rel="stylesheet" type="text/css" href="public/frontend/css/view_product.css">
<div class="container">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb" style="background: none">
			<li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
			<li class="breadcrumb-item active" aria-current="page"><font color="firebrick"></font></li>
		</ol>
	</nav>
</div>
<div class="container">
	<h1 ><font color="firebrick" class="gamename">{{ $product->tenSP }}</font></h1>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-6 col-12">
			<img width="100%" src="public/frontend/image/{{ $product->anhSP }}">
		</div> 
		<div class="col-md-6 col-12">
			<div class="card shadow">
				<div class="card-body">
					<h6>NGÀY PHÁT HÀNH: {{ $product->ngayphathanh }}<br>NHÀ PHÁT TRIỂN: {{ $product->npt }}<br>NHÀ PHÁT HÀNH: {{ $product->nph }}</h6>
					<div class="text-bottom"><i class="fa fa-tags" aria-hidden="true"></i>Tag:
						@foreach($tag as $tag) 
						<a href="view_genre_{{ $tag->idTL }}">
							{{ $tag->tenTL }}
						</a>,
						@endforeach
					</div>
				</div>
			</div><br>

			<div class="text-left">
				<h5>GIÁ SẢN PHẨM</h5>
				@if($product->giamSP!=0)
				<h6>
					<s>{{number_format($product->giaSP,0,",",".")}}đ</s>
					<span class='badge badge-danger' id='saleoff'>{{ $product->giamSP}} %</span>
				</h6>
				@endif

				<h6><br></h6>
				<h3 class="money">{{ number_format($product->giaSP-$product->giaSP/100*$product->giamSP,0,",",".") }}đ</h3>
			</div>
			<hr>
			<div class="d-flex justify-content-center">
				<form action="add_cart">
					{{ csrf_field() }}
					<input type="hidden" name="idSP" value="{{ $product->idSP }}">
					<input type='number' name='soluongmua' value="1" max="5" min="1">
					<button type="submit" class="btn btn-warning btncart">Thêm vào giỏ</button>
				</form>
			</div>
			<hr>
		</div>
	</div>
</div>

<div class="container">
	<hr>
	<h2>Giới thiệu sản phẩm</h2>
		<?php echo $product['ndSP']; ?>
</div>
@endsection