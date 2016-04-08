<div class="container">
	<div class="inner-column row">
		<div id="center_column" class="col-xs-12">
			<div class="contact">
				<h2 class="title">Hubungi Kami</h2>
				<hr>
				<div class="col-lg-6 col-lg-offset-3">
					<div class="contact-desc">
						<p><strong>Alamat :</strong> {{$kontak->alamat}}</p>
						<span><i class="phone"></i> {{$kontak->telepon ? $kontak->telepon : '-'}}</span>
						<span><i class="bbm"></i> {{$kontak->bb ? $kontak->bb : '-'}}</span>
						<span><i class="mail"></i> {{$kontak->email}}</span>
						<div class="clr"></div>
					</div>
					<form class="contact-form" action="{{url('kontak')}}" method="post">
						<p class="form-group">
							<input class="form-control" placeholder="Nama" name="namaKontak" type="text" required>
						</p>
						<p class="form-group">
							<input class="form-control" placeholder="Email" name="emailKontak" type="text" required>
						</p>
						<p class="form-group">
							<textarea class="form-control" placeholder="Pesan" name="messageKontak" required></textarea>
						</p>
						<button class="btn btn-green" type="submit">Kirim</button>
					</form>
				</div>
			</div>
			<div class="clearfix"></div>
			<hr>
			<div class="maps">
				<h2 class="title">Peta Lokasi</h2>
				@if($kontak->lat!='0' || $kontak->lng!='0')
					<iframe class="maplocation" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->lat.','.$kontak->lng }}&amp;aq=&amp;sll={{ $kontak->lat.','.$kontak->lng }}&amp;sspn={{ $kontak->lat.','.$kontak->lng }}&amp;ie=UTF8&amp;t=m&amp;z=14&amp;output=embed"></iframe><br />
				@else
					<iframe class="maplocation" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{str_replace(' ','+',$kontak->alamat)}}&amp;aq=0&amp;oq={{str_replace(' ','+',$kontak->alamat)}}&amp;sspn={{ $kontak->lat.','.$kontak->lng }}&amp;ie=UTF8&amp;hq=&amp;hnear={{str_replace(' ','+',$kontak->alamat)}}&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br />
				@endif
			</div>
		</div>
	</div>
</div>