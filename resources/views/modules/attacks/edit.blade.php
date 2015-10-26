@extends('application')

@section('content')
<div class="content">
	<header>
		<h1> {{$attack->charname}}: {{ $attack->description }}</h1>
		<p>  {{ $attack->description }} </p>
		@if(Session::has('message'))
            <div class="alert-box success">
                <h2>{{ Session::get('message') }}</h2>
            </div>
        @endif
	</header>
	
	<content>

		<div class="row">
			<div class="col-md-6">
				{!! Form::model($attack, array('route' => array('attack.update', $attack->id), 'class'=>'form')) !!}
				 	
				 	<input type="hidden" name="_method" value="PATCH">

				 	@foreach($fields as $field)
					 	<div class="form-group">
					 		{!! Form::label($field) !!}
		        			{!! Form::text($field, null, array('class'=>'form-control')) !!}  
		        		</div>
	        		@endforeach

	                <div class="form-group">
	                    {!! Form::submit('Submit!', 
	                      array('class'=>'btn btn-primary')) !!}
	                </div>

				{!!	Form::close() !!}
			</div>
			<div class="col-md-6">
				@if($gif != null) 
					@include('gifs.gif')
				@endif
			</div>
		</div>
			
	</content>
</div>
@endsection