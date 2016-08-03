<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		{{-- Thanks http://realfavicongenerator.net/ --}}
		<link rel="apple-touch-icon" sizes="57x57" href="/img/favicons/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/img/favicons/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/img/favicons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/img/favicons/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/img/favicons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/img/favicons/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/img/favicons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/img/favicons/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/img/favicons/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="/img/favicons/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="/img/favicons/favicon-194x194.png" sizes="194x194">
		<link rel="icon" type="image/png" href="/img/favicons/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="/img/favicons/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="/img/favicons/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="/img/favicons/manifest.json">
		<link rel="mask-icon" href="/img/favicons/safari-pinned-tab.svg" color="#2f0233">
		{{-- <link rel="shortcut icon" href="/favicon.ico"> --}}
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/img/favicons/mstile-144x144.png">
		{{-- <meta name="msapplication-config" content="browserconfig.xml"> --}}
		<meta name="theme-color" content="#ffffff">

		<title>@yield('title', 'Nicholas Wright - Fullstack Web Developer')</title>
		<meta name="description" content="@section('description', 'nicholas, wright, nick, web, developer, full stack, fullstack, dev ops, devops')">

		<link rel="apple-touch-icon" href="apple-touch-icon.png">

		<link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="{{ elixir('css/app.css') }}" />

		<script src="js/vendor/modernizr-2.8.3.min.js"></script>

		<script src="https://use.fonticons.com/8c7c85a6.js"></script>

	</head>
	<body class='@yield('body-class', 'normal')'>
		<!--[if lt IE 9]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

		<aside class='site-sidebar'>
			<div class='bg'></div>
			<a href='/' class='person'>
				<div class='avatar'>
					<img src='/img/avatar.jpg' alt='Nicholas Wright' class='img-circle' width='152' height='152'>
				</div>
				<div class='details'>
					<h1 class='person-name'>Nick Wright</h1>
					<h2 class='person-title'>Fullstack <span class='nowrap'>Web Developer</span></h2>
				</div>
			</a>
			<div class='content'>
				<nav>
					<ul>
						{{--  class='active' --}}
						<li>
							<a href='/skills'>My Skills<i class='icon icon-angle-right'></i></a>
						</li>
						<li>
							<a href='/blog'>Dev Journal<i class='icon icon-angle-right'></i></a>
						</li>
						<li>
							<a href='/playground'>Playground<i class='icon icon-angle-right'></i></a>
						</li>
						<li>
							<a href='/portfolio'>Portfolio<i class='icon icon-angle-right'></i></a>
						</li>
						<li>
							<a href='/inspiration'>Inspiration<i class='icon icon-angle-right'></i></a>
						</li>
						<li>
							<a href='/resume'>Resume<i class='icon icon-angle-right'></i></a>
						</li>
					</ul>
				</nav>
				<div class='social'>
					<div class='title'>Get in touch</div>
					<div class='icons'>
						<a href='mailto:nickwright@outlook.com' class='icon icon-envelope-square' rel='tooltip' data-toggle='tooltip' title='mail: nickwright@outlook.com' target='_blank'></a>
						<a href='https://twitter.com/Tickthokk' class='icon icon-twitter-square' rel='tooltip' data-toggle='tooltip' title='Twitter' target='_blank'></a>
						<a href='https://github.com/Tickthokk' class='icon icon-github-square' rel='tooltip' data-toggle='tooltip' title='GitHub Profile' target='_blank'></a>
						<a href='https://www.linkedin.com/pub/nicholas-wright/b/8a3/119' class='icon icon-linkedin-square' rel='tooltip' data-toggle='tooltip' title='LinkedIn Profile' target='_blank'></a>
					</div>
				</div>
				{{--
				<div class='journal'>

				</div>
				--}}
			</div>
		</aside>

		<div class='body'>
			<div class='site'>
				<div class='inner'>
					@yield('content')
				</div>
			</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="{{ elixir('js/app.js') }}"></script>

		{{-- Google Analytics: change UA-XXXXX-X to be your site's ID. --}}
		<script>
			(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
			function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
			e=o.createElement(i);r=o.getElementsByTagName(i)[0];
			e.src='https://www.google-analytics.com/analytics.js';
			r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
			ga('create','UA-43830923-2','auto');ga('send','pageview');
		</script>
	</body>
</html>
