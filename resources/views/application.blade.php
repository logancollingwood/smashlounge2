<!--

Smashlounge is built for the community, by the community.

All tools used on this site are for non-commercial purposes.
Questions?
  smashlounge@gmail.com

-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>smashlounge</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	
	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Noto+Sans|Quicksand|Advent+Pro|Roboto:400,300' rel='stylesheet' type='text/css'>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		
		
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


	@yield('twittercard')

</head>
<body>
	<!--
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ url('/') }}">sl</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="{{ url('/about/') }}">About</a></li>
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
		-->
	<div class="container" id="content">
		<div class="row">
			<div class="col-sm-2 col-md-2" id="sidebar">
				<div id="sidebarBrand" style="display: none;">
					<h1> <a href="{{ url('/') }}"> TSL </a> </h1>
				</div>
				<ul>
					<li class="{{ Request::path() == '/' ? 'active' : ''}}"><a href="{{ url('/') }}">Home</a></li>
					<li class="{{ strpos(Request::path(), 'techs') === 0 ? 'active' : ''}}"><a href="{{ url('/techs') }}">Techs</a></li>
					<li class="{{ strpos(Request::path(), 'chars') === 0 ? 'active' : ''}}"><a href="{{ url('/chars') }}">Chars</a></li>
					<li class="{{ strpos(Request::path(), 'guides') === 0 ? 'active' : ''}}"><a href="{{ url('/guides') }}">Guides</a></li>
					<li class="{{ strpos(Request::path(), 'vods') === 0 ? 'active' : ''}}"><a href="{{ url('/vods') }}">Vods</a></li>

					<li class="hidden-xs {{ strpos(Request::path(), 'groups') === 0 ? 'active' : ''}}"><a href="{{ url('/groups') }}">Groups</a></li>

					<li class="two-column">
						<a class="hidden-xs border-right {{ strpos(Request::path(), 'submit') === 0 ? 'active' : ''}}"href="{{ url('/submit') }}">Submit</a>
						<a class="hidden-xs {{ strpos(Request::path(), 'api') === 0 ? 'active' : ''}}" href="{{ url('/api/doc') }}">API</a>
					</li>

					<li class="hidden-sm hidden-md hidden-lg">
						<a><i class="fa fa-list fa-1x"></i></a>
        			</li>

				</ul>
			</div>
			<div class="col-sm-8 col-md-10 m-scene" id="main">
				@yield('content')
			</div>
		</div>
	</div>
	<!--
	<footer>
		<div class="container">
			copywright sl 2015
		</div>
	</footer>
	-->
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	
	<!-- application minified js -->
	<script src="{{ asset('/js/compiled/app.js') }}"></script>
	<script src="{{ asset('/js/scripts/randomGfycat.js') }}"></script>
	<script src="{{ asset('/js/scripts/app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/util/smoothStateHandler.js') }}"></script>

	@yield('includes')
</body>
</html>
