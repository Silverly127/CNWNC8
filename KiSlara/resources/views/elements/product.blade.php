<div class="col-md-3 col-6">
	<a href="view_product_{{ $key->idSP }}">
		<div class="card shadow">
			<div class="inner">
				<img class="card-img-top" src="public/frontend/image/{{ $key->anhSP }}" width="100%" height=150px>
			</div>
			<div class="card-body text-center">
				<h6 class="card-title">{{ $key->tenSP }}</h6>
				<p class="card-text">{{number_format($key->giaSP-$key->giaSP/100*$key->giamSP,0,",",".")}}đ
					@if($key->giamSP!=0)
					<i class="fa fa-shopping-cart" aria-hidden="true"></i><s>{{ number_format($key->giaSP,0,",",".") }}đ</s>
					<span class="badge badge-danger" id="saleoff">{{ $key->giamSP }}%</span>
					@endif
				</p>
			</a>
			<form action="add_cart">
				{{ csrf_field() }}
				<input type="hidden" name="idSP" value="{{ $key->idSP }}">
				<input type='hidden' name='soluongmua' value="1">
				<button class="btn btn-sm btn-outline-danger btncart" type="submit">Thêm vào giỏ</button>
			</form>
		</div>
	</div>  
</div>