<div class="container">
	<div class="inner-column row">
		<div id="center_column" class="col-xs-12">
			<h2 class="title">Lupa Password</h2>
			<hr>
			<div class="col-lg-6 col-lg-offset-3">
				<h2>Silahkan masukkan email anda untuk mengganti password</h2>
				<form id="reset" action="{{url('member/forgetpassword')}}" method="post">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Email anda" name="recoveryEmail" required>
						<span class="input-group-btn">
							<button class="btn btn-green" type="submit">Reset Password</button>
						</span>
					</div>
				</form>
				<br>
			</div>
		</div>
	</div>
</div>