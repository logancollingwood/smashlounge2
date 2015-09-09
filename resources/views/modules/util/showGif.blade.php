@section('showGif')

	<div class="gfyTainer">'
		<div class="row">
			<img class='gfyitem' data-expand=true data-id= {{ $gif->url}} />
		</div>
	</div>

@endsection