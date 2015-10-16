@extends('application')

@section('content')

<div class="content">
	<header>
		<h1 class="scene_element scene_element--fadeinup scene_element--delayed"> Vods </h1>
		<p class="scene_element scene_element--fadeinup"> Check out a bunch of different vods, from hilarious classics to instructional tech videos </p>
	</header>
	
	<content>

		<div class="row">
			@for ($i = 0; $i < count($vods); $i++)
				
				@if ($i % $columns == 0 && $i != 0)
					</div>
					<br>
					<div class="row ">
				@endif
				
			    <div class="col-md-{{12/$columns}}">
			    	<div class="listitem">
			    			<h2 style="text-align:center"><a href="{{ url('/vods/' . $categories[$i]) }}"> {{ $categories[$i] }} </a></h2>
			    			<hr>
							<span class="badge counter">{{ $i+1 }} </span>
							<a href="{{ url('vods/show/' . urlencode($vods[$categories[$i]]->title)) }}" class="list">
								{{ $vods[$categories[$i]]->title }}
							</a>



					</div>
				</div>

			@endfor
		</div>

	</content>
</div>
@endsection