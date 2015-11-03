@extends('application')

@section('content')
<div class="content">
	<header>
		<h1 class="scene_element scene_element--fadeinup scene_element--delayed">Character guides</h1>
		<p class="scene_element scene_element--fadeinup">Learn some character specific content</p>
	</header>
	
	<content>
		<div class="row">
			@for ($i = 0; $i < count($chars); $i++)
				
				@if ($i % $columns == $columns)
					</div>
					<div class="row ">
				@endif
			    <div class="col-md-{{12/$columns}}">
			    	<div class="listitem">

							<span class="badge counter">{{ $i+1 }} </span>

							<a href="{{ route('chars.show', $chars[$i]->name) }}" class="list">
								{{ $chars[$i]->name }}
							</a>

							<img class="pull-right charico" src=" {{ asset('img/pixel/' . str_replace(' ', '', $chars[$i]->name) . 'HeadSSBM.png') }}"></img>

					</div>
				</div>

			@endfor
		</div>
			
	</content>
</div>
@endsection