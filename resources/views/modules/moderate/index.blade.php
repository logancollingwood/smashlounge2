@extends('application')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />

<div class="content">
	<header>
		<h1> Moderate </h1>
		Approve and Deny user submissions
	</header>
	
	<content>
		<div class="row">
            <ul class='nav nav-tabs' role='tablist' id='myTab'>
              <li class='active'><a href='#gif' role='tab' data-toggle='tab' class='tabz' data-id="gif">Gifs</a></li>
              <li><a href='#vod' role='tab' data-toggle='tab' class='tabz' data-id="vod">Vods</a></li>
              <li><a href='#technique' role='tab' data-toggle='tab' class='tabz' data-id="technique">Techniques</a></li>
              <li><a href='#group' role='tab' data-toggle='tab' class='tabz' data-id="group">Regional Group</a></li>
            </ul>

            

            <div class='tab-content'>
              @foreach ($submissions as $key => $data)
              	@if($key == 'gifs')
              		@include('modules.moderate.giftable')
              	@elseif ($key == 'groups')
              		@include('modules.moderate.grouptable')
              	@elseif ($key == 'techs')
              		@include('modules.moderate.techstable')
              	@elseif ($key == 'vods')
              		@include('modules.moderate.vodstable')
              	@endif
              @endforeach
            </div>
		</div>
			
	</content>
</div>
@endsection

@section('includes')
  <script type="text/javascript" src="{{ asset('/js/page/moderate.js') }}"></script>
@endsection