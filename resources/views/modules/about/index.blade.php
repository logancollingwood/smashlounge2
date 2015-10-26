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

            <div class="aboutpanel {{$team[$i]["img"]}}" style="padding-top: 15px;">

              <div class="info">
                <span class="name">
                  {{ $team[$i]["name"] }}
                </span>

                <span class="role">
                  {{ $team[$i]["role"] }} 
                </span>
                
    
                <span class="twitter">
                  <a href='https://twitter.com/{{ $team[$i]["twitter"]}}'>
                    @ {{ $team[$i]["twitter"] }}
                    <i class="fa fa-twitter-square fa-2x"></i>
                  </a>
                </span>
              </div>
            </div>

          </div>
      @endfor
		</div>
			
	</content>
</div>
@endsection