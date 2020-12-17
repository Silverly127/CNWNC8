<link rel="stylesheet" type="text/css" href="public/frontend/css/header.css">
<nav class="navbar navbar-expand-lg navbar-dark bg-danger sticky-top">
	<div class="container">
		<a class="navbar-brand" href="home"><img src="public/frontend/image/logo1.png" width="100" height="30"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Danh mục
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						@foreach($danhmuc as $key)
						<a class="dropdown-item" href="view_category_{{$key->idDM}}">{{$key->tenDM}}</a>
						@endforeach
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Thể loại
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						@foreach($theloai as $key)
						<a class="dropdown-item" href="view_genre_{{$key->idTL}}">{{$key->tenTL}}</a>
						@endforeach
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Hướng dẫn
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="about-user">Về tài khoản</a>
						<a class="dropdown-item" href="about-website">Về website</a>
					</div>
				</li>
				@if(Session::get('idUS'))
				@include('elements.logout')
				@else
				@include('elements.login')
				@endif
				<li class="nav-item">
					<a class="nav-link" href="view_cart" ><i class="fa fa-shopping-cart" aria-hidden="true"></i> Giỏ hàng</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0" action="view_search">
				{{ csrf_field() }}
				<input class="form-control mr-sm-2" type="search" aria-label="Search" name="vls" autofocus="on">
				<button class="btn btn-outline-light my-2 my-sm-0" type="submit">Tìm kiếm</button>
			</form>  
		</div>
	</div>
</nav>
