@extends('application')

@section('content')
<div class="content data">
	<header class="charheader {{strtolower(preg_replace('/[^A-Za-z0-9]/', '',$attack->charid))}}">
		<div class="row scene_element scene_element--fadeinup ">
			<div class="col-md-6 col-md-offset-2 detail">
				<h1 class="char"> 
					<img src=" {{ asset('img/pixel/' . str_replace(' ', '', $attack->charid) . 'HeadSSBM.png') }}"></img>
					<a href="/chars/{{ $attack->charid  }}">{{ $attack->charid  }} </a>
				</h1>
				
				<p class="name"> {{ $attack->input_dir }} {{ $attack->input_type }}  </p>
				@if (Auth::check()) 
					@if (Auth::user()->hasRole('contributor'))
						<p>
							<a href="/attack/{{$attack->id}}/edit"><small>(edit)</small></a>
						</p>
					@endif
				@endif
				@if(strtotime($attack->updated_at) > 1)
					<div class="updated">updated {{ date('m/d/Y', strtotime($attack->updated_at) ) }}</div>
				@else
					<div class="updated">No data. If you'd like to become a moderator, message us on twitter</div>
				@endif
			</div>
			
	    </div>
	</header>
	
	<content class="data">
		<div class="row">
			<div class="col-md-7">
				@if(strtotime($attack->updated_at) > 1)
					@include('modules.attacks.attackshow')
				@endif
			</div>
			<div class="col-md-5">
				<div class="dataAnchor">
				<img class='gfyitem' data-autoplay=true data-expand=true data-id= {{ $gif->url}} />
				<ul>
					<li><a href="#general">general</a></li>

					{{-- always show lag --}}
					<li><a href="#lag">lag</a></li>
			
					@if($attack->auto_cancelable)
						<li><a href="#autocancel">autocancel</a></li>
					@endif
			
					@if($attack->grab_start != 0)
						<li><a href="#grab">grab</a></li>
					@endif

					@if($attack->reflect_start != 0)
						<li><a href="#reflects">reflects</a></li>
					@endif
				</ul>
				</div>
			</div>
		</div>
			
	</content>
</div>
@endsection