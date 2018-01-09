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
            <li><a href='#group' role='tab' data-toggle='tab' class='tabz' data-id="group">Regional Group</a></li>
            <li><a href='#tech' role='tab' data-toggle='tab' class='tabz' data-id="technique">Techniques</a></li>
            <!-- <li><a href='#vod' role='tab' data-toggle='tab' class='tabz' data-id="vod">Vods</a></li> -->
        </ul>

        
        <div class='tab-content'>

            @include('modules.submit.partials.gif')
            @include('modules.submit.partials.group')
            @include('modules.submit.partials.tech')

        

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
