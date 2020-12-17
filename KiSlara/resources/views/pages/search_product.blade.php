@extends('pages.layout')
@section('content')
<link rel="stylesheet" type="text/css" href="public/frontend/css/product.css">
<div class="container">
	<hr class="border-danger">
	<h4 class="text-danger">{{ $label }}</h4><br>
	<div class="row ">
			@foreach($product as $key)
			@include('elements.product')
			@endforeach
	</div>
</div>
@include('elements.introduce')
@endsection