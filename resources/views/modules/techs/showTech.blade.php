@extends('application')

@section('content')

	<header>
		<h1> {{ $tech->tech }} </h1>
		<p> {{ $tech->description }} </p>
		<p>  {{ $tech->inputs }} </p>
	</header>
	
	<content>
			<div class="row no-margin">
				@foreach($gifs as $gif)
					@include('gif')
				@endforeach
				
			</div>

	</content>

@endsection