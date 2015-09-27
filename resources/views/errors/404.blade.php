@extends('application')

@section('content')
<div class="box">
	<header>
	<h1 class="scene_element scene_element--fadeinup scene_element--delayed">404 </h1>
	<p> Whoops! Looks like you followed a wrong link. </p>
	</header>
	
	<content id="lost">
		<div class="row" id="scene">
            <div class="col-md-12">
            	<img id="samus" src="{{ asset('img/404/tslsamus.png') }}"></img>
                <img id="shot" src="{{ asset('/img/404/charged_shot.png') }}"></img>
           </div>
        </div>

	</content>
	
</div>
@endsection

@section('includes')
    <script src="{{ asset('/js/lib/jquery.transform2d.js') }}"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script src="{{ asset('/js/page/404.js') }}"></script>
@endsection