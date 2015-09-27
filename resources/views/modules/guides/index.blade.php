@extends('application')

@section('content')

	<header class="">
		<h1 class="scene_element scene_element--fadeinup scene_element--delayed"> Guides </h1>
		<p class="scene_element scene_element--fadeinup"> Find some professionally written guides to improve your gameplay </p>
		


	</header>
	
		<content>

		<div class="row">
			@for ($i = 0; $i < count($guides); $i++)
				
				@if ($i % $columns == $columns)
					</div>
					<div class="row ">
				@endif
			    <div class="col-md-{{12/$columns}}">
			    	<div class="listitem">

							<span class="badge counter">{{ $i+1 }} </span>

							<a href="{{ route('guides.show', $guides[$i]->name) }}" class="list">
								{{ $guides[$i]->name }}
							</a>

							<p class="pull-right"> by {{ $guides[$i]->author }} </p>



					</div>
				</div>

			@endfor
		</div>

	</content>

@endsection
