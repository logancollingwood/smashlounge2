<div class="panel-default randomPanel gifcard scene_element scene_element--fadeinup">
	<div class="panel-heading">

			<a class="name" href="{{ route('techs.show', $tech->tech) }}" class="list">{{ $tech->tech }}</a>

	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-4 description">
				<div class="row no-margin">
					<p> {{ $tech->description }} </p>
				</div>

			</div>
			<div class="col-md-8 cardgif">
				@if(isset($tech->getGifs()[0]))
					<img class='gfyitem' data-perimeter=true data-expand=true data-id= {{ $tech->getGifs()[0]->url }} />
				@endif
			</div>
		</div>

		<p class="technique">  <p>
	</div>					
</div>