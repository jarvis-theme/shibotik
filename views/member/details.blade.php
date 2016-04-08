<div class="container" id="history">
	<div id="history-buy">
		<br>
		<h2 class="title"><i class="fa fa-shopping-basket"></i> &nbsp;Order History</h2>
		<hr>
	</div>
</div>

<div class="container">
	<div class="inner-column row">
		<div id="left_sidebar" class="col-md-3">
			<div id="advertising" class="block">
				<div class="title"><h2>My Account</h2></div>
				<ul class="nav">
					<li><a href="{{url('member')}}">Order History</a></li>
					<li><a href="{{url('member/profile/edit')}}">Edit Profile</a></li>
				</ul>
			</div>
		</div>
		<div id="order-history" class="col-md-9">
			@if($pengaturan->checkoutType!=2)
				@if($order->count() > 0)
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th><span>Kode Order</span></th>
								<th><span>Tanggal Order</span></th>
								<th><span>Detail Order</span></th>
								<th><span>Total Order</span></th>
								<th><span>No. Resi</span></th>
								<th><span>Status</span></th>
								<th><span>Konfirmasi</span></th>
							</tr>
						</thead>
						<tbody>
							@foreach (list_order() as $item)
							<tr>
								<td>{{ prefixOrder().$item->kodeOrder }}</td>
								<td>{{ waktu($item->tanggalOrder) }}</td>
								<td class="desc">
									@foreach ($item->detailorder as $detail)
										{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku["opsi1"].($detail->opsisku["opsi2"] != '' ? ' / '.$detail->opsisku["opsi2"]:'').($detail->opsisku["opsi3"] !='' ? ' / '.$detail->opsisku["opsi3"]:'').')':''}} - {{$detail->qty}}
									@endforeach 
								</td>
								<td class="quantity">{{ price($item->total)	}}</td>
								<td class="sub-price">{{ $item->noResi }}</td>
								<td class="total-price">
									@if($item->status==0)
									<span class="label label-warning">Pending</span>
									@elseif($item->status==1)
									<span class="label label-info">Konfirmasi diterima</span>
									@elseif($item->status==2)
									<span class="label label-success">Pembayaran diterima</span>
									@elseif($item->status==3)
									<span class="label label-success">Terkirim</span>
									@elseif($item->status==4)
									<span class="label label-default">Batal</span>
									@endif 
								</td>
								<td class="align-center">
								@if($pengaturan->checkoutType==1) 
									@if($item->status == 0)
									<button onclick="window.open('{{url('konfirmasiorder/'.$item->id)}}','_blank')" class="btn btn-small btn-danger" data-title="Edit" data-placement="top" data-tip="tooltip"><i class="fa fa-check"></i></button>
									@endif
									@if($item->status == 1)
									<button class="btn btn-small btn-danger"><i class="fa fa-file-text"></i></button>
									@endif
									@if($item->status == 2)
									<button class="btn btn-small btn-danger"><i class="fa fa-money"></i></button>
									@endif 
									@if($item->status == 3)
									<button class="btn btn-small btn-danger"><i class="fa fa-gift"></i></button>
									@endif
								@endif
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				{{list_order()->links()}} 
				@else
				<span>Belum ada data order</span>
				@endif
			@else 
				@if($inquiry->count()!=0)
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th><span>Kode Order</span></td></th>
								<th><span>Tanggal Order</span></td></th>
								<th><span>Detail Order</span></td></th>
								<th><span>Status</span></td></th>
							</tr>
						</thead>
						<tbody>
							@foreach ($inquiry as $item)
							<tr>
								<td>{{prefixOrder().$item->kodeInquiry}}</td>
								<td>{{waktu($item->created_at)}}</td>
								<td>
									@foreach ($item->detailInquiry as $detail)
										{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku["opsi1"].($detail->opsisku["opsi2"] != '' ? ' / '.$detail->opsisku["opsi2"]:'').($detail->opsisku["opsi3"] !='' ? ' / '.$detail->opsisku["opsi3"]:'').')':''}} - {{$detail->qty}}
									@endforeach
								</td>
								<td>
									@if($item->status==0)
									<span class="label label-warning">Pending</span>
									@elseif($item->status==1)
									<span class="label label-success">Inquiry diterima</span>
									@elseif($item->status==2)
									<span class="label label-info">Batal</span>
									@endif
								</td>
							</tr>
							@endforeach
						</tbody>
				@else
						<tr><td colspan="2">Inquiry anda masih kosong.</td></tr>
				@endif
					</table>
				</div>
			@endif 
				
			</div>
		</div>
	</div>
</div>