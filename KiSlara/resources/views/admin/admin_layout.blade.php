
<!DOCTYPE html>
<head>
	<title>Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<link rel="stylesheet" href="public/backend/css/ads/bootstrap.min.css" >
	<link href="public/backend/css/ads/style.css" rel='stylesheet' type='text/css' />
	<link href="public/backend/css/ads/style-responsive.css" rel="stylesheet"/>
	<link rel="stylesheet" href="public/backend/css/ads/font.css" type="text/css"/>
	<link href="public/backend/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="public/backend/css/ads/morris.css" type="text/css"/>
	<link rel="stylesheet" href="public/backend/css/ads/monthly.css">
	<script src="public/backend/js/ads/jquery2.0.3.min.js"></script>
	<script src="public/backend/js/ads/raphael-min.js"></script>
	<script src="public/backend/js/ads/morris.js"></script>
	<script src="public/backend/ckeditor/ckeditor.js"></script>
	
</head>
<body>
	<section id="container">
		<header class="header fixed-top clearfix bg-dark">
			<div class="brand bg-danger">
				<a class="logo">
					<img src="public/frontend/image/logo1.png" width="150" height="50">
				</a>
				<div class="sidebar-toggle-box">
					<div class="fa fa-bars"></div>
				</div>
			</div>

			<div class="top-nav clearfix">
				<ul class="nav pull-right top-menu">
					<li class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">
							&nbsp;
							<span class="username">
								<?php
								$name = Session::get('tenAD');
								if($name){
									echo $name;
								}
								?>
							</span>
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu extended logout">
							<li><a href="#"><i class=" fa fa-suitcase"></i>Thông tin cá nhân</a></li>
							<li><a href="#"><i class="fa fa-cog"></i> Thiết lập</a></li>
							<li><a href="logout"><i class="fa fa-key"></i> Đăng xuất </a></li>
						</ul>
					</li>
				</ul>
			</div>
		</header>
		@include('admin.admin_sidebar')
		<section id="main-content">
			@yield('admin_content')	
		</section>
		@include('admin.admin_footer')
	</section>
</section>
<script src="public/backend/js/ads/bootstrap.js"></script>
<script src="public/backend/js/ads/jquery.dcjqaccordion.2.7.js"></script>
<script src="public/backend/js/ads/scripts.js"></script>
<script src="public/backend/js/ads/jquery.slimscroll.js"></script>
<script src="public/backend/js/ads/jquery.nicescroll.js"></script>

</body>
</html>
