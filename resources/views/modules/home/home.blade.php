@extends('app')

@section('content')
<div class="box">
	<header>
	<h1>Smashlounge</h1>
	<p>Learn something about Super Smash Brothers Melee for the Nintendo Gamecube <i class="fa fa-trademark"></i></p>
	</header>
	
	<content>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel-default randomPanel">
					<div class="panel-heading">
						<h2>  </h2>					
					</div>
					<div class="panel-body">
						<p>  <p>
					</div>					
				</div>
			</div>
		</div>
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