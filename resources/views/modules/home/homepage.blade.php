@extends('application')

@section('content')
<div class="box">
	<header>
	<h1 class="scene_element scene_element--fadeinup scene_element--delayed">Smashlounge</h1>
	<p>Learn something about Super Smash Brothers Melee for the Nintendo Gamecube <i class="fa fa-trademark"></i></p>
	</header>
	
	<content id="homepage">
		<div class="row">

			<div class="col-md-4">
				<a class="twitter-timeline" href="https://twitter.com/thesmashlounge" data-widget-id="585544387632967681">Tweets by @thesmashlounge</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>

			<div class="col-md-8">
				<div class="row">
					@for ($i = 0; $i < $randCount; $i++)
						<div class="panel-default randomPanel gifcard scene_element scene_element--fadeinup">
							<div class="panel-heading">

									<span class="badge counter">{{ $i + 1 }} </span>
									<a href="{{ route('techs.show', $techs[$i]->tech) }}" class="list">{{ $techs[$i]->tech }}</a>
				
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-4 carddescription">
										{{ $techs[$i]->description }}
									</div>
									<div class="col-md-8 cardgif">
										@for ($j = 0; $j < 1; $j++)
											<img class='gfyitem' data-expand=true data-id= {{ $gif->url}} />
										@endfor
									</div>
								</div>

								<p class="technique">  <p>
							</div>					
						</div>
					@endfor
				</div>
				<div class="row">
					streamer
				</div>
			</div>


		</div>
		<!-- 
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				
				<div id='randomSlot' class='panel gifTainer theaterGif'>
				</div>
			</div>
		</div>
		-->
	</content>
	
</div>
@endsection
