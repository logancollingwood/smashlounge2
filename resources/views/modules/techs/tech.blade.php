@extends('application')

@section('content')
<div class="content">
	<header>
		<h1 class="scene_element scene_element--fadeinup scene_element--delayed">Techniques</h1>
		<p class="scene_element scene_element--fadeinup">Explore our growing database of smash techniques.</p>
	</header>
	
	<content>

		<div class="row">
			@for ($i = 0; $i < count($techs); $i++)
				
				@if ($i % $columns == $columns)
					</div>
					<div class="row ">
				@endif
			    <div class="col-md-{{12/$columns}}">
			    	<div class="listitem">

							<span class="badge counter">{{ $i+1 }} </span>

							<a href="{{ route('techs.show', $techs[$i]->tech) }}" class="list">
								{{ $techs[$i]->tech }}
							</a>



					</div>
				</div>

			@endfor
		</div>

	</content>
</div>
@endsection