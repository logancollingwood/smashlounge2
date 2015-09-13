@extends('application')

@section('content')

	<header>
		<h1> {{ $char->name }} <img src=" {{ asset('img/pixel/' . str_replace(' ', '', $char->name) . 'HeadSSBM.png') }}"></img> </h1>
		<p>  {{ $char->guide }} </p>
		<p>  tier: {{ $char->tierdata }} </p>
	</header>
	
	<content>
			<div class="row no-margin">
				@foreach($gifs as $gif)
					@include('gif')
				@endforeach
				
			</div>

	</content>

@endsection