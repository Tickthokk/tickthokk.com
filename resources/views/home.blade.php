@extends('app')

@section('body-class', 'splash')

@section('content')
	<div class='splash'>
		<div class='splash-inner'>

			<h1>Hi, I'm Nick.</h1>

			<h2>I am a Web Developer specializing in <strong class='nowrap'>Fullstack Development</strong> with a hint of <strong>DevOps</strong>.<h2>

			<h3>Located in <i class='icon icon-map-marker'></i> Dayton, Ohio.</h3>

			<div class='buttons'>
				<p>
					<a href='/skills' class='btn btn-lg btn-default'>My Skills</a>
					<a href='/portfolio' class='btn btn-lg btn-default'>Portfolio</a>
				</p>
				<p>
					<a href='/blog' class='btn btn-lg btn-default'>Journal</a>
					<a href='/playground' class='btn btn-lg btn-default'>Playground</a>
				</p>
			</div>
		</div>
	</div>
@stop