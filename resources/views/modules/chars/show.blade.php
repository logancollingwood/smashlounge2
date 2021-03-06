@extends('application')

@section('content')

	<header class="charheader {{strtolower(preg_replace('/[^A-Za-z0-9]/', '',$char->name))}}">
		<div class="row">
			<div class="col-md-7 col-md-offset-2">

				<h1 class="scene_element scene_element--fadeinup scene_element--delayed char"> 
					<img src=" {{ asset('img/pixel/' . str_replace(' ', '', $char->name) . 'HeadSSBM.png') }}"></img>
					{{ $char->name }}  
				</h1>
			</div>
			<div class="col-md-3 chardetail  scene_element scene_element--fadeinup">
				<table class="table">
					<tr>
						<td> <label> rank </label> </td>
						<td> {{ $char->tierdata }} </td>
					</tr>
					<tr>
						<td> <label> weight </label> </td>
						<td> {{ $char->weight }} heaviest </td>
					</tr>
					<tr>
						<td> <label> fallspeed </label> </td>
						<td> {{ $char->fallspeed }} fastest </td>
					</tr>
					@if($char->walljump)
					<tr>
						<td> <label> walljump </label> </td>
						<td> available </td>
					</tr>
					@endif
				</table>
			</div>
		</div>
		<!-- Nav tabs -->
	  	<ul class="nav nav-tabs pills scene_element scene_element--fadeinup" role="tablist">
	    	<li role="presentation" class="active"><a href="#gifs" aria-controls="gifs" role="tab" data-toggle="tab">General</a></li>
	    	<li role="presentation"><a href="#data" aria-controls="data" role="tab" data-toggle="tab">Frame Data</a></li>
	  	</ul>
	  	
	</header>
	
	<content class="tab-content">
			<div id="gifs" class="row no-margin tab-pane active">
				<div class="row">
					@foreach($gifs as $gif)
						@include('gifs.gif')
					@endforeach
				</div>
				<div class="row">
					@include('modules.submit.panel')
				</div>
			</div>
			<div id="data" class="tab-pane">
				<div class="row no-margin">
					<div class="col-md-10">
						<div class="row">
							@foreach($dataGifs as $data)
									<div class="row">
										<div class="col-md-12">
											<div class="data-heading" id="{{$data["name"]}}"> {{ $data["name"] }} </div>
										</div>
									</div>
									<div class="row">
										@if (isset($data["gifs"]))
											@if (count($data["gifs"]) == 0)
												<p> No data gifs </p>
											@else
												@for ($i = 0; $i < count($data["gifs"]); $i++)
														<?php $gif = $data["gifs"][$i]; ?>

														@if ($i % $dataColumns == 0)
															</div>
															<div class="row">
														@endif

											    	@include('gifs.gifdata')

												@endfor
											@endif
										@endif

										
									</div>
							@endforeach
						</div>
					</div>
					<div class="col-md-2">
						<ul class="dataAnchor">
							@foreach($moves as $move) 
								<li><a href="#{{$move}}">{{$move}}</a></li>
							@endforeach
						</ul>
					</div>
				</div>

			</div>
	</content>

@endsection