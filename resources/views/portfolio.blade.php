@extends('app')

@section('body-class', 'normal')

@section('content')

	<h1>My Portfolio</h1>
	<h2 class='h1-bonus text-success'>Experience, Archive, Momento, Primer</h2>

	<hr>

	<ul class='portfolio-timeline'>
		{{-- CAAS --}}
		<li class='project'>
			<div class='date'>
				<time>In Development</time>
			</div>
			<div class='contents'>
				<div class='text'>
					<a href='//craftingasaservice.com/' class='project-link' target='_blank'>
						<div class='project-title'>CraftingAsAService.com</div>
						<div class='project-subtitle'>Crafting information and planning for <em>all</em> crafting games</div>
					</a>
					<p>
						<em>Domain currently redirects to an existing project.</em> Inspired from the specificity of <a href='http://ffxivcrafting.com/'>FFXIVCrafting.com</a>, which offers the same type of solution, but is a broader platform to support all games.
					</p>
					<p>
						Currently in development, big plans await this project.
					</p>

					<div class='technologies'>
						<div class='title'>Technologies used</div>
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
				</div>
				<div class='image'>
					<img src='/img/portfolio/caas-preview.png' alt='CraftingAsAService.com' class='img-responsive'>
				</div>
			</div>
		</li>
		{{-- FFXIV --}}
		<li class='project'>
			<div class='date'>
				<time class='from'>Sept 2013</time>
				<time class='to'>Now</time>
			</div>
			<div class='contents'>
				<div class='text'>
					<a href='//ffxivcrafting.com/' class='project-link' target='_blank'>
						<div class='project-title'>FFXIVCrafting.com</div>
						<div class='project-subtitle'>Crafting information and planning for Final Fantasy 14</div>
					</a>
					<p>
						Crafting items is a big part of the game.  My tool assists others to utilize their time wisely by organizing their crafting into steps.
					</p>
					<p>
						Started in September 2013 shortly after the game's 2.0 patch.  The community was very supportive and I've been updating it since.  Users donate on a regular basis, and some claim they can't live without it.
					</p>

					<div class='technologies'>
						<div class='title'>Technologies used</div>
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
				</div>
				<div class='image'>
					<a href='//ffxivcrafting.com/' target='_blank'>
						<img src='/img/portfolio/ffxivcrafting-preview.png' alt='FFXIVCrafting.com' class='img-responsive'>
					</a>
				</div>
			</div>
		</li>
		{{-- Legrand --}}
		<li class='project'>
			<div class='date'>
				<time class='from'>February 2012</time>
				<time class='to'>Now</time>
			</div>
			<div class='contents -solo'>
				<div class='text'>
					<a href='//legrand.us/' class='project-link' target='_blank'>
						<div class='project-title'>Employment with Legrand, NA</div>
						<div class='project-subtitle'>Web Developer III - Moraine, OH</div>
					</a>
				</div>
			</div>
			<div class='contents'>
				<div class='text'>
					<a href='//c2g.com/' class='project-link' target='_blank'>
						<div class='project-title'>CablesToGo.com</div>
						<div class='project-subtitle'>Including C2G.com and related subdomains</div>
					</a>
					<p>
						As a primary focus to drive eCommerce, I implemented a responsive design suitable for all browsers and devices, even supporting IE8 until early 2017.
					</p>
					<p>
						With a backend built on Java/SAP/CRM, interfacing with a separate team to deliver a great experience had it's own set of challenges.  We could not rely on a standard backend system or framework to do things for the frontend team.  I built a lot of PHP &amp; Linux backend customization to allow us to work on the front end.
					</p>

					<div class='technologies'>
						<div class='title'>Technologies used</div>
						<ul class='tech-icons'>
							<li><i class='tech-icon-bootstrap' data-toggle='tooltip' title='Bootstrap'></i></li>
							<li><i class='tech-icon-sass' data-toggle='tooltip' title='SASS'></i></li>
							<li><i class='tech-icon-sublime' data-toggle='tooltip' title='Sublime'></i></li>
							<li><i class='tech-icon-jquery' data-toggle='tooltip' title='jQuery'></i></li>
							<li><i class='tech-icon-php' data-toggle='tooltip' title='PHP'></i></li>
							<li><i class='tech-icon-css3' data-toggle='tooltip' title='CSS 3'></i></li>
							<li><i class='tech-icon-html5' data-toggle='tooltip' title='HTML 5'></i></li>
							<li><i class='tech-icon-shellscript' data-toggle='tooltip' title='Shell/Bash'></i></li>
							<li><i class='tech-icon-grunt' data-toggle='tooltip' title='Grunt'></i></li>
							<li><i class='tech-icon-gulp' data-toggle='tooltip' title='Gulp'></i></li>
							<li><i class='tech-icon-github' data-toggle='tooltip' title='GitHub'></i></li>
						</ul>
					</div>
				</div>
				<div class='image'>
					<img src='/img/portfolio/cablestogo-preview.png' alt='CablesToGo.com' class='img-responsive'>
				</div>
			</div>
			<div class='contents'>
				<div class='text'>
					<a href='//blog.cablestogo.com/' class='project-link' target='_blank'>
						<div class='project-title'>Blog.CablesToGo.com</div>
					</a>
					<p>
						Built with Ghost.io this subdomain integrates with the primary site seamlessly.  As Ghost is a node based system, it only runs on Nginx.  All of our sites at the time were Apache, so I was challenged with having both running simultaneously.
					</p>

					<div class='technologies'>
						<div class='title'>Technologies used</div>
						<ul class='tech-icons'>
							<li><i class='tech-icon-nodejs' data-toggle='tooltip' title='NodeJS'></i></li>
							<li><i class='tech-icon-php' data-toggle='tooltip' title='PHP'></i></li>
							<li><i class='tech-icon-shellscript' data-toggle='tooltip' title='Shell/Bash'></i></li>
							<li><i class='tech-icon-apache' data-toggle='tooltip' title='Apache'></i></li>
							<li><i class='tech-icon-nginx' data-toggle='tooltip' title='Nginx'></i></li>
						</ul>
					</div>
				</div>
				<div class='image'>
					<img src='/img/portfolio/cablestogo-blog-preview.png' alt='Blog.CablesToGo.com' class='img-responsive'>
				</div>
			</div>
			<div class='contents'>
				<div class='text'>
					<a href='//search.cablestogo.com/' class='project-link' target='_blank'>
						<div class='project-title'>Search.CablesToGo.com</div>
					</a>
					<p>
						Interfacing with a third party (ThanxMedia) we were able to use Laravel to provide a search platform for the primary site.  Like the Blog, great lengths were taken to make it look and feel the same as the primary site.
					</p>

					<div class='technologies'>
						<div class='title'>Technologies used</div>
						<ul class='tech-icons'>
							<li><i class='tech-icon-laravel' data-toggle='tooltip' title='Laravel'></i></li>
							<li><i class='tech-icon-php' data-toggle='tooltip' title='PHP'></i></li>
							<li><i class='tech-icon-redis' data-toggle='tooltip' title='Redis'></i></li>
						</ul>
					</div>
				</div>
				<div class='image'>
					<img src='/img/portfolio/cablestogo-search-preview.png' alt='Search.CablesToGo.com' class='img-responsive'>
				</div>
			</div>
			<div class='contents'>
				<div class='text'>
					<a href='//connect.c2g.com/' class='project-link' target='_blank'>
						<div class='project-title'>Connect.C2G.com</div>
					</a>
					<p>
						A tool built to help end users find a solution to match their connectivity needs.  My first big project with Legrand.  Complicated MySQL queries power the formula to distinguish a cable's A and B ends, length, color, etc and present them to a user.
					</p>

					<div class='technologies'>
						<div class='title'>Technologies used</div>
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
				<div class='image'>
					<img src='/img/portfolio/connectxpress-preview.png' alt='Connect.C2G.com' class='img-responsive'>
				</div>
			</div>
			<div class='contents -solo'>
				<div class='text'>
					<span class='project-link'>
						<div class='project-title'>Internal/Invisible Applications</div>
					</span>
					<p>
						I built and maintained several internal/invisible applications to assist the day to day maintenance and extraneous functionality the above sites, and others, required.
					</p>
				</div>
			</div>
			<div class='contents'>
				<div class='text'>
					<span class='project-link'>
						<div class='project-title'>The Administrator</div>
					</span>
					<p>
						A tool to maintain every other Legrand property mentioned above.
					</p>
					<p>
						Includes everything from CRUD interfaces to Local Network File System Mounting, and a robust ACL system for internal users.
					</p>

					<div class='technologies'>
						<div class='title'>Technologies used</div>
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
				<div class='image'>
					<img src='/img/portfolio/administrator-preview.png' alt='The Administrator' class='img-responsive'>
				</div>
			</div>
			<div class='contents'>
				<div class='text'>
					<span class='project-link'>
						<div class='project-title'>Sales Tools</div>
					</span>
					<p>
						A tool for internal sales representatives to build custom cables for customers, as well as enter bids with the company's Bid Desk for approval.
					</p>
					<p>
						Saving the company an entire employee's role, it also sped up the "speed to quote" bottom line, which has had a positive impact on winning custom cable bids.
					</p>

					<div class='technologies'>
						<div class='title'>Technologies used</div>
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
				<div class='image'>
					<img src='/img/portfolio/salestools-preview.png' alt='Sales Tools' class='img-responsive'>
				</div>
			</div>
			<div class='contents -solo'>
				<div class='text'>
					<span class='project-link'>
						<div class='project-title'>Apps.CablesToGo.com</div>
					</span>
					<p>
						Whenever the Java backend team couldn't fulfill a need, Apps stepped in.  Primarily responding to Ajax calls, it also handled a pretty complicated Asset Versioning system triggered by a Git Hook whenever a pull request was closed.
					</p>

					<div class='technologies'>
						<div class='title'>Technologies used</div>
						<ul class='tech-icons'>
							<li><i class='tech-icon-laravel' data-toggle='tooltip' title='Laravel'></i></li>
							<li><i class='tech-icon-php' data-toggle='tooltip' title='PHP'></i></li>
							<li><i class='tech-icon-redis' data-toggle='tooltip' title='Redis'></i></li>
						</ul>
					</div>
				</div>
			</div>
			<div class='contents'>
				<div class='text'>
					<span class='project-link'>
						<div class='project-title'>Marketing Emails</div>
					</span>
					<p>
						Still in the <code>&lt;table&gt;</code> era, email building can be grueling.  I made it a little easier by implementing a Grunt system that reads Assemble/Handlebar files, then inlines any css and prettify's the result.
					</p>

					<div class='technologies'>
						<div class='title'>Technologies used</div>
						<ul class='tech-icons'>
							<li><i class='tech-icon-grunt' data-toggle='tooltip' title='Grunt'></i></li>
						</ul>
					</div>
				</div>
				<div class='image'>
					<img src='/img/portfolio/cablestogo-emails-preview.png' alt='Marketing Emails' class='img-responsive'>
				</div>
			</div>
			<div class='contents -solo'>
				<div class='text'>
					<span class='project-link'>
						<div class='project-title'>Documentation</div>
					</span>
					<p>
						Any complicated system absolutely requires documentation.  Every system I implemented came with Documentation for my coworkers.
					</p>

					<div class='technologies'>
						<div class='title'>Technologies used</div>
						<ul class='tech-icons'>
							<li><i class='tech-icon-github' data-toggle='tooltip' title='GitHub'></i></li>
						</ul>
					</div>
				</div>
			</div>
		</li>
		{{-- MRC --}}
		<li class='project'>
			<div class='date'>
				<time class='from'>February 2009</time>
				<time class='to'>February 2012</time>
			</div>
			<div class='contents -solo'>
				<div class='text'>
					<a href='//mrcsupplies.com/' class='project-link' target='_blank'>
						<div class='project-title'>Employment with Media Resources Corporation</div>
						<div class='project-subtitle'>Sr. Web Developer - Centerville, OH</div>
					</a>
				</div>
			</div>
			<div class='contents'>
				<div class='text'>
					<a href='//mrcsupplies.com/' class='project-link' target='_blank'>
						<div class='project-title'>MRCSupplies.com</div>
					</a>
					<p>
						Essentially a startup, I worked directly with the Owner on a patent pending idea, I helped develop a system called Hive.  Embarrassingly, the system I invented was a "roll your own" framework.  You learn a lot when doing that, but in hindsight it was not a good idea.  MRCSupplies was both a separate business of the Owner and a customer of the Hive system, which at its core was an eCommerce system.
					</p>
					<p>
						Likewise with the backend framework there was no visual framework (like Bootstrap).
					</p>

					<div class='technologies'>
						<div class='title'>Technologies used</div>
						<ul class='tech-icons'>
							<li><i class='tech-icon-php' data-toggle='tooltip' title='PHP'></i></li>
							<li><i class='tech-icon-mysql' data-toggle='tooltip' title='MySQL'></i></li>
						</ul>
					</div>
				</div>
				<div class='image'>
					<img src='/img/portfolio/mrcsupplies-preview.png' alt='MRCSupplies.com' class='img-responsive'>
				</div>
			</div>
			<div class='contents'>
				<div class='text'>
					<a href='//mrcrepro.com/' class='project-link' target='_blank'>
						<div class='project-title'>MRCRepro.com</div>
					</a>
					<p>
						To support another piece of the Owner's business, this side project helped his reproduction graphics business get organized.  A lot of work involving FTP and user permissions were involved for a customer to manage their architecture bids.
					</p>

					<div class='technologies'>
						<div class='title'>Technologies used</div>
						<ul class='tech-icons'>
							<li><i class='tech-icon-php' data-toggle='tooltip' title='PHP'></i></li>
							<li><i class='tech-icon-mysql' data-toggle='tooltip' title='MySQL'></i></li>
						</ul>
					</div>
				</div>
				<div class='image'>
					<img src='/img/portfolio/mrcrepro-preview.png' alt='MRCRepro.com' class='img-responsive'>
				</div>
			</div>
		</li>
		{{-- Dark Ages --}}
		<li class='project'>
			<div class='date'>
				<time class='from'>2001</time>
				<time class='to'>February 2009</time>
			</div>
			<div class='contents -solo'>
				<div class='text'>
					<span class='project-link'>
						<div class='project-title'>The Dark Ages</div>
						<div class='project-subtitle'>Here There Be Dragons</div>
					</span>
					<p>
						Starting in 2001 I had a personal project based in Perl and MySQL.  Realizing I loved developing, in 2003 I switched from a community college to ITT Tech under their Web Development program.  When I graduated in 2005 I started my professional career.  I jumped around every few years, taking on freelance work, and joining a startup.
					</p>
					<p>
						Could I show you examples of work from this time period?  Sure.  Will I?  I'd rather not.  I hate code I built three years ago; why would I show you code I wrote over seven years ago!  Even scarier: things I had "designed" ten years ago, <strong role='button' data-toggle='popover' data-content='<img src="/img/portfolio/shudder.gif" width="220" height="163">' data-placement='top'>*shudder*</strong>.
					</p>
				</div>
			</div>
		</li>
	</ul>


@stop