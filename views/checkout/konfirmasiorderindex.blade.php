<div class="container">
	<div class="inner-column row">
		<div id="center_column" class="col-xs-12">
			<h2 class="title">Konfirmasi Order</h2>
			<hr>
			<div class="col-md-6 col-md-offset-3">
				{{Form::open(array('url'=>'konfirmasiorder','method'=>'post','class'=>'form-inline confirm-pay'))}}
					<div class="form-group col-xs-12 col-sm-7 col-md-8">
						<input class="col-xs-12 col-lg-12" placeholder="Kode Order" type="text" name="kodeorder" required>
					</div>
					<button type="submit" class="btn btn-green">Cari Kode</button>
				{{Form::close()}}
			</div>
		</div>
	</div>
</div>