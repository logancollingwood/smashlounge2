@extends('application')

@section('content')
<div class="content">
	<header>
		<h1> API </h1>
		This document provides specifications on our public API
	</header>
	
	<content>
		@for ($i = 0; $i < count($api); $i++)
			@include('modules.api.spec')
		@endfor
	</content>
</div>
@endsection