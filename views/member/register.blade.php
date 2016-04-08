<div class="container">
	<div class="inner-column row">
		<div id="center_column" class="col-xs-12">
			<br>
			<h2 class="title">Register</h2>
			<hr><br>
			<div class="col-lg-6 col-lg-offset-3">
				{{Form::open(array('url'=>'member','method'=>'post','class'=>'form-horizontal register'))}}
					<div class="form-group">
						<label class="col-lg-3">Nama</label>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="nama" value="{{Input::old('nama')}}" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3">Email</label>
						<div class="col-lg-9">
							<input type="email" class="form-control" name="email" value="{{Input::old('email')}}" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3">Password</label>
						<div class="col-lg-9">
							<input type="password" class="form-control" name="password" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3">Konfirmasi Password</label>
						<div class="col-lg-9">
							<input type="password" class="form-control" name="password_confirmation" required>
						</div>
					</div>
					<div class="form-group">
						<label for="dropdown" class="col-lg-3">Negara</label>
						<div class="col-lg-9">
							{{Form::select('negara',array('' => '-- Pilih Negara --') + $negara, Input::old('negara'),array('required', 'id'=>"negara","data-rel"=>"chosen","class"=>"form-control"))}}
						</div>
					</div>
					<div class="form-group">
						<label for="dropdown" class="col-lg-3">Provinsi</label>
						<div class="col-lg-9">
							{{Form::select('provinsi',array('' => '-- Pilih Provinsi --') + $provinsi, Input::old("provinsi"),array('required', 'id'=>"provinsi","data-rel"=>"chosen","class"=>"form-control"))}}
						</div>
					</div>
					<div class="form-group">
						<label for="dropdown" class="col-lg-3">Kota</label>
						<div class="col-lg-9">
							{{Form::select('kota',array('' => '-- Pilih Kota --') + $kota, Input::old("kota"),array('required', 'id'=>"kota","data-rel"=>"chosen","class"=>"form-control"))}}
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3">Alamat</label>
						<div class="col-lg-9">
							<textarea class="form-control" rows="3" name="alamat" required>{{Input::old("alamat")}}</textarea>
						</div>
					</div> 
					<div class="form-group">
						<label class="col-lg-3">Kode Pos</label>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="kodepos" value="{{Input::old('kodepos')}}" >
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3">Telepon</label>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="telp" value="{{Input::old('telp')}}" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3">Kode Keamanan</label>
						<div class="col-lg-9">
							<div class="row">
								<div class="col-lg-4">
									{{ HTML::image(Captcha::img(), 'Captcha image') }}
								</div>
								<div class="col-lg-8" >
									{{Form::text('captcha','',array('class'=>'form-control'))}}
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-offset-3 col-lg-9">
							<div class="checkbox">
								<input name="readme" value="1" type="checkbox"> Saya telah membaca dan menyetujui <a href="{{url('service')}}" target="_blank">Syarat & Ketentuan</a> yang ada di {{ Theme::place('title')}}.
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-offset-3 col-lg-9">
							<button type="submit" class="btn btn-green">Register</button>
							<button type="reset" class="btn btn-default">Reset</button>
						</div>
					</div>
				{{Form::close()}}
			</div>
		</div>
	</div>
</div>