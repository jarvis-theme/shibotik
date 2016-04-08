<div class="subscribe">
	<div class="row block-milist">
		<div class="col-xs-12 col-sm-7">
			<h1>Join Mailing List And Enjoy Free Voucher IDR 50.000!</h1>
		</div>
		<div class="col-xs-12 col-sm-5">
			<form action="{{@$mailing->action}}" method="post" name="newsletter" class="form-inline" target="_blank" novalidate>
				<div class="form-group col-xs-9 col-sm-5">
					<input class="form-control" type="text" placeholder="Type Your Email" id="newsletter" name="email" required {{ @$mailing->action=='' ? 'disabled="disabled" class="disabled-milist"' : '' }}>
				</div>
				<button class="submit {{ @$mailing->action=='' ? 'disabled-milist' : '' }}" type="submit" {{ @$mailing->action=='' ? 'disabled="disabled"' : '' }}><h2>Join</h2></button>
			</form>
		</div>
	</div>
</div>