@extends('application')

@section('content')
<div class="content">
	<header class="charheader {{strtolower(preg_replace('/[^A-Za-z0-9]/', '',$attack->charid))}}">
		<div class="row">
			<div class="col-md-7 col-md-offset-2 scene_element scene_element--fadeinup scene_element--delayed">
				<h1 class="char"> 
					<img src=" {{ asset('img/pixel/' . str_replace(' ', '', $attack->charid) . 'HeadSSBM.png') }}"></img>
					<a href="/chars/{{ $attack->charid  }}">{{ $attack->charid  }} </a>
				</h1>
				<p> {{ $attack->input_dir }} {{ $attack->input_type }} @if(!$attack->grounded) (air) @endif

		        @if (Auth::check()) 
					@if (Auth::user()->hasRole('contributor'))
					<a href="/attack/{{$attack->id}}/edit"><small>(edit)</small></a>
					@endif
				@endif
				</p>
				@if ($attack->attack_updated_at > 1)
					<div class="updated">updated {{ date('m/d/Y', strtotime($gif->attack_updated_at)) }}</div>
				@else
					<div class="updated">No data. If you'd like to become a moderator, message us on twitter</div>
				@endif
			</div>
	    </div>
	</header>
	
	<content class="data">
		<div class="row">
			<div class="col-md-7">
				@include('modules.attacks.attackshow')
			</div>
			<div class="col-md-5">
				<div class="dataAnchor">
				<img class='gfyitem' data-autoplay=true data-expand=true data-id= {{ $gif->url}} />
				<ul>
					<li><a href="#general">general</a></li>
					<li><a href="#invincible">invincible</a></li>
					<li><a href="#lag">lag</a></li>
					@if($attack->auto_cancelable)
						<li><a href="#autocancel">autocancel</a></li>
					@endif
					@if($attack->grab_start != 0)
						<li><a href="#grab">grab</a></li>
					@endif
				</ul>
				</div>
			</div>
		</div>
			
	</content>
</div>
@endsection