@extends('application')

@section('content')
    <header>
        <h1 class="scene_element scene_element--fadeinup scene_element--delayed">Submit</h1>
        <p>
            @if(Session::has('message'))
                <div class="alert-box success">
                    <h2>{{ Session::get('message') }}</h2>
                </div>
            @endif
        </p>
    </header>

    <content>

    	<ul class='nav nav-tabs' role='tablist' id='myTab'>
            <li class='active'><a href='#gif' role='tab' data-toggle='tab' class='tabz' data-id="gif">Gifs</a></li>
            <li><a href='#vod' role='tab' data-toggle='tab' class='tabz' data-id="vod">Vods</a></li>
            <li><a href='#tech' role='tab' data-toggle='tab' class='tabz' data-id="technique">Techniques</a></li>
            <li><a href='#group' role='tab' data-toggle='tab' class='tabz' data-id="group">Regional Group</a></li>
        </ul>

        
        <div class='tab-content'>

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
                                    array('required', 
                                          'class'=>'form-control', 
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
            <!-- coming soon 
            <div class='tab-pane' id='guide'>
            </div>
        	-->

        </div>

    </content>
@endsection

@section('includes')
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqmaEEEbIm2Iln3ieqGdtfzVLi6AzHA1Q&sensor=true">
    </script>
    <script type="text/javascript" src="{{ asset('/js/page/submit.js') }}"></script>
@endsection