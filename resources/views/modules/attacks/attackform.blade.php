
<h2> general </h2>
	<div class="row">
 	<div class="col-md-6">
	 	<div class="form-group">
	 		{!! Form::label('description') !!}
	 		
			{!! Form::text('description', null, array('class'=>'form-control')) !!}  
		</div>
	</div>
	<div class="col-md-6">
	 	<div class="form-group">
	 		{!! Form::label('total_frames') !!}
	 		
			{!! Form::number('total_frames', null, array('class'=>'form-control')) !!}  
		</div>
	</div>
	<div class="col-md-6">
	 	<div class="form-group">
	 		{!! Form::label('input_type') !!}
	 		
			{!! Form::select('input_type', $types, array_search($attack->input_type, $types), array('class'=>'form-control')) !!}  
		</div>
	</div>
	<div class="col-md-6">
	 	<div class="form-group">
	 		{!! Form::label('input_dir') !!}
			{!! Form::select('input_dir', $dirs, array_search($attack->input_dir, $dirs), array('class'=>'form-control')) !!}  
		</div>
	</div>
	<div class="col-md-4">
	 	<div class="form-group">
	 		{!! Form::label('jcable') !!}
	 		{!! Form::hidden('jcable', false) !!}
			{!! Form::checkbox('jcable', 1, $attack->jcable, array('class'=>'form-control')) !!}  
		</div>
	</div>
	<div class="col-md-4">
	 	<div class="form-group">
	 		{!! Form::label('grounded') !!}
	 		{!! Form::hidden('grounded', false) !!}
			{!! Form::checkbox('grounded', 1, $attack->grounded, array('class'=>'form-control')) !!}  
		</div>
	</div>

</div>
<h2> active frames </h2>
<div class="row">
	<div class="col-md-6">
	 	<div class="form-group">
	 		{!! Form::label('active_start') !!}
	 		
			{!! Form::number('active_start', null, array('class'=>'form-control')) !!}  
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
	 		{!! Form::label('active_end') !!}
	 		
			{!! Form::number('active_end', null, array('class'=>'form-control')) !!}  
		</div>
	</div>
</div>
<h2> hit frames </h2>
<div class="row">
	<div class="col-md-6">
	 	<div class="form-group">
	 		{!! Form::label('hit_start') !!}
	 		
			{!! Form::number('hit_start', null, array('class'=>'form-control')) !!}  
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
	 		{!! Form::label('hit_end') !!}
	 		
			{!! Form::number('hit_end', null, array('class'=>'form-control')) !!}  
		</div>
	</div>
	<div class="col-md-6">
	 	<div class="form-group">
	 		{!! Form::label('hit_second_start') !!}
	 		
			{!! Form::number('hit_second_start', null, array('class'=>'form-control')) !!}  
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
	 		{!! Form::label('hit_second_end') !!}
	 		
			{!! Form::number('hit_second_end', null, array('class'=>'form-control')) !!}  
		</div>
	</div>
	<div class="col-md-6">
	 	<div class="form-group">
	 		{!! Form::label('hit_third_start') !!}
	 		
			{!! Form::number('hit_third_start', null, array('class'=>'form-control')) !!}  
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
	 		{!! Form::label('hit_third_end') !!}
	 		
			{!! Form::number('hit_third_end', null, array('class'=>'form-control')) !!}  
		</div>
	</div>
	<div class="col-md-6">
	 	<div class="form-group">
	 		{!! Form::label('hit_fourth_start') !!}
	 		
			{!! Form::number('hit_fourth_start', null, array('class'=>'form-control')) !!}  
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
	 		{!! Form::label('hit_fourth_end') !!}
	 		
			{!! Form::number('hit_fourth_end', null, array('class'=>'form-control')) !!}  
		</div>
	</div>
</div>

<h2> iasa frames </h2>
<div class="row">
	<div class="col-md-12">
	 	<div class="form-group">
	 		{!! Form::label('iasa') !!}
	 		
			{!! Form::number('iasa', null, array('class'=>'form-control')) !!}  
		</div>
	</div>
</div>

<h2> charge frames </h2>
<div class="row">
	<div class="col-md-12">
	 	<div class="form-group">
	 		{!! Form::label('charge_frame') !!}
	 		
			{!! Form::number('charge_frame', null, array('class'=>'form-control')) !!}  
		</div>
	</div>
</div>


<h2> invincible frames </h2>
<div class="row">
	<div class="col-md-6">
	 	<div class="form-group">
	 		{!! Form::label('invincible_start') !!}
	 		
			{!! Form::number('invincible_start', null, array('class'=>'form-control')) !!}  
		</div>
	</div>
	<div class="col-md-6">
	 	<div class="form-group">
	 		{!! Form::label('invincible_end') !!}
	 		
			{!! Form::number('invincible_end', null, array('class'=>'form-control')) !!}  
		</div>
	</div>
</div>

<h2> lag and l cancel </h2>
<div class="row">
	<div class="col-md-4">
	 	<div class="form-group">
	 		{!! Form::label('landlag') !!}
	 		
			{!! Form::number('landlag', null, array('class'=>'form-control')) !!}  
		</div>
	</div>
	<div class="col-md-4">
	 	<div class="form-group">
	 		{!! Form::label('lcancel') !!}
	 		
			{!! Form::number('lcancel', null, array('class'=>'form-control')) !!}  
		</div>
	</div>
	<div class="col-md-4">
	 	<div class="form-group">
	 		{!! Form::label('lag_on_release') !!}
	 		
			{!! Form::number('lag_on_release', null, array('class'=>'form-control')) !!}  
		</div>
	</div>
</div>

<h2> auto cancel </h2>
<div class="row">
	<div class="col-md-4">
	 	<div class="form-group">
	 		{!! Form::label('auto_cancelable') !!}
	 		{!! Form::hidden('auto_cancelable', false) !!}
			{!! Form::checkbox('auto_cancelable', 1, null, array('class'=>'form-control')) !!}  
		</div>
	</div>
	<div class="col-md-4">
	 	<div class="form-group">
	 		{!! Form::label('auto_cancel_start') !!}
	 		
			{!! Form::number('auto_cancel_start', null, array('class'=>'form-control')) !!}  
		</div>
	</div>
	<div class="col-md-4">
	 	<div class="form-group">
	 		{!! Form::label('auto_cancel_end') !!}
	 		
			{!! Form::number('auto_cancel_end', null, array('class'=>'form-control')) !!}  
		</div>
	</div>
</div>

<h2> grab </h2>
<div class="row">
	<div class="col-md-6">
	 	<div class="form-group">
	 		{!! Form::label('grab_start') !!}
	 		
			{!! Form::number('grab_start', null, array('class'=>'form-control')) !!}  
		</div>
	</div>
	<div class="col-md-6">
	 	<div class="form-group">
	 		{!! Form::label('grab_end') !!}
	 		
			{!! Form::number('grab_end', null, array('class'=>'form-control')) !!}  
		</div>
	</div>
</div>

<h2> reflects </h2>
<div class="row">
	<div class="col-md-3">
	 	<div class="form-group">
	 		{!! Form::label('reflects') !!}
	 		{!! Form::hidden('reflects', false) !!}
			{!! Form::checkbox('reflects', 1, null, array('class'=>'form-control')) !!}  
		</div>
	</div>
	<div class="col-md-3">
	 	<div class="form-group">
	 		{!! Form::label('reflect_start') !!}
	 		
			{!! Form::number('reflect_start', null, array('class'=>'form-control')) !!}  
		</div>
	</div>
	<div class="col-md-3">
	 	<div class="form-group">
	 		{!! Form::label('reflect_end') !!}
	 		
			{!! Form::number('reflect_end', null, array('class'=>'form-control')) !!}  
		</div>
	</div>
	<div class="col-md-3">
	 	<div class="form-group">
	 		{!! Form::label('reflection_lag') !!}
	 		
			{!! Form::number('reflection_lag', null, array('class'=>'form-control')) !!}  
		</div>
	</div>
</div>

<div class="form-group">
    {!! Form::submit('Submit!', 
      array('class'=>'btn btn-primary')) !!}
</div>