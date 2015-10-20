@extends('application')

@section('content')

	<header class="">
		<h1 class="scene_element scene_element--fadeinup scene_element--delayed"> {{ $char->name }} <img src=" {{ asset('img/pixel/' . str_replace(' ', '', $char->name) . 'HeadSSBM.png') }}"></img> </h1>
		<p class="scene_element scene_element--fadeinup">  {{ $char->author }} </p>
		<div class="chardetail  scene_element scene_element--fadeinup">
			<p class="rank">  
				<label> rank </label> 
				{{ $char->tierdata }} 
			</p>
			<p class="weight"> 
				<label>
					weight
				</label>
				{{ $char->weight }} 
			</p>
			<p class="fallspeed">
				<label>
					fallspeed
				</label>
				{{ $char->fallspeed }} 
			</p>
		</div>
			<!-- Nav tabs -->
		  	<ul class="nav nav-tabs pills scene_element scene_element--fadeinup" role="tablist">
		    	<li role="presentation" class="active"><a href="#charGifs" aria-controls="charGifs" role="tab" data-toggle="tab">General</a></li>
		    	<li role="presentation"><a href="#charData" aria-controls="charData" role="tab" data-toggle="tab">Data</a></li>
		  	</ul>
	</header>
	
	<content class="tab-content">
			<div id="charGifs" class="row no-margin tab-pane active">
				<div class="row">
					@foreach($gifs as $gif)
						@include('gifs.gif')
					@endforeach
				</div>
				<div class="row">
					@include('modules.submit.panel')
				</div>
			</div>
			<div id="charData" class="row no-margin tab-pane">

				@foreach($dataGifs as $data)
						<div class="row">
							<div class="col-md-4 col-md-offset-4">
								<h1> {{ $data["name"] }} </h1>
							</div>
						</div>
						<div class="row">
								@for ($i = 0; $i < count($data["gifs"]); $i++)
									<?php $gif = $data["gifs"][$i] ?>

									@if ($i % $dataColumns == 0)
										</div>
										<div class="row">
									@endif

							    	@include('gifs.gifdata')

								@endfor

							
						</div>
				@endforeach

			</div>
	</content>

@endsection