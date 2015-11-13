<h2> general </h2>
	<div class="row">
 	<div class="col-md-6">
	 	<div class="data-group">
	 		<label>description</label>
	 		
			<p>{{ $attack->description }}</p>
		</div>
	</div>
	<div class="col-md-6">
	 	<div class="data-group">
	 		<label>total frames</label>

			<p>{{ $attack->total_frames }}</p>
		</div>
	</div>

	@if($attack->jcable)
	<div class="col-md-4">
	 	<div class="data-group">
			<label>jcable</label>
			<p>{{ $attack->jcable }}</p>
		</div>
	</div>
	@endif

	@if($attack->grounded == 1)
	<div class="col-md-4">
	 	<div class="data-group">
	 		<label>grounded</label>
			<p>{{ $attack->grounded }}</p> 
		</div>
	</div>
	@endif

	<div class="col-md-4">
	 	<div class="data-group">
			<label>active</label>
			<p>{{ $attack->active_start }} - {{ $attack->active_end }}</p>  
		</div>
	</div>
	<div class="col-md-6">
	 	<div class="data-group">
	 		<label>hits from</label>
	 		<p> {{ $attack->hit_start }}-{{ $attack->hit_end }}

	 			@if($attack->hit_second_start)
	 				,{{ $attack->hit_second_start }}-{{ $attack->hit_second_end }}
	 			@endif

	 			@if($attack->hit_third_start)
	 				,{{ $attack->hit_third_start }}-{{ $attack->hit_third_end }}
	 			@endif

	 			@if($attack->hit_fourth_start)
	 				,{{ $attack->hit_fourth_start }}-{{ $attack->hit_fourth_end }}
				@endif
		</div>
	</div>
	<div class="col-md-6">
	 	<div class="data-group">
	 		<label>iasa</label>
			<p> {{ $attack->iasa }} </p>
		</div>
	</div>
	<div class="col-md-12">
	 	<div class="data-group">
	 		<label>can charge on frame</label>
			<p> {{ $attack->charge_frame }} </p>
		</div>
	</div>
</div>
	



<h2 id="invincible"> invincible frames </h2>
<div class="row">
	<div class="col-md-12">
	 	<div class="data-group">
	 		<label>invincible from</label>
	 		<p> {{ $attack->invincible_start }}-{{ $attack->invincible_end }} </p>
		</div>
	</div>
</div>

<h2 id="lag"> lag and l cancel </h2>
<div class="row">
	<div class="col-md-4">
	 	<div class="data-group">
	 		<label> lag on landing </label>
			<p> {{ $attack->landlag }} </p>
		</div>
	</div>
	<div class="col-md-4">
	 	<div class="data-group">
	 		<label> lcancel on frame </label>
 			<p> {{ $attack->lcancel }} </p> 
		</div>
	</div>
	<div class="col-md-4">
	 	<div class="data-group">
	 		<label> lag on release </label>
			<p> {{ $attack->lag_on_release }} </p>
		</div>
	</div>
</div>

@if($attack->auto_cancelable)
<h2 id="autocancel"> auto cancel </h2>
<div class="row">
	
	<div class="col-md-6">
	 	<div class="data-group">
	 		<label>Auto Cancelable from</label>
	 		<p> {{ $attack->auto_cancel_start }}-{{ $attack->auto_cancel_end }} </p>
		</div>
	</div>
</div>
@endif

@if($attack->grab_start != 0)
<h2 id="grab"> grab </h2>
<div class="row">
	<div class="col-md-12">
	 	<div class="data-group">
	 		<label> Grabs on frames </label>
	 		<p> {{ $attack->grab_start }}-{{ $attack->grab_end }} </p>
		</div>
	</div>
</div>
@endif

@if($attack->reflects)
	<h2> reflects </h2>
	<div class="row">
		<div class="col-md-6">
		 	<div class="data-group">
		 		<label> reflects on frames</label>
		 		<p> {{ $attack->reflect_start }}-{{ $attack->reflect_end }} </p>
			</div>
		</div>
		<div class="col-md-6">
		 	<div class="data-group">
		 		<label> reflection lag </label>
		 		<p> {{ $attack->reflection_lag }}</p> 
			</div>
		</div>
	</div>
@endif