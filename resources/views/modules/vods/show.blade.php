@extends('application')

@section('content')

	<header>
		<h1 class="scene_element scene_element--fadeinup scene_element--delayed"> {{ $vod->title }} </h1>
		<p class="scene_element scene_element--fadeinup">  {{ $vod->description }} </p>
		
	</header>
	
	<content>
		<div class="row no-margin">
			<div class="col-md-12">
				<div class="gfyTainer">
					<div class="row">
						<div class="col-md-4 col-sm-2 voteBlock">
							vote
							<br>
							controller
						</div>
						 <div class="col-md-8 col-sm-9">
							<div class="videoContainer">
								<iframe type="text/html" width="300" height="200"
				          				src="http://www.youtube.com/embed/{{ $vod->url }}?fs=1&modestbranding=1"
				          				frameborder="0"/>
			          			</iframe>
		          			</div>
							<div class="gfyFooter">
								
								<div class="gfySource">

									@if ($vod->source && filter_var($vod->source, FILTER_VALIDATE_URL))
										<a href="{{ $vod->source }}">source</a>
									@elseif ($vod->source != "")
										courtesy of {{ $vod->source }}
									@else 
										no source
									@endif

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</content>

@endsection

@section('includes') 
	<script src="{{ asset('/js/lib/jquery.fitvids.js')  }}"></script>
	<script src="{{ asset('/js/util/fitVids.js') 		}}"></script>
@endsection