@extends('application')

@section('content')
    <header>
        <h1 class="scene_element scene_element--fadeinup scene_element--delayed">Submit</h1>
        <p></p>
    </header>

    <content>

    	<ul class='nav nav-tabs' role='tablist' id='myTab'>
            <li class='active'><a href='#gif' role='tab' data-toggle='tab' class='tabz' data-id="gif">Gifs</a></li>
            <li><a href='#vod' role='tab' data-toggle='tab' class='tabz' data-id="vod">Vods</a></li>
            <li><a href='#technique' role='tab' data-toggle='tab' class='tabz' data-id="technique">Techniques</a></li>
            <li><a href='#group' role='tab' data-toggle='tab' class='tabz' data-id="group">Regional Group</a></li>
        </ul>

        
        <div class='tab-content'>

            <div class='tab-pane active' id='gif'>
            	{!! form($gifform) !!}
            </div>

            <div class='tab-pane' id='group'>
            </div>

            <div class='tab-pane' id='vod'>
            </div>

            <div class='tab-pane' id='tech'>
            </div>

            <!-- coming soon 
            <div class='tab-pane' id='guide'>
            </div>
        	-->

        </div>

    </content>
@endsection

@section('includes')

@endsection