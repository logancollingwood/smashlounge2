@extends('application')

@section('content')
<div class="content">
	<header>
		<h1> {{$attack->charname}}: {{ $attack->description }}</h1>
		<p>  {{ $attack->description }} </p>
	</header>
	
	<content>
		<div class="row">
			<table class="table">
				<thead>
					<tr>
						<th> property </th>
						<th> value </th>
					</tr>
					@foreach ($attrs as $key=>$val) 
						<tr>
							<td>{{ $key }}</td>
							<td>{{ $val }}</td>
						</tr>
					@endforeach
				</thead>

			</table>
		</div>
			
	</content>
</div>
@endsection