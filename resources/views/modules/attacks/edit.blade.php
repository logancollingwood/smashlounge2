@extends('application')

@section('content')
<div class="content">
	<header>
		<h1> {{$attack->charname}}: {{ $attack->description }}</h1>
		<p>  {{ $attack->description }} </p>
		@if(Session::has('flash_message'))
		    <div class="alert alert-success">
		        {{ Session::get('flash_message') }}
		    </div>
		@endif
	</header>
	
	<content>
		<div class="row">
			 {{ Form::model($attack, array('route' => 'attack.update', $attack->id)) }} 
			 	
			 	{{ Form::label('email', 'Email') }}
        		{{ Form::email('email') }}  

			 {{	Form::close() }}
		</div>
			
	</content>
</div>
@endsection