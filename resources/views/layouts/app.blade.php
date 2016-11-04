<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="_token" content="{{ csrf_token() }}">

		<title>Joseph Zidell - Optimizing Businesses</title>

		<link rel="shortcut icon" href="{{{ asset('img/favicon.ico') }}}">

		<link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet">
		<link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet">
		<link href="{{ URL::asset('css/josephzidell.css') }}" rel="stylesheet">
		<link href="{{ URL::asset('css/posts.css') }}" rel="stylesheet">
	</head>

	<body>
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
						<a href="/" class="navbar-brand">
							{{ Html::image('img/joseph-zidell-photo-20.jpeg', 'JZ') }}
							Joe Zidell
						</a>
					</div>

					<div class="navbar-right btn-group">
						<a class="navbar-btn btn btn-link" title="LinkedIn" href="https://www.linkedin.com/in/josephzidell" target="_blank">
							<i class="fa fa-linkedin"></i>
						</a>
						<a class="navbar-btn btn btn-link" title="Twitter" href="https://twitter.com/JosephZidell" target="_blank">
							<i class="fa fa-twitter"></i>
						</a>
						<a class="navbar-btn btn btn-link" title="GitHub" href="https://github.com/josephzidell" target="_blank">
							<i class="fa fa-github"></i>
						</a>
						<a class="navbar-btn btn btn-link" title="Stack Overflow" href="http://stackoverflow.com/users/2483765/joe-z" target="_blank">
							<i class="fa fa-stack-overflow"></i>
						</a>
					</div>
				</div>
			</nav>

			<div class="container">
				<h1>Cups o' Joe</h1>
				<router-view keep-alive></router-view>
			</div>

			@include('vue.post.list')
			@include('vue.post.view')

			<footer>
				<div class="container">&copy;2014 - {{ date('Y') }} Joseph Zidell</div>
			</footer>
		</div>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
		{{-- <script type="text/javascript" src="{{ URL::asset("js/bootstrap.min.js") }}"></script> --}}
		{{-- <script type="text/javascript" src="{{ URL::asset("js/jquery.singlePageNav.min.js") }}"></script> --}}
		{{-- <script type="text/javascript" src="{{ URL::asset("js/jquery.scrollTo.min.js") }}"></script> --}}
		{{-- <script type="text/javascript" src="{{ URL::asset("js/jquery.localScroll.min.js") }}"></script> --}}
		{{-- <script type="text/javascript" src="{{ URL::asset("js/jquery.validate.min.js") }}"></script> --}}
		{{-- <script type="text/javascript" src="{{ URL::asset("js/josephzidell.js") }}"></script> --}}
		<script src="{{ URL::asset('js/app.js') }}"></script>
		<link rel="stylesheet" href="{{ URL::asset("css/pygments-monokai.css") }}">

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
	window.csrfToken = '{{ csrf_token() }}';
</script>

	</body>
</html>