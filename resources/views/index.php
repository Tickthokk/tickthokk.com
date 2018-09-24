<!DOCTYPE html>
<html lang="en">
<head>
	<title>Nicholas Wright - Full Stack Web Developer</title>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

	<!-- FontAwesome JS -->
	<script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>

	<!-- Global CSS -->
	<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">

	<!-- github calendar css -->
	<link rel="stylesheet" href="plugins/github-calendar/dist/github-calendar.css">
	<!-- github acitivity css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/2.0.2/octicons.min.css">
	<link rel="stylesheet" href="plugins/github-activity/github-activity-0.1.5.min.css">

	<!-- Theme CSS -->
	<link id="theme-style" rel="stylesheet" href="css/styles.css">

</head>

<body>
	<!-- ******HEADER****** -->
	<header class="header">
		<div class="container clearfix">
			<img class="profile-image img-fluid float-left" src="images/profile.png" alt="Nick Wright">
			<div class="profile-content float-left">
				<h1 class="name">Nick Wright</h1>
				<h2 class="desc">Full Stack Web Developer &amp; DevOps</h2>
				<ul class="social list-inline">
					<li class="list-inline-item"><a href="https://twitter.com/tickthokk"><i class="fab fa-twitter"></i></a></li>
					<li class="list-inline-item"><a href="https://www.linkedin.com/in/tickthokk/"><i class="fab fa-linkedin-in"></i></a></li>
					<li class="list-inline-item"><a href="https://github.com/tickthokk"><i class="fab fa-github-alt"></i></a></li>
					<li class="list-inline-item"><a href="https://stackoverflow.com/users/286467/tickthokk"><i class="fab fa-stack-overflow"></i></a></li>
					<li class="list-inline-item last-item"><a href="https://codepen.io/Tickthokk/"><i class="fab fa-codepen"></i></a></li>
				</ul>
			</div><!--//profile-->
			<a class="btn btn-cta-primary float-right" href="mailto:tickthokk@gmail.com" target="_blank"><i class="fas fa-paper-plane"></i> Contact Me</a>
		</div><!--//container-->
	</header><!--//header-->

	<div class="container sections-wrapper">
		<div class="row">
			<div class="primary col-lg-8 col-12">
				<section class="about section">
					<div class="section-inner">
						<h2 class="heading">About Me</h2>
						<div class="content">
							<p>I love being involved in every step of a website's creation: from making sure a database table has its appropriate indexes, to every viewport looking great. Set me loose on a project and it'll be done faster than you can say <abbr data-toggle='tooltip' title='Just to be clear, I haven&#39;t touched a WYSIWYG since 2003'>WYSIWYG</abbr>.</p>
						</div><!--//content-->
					</div><!--//section-inner-->
				</section><!--//section-->

			   <section class="latest section">
					<div class="section-inner">
						<h2 class="heading">Latest Projects</h2>
						<div class="content">

							<div class="item featured text-center">
								<h3 class="title"><a href="https://craftingasaservice.com/" target="_blank">Crafting as a Service</a></h3>
								<p class="summary">Crafting information and planning for <em>every</em> game!</p>
								<div class="featured-image has-ribbon">
									<a href="https://craftingasaservice.com/" target="_blank">
									<img class="img-fluid project-image" src="images/projects/caas-preview.jpg" alt="Crafting as a Service">
									</a>
									<div class="ribbon">
										<div class="text">New</div>
									</div>
								</div>

								<div class="desc text-left">
									<p>
										<em>Domain currently redirects to an existing project.</em> Inspired from the specificity of <a href='http://ffxivcrafting.com/'>FFXIVCrafting.com</a>, CaaS will offer the same type of solution, but is a broader platform to support all games.
									</p>
									<p>
										Currently in development, big plans await this project.
									</p>
								</div><!--//desc-->
								<a class="btn btn-cta-secondary" href="https://patreon.com/craftingasaservice" target="_blank"><i class="fab fa-patreon"></i> Check out the Patreon page</a>

								<div class='technologies mt-3'>
									<ul class='tech-icons'>
										<li><i class='tech-icon-laravel' data-toggle='tooltip' title='Laravel'></i></li>
										<li><i class='tech-icon-bootstrap' data-toggle='tooltip' title='Bootstrap'></i></li>
										<li><i class='tech-icon-sass' data-toggle='tooltip' title='SASS'></i></li>
										<li><i class='tech-icon-mysql' data-toggle='tooltip' title='MySQL'></i></li>
										<li><i class='tech-icon-sublime' data-toggle='tooltip' title='Sublime'></i></li>
										<li><i class='tech-icon-jquery' data-toggle='tooltip' title='jQuery'></i></li>
										<li><i class='tech-icon-php' data-toggle='tooltip' title='PHP'></i></li>
										<li><i class='tech-icon-redis' data-toggle='tooltip' title='Redis'></i></li>
										<li><i class='tech-icon-css3' data-toggle='tooltip' title='CSS 3'></i></li>
										<li><i class='tech-icon-html5' data-toggle='tooltip' title='HTML 5'></i></li>
										<li><i class='tech-icon-gulp' data-toggle='tooltip' title='Gulp'></i></li>
									</ul>
								</div>
							</div><!--//item-->
							<hr class="divider">

							<div class="item row">
								<a class="col-md-4 col-12" href="https://ffxivcrafting.com/" target="_blank">
								<img class="img-fluid project-image" src="images/projects/ffxivcrafting-preview.png" alt="FFXIVCrafting">
								</a>
								<div class="desc col-md-8 col-12">
									<h3 class="title"><a href="https://ffxivcrafting.com/" target="_blank">FFXIVCrafting - Crafting information and planning</a></h3>
									<p class="mb-2">
										Crafting items is a big part of the game.  My tool assists others to utilize their time wisely by organizing their crafting into steps.
									</p>
									<p class="mb-2">
										Started in September 2013 shortly after the game's 2.0 patch.  The community was very supportive and I've been updating it since.  Some users claim they can't live without it.
									</p>
									<p class='mb-2'><a class="more-link" href="https://ffxivcrafting.com/" target="_blank"><i class="fas fa-external-link-alt"></i>Visit Tool</a> <a class="more-link ml-3" href="https://github.com/FFXIVCrafting/ffxivcrafting" target="_blank"><i class="fas fa-external-link-alt"></i>View on GitHub</a></p>

									<div class='technologies mt-3'>
										<ul class='tech-icons'>
											<li><i class='tech-icon-laravel' data-toggle='tooltip' title='Laravel'></i></li>
											<li><i class='tech-icon-bootstrap' data-toggle='tooltip' title='Bootstrap'></i></li>
											<li><i class='tech-icon-sass' data-toggle='tooltip' title='SASS'></i></li>
											<li><i class='tech-icon-mysql' data-toggle='tooltip' title='MySQL'></i></li>
											<li><i class='tech-icon-sublime' data-toggle='tooltip' title='Sublime'></i></li>
											<li><i class='tech-icon-jquery' data-toggle='tooltip' title='jQuery'></i></li>
											<li><i class='tech-icon-php' data-toggle='tooltip' title='PHP'></i></li>
											<li><i class='tech-icon-redis' data-toggle='tooltip' title='Redis'></i></li>
											<li><i class='tech-icon-css3' data-toggle='tooltip' title='CSS 3'></i></li>
											<li><i class='tech-icon-html5' data-toggle='tooltip' title='HTML 5'></i></li>
										</ul>
									</div>
								</div><!--//desc-->
							</div><!--//item-->

						</div><!--//content-->
					</div><!--//section-inner-->
				</section><!--//section-->

				<!-- <section class="projects section">
					<div class="section-inner">
						<h2 class="heading">Other Projects</h2>
						<div class="content">
							<div class="item">
								<h3 class="title"><a href="https://ffxivcrafting.com/">FFXIVCrafting.com</a> <span class="badge badge-theme">Free</span></h3>
								<p class="summary">
									Crafting items is a big part of the game.  My tool assists others to utilize their time wisely by organizing their crafting into steps.
								</p>
								<p class="summary">
									Started in September 2013 shortly after the game's 2.0 patch.  The community was very supportive and I've been updating it since.  Users donate on a regular basis, and some claim they can't live without it.
								</p>
								<p><a class="more-link" href="https://github.com/FFXIVCrafting/ffxivcrafting" target="_blank"><i class="fas fa-external-link-alt"></i>View on GitHub</a></p>
							</div>

							<a class="btn btn-cta-secondary" href="https://codepen.io/Tickthokk/">More on CodePen <i class="fas fa-chevron-right"></i></a>

						</div>
					</div>
				</section> -->

				<section class="experience section">
					<div class="section-inner">
						<h2 class="heading">Work Experience</h2>
						<div class="content">
							<div class="item">
								<h3 class='title'>
									Web Developer III - <span class="place"><a href='https://legrand.us/'>Legrand</a></span> <span class="year">(2012 - Present)</span>
								</h3>
								<ul class='mb-3'>
									<li>Quickly became the resident expert in MySQL, filling a gap they were not aware existed</li>
									<li>Worked with a team of developers who shared ideas constantly</li>
									<li>Developed and delivered customer facing web applications</li>
									<li>Maintained several domains and properties</li>
								</ul>

								<div class='technologies mb-3'>
									<ul class='tech-icons'>
										<li><i class='tech-icon-apache' data-toggle='tooltip' title='Apache'></i></li>
										<li><i class='tech-icon-bootstrap' data-toggle='tooltip' title='Bootstrap'></i></li>
										<li><i class='tech-icon-css3' data-toggle='tooltip' title='CSS 3'></i></li>
										<li><i class='tech-icon-github' data-toggle='tooltip' title='GitHub'></i></li>
										<li><i class='tech-icon-gulp' data-toggle='tooltip' title='Gulp'></i></li>
										<li><i class='tech-icon-html5' data-toggle='tooltip' title='HTML 5'></i></li>
										<li><i class='tech-icon-jquery' data-toggle='tooltip' title='jQuery'></i></li>
										<li><i class='tech-icon-laravel' data-toggle='tooltip' title='Laravel'></i></li>
										<li><i class='tech-icon-mysql' data-toggle='tooltip' title='MySQL'></i></li>
										<li><i class='tech-icon-nginx' data-toggle='tooltip' title='Nginx'></i></li>
										<li><i class='tech-icon-nodejs' data-toggle='tooltip' title='NodeJS'></i></li>
										<li><i class='tech-icon-php' data-toggle='tooltip' title='PHP'></i></li>
										<li><i class='tech-icon-redis' data-toggle='tooltip' title='Redis'></i></li>
										<li><i class='tech-icon-sass' data-toggle='tooltip' title='SASS'></i></li>
										<li><i class='tech-icon-shellscript' data-toggle='tooltip' title='Shell/Bash'></i></li>
										<li><i class='tech-icon-sublime' data-toggle='tooltip' title='Sublime'></i></li>
									</ul>
								</div>

								<details>
									<summary>Expand for project details!</summary>

									<div class='card mt-3'>
										<div class='card-header'>
											<strong class='text-muted'>
												CablesToGo.com <small>including C2G.com and related subdomains</small>
											</strong>
										</div>
										<div class='card-body'>
											<p>
												As a primary focus to drive eCommerce, I implemented a responsive design suitable for all browsers and devices, even supporting IE8 until early 2017.
											</p>
											<p>
												With a backend built on Java/SAP/CRM, interfacing with a separate team to deliver a great experience had it's own set of challenges.  We could not rely on a standard backend system or framework to do things for the frontend team.  I built a lot of PHP &amp; Linux backend customization to allow us to work on the front end.
											</p>
										</div>
										<div class='card-footer'>
											<div class='technologies'>
												<ul class='tech-icons'>
													<li><i class='tech-icon-bootstrap' data-toggle='tooltip' title='Bootstrap'></i></li>
													<li><i class='tech-icon-sass' data-toggle='tooltip' title='SASS'></i></li>
													<li><i class='tech-icon-sublime' data-toggle='tooltip' title='Sublime'></i></li>
													<li><i class='tech-icon-jquery' data-toggle='tooltip' title='jQuery'></i></li>
													<li><i class='tech-icon-php' data-toggle='tooltip' title='PHP'></i></li>
													<li><i class='tech-icon-css3' data-toggle='tooltip' title='CSS 3'></i></li>
													<li><i class='tech-icon-html5' data-toggle='tooltip' title='HTML 5'></i></li>
													<li><i class='tech-icon-shellscript' data-toggle='tooltip' title='Shell/Bash'></i></li>
													<li><i class='tech-icon-gulp' data-toggle='tooltip' title='Gulp'></i></li>
													<li><i class='tech-icon-github' data-toggle='tooltip' title='GitHub'></i></li>
												</ul>
											</div>
										</div>
									</div>

									<div class='card mt-3'>
										<div class='card-header'>
											<strong class='text-muted'>
												Blog.CablesToGo.com
											</strong>
										</div>
										<div class='card-body'>
											<p>
												Built with Ghost.io this subdomain integrates with the primary site seamlessly.  As Ghost is a node based system, it only runs on Nginx.  All of our sites at the time were Apache, so I was challenged with having both running simultaneously.
											</p>
										</div>
										<div class='card-footer'>
											<div class='technologies'>
												<ul class='tech-icons'>
													<li><i class='tech-icon-nodejs' data-toggle='tooltip' title='NodeJS'></i></li>
													<li><i class='tech-icon-php' data-toggle='tooltip' title='PHP'></i></li>
													<li><i class='tech-icon-shellscript' data-toggle='tooltip' title='Shell/Bash'></i></li>
													<li><i class='tech-icon-apache' data-toggle='tooltip' title='Apache'></i></li>
													<li><i class='tech-icon-nginx' data-toggle='tooltip' title='Nginx'></i></li>
												</ul>
											</div>
										</div>
									</div>

									<div class='card mt-3'>
										<div class='card-header'>
											<strong class='text-muted'>
												Search.CablesToGo.com
											</strong>
										</div>
										<div class='card-body'>
											<p>
												Interfacing with a third party (ThanxMedia) we were able to use Laravel to provide a search platform for the primary site.  Like the Blog, great lengths were taken to make it look and feel the same as the primary site.
											</p>
										</div>
										<div class='card-footer'>
											<div class='technologies'>
												<ul class='tech-icons'>
													<li><i class='tech-icon-laravel' data-toggle='tooltip' title='Laravel'></i></li>
													<li><i class='tech-icon-php' data-toggle='tooltip' title='PHP'></i></li>
													<li><i class='tech-icon-redis' data-toggle='tooltip' title='Redis'></i></li>
												</ul>
											</div>
										</div>
									</div>

									<div class='card mt-3'>
										<div class='card-header'>
											<strong class='text-muted'>
												Connect.C2G.com
											</strong>
										</div>
										<div class='card-body'>
											<p>
												A tool built to help end users find a solution to match their connectivity needs.  My first big project with Legrand.  Complicated MySQL queries power the formula to distinguish a cable's A and B ends, length, color, etc and present them to a user.
											</p>
										</div>
										<div class='card-footer'>
											<div class='technologies'>
												<ul class='tech-icons'>
													<li><i class='tech-icon-laravel' data-toggle='tooltip' title='Laravel'></i></li>
													<li><i class='tech-icon-bootstrap' data-toggle='tooltip' title='Bootstrap'></i></li>
													<li><i class='tech-icon-sass' data-toggle='tooltip' title='SASS'></i></li>
													<li><i class='tech-icon-mysql' data-toggle='tooltip' title='MySQL'></i></li>
													<li><i class='tech-icon-php' data-toggle='tooltip' title='PHP'></i></li>
													<li><i class='tech-icon-redis' data-toggle='tooltip' title='Redis'></i></li>
												</ul>
											</div>
										</div>
									</div>

									<div class='card mt-3'>
										<div class='card-header'>
											<strong class='text-muted'>
												The Administrator <small>Internal</small>
											</strong>
										</div>
										<div class='card-body'>
											<p>
												A tool to maintain every other Legrand property mentioned above.
											</p>
											<p>
												Includes everything from CRUD interfaces to Local Network File System Mounting, and a robust ACL system for internal users.
											</p>
										</div>
										<div class='card-footer'>
											<div class='technologies'>
												<ul class='tech-icons'>
													<li><i class='tech-icon-laravel' data-toggle='tooltip' title='Laravel'></i></li>
													<li><i class='tech-icon-sass' data-toggle='tooltip' title='SASS'></i></li>
													<li><i class='tech-icon-mysql' data-toggle='tooltip' title='MySQL'></i></li>
													<li><i class='tech-icon-jquery' data-toggle='tooltip' title='jQuery'></i></li>
													<li><i class='tech-icon-php' data-toggle='tooltip' title='PHP'></i></li>
													<li><i class='tech-icon-redis' data-toggle='tooltip' title='Redis'></i></li>
												</ul>
											</div>
										</div>
									</div>

									<div class='card mt-3'>
										<div class='card-header'>
											<strong class='text-muted'>
												Sales Tools <small>Internal</small>
											</strong>
										</div>
										<div class='card-body'>
											<p>
												A tool for internal sales representatives to build custom cables for customers, as well as enter bids with the company's Bid Desk for approval.
											</p>
											<p>
												Saving the company an entire employee's role, it also sped up the "speed to quote" bottom line, which has had a positive impact on winning custom cable bids.
											</p>
										</div>
										<div class='card-footer'>
											<div class='technologies'>
												<ul class='tech-icons'>
													<li><i class='tech-icon-laravel' data-toggle='tooltip' title='Laravel'></i></li>
													<li><i class='tech-icon-sass' data-toggle='tooltip' title='SASS'></i></li>
													<li><i class='tech-icon-mysql' data-toggle='tooltip' title='MySQL'></i></li>
													<li><i class='tech-icon-jquery' data-toggle='tooltip' title='jQuery'></i></li>
													<li><i class='tech-icon-php' data-toggle='tooltip' title='PHP'></i></li>
													<li><i class='tech-icon-redis' data-toggle='tooltip' title='Redis'></i></li>
												</ul>
											</div>
										</div>
									</div>

									<div class='card mt-3'>
										<div class='card-header'>
											<strong class='text-muted'>
												Apps.CablesToGo.com <small>Pseudo-internal</small>
											</strong>
										</div>
										<div class='card-body'>
											<p>
												Whenever the Java backend team couldn't fulfill a need, Apps stepped in.  Primarily responding to Ajax calls, it also handled a pretty complicated Asset Versioning system triggered by a Git Hook whenever a pull request was closed.
											</p>
										</div>
										<div class='card-footer'>
											<div class='technologies'>
												<ul class='tech-icons'>
													<li><i class='tech-icon-laravel' data-toggle='tooltip' title='Laravel'></i></li>
													<li><i class='tech-icon-php' data-toggle='tooltip' title='PHP'></i></li>
													<li><i class='tech-icon-redis' data-toggle='tooltip' title='Redis'></i></li>
												</ul>
											</div>
										</div>
									</div>

									<div class='card mt-3'>
										<div class='card-header'>
											<strong class='text-muted'>
												Miscellaneous
											</strong>
										</div>
										<div class='card-body'>
											<p>
												<em>Marketing Emails</em>
											</p>

											<p>
												Still in the <code>&lt;table&gt;</code> era, email building can be grueling.  I made it a little easier by implementing a Grunt system (later rewritten to Gulp) that reads Assemble/Handlebar files, then inlines any css and prettify's the result.
											</p>
											<p>
												<em>Documentation</em>
											</p>

											<p>
												Any complicated system absolutely requires documentation.  Every system I implemented came with Documentation for my current and future coworkers.
											</p>
										</div>
										<div class='card-footer'>
											<div class='technologies'>
												<ul class='tech-icons'>
													<li><i class='tech-icon-gulp' data-toggle='tooltip' title='Gulp'></i></li>
													<li><i class='tech-icon-github' data-toggle='tooltip' title='GitHub'></i></li>
												</ul>
											</div>
										</div>
									</div>

								</details>

							</div><!--//item-->
							<div class="item mt-5">
								<h3 class="title">
									Sr. Web Developer - <span class="place"><a href='https://mrcsupplies.com/'>Media Resources Corporation</a></span> <span class="year">(2009 - 2012)</span>
								</h3>

								<ul>
									<li>Originally hired on a contractual basis and within a year promoted to project lead</li>
									<li>Worked with a close-knit group to develop a web application based on a patent pending idea</li>
									<li>Developed application to the point of marketability and provided customer support</li>
									<li>Developed side projects which saved the company $20,000 a year</li>
									<li>Continued to assist after end of employment, including server support and software related bug fixes</li>
								</ul>

								<div class='technologies mb-3'>
									<ul class='tech-icons'>
										<li><i class='tech-icon-php' data-toggle='tooltip' title='PHP'></i></li>
										<li><i class='tech-icon-mysql' data-toggle='tooltip' title='MySQL'></i></li>
										<li><i class='tech-icon-apache' data-toggle='tooltip' title='Apache'></i></li>
									</ul>
								</div>

								<details>
									<summary>Expand for project details!</summary>

									<div class='card mt-3'>
										<div class='card-header'>
											<strong class='text-muted'>
												MRCSupplies.com
											</strong>
										</div>
										<div class='card-body'>
											<p>
												Essentially a startup, I worked directly with the Owner on a patent pending idea, I helped develop a system called Hive.  Embarrassingly, the system I invented was a "roll your own" framework.  You learn a lot when doing that, but in hindsight it was not a good idea.  MRCSupplies was both a separate business of the Owner and a customer of the Hive system, which at its core was an eCommerce system.
											</p>
											<p>
												Likewise with the backend framework there was no visual framework (like Bootstrap).
											</p>
										</div>
										<div class='card-footer'>
											<div class='technologies'>
												<ul class='tech-icons'>
													<li><i class='tech-icon-php' data-toggle='tooltip' title='PHP'></i></li>
													<li><i class='tech-icon-mysql' data-toggle='tooltip' title='MySQL'></i></li>
												</ul>
											</div>
										</div>
									</div>

									<div class='card mt-3'>
										<div class='card-header'>
											<strong class='text-muted'>
												MRCRepro.com
											</strong>
										</div>
										<div class='card-body'>
											<p>
												To support another piece of the Owner's business, this side project helped his reproduction graphics business get organized.  A lot of work involving FTP and user permissions were involved for a customer to manage their architecture bids.
											</p>
										</div>
										<div class='card-footer'>
											<div class='technologies'>
												<ul class='tech-icons'>
													<li><i class='tech-icon-php' data-toggle='tooltip' title='PHP'></i></li>
													<li><i class='tech-icon-mysql' data-toggle='tooltip' title='MySQL'></i></li>
												</ul>
											</div>
										</div>
									</div>

								</details>

							</div><!--//item-->

							<div class="item mt-5">
								<h3 class="title">
									Jr. Web Developer - <span class="place"><a href="https://interbrand.com/">Interbrand Design Forum</a></span> <span class="year">(2008)</span>
								</h3>
								<ul>
									<li>Troubleshot and repaired legacy Visual Basic programs and Access databases</li>
									<li>Rebuilt existing Visual Basic/Access programs as web applications</li>
									<li>Created new internal web applications</li>
									<li>Continued to assist company after end of employment</li>
								</ul>
							</div><!--//item-->

						</div><!--//content-->
					</div><!--//section-inner-->
				</section><!--//section-->

				<section class="projects section">
					<div class="section-inner">
						<h2 class="heading">Other Projects</h2>
						<div class="content">
							<div class="item">
								<h3 class="title">The Dark Ages - Here There Be Dragons <span class='year'>(2001 - 2009)</span></h3>
								<p>
									Starting in 2001 I had a personal project based in Perl and MySQL.  Realizing I loved developing, in 2003 I switched from a community college to ITT Tech under their Web Development program.  When I graduated in 2005 I started my professional career.  I jumped around every few years, occassionally taking on freelance work, and joining a startup.
								</p>
								<p>
									Could I show you examples of work from this time period?  Sure, but let's face it, I hate code I built three years ago; why would I want to display code I wrote a decade ago!  Even scarier: there are things I had "designed" ten years ago, <strong role='button' data-toggle='popover' data-content='<img src="/images/shudder.gif" width="220" height="163">' data-placement='top'>*shudder*</strong>.
								</p>
							</div>

							<a class="btn btn-cta-secondary" href="https://codepen.io/Tickthokk/">More Mini-Projects on CodePen <i class="fas fa-chevron-right"></i></a>

						</div>
					</div>
				</section>
				<section class="github section">
					<div class="section-inner">
						<h2 class="heading">My GitHub</h2>
						<div id="github-graph" class="github-graph"></div>
						<div id="ghfeed" class="ghfeed"></div>
					</div><!--//secton-inner-->
				</section><!--//section-->
			</div><!--//primary-->
			<div class="secondary col-lg-4 col-12">
				 <aside class="info aside section">
					<div class="section-inner">
						<h2 class="heading sr-only">Basic Information</h2>
						<div class="content">
							<ul class="list-unstyled">
								<li><i class="fas fa-map-marker-alt"></i><span class="sr-only">Location:</span>Dayton, OH</li>
								<li><i class="fas fa-envelope"></i><span class="sr-only">Email:</span><a href="#">tickthokk@gmail.com</a></li>
								<li><i class="fas fa-link"></i><span class="sr-only">Website:</span><a href="https://craftingasaservice.com">https://craftingasaservice.com</a></li>
								<li><i class="fas fa-link"></i><span class="sr-only">Website:</span><a href="https://ffxivcrafting.com">https://ffxivcrafting.com</a></li>
								<li><i class="fas fa-link"></i><span class="sr-only">Website:</span><a href="https://tickthokk.com">https://tickthokk.com</a></li>
							</ul>
						</div><!--//content-->
					</div><!--//section-inner-->
				</aside><!--//aside-->

				<aside class="skills aside section">
					<div class="section-inner">
						<h2 class="heading">Primary Skills</h2>
						<div class="content">
							<p class="intro">
								My first passion of Full Stack begins with Back End development. I love creating things and watching them live on!
							</p>

							<div class="skillset">

								<div class="item">
									<h3 class="level-title">PHP &amp; Laravel<span class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true" title="PHP has been my primary language since 2003!"><i class="fas fa-info-circle"></i>Expert</span></h3>
									<div class="level-bar">
										<div class="level-bar-inner" data-level="96%">
										</div>
									</div><!--//level-bar-->
								</div><!--//item-->

								<div class="item">
									<h3 class="level-title">Javascript &amp; jQuery<span class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true" title="Ask me about my ISEA ideology!"><i class="fas fa-info-circle"></i>Expert</span></h3>
									<div class="level-bar">
										<div class="level-bar-inner" data-level="96%">
										</div>
									</div><!--//level-bar-->
								</div><!--//item-->

								<div class="item">
									<h3 class="level-title">HTML5, CSS3 &amp; SASS<span class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true" title="Mixins, Mixins everywhere!"><i class="fas fa-info-circle"></i>Expert</span></h3>
									<div class="level-bar">
										<div class="level-bar-inner" data-level="96%">
										</div>
									</div><!--//level-bar-->
								</div><!--//item-->

								<div class="item">
									<h3 class="level-title">DevOps<span class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true" title="I've always been 'the server guy'"><i class="fas fa-info-circle"></i>Pro</span></h3>
									<div class="level-bar">
										<div class="level-bar-inner" data-level="85%">
										</div>
									</div><!--//level-bar-->
								</div><!--//item-->

								<p><a class="more-link" href="https://coderwall.com/tickthokk"><i class="fas fa-external-link-alt"></i>More on Coderwall</a></p>
							</div>
						</div><!--//content-->
					</div><!--//section-inner-->
				</aside><!--//section-->

				<aside class="skills aside section">
					<div class="section-inner">
						<h2 class="heading">All Skills</h2>
						<div class="content">
							<p class="intro">
								Technologies that I'm awesome at!
							</p>

							<h4 class='mt-3'>Full Stack</h4>

							<div>
								<span class='badge badge-primary'>Git</span>
								<span class='badge badge-primary'>Version Control</span>
								<span class='badge badge-primary'>GitHub</span>
								<span class='badge badge-primary'>BitBucket</span>
								<span class='badge badge-primary'>GitLab</span>
								<span class='badge badge-primary'>SVN</span>
								<span class='badge badge-primary'>Agile Development</span>
								<span class='badge badge-primary'>Benchmarking</span>
								<span class='badge badge-primary'>Data Modeling</span>
							</div>

							<h4 class='mt-3'>Back End</h4>

							<div>
								<span class='badge badge-success'>PHP</span>
								<span class='badge badge-success'>HHVM</span>
								<span class='badge badge-success'>Laravel</span>
								<span class='badge badge-success'>MVC</span>
								<span class='badge badge-success'>MySQL</span>
								<span class='badge badge-success'>Redis</span>
								<span class='badge badge-success'>Memcached</span>
								<span class='badge badge-success'>CDN</span>
								<span class='badge badge-success'>RESTful</span>
								<span class='badge badge-success'>API</span>
								<span class='badge badge-success'>Data Mining</span>
								<span class='badge badge-success'>CodeIgniter</span>
							</div>

							<h4 class='mt-3'>Front End</h4>

							<div>
								<span class='badge badge-info'>CSS3</span>
								<span class='badge badge-info'>SASS</span>
								<span class='badge badge-info'>JavaScript</span>
								<span class='badge badge-info'>jQuery</span>
								<span class='badge badge-info'>MooTools</span>
								<span class='badge badge-info'>Responsive</span>
								<span class='badge badge-info'>Bootstrap</span>
								<span class='badge badge-info'>Web Storage</span>
								<span class='badge badge-info'>Font Icons</span>
								<span class='badge badge-info'>Mobile</span>
								<span class='badge badge-info'>Responsive Emails</span>
								<span class='badge badge-info'>Markdown</span>
								<span class='badge badge-info'>Handlebars</span>
								<span class='badge badge-info'>Grunt</span>
								<span class='badge badge-info'>Gulp</span>
								<span class='badge badge-info'>Minification</span>
								<span class='badge badge-info'>Compression</span>
								<span class='badge badge-info'>UI</span>
								<span class='badge badge-info'>UX</span>
								<span class='badge badge-info'>SEO</span>
								<span class='badge badge-info'>XML</span>
								<span class='badge badge-info'>Polyfill</span>
								<span class='badge badge-info'>Ajax</span>
								<span class='badge badge-info'>JSON</span>
								<span class='badge badge-info'>Freemarker</span>
								<span class='badge badge-info'>XPath</span>
							</div>

							<h4 class='mt-3'>DevOps</h4>

							<div>
								<span class='badge badge-danger'>Bash shell</span>
								<span class='badge badge-danger'>Apache</span>
								<span class='badge badge-danger'>NGINX</span>
								<span class='badge badge-danger'>Cloud Hosting</span>
								<span class='badge badge-danger'>Rackspace</span>
								<span class='badge badge-danger'>New Relic</span>
								<span class='badge badge-danger'>Vagrant</span>
								<span class='badge badge-danger'>Fail2Ban</span>
							</div>

							<h4 class='mt-3'>General</h4>

							<div>
								<span class='badge badge-default'>eCommerce</span>
								<span class='badge badge-default'>LAMP</span>
								<span class='badge badge-default'>Linux</span>
								<span class='badge badge-default'>Mac</span>
								<span class='badge badge-default'>Windows</span>
								<span class='badge badge-default'>Unicode</span>
								<span class='badge badge-default'>Google Analytics</span>
								<span class='badge badge-default'>Ghost.io</span>
								<span class='badge badge-default'>MailChimp</span>
							</div>

						</div><!--//content-->
					</div><!--//section-inner-->
				</aside><!--//section-->

				<!-- <aside class="testimonials aside section">
					<div class="section-inner">
						<h2 class="heading">Testimonials</h2>
						<div class="content">
							<div class="item">
								<blockquote class="quote">
									<p><i class="fas fa-quote-left"></i>Nick is an excellent software engineer and he is passionate about what he does. You can totally count on him to deliver your projects!</p>
								</blockquote>
								<p class="source"><span class="name">Tim Adams</span><br><span class="title">Curabitur commodo</span></p>
							</div>

							<p><a class="more-link" href="https://www.linkedin.com/in/tickthokk/"><i class="fas fa-external-link-alt"></i>More on Linkedin</a></p>

						</div>
					</div>
				</aside> -->

				<aside class="education aside section">
					<div class="section-inner">
						<h2 class="heading">Education</h2>
						<div class="content">
							<div class="item">
								<h3 class="title"><i class="fas fa-graduation-cap"></i> AAS Web Development</h3>
								<h4 class="university">ITT Technical Institute <span class="year">(2003-2005)</span></h4>
							</div><!--//item-->
						</div><!--//content-->
					</div><!--//section-inner-->
				</aside><!--//section-->

			</div><!--//secondary-->
		</div><!--//row-->
	</div><!--//masonry-->

	<!-- Javascript -->
	<script type="text/javascript" src="plugins/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="plugins/popper.min.js"></script>
	<script type="text/javascript" src="plugins/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="plugins/jquery-rss/dist/jquery.rss.min.js"></script>
	<!-- github calendar plugin -->
	<script type="text/javascript" src="plugins/github-calendar/dist/github-calendar.min.js"></script>
	<!-- github activity plugin -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.2/mustache.min.js"></script>
	<script type="text/javascript" src="plugins/github-activity/github-activity-0.1.5.min.js"></script>
	<!-- custom js -->
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>