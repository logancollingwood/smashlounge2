<div class='tab-pane' id='tech'>
    {!! Form::open(array('route' => 'submit.tech', 'class' => 'form')) !!}

        <div class="form-group">
            {!! Form::label('Tech Name') !!}
            {!! Form::text('techname', null, 
                array('required', 
                      'class'=>'form-control',
                      'placeholder'=>'Wave Dash')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Tech Description') !!}
            {!! Form::textarea('techdescription', null, 
                array('required', 
                      'class'=>'form-control',
                      'placeholder'=>'A movement technique ... ')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Tech Wiki') !!}
            {!! Form::text('techwiki', null, 
                array('class'=>'form-control',
                       'placeholder'=>'http://www.ssbwiki.com/Tech')) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Submit!', 
              array('class'=>'btn btn-primary')) !!}
        </div>

    {!! Form::close() !!}
</div>