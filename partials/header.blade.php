	<header>
		<div class="top-header">
			<div class="container" id="toplink">
				<div class="pull-right">
					@if( !is_login() )
					<span>
						{{HTML::link('member', 'Log in')}} | {{HTML::link('member/create', 'Register')}} | {{HTML::link('konfirmasiorder', 'Confirmation Payment')}} | {{shopping_cart()}}
					</span>
					@else
					<span>
						<a href="{{url('member')}}">Account</a> | {{HTML::link('logout', 'Log out')}} | {{HTML::link('konfirmasiorder', 'Confirmation Payment')}} | {{shopping_cart()}}
					</span>
					@endif
				</div>
			</div>
		</div>
		<div class="top-head">
			<div class="row rows">
				<div class="desktop-only col-sm-8">
					<div id="top_testimonial" class="col-sm-7 col-md-6 pull-left">
						<ul class="nav navbar-nav navbar-right">
						@foreach(category_menu() as $key => $menu)
							@if($key < 2)
								@if($menu->parent == 0)
								<li class="dropdown">
									@if(count($menu->anak) < 1)
									<a href="{{category_url($menu)}}">{{$menu->nama}}</a>
									@else
									<a href="{{category_url($menu)}}" class="dropdown-toggle" data-toggle="dropdown" role="button">{{$menu->nama}} <span class="caret"></span></a>
									<ul class="dropdown-menu">
										@foreach($menu->anak as $key => $submenu)
										<li class="dropdown dropdown-submenu">
											@if($submenu->anak->count() < 1)
											<a href="{{category_url($submenu)}}">{{$submenu->nama}}</a>
											@else
											<a class="dropdown-toggle" data-toggle="dropdown" href="{{category_url($submenu)}}">{{$submenu->nama}}</a>
											<ul class="dropdown-menu">
												@foreach($submenu->anak as $submenu2)
													@if($submenu2->parent == $submenu->id)
													<li class="submenu2">
														<a href="{{category_url($submenu2)}}">{{$submenu2->nama}}</a>
													</li>
													@endif
												@endforeach
											</ul>
											@endif
										</li>
										@endforeach
									</ul>
									@endif
								</li>
								@endif
							@endif
						@endforeach
						</ul>
					</div>
					<div id="logo" class="col-sm-5 col-md-6">
						@if(logo_image_url())
						<a href="{{ url('home') }}">
							{{HTML::image(logo_image_url(), 'Logo', array('class'=>'desktop-logo'))}}
						</a>
						@else
						<h3 id="text-logo">
							<strong>
								<a href="{{url('home')}}" class="url-textlogo">{{ short_description(Theme::place('title'),16) }}</a>
							</strong>
						</h3>
						@endif
					</div>
				</div>
				<div class="row mobile-only logo-mobile">
					<div id="logo" class="col-xs-12">
						@if(logo_image_url())
						<a href="{{url('home')}}">
							{{HTML::image(logo_image_url(), 'Logo '.Theme::place('title'), array('class'=>'desktop-logo'))}}
						</a>
						@else
						<a class="nodecoration" href="{{url('home')}}">
							<h1 class="url-textlogo">{{ short_description(Theme::place('title'),30) }}</h1>
						</a>
						@endif
					</div>
				</div>
				<div id="top_testimonial" class="row desktop-only col-sm-4">
					<ul class="nav navbar-nav navbar-right nav2">
					@foreach(category_menu() as $key => $menu)
						@if($key < 2)
							@if($menu->parent == 0)
							<li class="dropdown">
								@if(count($menu->anak) < 1)
								<a href="{{category_url($menu)}}">{{$menu->nama}}</a>
								@else
								<a href="{{category_url($menu)}}" class="dropdown-toggle" data-toggle="dropdown" role="button">{{$menu->nama}} <span class="caret"></span></a>
								<ul class="dropdown-menu">
									@foreach($menu->anak as $key => $submenu)
									<li class="dropdown dropdown-submenu2">
										@if($submenu->anak->count() < 1)
										<a href="{{category_url($submenu)}}">{{$submenu->nama}}</a>
										@else
										<a class="dropdown-toggle" data-toggle="dropdown" href="{{category_url($submenu)}}">{{$submenu->nama}}</a>
										<ul class="dropdown-menu">
											@foreach($submenu->anak as $submenu2)
												@if($submenu2->parent == $submenu->id)
												<li class="submenu2">
													<a href="{{category_url($submenu2)}}">{{$submenu2->nama}}</a>
												</li>
												@endif
											@endforeach
										</ul>
										@endif
									</li>
									@endforeach
								</ul>
								@endif
							</li>
							@endif
						@endif
					@endforeach 
					</ul>
				</div>
			</div>
		</div>
		<nav id="menu" class="navbar navbar-default visible-xs visible-sm" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand mobile-only hidden-sm" href="#">MENU</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					@foreach(category_menu() as $link)
						@if($link->parent == 0)
						<li class="dropdown">
							@if(count($link->anak) < 1)
							<a href="{{category_url($link)}}">{{$link->nama}}</a>
							@else
							<a href="{{category_url($link)}}" class="dropdown-toggle" data-toggle="dropdown" role="button">{{$link->nama}} <span class="caret"></span></a>
							<ul class="dropdown-menu">
								@foreach($link->anak as $key => $submenu)
								<li class="dropdown dropdown-submenu">
									@if($submenu->anak->count() < 1)
									<a href="{{category_url($submenu)}}">{{$submenu->nama}}</a>
									@else
									<a class="dropdown-toggle" data-toggle="dropdown" href="{{category_url($submenu)}}">{{$submenu->nama}}</a>
									<ul class="dropdown-menu">
										@foreach($submenu->anak as $submenu2)
											@if($submenu2->parent == $submenu->id)
											<li class="submenu">
												<a href="{{category_url($submenu2)}}">{{$submenu2->nama}}</a>
											</li>
											@endif
										@endforeach
									</ul>
									@endif
								</li>
								@endforeach
							</ul>
							@endif
						</li>
						@endif
					@endforeach
				</ul>
			</div>
		</nav>
	</header>