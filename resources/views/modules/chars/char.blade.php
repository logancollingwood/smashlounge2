@extends('application')

@section('content')
<div class="content">
	<header>
		Learn some character specific content.
	</header>
	
	<content>
		<div class="row">
			@for ($i = 0; $i < count($chars); $i++)
				
				@if ($i % $columns == $columns)
		</div>
		<div class="row">
				@endif
			    <div class="col-md-{{12/$columns}}">
			    	<div class="listitem">

							<span class="badge counter">{{ $i+1 }} </span>

							<a href="{{ route('chars.show', $chars[$i]->name) }}" class="list">
								{{ $chars[$i]->name }}
							</a>

							<img src=" {{ asset('img/pixel/' . str_replace(' ', '', $chars[$i]->name) . 'HeadSSBM.png') }}"></img>

					</div>
				</div>

			@endfor
		</div>
			
	</content>
</div>
@endsection