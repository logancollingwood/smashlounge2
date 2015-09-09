@extends('app')

@section('page-includes') 
		
@endsection

@section('content')
<div class="box">
	<header>
	<h1>Smashlounge</h1>
	<p>Learn something about Super Smash Brothers Melee for the Nintendo Gamecube <i class="fa fa-trademark"></i></p>
	</header>
	
	<content>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<!-- random gfy slot -->
				<div id='randomSlot' class='panel gifTainer theaterGif'>
				</div>
			</div>
		</div>
	</content>
	
</div>
@endsection
