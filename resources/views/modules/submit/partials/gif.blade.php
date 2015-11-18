<div class='tab-pane active' id='gif'>

	    {!! Form::open(array('route' => 'submit.gif', 'class' => 'form')) !!}

        <div class="form-group">
            {!! Form::label('Type') !!}
            {!! Form::select('giftype', array('T' => 'Tech', 'C' => 'Character'), 
                    'default', array('class' => 'form-control', 'id' => 'gifType')); 
            !!}
        </div>

        <div id="techList" class="form-group">
            {!! Form::label('Tech') !!}
             {!! Form::select('giftech', $techs, 'default', array('class'=>'form-control')); !!}
        </div>
        <div id="charList" class="form-group">
            {!! Form::label('Char') !!}
            {!! Form::select('gifchar', $chars, 'default', array('class'=>'form-control')); !!}
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group" style="width: 50%; display:inline;">
                    {!! Form::label('URL (a valid gfy will appear on the right)') !!}
                    {!! Form::text('gifurl', null, 
                        array('required',
                              'id' => 'gifurl',
                              'class'=>'form-control', 
                              'placeholder'=>'http://gfycat.com/')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Description') !!}
                    {!! Form::textarea('gifdescription', null, 
                        array('required', 
                              'class'=>'form-control', 
                              'placeholder'=>'PPU destroys his competition')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Source') !!}
                    {!! Form::text('gifsource', null, 
                        array('class'=>'form-control', 
                              'placeholder'=>'Big House 5 or URL to vod')) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Submit!', 
                      array('class'=>'btn btn-primary')) !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class='gfyLocation'></div>
            </div>
        </div>


        {!! Form::close() !!}
</div>
