@extends('application')

@section('content')
<div class="content">
	<header>
		<h1> {{$attack->charid}}: {{ $attack->description }}</h1>
		<p>  {{ $attack->description }} </p>
	</header>
	
	<content>
		<div class="row">
			<div class="col-md-6">
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
			<div class="col-md-6">
				<div class="dataAnchor">
				<img class='gfyitem' data-expand=true data-id= {{ $gif->url}} />
				</div>
			</div>
		</div>
			
	</content>
</div>
@endsection