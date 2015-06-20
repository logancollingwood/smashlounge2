@extends('app')

@section('content')

	<header>
		{{ $tech->tech }}
	</header>
	
	<content>
		{{ $tech->description }}
		<hr>
		{{ $tech->inputs }}
		
		<hr>
			Gifs
		<hr>
			
			@foreach ($gifs as $gif)
			    {{ $gif->printGfy() }}
			@endforeach
			
	</content>

@endsection