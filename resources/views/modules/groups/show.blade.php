@extends('application')

@section('content')

	<header class="">
		<h1 class="scene_element scene_element--fadeinup scene_element--delayed"> {{ $group->name }} 


  			<a href="{{ $group->profileid }}"><i class="fa fa-facebook-official"></i></a> </h1>

		<p class="scene_element scene_element--fadeinup">  </p>
		<div class="chardetail  scene_element scene_element--fadeinup">
			
		</div>

	</header>
	
	<content class="tab-content">
		

	</content>

@endsection