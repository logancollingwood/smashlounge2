<div class="col-md-12">
	<div class="gfyTainer">
		<div class="row">
			<div class="col-md-2 col-sm-2 voteBlock">
				vote
			</div>
			 <div class="col-md-8 col-sm-9">
				<img class='gfyitem' data-expand=true data-id= {{ $gif->url}} />
				<div class="gfyFooter">
					<div class="gfyDescription">{{ $gif->description or 'No Description'}}</div>
					<div class="gfySource">{{ $gif->source or 'No Source' }}</div>
				</div>
			</div>
			<div class="col-md-2">
				controller
			</div>
		</div>
	</div>
</div>