<div class="container">
	<form action="{{route('add-user')}}" method="post">
		<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<h2>Thêm Tài Khoản</h2>
				<div class="space20">&nbsp;</div>
				<div class="form-group">
					<label for="name">Tên hiển thị</label>
					<input class="form-control" type="text" id="name" name="name" required>
				</div>
				<div class="form-group">
					<label for="email">Email*</label>
					<input class="form-control" type="email" id="email" name="email" required>
				</div>
				<div class="form-group">
					<label for="username">Tài Khoản*</label>
					<input class="form-control" type="text" id="username" name="username" required>
				</div>
				<div class="form-group">
					<label for="password">Mật khẩu*</label>
					<input class="form-control" type="text" id="password" name="password" required>
				</div>
				<input type="submit" class="btn btn-primary" value="Thêm">
			</div>
			<div class="col-sm-3"></div>
		</div>
	</form>
</div> <!-- .container -->
