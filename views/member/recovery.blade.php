<div class="container">
	<div id="center_column" class="inner-column row">
		<div class="col-xs-12">
			<h2 class="title">Update Password</h2>
			<hr>
			{{Form::open(array('url' => 'member/recovery/'.$id.'/'.$code, 'class' => 'form-horizontal'))}}
				<div class="form-group">
					<label class="col-lg-3 control-label">Password Baru</label>
					<div class="col-lg-8">
						<input class="form-control" type="password" name="password" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">Ulang Password Baru</label>
					<div class="col-lg-8">
						<input class="form-control" type="password" name="password_confirmation" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-offset-3 col-lg-8">
						<button type="submit" class="btn btn-info">Update Password</button>
					</div>
				</div>
			{{Form::close()}}
		</div>
	</div>
	<div class="sep-bor"></div>
</div>