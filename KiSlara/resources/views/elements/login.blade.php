<li class="nav-item">
	<a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">Đăng nhập</a>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Đăng nhập</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="login_xl" method="post">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="user">Tài khoản:</label>
							<input type="text" class="form-control" id="user" name="tkUS" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="pwd">Mật khẩu:</label>
							<input type="password" class="form-control" id="pwd" name="mkUS" autosave="off">
						</div>
						<div class="checkbox">
							<label><input type="checkbox"> Ghi nhớ tài khoản</label><br><br>
							<p style="text-decoration: none;">Bạn chưa có tài khoản?|<a href="register" style="text-decoration: none;">Đăng ký</a></p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
							<button type="submit" class="btn btn-primary">Đăng nhập</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</li>