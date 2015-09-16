@extends('application')

@section('content')
<div class="content">
	<header>
		<h2>Explore our growing database of smash techniques.</h2>
	</header>
	
	<content>
		<ul class="specList scene_element scene_element--fadeinup scene_element--fadeinright-wide">
			@for ($i = 0; $i < count($techs); $i++)

			    	<li class="listitem">

							<span class="badge counter">{{ $i + 1 }} </span>

							<a href="{{ route('techs.show', $techs[$i]->tech) }}" class="list">
								{{ $techs[$i]->tech }}
							</a>

					</li>

			@endfor
		</ul>
	</content>
</div>
@endsection