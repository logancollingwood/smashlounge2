<div class="col-md-12">
	<div class="gfyTainer">
		<div class="row">
			<div class="col-md-4 col-sm-3 voteBlock">
				<div class="gfyDescription">{{ $gif->description or 'No Description'}}</div>
					
					<div class="gfySource">

						@if ($gif->source && filter_var($gif->source, FILTER_VALIDATE_URL))
							<a href="{{ $gif->source }}">source</a>
						@elseif ($gif->source != "")
							courtesy of {{ $gif->source }}
						@endif

					</div>
			</div>
			 <div class="col-md-8 col-sm-9">
				<img class='gfyitem' data-autoplay=false data-expand=true data-id= {{ $gif->url}} />
			</div>
		</div>
	</div>
</div>