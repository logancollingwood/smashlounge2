@extends('application')

@section('content')
<div class="box">
	<header>
	<h1 class="scene_element scene_element--fadeinup scene_element--delayed">Smashlounge</h1>
	<p>Learn something about Super Smash Brothers Melee for the Nintendo Gamecubez <i class="fa fa-trademark"></i></p>
	</header>
	
	<content id="homepage">
		<div class="row no-margin">

			<div class="col-md-8">
				<div class="row">
					@foreach ($techs as $tech)
						
						@include('modules.cards.tech.showtechcard')

					@endforeach
					@foreach ($chars as $char)
						
						@include('modules.cards.char.showcharcard')

					@endforeach
				</div>
				<div class="row">
					streamer
				</div>
			</div>

			<div class="col-md-4">
				<a class="twitter-timeline" href="https://twitter.com/thesmashlounge" data-widget-id="585544387632967681">Tweets by @thesmashlounge</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>

		</div>

	</content>
	
</div>
@endsection
