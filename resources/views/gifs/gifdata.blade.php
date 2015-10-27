<div class="col-md-{{12/$dataColumns}}">
	<div class="gfyTainer">
		<div class="row">
			 <div class="col-md-12 col-sm-9">
				<img class="gfyitem" data-expand="true" data-id= {{ $gif->url}} />
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

					@if ($gif->updated_at > 0)
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

						@if($gif->jcable) 
							<div class="jc">jump cancelable</div>
						@endif

						@if($gif->lcancel)
							<div class="lc">l cancelable</div>
						@endif

						@if($gif->auto_cancelable) 
							<div class="jc">auto cancelable</div>
						@endif

						@if($gif->reflects)
							<div class="reflects">reflects {{ ($gif->reflects) ?  $gif->reflect_start . ' &#8211; ' . $gif->reflect_end : 'false'}} </div>
						@endif 

						@if($gif->iasa)
							<div class="iasa">interruptable as soon as {{$gif->iasa}} </div>
						@endif


						<div class="updated">updated {{ date('m/d/Y', strtotime($gif->updated_at)) }}</div>
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