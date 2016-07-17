<?php
$route      = preg_split("/(@|\\\\)/", Illuminate\Support\Facades\Route::current()->getActionName());
$action     = array_pop($route);
$controller = substr(array_pop($route), 0, -10);

if ($action == 'Closure') :
	$action     = 'index';
	$controller = 'Page';
endif;

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Laravel Quickstart - Basic</title>

		<link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet">
		<link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet">
		<link href="{{ URL::asset('css/josephzidell.css') }}" rel="stylesheet">
		<link href="{{ URL::asset('css/posts.css') }}" rel="stylesheet">
	</head>

	<body class="{{ $controller }} {{ $action }}">
		<div class="wrap" id="top">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						@if ($controller == 'Post')
							<a href="{{ URL::route('post.index') }}" class="navbar-brand">
								{{ Html::image('img/joseph-zidell-photo-20.jpeg', 'JZ') }}
								Joseph Zidell's Blog
							</a>
						@else
							<a href="/" class="navbar-brand">
								{{ Html::image('img/joseph-zidell-photo-20.jpeg', 'JZ') }}
								Joseph Zidell
							</a>
						@endif
					</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right" id="navigation">
							@include('common.nav', compact('controller'))
						</ul>
					</div>
				</div>
			</nav>

			@yield('content')

			<footer>
				<div class="container">&copy;{{ date('Y') }} Joseph Zidell</div>
			</footer>
		</div>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
		<script type="text/javascript" src="{{ URL::asset("js/bootstrap.min.js") }}"></script>
		<script type="text/javascript" src="{{ URL::asset("js/jquery.singlePageNav.min.js") }}"></script>
		<script type="text/javascript" src="{{ URL::asset("js/jquery.scrollTo.min.js") }}"></script>
		<script type="text/javascript" src="{{ URL::asset("js/jquery.localScroll.min.js") }}"></script>
		<script type="text/javascript" src="{{ URL::asset("js/jquery.validate.min.js") }}"></script>
		<script type="text/javascript" src="{{ URL::asset("js/josephzidell.js") }}"></script>
		<script type="text/javascript" src="{{ URL::asset("css/pygments-monokai.css") }}"></script>

		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-46733757-1']);
		  _gaq.push(['_setDomainName', 'josephzidell.com']);
		  _gaq.push(['_setAllowLinker', true]);
		  _gaq.push(['_trackPageview']);

		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
		<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript">
  (function() {
	var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	po.src = 'https://apis.google.com/js/platform.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

	</body>
</html>