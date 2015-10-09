<div class="row apiBlock">
	{{-- dd($spec) --}}	
	<div class="col-md-2">
		<p> endpoint: </p>
		<p> description: </p>
		<p> formatting: </p>
	</div>

	<div class="col-md-10">
		<p class="apiUrl"><a href="{{ $spec["endpoint"] }}"> {{ $spec["endpoint"] }} </a></p>
		<p class="apiUsage"> {{ $spec["description"] }}</p>
		<p class="apiUsage"> {{ $spec["format"] }}</p>
	</div>
</div>
