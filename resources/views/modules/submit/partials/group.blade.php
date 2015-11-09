<div class='tab-pane' id='group'>
    <div class="row">
        <div class="col-md-6">

            <h3> Click on the map to pin your group </h3>
            {!! Form::open(array('route' => 'submit.group', 'class' => 'form')) !!}
            <div class="form-group">
                {!! Form::label('name') !!}
                {!! Form::text('groupname', null, 
                    array('required', 
                          'class'=>'form-control')) !!}
            </div>

            <div class="form-group">
            {!! Form::label('Game') !!}
            {!! Form::select('groupgame', array('1' => '64', '2' => 'Melee', '3' => 'SSBB', '4' => 'SSB PM', '5' => 'Smash 4'), 
                    'default', array('class' => 'form-control', 'id' => 'groupgame')); 
            !!}
            </div>

            <div class="form-group">
            {!! Form::label('Region') !!}
            {!! Form::select('groupregion', array('1' => 'North Atlantic', '2' => 'South Atlantic', '3' => 'Mid West', '4' => 'Southwest', '5' => 'West Coast', '6' => 'International'), 
                    'default', array('class' => 'form-control', 'id' => 'groupregion')); 
            !!}
            </div>

            <div class="form-group">
                {!! Form::label('lat') !!}
                {!! Form::text('grouplat', null, 
                    array('required', 
                          'class'=>'form-control',
                          'id'=>'group_lat',
                          'readonly'=>'readonly')) !!}
            </div>

            <div class="form-group">
                {!! Form::label('long') !!}
                {!! Form::text('grouplong', null, 
                    array('required', 
                          'class'=>'form-control',
                          'id'=>'group_long',
                          'readonly'=>'readonly')) !!}
            </div>

            <div class="form-group">
                {!! Form::label('Facebook Link') !!}
                {!! Form::text('groupfb', null, 
                    array('required', 
                          'class'=>'form-control')) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Submit!', 
                  array('class'=>'btn btn-primary')) !!}
            </div>

            {!! Form::close() !!}
        </div>
        <div class="col-md-6">
            <div id="map-submit-canvas"/></div>
        </div>
    </div>
</div>