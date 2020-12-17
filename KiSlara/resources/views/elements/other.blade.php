@if(count($other) > 0)
<link rel="stylesheet" type="text/css" href="public/frontend/css/product.css">
<div class="container">
	<hr class="border-danger">
	<h4 class="text-danger">ỨNG DỤNG TIỆN LỢI</h4><br>
	<div class="row ">
		@foreach($other as $key)
		@include('elements.product')
		@endforeach
	</div>
</div><br>
@endif
