@extends('application')

@section('content')
<div class="box">
	<header>
	<h1>Smashlounge</h1>
	<p>Learn something about Super Smash Brothers Melee for the Nintendo Gamecube <i class="fa fa-trademark"></i></p>
	</header>
	
	<content id="homepage">
		<div class="row">
			<div class="col-md-6 col-md-offset-1">
				<div class="panel-default randomPanel">
					<div class="panel-heading">
						<h2> Learn something new </h2>					
					</div>
					<div class="panel-body">
						<div class="row no-padding">
							@for ($i = 0; $i < $randCount; $i++)
							    <div class="col-md-{{ 12/$randCount}} randomTech">
									<span class="badge counter">{{ $i + 1 }} </span>
									<br>
									<td>
										<a href="{{ route('techs.show', $techs[$i]->tech) }}" class="list">
											{{ $techs[$i]->tech }}
										</a>
									</td>
								</div>

							@endfor
						</row>
						<p class="technique">  <p>
					</div>					
				</div>
			</div>
		</div>
		<!-- 
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				
				<div id='randomSlot' class='panel gifTainer theaterGif'>
				</div>
			</div>
		</div>
		-->
	</content>
	
</div>
@endsection
