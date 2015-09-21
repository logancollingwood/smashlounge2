<div class="panel-default randomPanel gifcard scene_element scene_element--fadeinup">
	<div class="panel-heading">

			<a class="name" href="{{ route('chars.show', $char->name) }}" class="list">{{ $char->name }}</a>

	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-4 description">
				<div class="row no-margin">
					{{ $char->guide }}
				</div>

			</div>
			<div class="col-md-8 cardgif">
				
					<img class='gfyitem' data-perimeter=true data-expand=true data-id= {{ $char->getGifs()[0]->url }} />

			</div>
		</div>

		<p class="technique">  <p>
	</div>					
</div>