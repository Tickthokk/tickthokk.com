@extends('app')

@section('body-class', 'thinner')

@section('content')

	<h1>My Skills</h1>
	<h2 class='h1-bonus text-success'>Experience, Cunning, Prowess, Moxie</h2>

	<hr>

	<section>

		<a name='fullstack'></a>
		<h3><i class='icon icon-cubes'></i> Fullstack Web Development</h3>

		<p class='lead'>
			Jack of all trades.
			{{-- Don't index this part; make it blind to bots --}}
			@if ( ! (isset($_SERVER['HTTP_USER_AGENT']) && preg_match('/bot|crawl|slurp|spider/i', $_SERVER['HTTP_USER_AGENT'])))
			<s>Master of none.</s>
			@endif
		</p>

		<p>
			I love being involved in every step of a website's creation: from making sure every database table has appropriate indexes, to making sure every screen viewport looks great.
		</p>

		<p class='margin-top-20'>
			<strong>What I do:</strong>
		</p>

		<ul>
			<li>
				senior <a href='#frontend'>front-end</a> and <a href='#backend'>back-end</a> development.  Set me loose on a project and it'll be done faster than you can say <abbr data-toggle='tooltip' title='Just to be clear, I haven&#39;t touched a WYSIWYG since 2003'>WYSIWYG</abbr>
			</li>
			<li>
				lead co-workers to victory by championing the team's coding standards, exploring new technologies and refactoring inefficient code
			</li>
			<li>
				document <em>everything</em>.  <a href='https://en.wikipedia.org/wiki/Bus_factor' target='_blank'>Bus factor</a> is a real thing
			</li>
			<li>
				gets to the bottom of the business logic to understand the core impact that the application should produce
			</li>
			<li>
				likewise, understand the needs of the end user/customer and provide a top notch experience for them
			</li>
			<li>
				provide appropriate and fair time estimates/quotes, while delivering projects ahead of schedule
			</li>
			<li>
				coordinate with designers, project managers and department heads
			</li>
			<li>
				continue support of all projects after launch and provide upgrades as necessary
			</li>
		</ul>

	</section>

	<hr>

	<section>

		<a name='backend'></a>
		<h3><i class='icon icon-code'></i> Back End Web Development</h3>

		<p class='lead'>I've been a PHP programmer for <abbr data-toggle='tooltip' title='Since 2003!'>{{ date('Y') - 2003 }} years</abbr>; professionally for <abbr data-toggle='tooltip' title='My first official Web Dev job was in 2005, right after I graduated with Honors!'>{{ date('Y') - 2005 }}</abbr>.</p>

		<p>
			My first passion of Fullstack begins with Back End development. Whether it's a typical business application, or a super cool <a href='http://ffxivcrafting.com/' target='_blank'>video game tool</a> that the <a href='http://www.reddit.com/r/ffxivcrafting' target='_blank'>community</a> <abbr data-toggle='tooltip' title='Granted, most of the things on the subreddit are bug reports, but all of the comments have been super positive :)'>loves</abbr></a>, I love creating things and watching them live on!
		</p>

		<p class='margin-top-20'>
			<strong>What I do:</strong>
		</p>

		<ul>
			<li>
				senior development of custom PHP web applications, primarily using Laravel
			</li>
			<li>
				regex wizard; I do things <a href='https://regexcrossword.com/challenges/hamlet/puzzles/1' target='_blank'>like this</a> for fun
			</li>
			<li>
				perfectly create and maintain relational <a href='http://www.mysql.com/' target='_blank'>MySQL</a> databases
			</li>
			<li>
				automate everything humanly possible with bash scripts
			</li>
			<li>
				struggle with the concept of organizing my server knowledge in this section or to save it for <a href='#devops'>DevOps</a>
			</li>
		</ul>

		<p class='margin-top-20'>
			<strong>What I've done:</strong>
		</p>

		<ul>
			<li>
				"rolled my own" PHP framework.  I wouldn't recommend it, but it was an excellent learning experience
			</li>
			<li>
				<abbr data-toggle='tooltip' title='this was 1999 we&#39;re talking about here'>started programming</abbr> on a TI-83 Plus (BASIC), then moved onto Perl before settling with PHP
			</li>
		</ul>

	</section>

	<hr>

	<section>

		<a name='frontend'></a>
		<h3><i class='glyphicon glyphicon-picture'></i> Front End Web Development</h3>

		<p class='lead'>I've been messing with HTML and CSS for <abbr data-toggle='tooltip' title='Since 2001!'>{{ date('Y') - 2001 }} years</abbr>.</p>

		<p>
			I started web development because I wanted to make a Text Based MMORPG similar to <abbr data-toggle='tooltip' title='I can&#39;t believe the site is still active'>Alien AA</abbr>.  I liked that game so much I had a <abbr data-toggle='tooltip' title='Mr. Thokk&#39;s AAA Tips'>tips site</abbr> dedicated to it.  The site died a long time ago, but <a href='http://www.angelfire.com/comics/alienaa/Links.html' target='_blank' data-toggle='tooltip' title='Second banner'>relics</a> and <a href='http://www.geocities.ws/sephiroth172/Links.html' target='_blank' data-toggle='tooltip' title='Top link under Game Related Sites'>references</a> still <a href='http://www.tbns.net/infinitypro/links2.html' target='_blank' data-toggle='tooltip' title='Halway down the page, blue banner'>exist</a> to this day.
		</p>

		<p>
			But a lot has changed since 2001.
		</p>

		<p class='margin-top-20'>
			<strong>What I do:</strong>
		</p>

		<ul>
			<li>
				senior development of JavaScript, CSS3 and HTML5, primarily utilizing jQuery, SASS and Bootstrap
			</li>
			<li>
				full integration of code minification/optimization using <a href='http://gruntjs.com/' target='_blank'>Grunt</a> and <a href='http://gulpjs.com/' target='blank'>Gulp</a>
			</li>
			<li>
				create fully responsive applications that work on <abbr data-toggle='tooltip' title='Except Opera Mini. Seriously, it doesn&#39;t support anything'>every device</abbr>
			</li>
		</ul>

		<p class='margin-top-20'>
			<strong>What I've done:</strong>
		</p>

		<ul>
			<li>
				Organized, maintained and written 90% of the CSS and JavaScript for a multi-million dollar property
			</li>
		</ul>

	</section>

	<hr>

	<section>

		<a name='devops'></a>
		<h3><i class='icon icon-database'></i> DevOps</h3>

		<p class='lead'>
			A healthy dollop of experience.
		</p>

		<p>
			Most of my DevOps experience has been via the necessity to fill a roll.  Two positions in a row, a member leaves and I happily picked up the DevOps pieces.
		</p>

		<p class='margin-top-20'>
			<strong>What I do:</strong>
		</p>

		<ul>
			<li>
				manage servers/hosting of business critical operations
			</li>
			<li>
				quickly respond to server related errors, alarms, etc
			</li>
			<li>
				administrate local development Vagrant environments so the whole team is on the same page
			</li>
			<li>
				respond in an agile manner towards all team objectives
			</li>
		</ul>
	</section>

	<hr>

	<section>

		<a name='buzzwords'></a>
		<h3><i class='glyphicon glyphicon-star'></i> Rundown</h3>

		<p class='lead'>To make sure you can find everything I'm capable of, here's a rundown of technologies that I'm awesome at.</p>

		<div class='well'>
			<div class='row margin-bottom-20'>
				<div class='col-xs-12 col-sm-4'>
					<h4>Fullstack</h4>
				</div>
				<div class='col-xs-12 col-sm-8'>
					<span class='label label-primary'>Git</span>
					<span class='label label-primary'>Version Control</span>
					<span class='label label-primary'>GitHub</span>
					<span class='label label-primary'>BitBucket</span>
					<span class='label label-primary'>GitLab</span>
					<span class='label label-primary'>SVN</span>
					<span class='label label-primary'>Agile Development</span>
					<span class='label label-primary'>Benchmarking</span>
					<span class='label label-primary'>Data Modeling</span>
				</div>
			</div>
			<div class='row margin-bottom-20'>
				<div class='col-xs-12 col-sm-4'>
					<h4>Back End</h4>
				</div>
				<div class='col-xs-12 col-sm-8'>
					<span class='label label-success'>PHP</span>
					<span class='label label-success'>HHVM</span>
					<span class='label label-success'>Laravel</span>
					<span class='label label-success'>MVC</span>
					<span class='label label-success'>MySQL</span>
					<span class='label label-success'>Redis</span>
					<span class='label label-success'>Memcached</span>
					<span class='label label-success'>CDN</span>
					<span class='label label-success'>RESTful</span>
					<span class='label label-success'>API</span>
					<span class='label label-success'>Data Mining</span>
					<span class='label label-success'>CodeIgniter</span>
				</div>
			</div>
			<div class='row margin-bottom-20'>
				<div class='col-xs-12 col-sm-4'>
					<h4>Front End</h4>
				</div>
				<div class='col-xs-12 col-sm-8'>
					<span class='label label-info'>CSS3</span>
					<span class='label label-info'>SASS</span>
					<span class='label label-info'>JavaScript</span>
					<span class='label label-info'>jQuery</span>
					<span class='label label-info'>MooTools</span>
					<span class='label label-info'>Responsive</span>
					<span class='label label-info'>Bootstrap</span>
					<span class='label label-info'>Web Storage</span>
					<span class='label label-info'>Font Icons</span>
					<span class='label label-info'>Mobile</span>
					<span class='label label-info'>Responsive Emails</span>
					<span class='label label-info'>Markdown</span>
					<span class='label label-info'>Handlebars</span>
					<span class='label label-info'>Grunt</span>
					<span class='label label-info'>Gulp</span>
					<span class='label label-info'>Minification</span>
					<span class='label label-info'>Compression</span>
					<span class='label label-info'>UI</span>
					<span class='label label-info'>UX</span>
					<span class='label label-info'>SEO</span>
					<span class='label label-info'>XML</span>
					<span class='label label-info'>Polyfill</span>
					<span class='label label-info'>Ajax</span>
					<span class='label label-info'>JSON</span>
					<span class='label label-info'>Freemarker</span>
				</div>
			</div>
			<div class='row margin-bottom-20'>
				<div class='col-xs-12 col-sm-4'>
					<h4>DevOps</h4>
				</div>
				<div class='col-xs-12 col-sm-8'>
					<span class='label label-danger'>Bash shell</span>
					<span class='label label-danger'>Apache</span>
					<span class='label label-danger'>NGINX</span>
					<span class='label label-danger'>Cloud Hosting</span>
					<span class='label label-danger'>Rackspace</span>
					<span class='label label-danger'>New Relic</span>
					<span class='label label-danger'>Vagrant</span>
				</div>
			</div>
			<div class='row margin-bottom-20'>
				<div class='col-xs-12 col-sm-4'>
					<h4>General</h4>
				</div>
				<div class='col-xs-12 col-sm-8'>
					<span class='label label-default'>eCommerce</span>
					<span class='label label-default'>LAMP</span>
					<span class='label label-default'>Linux</span>
					<span class='label label-default'>Mac</span>
					<span class='label label-default'>Windows</span>
					<span class='label label-default'>Unicode</span>
					<span class='label label-default'>Google Analytics</span>
					<span class='label label-default'>Ghost.io</span>
					<span class='label label-default'>MailChimp</span>
				</div>
			</div>
		</div>

	</section>

@stop