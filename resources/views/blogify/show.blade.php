<?php
use Carbon\Carbon;
?>
@extends('app')

@section('content')

	<h1><span class="post-title">{{$post->title}}</span></h1>

	<hr>

	{!! $post->content !!}

	<hr>

	<div class="post-details">
		<p>
			<small><em>Posted in <strong>{{$post->category->name}}</strong></em> on {{$post->publish_date}}</small>
		</p>
		@if( count($post->tag) > 0 )
		<p>
			<small><strong>Tags:</strong></small>
		</p>
		@endif
		<p id="tags">
			@if( count($post->tag) > 0 )
				@foreach ( $post->tag as $tag )
					<span class="tag {{$tag->hash}}">{{ $tag->name }}</span>
				@endforeach
			@endif
		</p>
	</div>

	{{-- Disable all this stuff, but keep it around --}}
	@if (0)
	<div class="row">
		<div class="col-md-6 col-xs-12">
			<?php $number_of_comments = 0; ?>
			@foreach($post->comment as $comment)
				@if($comment->revised == 2)
					<?php $number_of_comments++; ?>
				@endif
			@endforeach
			<small><a href="{{route('blog.show', [$post->slug])}}">{{$number_of_comments}} comments</a></small>
		</div>
		<div class="col-md-6 col-xs-12 text-right">
			<small>Posted on {{$post->publish_date}} by {{$post->user->fullName}}</small>
		</div>
	</div>

	<h3>Comments</h3>

	@if (Auth::check())
		{!! Form::open( [ 'route' => 'comments.store' ] ) !!}

		<div class="row form-group {{ $errors->has('comment') ? 'has-error' : '' }}">
			<div class="col-sm-12">
				{!! Form::textarea('comment', '', ['class' => 'form-control', 'rows' => 5 ]) !!}
				{!! Form::hidden('post', $post->hash) !!}
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				{!! Form::submit('Add comment', ['class'=>'btn btn-success']) !!}
			</div>
		</div>

		{!! Form::close() !!}

		<hr>
	@endif

	@foreach($post->comment as $comment)
		@if($comment->revised == 2)
			<div class="media">
				<div class="media-left">
					@if($comment->user->profilepicture != null)
						<img class="media-object" src="{{URL::asset($comment->user->profilepicture)}}" alt="..." width="64px" height="64px">
					@else
						<img class="media-object" src="{{URL::asset('assets/blogify/img/profile-icon.png')}}" alt="..." width="64px" height="64px">
					@endif
				</div>
				<div class="media-body">
					<p>
						{!!nl2br($comment->content)!!}
					</p>
					<span class="media-heading"><em>posted  {{\Carbon\Carbon::createFromTimeStamp(strtotime($comment->created_at))->diffForHumans()}} by {{$comment->user->fullName}}</em></span>
				</div>
			</div>
		@endif
	@endforeach
	{{-- endif for if(0) --}}
	@endif

@stop