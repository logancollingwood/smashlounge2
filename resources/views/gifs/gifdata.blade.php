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
						<div class="active">active {{$gif->active_start}} &#8211; {{$gif->active_end}}</div>
						<div class="jc">jump cancelable: {{ ($gif->jcable) ? 'true' : 'false' }} </div>
						<div class="lc">l cancelable: {{ ($gif->lcancel) ? 'true' : 'false'}} </div>
						<div class="iasa">interruptable as soon as {{$gif->iasa}} </div>
						<div class="updated">updated {{ date('m/d/Y', strtotime($gif->updated_at)) }}</div>
					@else
						<p> Frame data has not yet been submitted for this gif </p>
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