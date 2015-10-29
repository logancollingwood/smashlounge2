@extends('application')

@section('content')
<div class="box">
	<header class="texture">
	<h1 class="scene_element scene_element--fadeinup scene_element--delayed">Smashlounge</h1>
	<p> </p>
	</header>
	
	<content id="homepage">
		<div class="row no-margin">

			<div class="col-md-8">
				<div class="row">
					<div class="well message"  role="alert">
						<p class="heading"> 
							MOTD: 
						</p>
						<p> Thanks for checking out the new site! Take a look at the new character frame data by going to chars > character > attacks! 
							We're also recruiting any content/submission moderators who'd like to help us build the best smash database ever.</p>

					</div>
					@include('modules.cards.home.smashgif')

					@foreach ($techs as $tech)
						
						@include('modules.cards.tech.showtechcard')

					@endforeach
					@foreach ($chars as $char)
						
						@include('modules.cards.char.showcharcard')

					@endforeach
				</div>
			</div>

			<div class="col-md-4">
				<a class="twitter-timeline" href="https://twitter.com/thesmashlounge" data-widget-id="585544387632967681">Tweets by @thesmashlounge</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				<div class='panel-default streampanel' style="margin-top:15px">
					<div class='panel-heading'> Live SSB Streams </div>
            		<div class='panel-body streams'>
						@foreach ($streams as $stream)

							@include('modules.streams.streamCard')
						
						@endforeach
					</div>
				</div>
			</div>

		</div>
	</content>
	
</div>
@endsection

@section('includes')
	<script src="{{ asset('/js/page/homepage.js') }}"></script>
@endsection
