@extends('application')

@section('content')
<div class="content">
	<header>
		<h1> About </h1>
		<p> TSL </p>
	</header>
	
	<content>
		<div class="row">
            @for ($i = 0; $i < count($team); $i++)
        
              @if ($i % $columns == $columns)
                </div>
                <div class="row ">
              @endif
                <div class="col-md-{{12/$columns}}">
                  <div class="listitem" style="padding-top: 15px;">

                    <span class="badge counter">{{ $team[$i]["role"] }} </span>

                    <p class="pull-right">
                      {{ $team[$i]["name"] }}
                    </p>
                    <hr>
                    <p>
                    <a href='https://twitter.com/{{ $team[$i]["twitter"]}}'>@ {{ $team[$i]["twitter"] }}</a>
                    </p>
                </div>
              </div>

            @endfor
		</div>
			
	</content>
</div>
@endsection