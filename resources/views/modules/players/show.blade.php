@extends('application')

@section('content')
<div class="box">
	<header>
	<h1 class="scene_element scene_element--fadeinup scene_element--delayed"> 
		@if ($player->sponsor) 
			{{ $player->sponsor }} | 
		@endif
		{{ $player->name }}
	</h1>
	<p> {{ $player->desc }} </p>
	<div class="chardetail  scene_element scene_element--fadeinup">
			<p class="rank">  
				<label> miom </label> 
				{{ $player->rank }} 
			</p>
			<p class="fallspeed">
				<label>
					garpr
				</label>
				{{ $player->garpr }} 
			</p>
		</div>

	</header>
	
	<content id="homepage">
		<div class="row no-margin">

			<div class="col-md-8">
				<div class="row">
					
				</div>
				<div class="row">
				
				</div>
			</div>

			<div class="col-md-4">
				
			</div>

		</div>

	</content>
	
</div>
@endsection
