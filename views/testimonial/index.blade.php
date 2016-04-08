	<div class="container">
		<div class="inner-column row">
			<div id="center_column" class="col-xs-12">
				<h2 class="title">Testimonial</h2>
				<hr>
				<div class="contact-desc">
					@foreach(list_testimonial() as $key=>$value)
					<article class="col-lg-12 bloglist articles">
						<h1><strong>{{$value->nama}}</strong></h1>
						<p>
							<small><i class="fa fa-calendar"></i> {{date("d M Y", strtotime($value->created_at))}}</small>
						</p>
						{{short_description($value->isi,400)}}
						<br><hr>
					</article>
					@endforeach
				</div>
				<div class="col-xs-12">
					{{list_testimonial()->links()}}
				</div>
			</div>
			<div class="col-xs-12" id="testimo">
				<form class="col-lg-6 col-lg-offset-3" id="testimonial" action="{{url('testimoni')}}" method="post">
					<h1>Kirim Testimonial</h1>
					<hr>
					<p class="form-group">
						<input class="form-control" placeholder="Nama" type="text" name="nama" required>
					</p>
					<p class="form-group">
						<textarea class="form-control" placeholder="Pesan" name="testimonial" required></textarea>
					</p>
					<button class="btn btn-testi" type="submit">Kirim</button>
				</form>
			</div>
		</div>
	</div>