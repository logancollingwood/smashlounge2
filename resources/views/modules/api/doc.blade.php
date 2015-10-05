@extends('application')

@section('content')
<div class="content">
	<header>
		<h1> API </h1>
		This document provides specifications on our public API
	</header>
	
	<content>

		@foreach($api as $spec)
			@include('modules.api.spec')
			<hr>
		@endforeach
	</content>
</div>
@endsection