@extends('app')

@section('content')
<div class="content">
	<header>
		Explore our growing database of smash techniques.
	</header>
	
	<section id="main">
		<ul class="listAll">
		@foreach ($techs as $tech)
		    <li>
				<a href="{{ route('techs.show', $tech->tech) }}">
					{{ $tech->tech }}
				</a>
			 </li>
		@endforeach
		</ul>
	</section>
</div>
@endsection