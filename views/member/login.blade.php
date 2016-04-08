<div class="container">
	<div class="inner-column row">
		<div id="center_column" class="col-xs-12">
			<h2 class="title">Log in</h2>
			<hr>
			<form class="form-horizontal col-lg-6 col-lg-offset-3" action="{{url('member/login')}}" method="post">
				<div class="form-group">
					<label class="col-sm-2">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" name="email" value="{{Input::old('email')}}" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2">Password</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" name="password" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<small>
							<a href="{{url('member/forget-password')}}">Lupa Password?</a>
						</small>
					</div>
				</div>
				<div class="form-group">
					<div class="pull-left col-xs-12 col-sm-2">
						<button type="submit" class="btn btn-green">Log in</button>
					</div>
					<div class="pull-right col-xs-12 col-sm-3 newmember">
						<a href="{{url('member/create')}}" class="btn btn-red">Daftar Baru</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>