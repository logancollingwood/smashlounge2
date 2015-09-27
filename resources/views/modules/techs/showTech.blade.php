@extends('application')

@section('content')

	<header>
		<h1 class="scene_element scene_element--fadeinup scene_element--delayed"> {{ $tech->tech }} </h1>
		<p class="scene_element scene_element--fadeinup">  {{ $tech->description }} </p>
		<p class="scene_element scene_element--fadeinup">  {{ $tech->inputs }} </p>
	</header>
	
	<content>
			<div class="row no-margin">
				@foreach($gifs as $gif)
					@include('gif')
				@endforeach
				
			</div>

	</content>

@endsection