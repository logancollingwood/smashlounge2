<div class="col-md-{{12/$dataColumns}} col-xs-6">
	<div class="gfyTainer attack">
		<div class="row">
			 <div class="col-md-12 col-sm-12 no-padding">
			 	@if ($gif)
					<img class="gfyitem" data-autoplay=false data-expand="true" data-id= {{ $gif->url}} />
				@else
					<p> No Gif yet! </p>
				@endif
				<div class="gfyFooter data">
					
					<div class="banner">
						<a class="name" href="/attack/{{$gif->attack_id}}">{{ $gif->description or 'No Description'}}</a>

						<div class="tip"><a href="/attack/{{$gif->attack_id}}">(more)</a></div>
						@if (Auth::check()) 
							@if (Auth::user()->hasRole('contributor'))
							<div class="tip"><a href="/attack/{{$gif->attack_id}}/edit">(edit)</a></div>
							@endif
						@endif
					</div>
					
					@if ($gif->attack_updated_at > 1)
						@if($gif->total_frames != 0)
							<div class="total-frames">{{$gif->total_frames}} total frames</div>
						@endif

						@if($gif->active_start)
							<div class="active">active  
							@if ($gif->active_end) 
								{{$gif->active_start}} &#8211; {{$gif->active_end}}</div>
							@else
								on frame {{$gif->active_start}}</div>
							@endif
						@endif

						@if($gif->hit_start && $gif->hit_end)
							<div class="hit">hits {{$gif->hit_start}}-{{$gif->hit_end}}
								@if($gif->hit_second_start)
					 			,{{ $gif->hit_second_start }}-{{ $gif->hit_second_end }}
					 			@endif

					 			@if($gif->hit_third_start)
					 				,{{ $gif->hit_third_start }}-{{ $gif->hit_third_end }}
					 			@endif

					 			@if($gif->hit_fourth_start)
					 				,{{ $gif->hit_fourth_start }}-{{ $gif->hit_fourth_end }}
								@endif
							</div>
						@endif

						@if($gif->charge_frame) 
							<div class="cf">can charge on frame {{ $gif->charge_frame }}</div>
						@endif

						@if($gif->jcable) 
							<div class="jc">jump cancelable</div>
						@endif

						@if($gif->lcancel)
							<div class="lc">l cancelable</div>
						@endif

						@if($gif->auto_cancelable) 
							<div class="jc">auto cancelable <{{$gif->auto_cancel_start}} {{$gif->auto_cancel_end}}></div>
						@endif

						@if($gif->reflects)
							<div class="reflects">reflects {{ ($gif->reflects) ?  $gif->reflect_start . ' &#8211; ' . $gif->reflect_end : 'false'}} </div>
						@endif 

						@if($gif->iasa)
							<div class="iasa">interruptable as soon as {{$gif->iasa}} </div>
						@endif

						@if($gif->grab_start)
							<div class="grab">grab active {{$gif->grab_start}} &#45; {{ $gif->grab_end }} </div>
						@endif

						@if($gif->invincible_start)
							<div class="invincible">invincible {{$gif->invincible_start}} &#45; {{ $gif->invincible_end }} </div>
						@endif

						
					@else
						<p> Frame data has not yet been submitted for this attack. </p>
					@endif

					<div class="gfySource">

						@if ($gif->source && filter_var($gif->source, FILTER_VALIDATE_URL))
							<a href="{{ $gif->source }}">source</a>
						@elseif ($gif->source != "")
							courtesy of {{ $gif->source }}
						@endif

					</div>
				</div>
			</div>
		</div>
	</div>
</div>