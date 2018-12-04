<div class="panel-default randomPanel gifcard scene_element scene_element--fadeinup">
	<div class="panel-heading">
			<p class="cardlabel">tech</p>
			<a class="name" href="{{ route('techs.show', $tech->tech) }}" class="list">{{ $tech->tech }}</a>

	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-4 description">
				<div class="row no-margin">
					{{ $tech->description }} 
				</div>

			</div>
			<div class="col-md-8 cardgif">
				@if(isset($tech->getGifs()[0]))
<div style='position:relative; padding-bottom:70.80%'><iframe src='https://gfycat.com/ifr/{{ $tech->getGifs()[0]->url}}' frameborder='0' scrolling='no' width='100%' height='100%' style='position:absolute;top:0;left:0;' allowfullscreen></iframe></div>					
				@endif
			</div>
		</div>

		<p class="technique">  <p>
	</div>					
</div>
