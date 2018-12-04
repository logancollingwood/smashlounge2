<div class="col-md-12">
	<div class="gfyTainer">
		<div class="row">
			<div class="col-md-8 col-sm-9">
			<div style='position:relative; padding-bottom:70.80%'><iframe src='https://gfycat.com/ifr/{{ $gif->url}}' frameborder='0' scrolling='no' width='100%' height='100%' style='position:absolute;top:0;left:0;' allowfullscreen></iframe></div>

			</div>
			<div class="col-md-4 col-sm-3 voteBlock">
				<div class="gfyDescription"> {{$gif->description or 'No Description available'}}</div>
				<div class="gfySource">
					@if ($gif->source && filter_var($gif->source, FILTER_VALIDATE_URL))
						<a href="{{$gif->source}}">source</a>
					@elseif ($gif->source != "") 
						from {{$gif->source}}
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
