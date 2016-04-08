			<footer>
				<div class="top-footer">
					<div class="container">
						<div class="row">
							<div id="about-foot" class="col-xs-12 col-sm-4 col-md-4">
								<div class="row">
									<div class="col-xs-12">
										<h1><a href="#">Pre Order</a></h1>
									</div>
									<div class="col-xs-12">
										<h1><a href="{{url('kontak')}}">Contact Us</a></h1>
									</div>
								</div>
							</div>
							@foreach(other_menu() as $key=>$menu)
								@if($key == '0')
								<div id="links-foot" class="col-xs-12 col-sm-4 col-md-4">
									<h1 class="title">{{$menu->nama}}</h4>
									<div class="block-contents">
										<ul>
										@foreach($menu->link as $link_menu)
											@if($menu->id == $link_menu->tautanId)
											<li>
												<a href="{{menu_url($link_menu)}}">{{$link_menu->nama}}</a>
											</li>
											@endif
										@endforeach
										</ul>
									</div>
								</div>
								@endif
							@endforeach 

							<div id="contact-foot" class="col-xs-12 col-sm-4 col-md-4">
								<div class="row">
									<div class="col-xs-12">
										<h1 class="title">Payment</h1>
										<div class="block-content">
											<ul>
												@foreach(list_banks() as $payment)
												<li class="img-footer"><img src="{{bank_logo($payment)}}" alt="{{$payment->bankdefault->nama}}"></li>
												@endforeach
												@foreach(list_payments() as $pay)
													@if($pay->nama == 'paypal' && $pay->aktif == 1)
													<li class="img-footer"><img src="{{url('img/bank/paypal.png')}}" alt="Paypal" title="Paypal" /></li>
													@endif
													@if($pay->nama == 'ipaymu' && $pay->aktif == 1)
													<li class="img-footer"><img src="{{url('img/bank/ipaymu.jpg')}}" alt="Ipaymu" title="Ipaymu" /></li>
													@endif
													@if($pay->nama == 'bitcoin' && $pay->aktif == 1)
													<li class="img-footer"><img src="{{url('img/bitcoin.png')}}" alt="Bitcoin" title="Bitcoin" /></li>
													@endif
												@endforeach
												@if(count(list_dokus()) > 0 && list_dokus()->status == 1)
												<li class="img-footer"><img src="{{url('img/bank/doku.jpg')}}" alt="doku myshortcart" title="Doku" /></li>
												@endif
											</ul>
										</div>
									</div>
									<div class="col-xs-12">
										<h1 class="title">Shipping</h1>
										<div class="block-content">
											<ul>
												<li class="img-footer">
													<img src="{{url(dirTemaToko().'shibotik/assets/images/jne.png')}}" alt="jne" title="JNE">
												</li>
												<li class="img-footer">
													<img src="{{url(dirTemaToko().'shibotik/assets/images/pos.png')}}" alt="jne" title="JNE">
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			{{pluginPowerup()}} 