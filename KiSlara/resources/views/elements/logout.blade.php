<li class="nav-item dropdown">
	<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		{{ Session::get('tenUS') }}
	</a>
	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
		<a class="dropdown-item" href="info_user">Thông tin tài khoản</a>
		<a class="dropdown-item text-danger" href="logout_user">Đăng xuất</a>
	</div>
</li>