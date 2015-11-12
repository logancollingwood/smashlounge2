@extends('application')

@section('content')

	<header class="">
		<h1 class="scene_element scene_element--fadeinup scene_element--delayed"> {{ $guide->name }} </h1>
		<p class="scene_element scene_element--fadeinup">  {{ $guide->description }} </p>
		<div class="guide_auth scene_element scene_element--fadeinup">
			by {{ strtoupper($guide->author1_sponsor) }}: {{ $guide->author1_name }} 

		</div>
		<a href="https://www.twitter.com/{{$guide->author1_twitter}}"><i class="fa fa-twitter"></i> {{ $guide->author1_twitter}} </a>

	</header>
	
	<content class="tab-content">
		{{ $guide->guide }}
	</content>

@endsection