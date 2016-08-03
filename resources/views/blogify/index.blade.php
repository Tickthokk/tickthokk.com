@extends('app')

@section('body-class', 'thinner')

@section('content')
	@if(count($posts) <= 0)
	<h1>No Posts found</h1>
	<h2>
		There are currently no posts found.
	</h2>
	@else
	<h1>Dev Journal</h1>
	<h2 class='h1-bonus text-success'>Memoir, Almanac, Periodical, Momento</h2>
	<hr>
	@endif

	@foreach($posts as $post)
	<article class='post'>
		<h3><a href="{{route('blog.show', [$post->slug])}}" class="post-title">{{$post->title}}</a></h3>

		{!! $post->content !!}

		<div class="post-details">
			@if(0 && count($post->tag) > 0 )
			<p>
				<small><em>Posted in <strong>{{$post->category->name}}</strong></em> on {{ $post->publish_date }}</small>
			</p>
			<p>
				<small><strong>Tags:</strong></small>
			</p>
			@endif
			<p id="tags">
				<span class='label label-primary'>{{$post->category->name}}</span>
				<span class='label label-info'>{{ date('m/d/y', strtotime($post->publish_date)) }}</span>
				@if( count($post->tag) > 0 )
					@foreach ( $post->tag as $tag )
						<span class="tag {{$tag->hash}} label label-default">{{ $tag->name }}</span>
					@endforeach
				@endif
			</p>
		</div>

		@if (0)
		<div class="row">
			<div class="col-md-6 col-xs-12">
				<?php $number_of_comments = 0; ?>
				@foreach($post->comment as $comment)
					@if($comment->revised == 2)
						<?php $number_of_comments++; ?>
					@endif
				@endforeach
				@if ($number_of_comments > 0)
				<small><a href="{{route('blog.show', [$post->slug])}}">{{$number_of_comments}} comments</a></small>
				@endif
			</div>
			<div class="col-md-6 col-xs-12 text-right">
				<small>Posted on {{$post->publish_date}} by {{$post->user->fullName}}</small>
			</div>
		</div>
		@endif
	</article>
	@endforeach

	<div class="row">
		<div class="col-md-12">
			{!! $posts->render() !!}
		</div>
	</div>
@stop