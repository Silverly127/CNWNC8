@extends('admin.admin_layout')
@section('admin_content')
<link rel="stylesheet" type="text/css" href="public/frontend/css/view_product.css">
<br><br><br><br>
<form action="admin_set_product_xl" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
	<div class="container">
		<hr>
		<h2>Sửa tên sản phẩm</h2>
		<h1 ><font color="firebrick" class="gamename"><input type="text" name="tenSP" value="{{ $product->tenSP }}"></font></h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-12">
				<input type="hidden" name="anhcu" value="{{ $product->anhSP }}">
				<img width="100%" src="public/frontend/image/{{ $product->anhSP }}">
				<hr>
				<h3>Sửa ảnh sản phẩm</h3>
				<input type="file" name="anhSP"><hr>
				<input type='text' name='videoSP' value="{{ $product->videoSP }}">
				&nbsp;Chuỗi ảnh thêm sản phẩm (ngăn cách bởi '|')
			</div> 
			<div class="col-md-6 col-12">
				<div class="card shadow">
					<div class="card-body">
						<h6>NGÀY PHÁT HÀNH: <input type="text" name="ngayphathanh" value="{{ $product->ngayphathanh }}"><br><br>
							NHÀ PHÁT TRIỂN: <input type="text" name="npt" value="{{ $product->npt }}"><br><br>
							NHÀ PHÁT HÀNH: <input type="text" name="nph" value="{{ $product->nph }}">
						</h6>
						<div class="text-bottom"><i class="fa fa-tags" aria-hidden="true"></i>Tag hiện có:
							@foreach($tag as $tag) 
							{{ $tag->tenTL }},
							@endforeach
						</div>
					</div>
				</div><br>

				<div class="text-left">
					<h5>Sửa giá sản phẩm</h5>
					<input type="text" name="giamSP" value="{{ $product->giamSP }}"> % Giảm giá
					<br><br>
					<h3 class="money"><input type="text" name="giaSP" value="{{ $product->giaSP }}"> Giá sản phẩm</h3>

				</div>
				<hr>
				<div class="d-flex justify-content-center">
					<input type='text' name='videoSP' value="{{ $product->videoSP }}">
					&nbsp;Link video sản phẩm
				</div>
				<hr>
				Trạng thái sản phẩm:
				<input type="radio" name="statusSP" value="0" @if($product->statusSP==0) checked="on" @endif> Ẩn
				<input type="radio" name="statusSP" value="1" @if($product->statusSP!=0) checked="on" @endif> Hiện
			</div>
		</div>
	</div>

	<div class="container">
		<hr>
		<h2>Sửa danh mục và thể loại</h2>
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<h4>Chọn danh mục</h4>
				@foreach($categories as $key)
				<input type="radio" name="idDM" value="{{ $key->idDM }}" @if($product->idDM==$key->idDM) checked="on" @endif >
				{{ $key->tenDM }}<br><br>
				@endforeach
			</div>
			<div class="col-md-6 col-sm-12">
				<h4>Chọn thể loại</h4>
				@foreach($genres as $key)
				<input type="checkbox" name="idTL[]" value="{{ $key->idTL }}"> {{ $key->tenTL }}<br>
				@endforeach
			</div>
		</div>
	</div>

	<div class="container">
		<hr>
		<h2>Sửa mã giới thiệu sản phẩm</h2>
		<textarea style="resize: none;" rows="8" name="ndSP" id="ckeditor">{{ $product->ndSP }}
		</textarea>
	</div>
	<br>
	<div class="container">
		<hr>
		<h2>Sửa cấu hình yêu cầu cho windows</h2>
		<textarea style="resize: none;" rows="8" name="windows" id="ckeditor1">{{ $product->windows }}
		</textarea>
	</div>
	<br>
	<div class="container">
		<hr>
		<h2>Sửa cấu hình yêu cầu cho macos</h2>
		<textarea style="resize: none;" rows="8" name="macos" id="ckeditor2">{{ $product->macos }}
		</textarea>
	</div>
	<br>
	<div class="container d-flex justify-content-center">
		<input type="hidden" name="idSP" value="{{ $product->idSP }}">
		<button type="submit" class="btn btn-danger">Sửa</button>

	</div>
	<br><br>
</form>
<script>
	CKEDITOR.replace('ckeditor');
	CKEDITOR.replace('ckeditor1');
	CKEDITOR.replace('ckeditor2');
	CKEDITOR.replace('ckeditor3');
	CKEDITOR.replace('id4');
</script>
@endsection
