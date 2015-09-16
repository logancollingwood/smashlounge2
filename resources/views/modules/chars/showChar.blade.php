@extends('application')

@section('content')

	<header>
		<h1 class="scene_element scene_element--fadeinup scene_element--delayed"> {{ $char->name }} <img src=" {{ asset('img/pixel/' . str_replace(' ', '', $char->name) . 'HeadSSBM.png') }}"></img> </h1>
		<p class="scene_element scene_element--fadeinup">  {{ $char->guide }} </p>
		<div class="chardetail  scene_element scene_element--fadeinup">
			<p class="rank">  
				<label> rank </label> 
				{{ $char->tierdata }} 
			</p>
			<p class="weight"> 
				<label>
					weight
				</label>
				{{ $char->weight }} 
			</p>
			<p class="fallspeed">
				<label>
					fallspeed
				</label>
				{{ $char->fallspeed }} 
			</p>
		</div>
	</header>
	
	<content>
			<div class="row no-margin ">
				@foreach($gifs as $gif)
					@include('gif')
				@endforeach
				
			</div>

	</content>

@endsection