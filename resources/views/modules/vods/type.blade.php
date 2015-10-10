@extends('application')

@section('content')

	<header>
		<div class="scene_element scene_element--fadeinup scene_element--delayed">
			<p class="small" style="display:inline">vods// </p><h1 style="display:inline"> {{ $typestr }} </h1>
		</div>
		
	</header>
	
	<content>
		<div class="row no-margin">
			@foreach ($vods as $vod)
				@include('modules.vods.vod')
				<hr>
			@endforeach
		</div>
	</content>

@endsection

@section('includes') 
	<script src="{{ asset('/js/lib/jquery.fitvids.js')  }}"></script>
	<script src="{{ asset('/js/util/fitVids.js') 		}}"></script>
@endsection