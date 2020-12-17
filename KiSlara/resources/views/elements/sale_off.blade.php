@if(count($sale_off) > 0)
<link rel="stylesheet" type="text/css" href="public/frontend/css/product.css">
<div class="container">
	<hr class="border-danger">
	<h4 class="text-danger">ĐANG KHUYẾN MÃI</h4><br>
	<div class="row ">
		@foreach($sale_off as $key)
		@include('elements.product')
		@endforeach
</div>
</div><br>
@endif