<div class='tab-pane' id='vod'>
    {!! Form::open(array('route' => 'submit.vod', 'class' => 'form')) !!}

        <div class="form-group">
            {!! Form::label('Vod URL') !!}
            {!! Form::text('vodurl', null, 
                array('required', 
                      'class'=>'form-control',
                      'placeholder'=>'https://www.youtube.com/watch?v=pD_imYhNoQ4')) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Vod Title') !!}
            {!! Form::text('vodtitle', null, 
                array('required', 
                      'class'=>'form-control',
                      'placeholder'=>'Wombo Combo')) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('Vod Description') !!}
            {!! Form::textarea('voddescription', null, 
                array('required', 
                      'class'=>'form-control',
                      'placeholder'=>'HAPPY FEET')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('source') !!}
            {!! Form::text('vodsource', null, 
                array('class'=>'form-control',
                       'placeholder'=>'wombo combro')) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Submit!', 
              array('class'=>'btn btn-primary')) !!}
        </div>

    {!! Form::close() !!}
</div>