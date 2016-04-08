	<section id="p-slide">
		<div id="da-slider" class="da-slider slideshow">
			@foreach (slideshow() as $val) 
			<div class="da-slide">
				@if(!empty($val->url))
				<a href="{{filter_link_url($val->url)}}" class="da-link" target="_blank">
				@else
				<a href="#" class="da-link">
				@endif
					<div class="da-img" id="slide-img">
						{{HTML::image(slide_image_url($val->gambar), $val->title, array('class'=>'img-responsive'))}}
					</div>
				</a>
			</div>
			@endforeach 
		</div>
		<nav class="da-arrows">
			<span class="da-arrows-prev"></span>
			<span class="da-arrows-next"></span>
		</nav>
	</section>