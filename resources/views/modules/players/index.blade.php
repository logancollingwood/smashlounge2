@extends('application')

@section('content')
<div class="box">
	<header>
	<h1 class="scene_element scene_element--fadeinup scene_element--delayed">Players</h1>
	<p> Browse some top player profiles </p>
	</header>
	
	<content>
		<div class="row">

			@for ($i = 0; $i < count($players); $i++)
				
				@if ($i % $columns == $columns)
					</div>
					<div class="row ">
				@endif
			    <div class="col-md-{{12/$columns}}">
			    	<div class="listitem">

							<span class="badge counter">{{ $players[$i]->rank }} </span>

							<a href="{{ route('players.show', $players[$i]->name) }}" class="list">
								{{ $players[$i]->name }}
							</a>

							

					</div>
				</div>

			@endfor

		</div>

	</content>
	
</div>
@endsection
