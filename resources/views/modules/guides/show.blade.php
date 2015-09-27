@extends('application')

@section('content')

	<header class="">
		<h1 class="scene_element scene_element--fadeinup scene_element--delayed"> {{ $guide->name }} </h1>
		<p class="scene_element scene_element--fadeinup">  {{ $guide->description }} </p>
		<div class="chardetail  scene_element scene_element--fadeinup">
			by {{ $guide->author }}
		</div>

	</header>
	
	<content class="tab-content">
		{{ $guide->guide }}
	</content>

@endsection