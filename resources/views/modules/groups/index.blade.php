@extends('application')

@section('content')

	<header class="">
		<h1 class="scene_element scene_element--fadeinup scene_element--delayed"> find a group </h1>
		<p class="scene_element scene_element--fadeinup"> enjoy the best aspect of grassroots eSports. find a group near you and join in. </p>
		


	</header>
	
	<content>
		<div class="row no-margin">
			<div class="col-md-12">
				<div id="map-canvas"/></div>
			</div>
		</div>
		<div class="row" id="group-container">
		@foreach($regions as $region) 
			<h1> {{ $region }} </h1>

			

			<?php $scenes = $groups[$region] ?>

			@foreach ($scenes as $scene) 
				@yield('modules.cards.scenes.table')
				 <a href="{{ $scene->profileid }}">{{ $scene->name }}</a>&nbsp;&ndash;&nbsp;
			@endforeach

		@endforeach

		</div>
		<br>
		<div class="row">
			<?php $submitDir = "group"; ?>
			@include('modules.submit.panel')
		</div>
	</content>

@endsection

@section('includes')
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqmaEEEbIm2Iln3ieqGdtfzVLi6AzHA1Q&sensor=true">
    </script>
	
	<script type="text/javascript" src="{{ asset('/js/page/mapInit.js') }}"></script>

@endsection
