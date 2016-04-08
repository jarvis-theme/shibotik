	<div class="row rows">
		{{-- */ $i = 1 /* --}}
		@foreach(horizontal_banner() as $banner)
		@if($i % 3 == 0 && $i > 2)
		<div class="col-xs-12" id="banners1">
		@elseif(count(horizontal_banner()) > 1)
		<div class="col-xs-12 col-sm-6 {{$i % 2 == 0 ? 'pull-right' : ''}}" id="banners2">
		@else
		<div class="col-xs-12" id="banners1">
		@endif
			<a href="{{$banner->url}}">
				<img class="img-responsive img-banners" src="{{banner_image_url($banner->gambar)}}" alt="Info Promo">
			</a>
		</div>
			@if($i % 2 == 0)
			<div class="clearfix"></div>
			@endif
		{{-- */ $i++ /* --}}
		@endforeach
	</div>

	{{ Theme::partial('subscribe') }} 