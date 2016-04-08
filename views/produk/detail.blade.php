	<div class="container">
		<div class="inner-column row">
			<div id="left_sidebar" class="col-lg-3 col-xs-12 col-sm-4">
				@if(list_category()->count() > 0)
				<div id="categories" class="block sidey">
					<ul class="block-content nav">
					@foreach(list_category() as $side_menu)
						@if($side_menu->parent == '0')
						<li>
							<a href="{{category_url($side_menu)}}">{{$side_menu->nama}}</a>
							@if($side_menu->anak->count() != 0)
							<ul class="sidebars">
								@foreach($side_menu->anak as $submenu)
								@if($submenu->parent == $side_menu->id)
								<li>
									<a href="{{category_url($submenu)}}" class="submenus">{{$submenu->nama}}</a>
									@if($submenu->anak->count() != 0)
									<ul class="sidebars">
										@foreach($submenu->anak as $submenu2)
										@if($submenu2->parent == $submenu->id)
										<li>
											<a href="{{category_url($submenu2)}}">{{$submenu2->nama}}</a>
										</li>
										@endif
										@endforeach
									</ul>
									@endif
								</li>
								@endif
								@endforeach
							</ul>
							@endif
						</li>
						@endif
					@endforeach
					</ul>
				</div>
				@endif
			</div>
			<div id="center_column" class="col-lg-9 col-xs-12 col-sm-8">
				<form action="#" id="addorder">
					<div class="product-details">
						<div class="row">
							<div id="prod-left" class="col-lg-6 col-xs-12 col-sm-6">
								<div class="big-image">
									{{HTML::image(product_image_url($produk->gambar1,'large'), $produk->nama,array('width'=>'419','height'=>'auto'))}}
									<a class="zoom fancybox" href="{{url(product_image_url($produk->gambar1,'large'))}}" title="{{$produk->nama}}">&nbsp;</a>
								</div>
								<div id="thumb-view">
									<ul id="thumb-list" class="owl-carousel owl-theme">
										@if($produk->gambar1 != '')
										<li class="item">
											<a class="zoom fancybox" href="{{product_image_url($produk->gambar1, 'large')}}" title="{{$produk->nama}}">
											{{HTML::image(product_image_url($produk->gambar1,'thumb'),'thumbnail 1',array("height"=>"100"))}}
											</a>
										</li>
										@endif
										@if($produk->gambar2 != '')
										<li class="item">
											<a class="zoom fancybox" href="{{product_image_url($produk->gambar2, 'large')}}" title="{{$produk->nama}}">
											{{HTML::image(product_image_url($produk->gambar2,'thumb'),'thumbnail 2',array("height"=>"100"))}}
											</a>
										</li>
										@endif
										@if($produk->gambar3 != '')
										<li class="item">
											<a class="zoom fancybox" href="{{product_image_url($produk->gambar3, 'large')}}" title="{{$produk->nama}}">
											{{HTML::image(product_image_url($produk->gambar3,'thumb'),'thumbnail 3',array('height'=>'100'))}}
											</a>
										</li>
										@endif
										@if($produk->gambar4 != '')
										<li class="item">
											<a class="zoom fancybox" href="{{product_image_url($produk->gambar4, 'large')}}" title="{{$produk->nama}}">
											{{HTML::image(product_image_url($produk->gambar4,'thumb'),'thumbnail 4',array('height'=>'100'))}}
											</a>
										</li>
										@endif
									</ul>
								</div>
							</div>
							<div id="prod-right" class="col-lg-6 col-xs-12 col-sm-6">
								<h2 class="name-title">{{$produk->nama}}</h2>
								<span class="price">
									@if($produk->hargaCoret != 0)
									<s>{{price($produk->hargaCoret)}}</s>&nbsp;&nbsp;
									@endif
									{{price($produk->hargaJual)}}
								</span>
								<div class="img-rating">
									{{sosialShare(url(product_url($produk)))}}
								</div>
								<div class="desc-prod">
									<p class="title">Deskripsi Produk</p>
									<p>{{$produk->deskripsi}}</p>
									<div class="clr"></div>
								</div>
								<div class="avail-info">
									@if($produk->stok > 0)
									<i class="fa fa-check" id="readystock"></i><span>Tersedia, Stok {{$produk->stok}} item</span>
									@else
									<i class="fa fa-times" id="emptystock"></i><span>Habis</span>
									@endif
								</div>
								<div class="attribute">
									<fieldset class="attribute_fieldset">
										<div class="attribute_list">
											@if($opsiproduk->count() > 0)
											<div class="size-list">
												<div class="form-group">
													<label class="col-sm-4 control-label">Opsi :</label>
													<div class="col-sm-5">
														<select class="form-control attribute_select" name="opsiproduk">
															<option value="">-- Pilih Opsi --</option>
															@foreach ($opsiproduk as $key => $opsi)
															<option value="{{$opsi->id}}" {{ $opsi->stok==0 ? 'disabled':''}} >
																{{$opsi->opsi1.($opsi->opsi2=='' ? '':' / '.$opsi->opsi2).($opsi->opsi3=='' ? '':' / '.$opsi->opsi3)}} {{jadiRupiah($opsi->harga)}}
															</option>
															@endforeach
														</select>
													</div>
												</div>
											</div>
											@endif
											<div class="quantity">
												<div class="form-group">
													<label class="col-sm-4 control-label">Quantity :</label>
													<div class="col-sm-5">
														<input type="text" class="form-control" name="qty" value="1">
													</div>
												</div>
											</div>
											<div class="btm-details">
												<div class="col-lg-12 col-md-12">
													<button class="btn addtocart" type="submit"><i class="cart"></i>Beli</button>
												</div>
												<div class="clr"></div>
											</div>
										</div>
									</fieldset>
								</div>
							</div>
							<div class="clr"></div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>