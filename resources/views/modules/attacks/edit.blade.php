@extends('application')

@section('content')
<div class="content">
	<header class="charheader {{strtolower(preg_replace('/[^A-Za-z0-9]/', '',$attack->charid))}}">
		<div class="row">

			<div class="col-md-7 col-md-offset-2 scene_element scene_element--fadeinup scene_element--delayed">
				<h1 class="char"> 
					<img src=" {{ asset('img/pixel/' . str_replace(' ', '', $attack->charid) . 'HeadSSBM.png') }}"></img>
					{{ $attack->charid  }}
				</h1>
				
				<a href="/attack/{{$attack->id}}"> 
					{{ $attack->input_dir }} : {{ $attack->input_type }}  
					@if(!$attack->grounded) 
						(air) 
					@endif 

				</a>

				@if(Session::has('message'))
		             <div class="alert-box success">
		                 <h2>{{ Session::get('message') }}</h2>
		             </div>
		        @endif
			</div>
			
	    </div>
	</header>
	
	<content>

		<div class="row">
			<div class="col-md-6">
				{!! Form::model($attack, array('route' => array('attack.update', $attack->id), 'class'=>'form')) !!}
				 	
				 	<input type="hidden" name="_method" value="PATCH">
				 	@include('modules.attacks.attackform')

				{!!	Form::close() !!}
			</div>
			<div class="col-md-6">
				<div class="dataAnchor">
				<img class='gfyitem' data-expand=true data-id= {{ $gif->url}} />
				</div>
			</div>
		</div>
			
	</content>
</div>
@endsection