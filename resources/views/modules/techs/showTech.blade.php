@extends('app')

@section('content')

	<header>
		{{ $tech->tech }}
		<h2> {{ $tech->description }} </h2>
		<p>  {{ $tech->inputs }} </p>
	</header>
	
	<content>
		

				@each('showGif', $gifs, 'gif')

				@foreach ($gifs as $gif)
				   {{ $gif->printGfy() }}
				@endforeach

	</content>

@endsection