@extends('application')

@section('twittercard')
	<meta name="twitter:card" content="player">
	<meta name="twitter:site" content="@thesmashlounge">
	<meta name="twitter:title" content="{{ $tech->tech }}">
	<meta name="twitter:description" content="{{ $tech->description }}">
	<meta name="twitter:image" content="https://thumbs.gfycat.com/{{ $gifs[0]->url }}-poster.jpg">

	<meta name="twitter:player" content="https://gfycat.com/ifrt/{{ $gifs[0]->url }}">
	<meta name="twitter:player:width" content="1280">
	<meta name="twitter:player:height" content="720">

	<meta name="twitter:player:stream" content="https://giant.gfycat.com/{{ $gifs[0]->url }}.mp4"> 
	<meta name="twitter:player:stream:content_type" content="video/mp4">

@endsection

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