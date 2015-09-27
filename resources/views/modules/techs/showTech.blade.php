@extends('application')

@section('twittercard')
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@thesmashlounge">
	<meta name="twitter:title" content="{{ $tech->tech }}">
	<meta name="twitter:description" content="{{ $tech->description }}">
	<!--
	<meta name="twitter:image" content="https://yoursite.com/example.png">
	<meta name="twitter:player" content="http://gfycat.com/AgileWatchfulIndianringneckparakeet">
	
	<meta name="twitter:player:width" content="480">
	<meta name="twitter:player:height" content="480">
  	<meta name="twitter:player:stream" content="http://devimages.apple.com/iphone/samples/bipbop/gear1/prog_index.m3u8">
  	<meta name="twitter:player:stream:content_type" content="video/mp4; codecs=&quot;avc1.42E01E1, mp4a.40.2&quot;">
	-->
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