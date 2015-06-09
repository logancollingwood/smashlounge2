@extends('app')

@section('content')
<div class="content">
	<header>
		{{ $tech->tech }}
	</header>
	
	<section id="main">
		{{ $tech->description }}
		<hr>
		{{ $tech->inputs }}
	</section>
</div>
@endsection