@extends('pages.layout')
@section('content')
@if(Session::get('status'))	
<script language='javascript'>alert('{{Session::get('status')}}');</script>;
@endif
{{ Session::put('cart_detail', true) }}
@include('elements.advertise')
@include('elements.best_sell')
@include('elements.sale_off')
@include('elements.other')
@include('elements.introduce')
@endsection