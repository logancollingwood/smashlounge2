@extends('app')

@section('content')
<div class="content">
	<header>
		Explore our growing database of smash techniques.
	</header>
	
	<content>
		<table class="listAll">
			@for ($i = 0; $i < count($techs); $i++)
			    <tr>
					<td class="pull-left">
						<span class="badge">{{ $i }} </span>
					</td>
					<td>
						<a href="{{ route('techs.show', $techs[$i]->tech) }}">
							{{ $techs[$i]->tech }}
						</a>
					</td>
				</tr>

			@endfor
			
			
		</table>
	</content>
</div>
@endsection