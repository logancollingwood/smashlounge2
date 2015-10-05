<div class="row apiBlock">
	{{-- dd($spec) --}}	
	<div class="col-md-2">
		<p class="apiAction"> {{ $spec["action"] }} </p>
		<p class="apiName"> {{ $spec["module"] }} </p>
	</div>

	<div class="col-md-10">
		<p class="apiUrl"> {{ $spec["methods"] }} </p>
		<p class="apiUsage"> {{ $spec["description"] }}</p>
	</div>
</div>