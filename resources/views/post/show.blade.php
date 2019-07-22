@extends('layout.master')

@section('content')

	<div class="col-md-8 blog-main">

		<h1>{{ $post->title }}</h1>

		@if (count($post->tags))

			<ul>
				@foreach($post->tags as $tag)
					<li>
						<a href="/post/tags/{{ $tag->name }}">
							{{ $tag->name }}
						</a>
					</li>
				@endforeach
			</ul>

		@endif

		{{ $post->body }}

		<hr>

		<div class="comment">

			<ul class="list-group">

				@foreach ($post->comments as $comment)

					<li class="list-group-item">
						<strong>
							{{ $comment->user()->get()->implode('name') }}
							{{ $comment->created_at->diffForHumans() }}: &nbsp;
						</strong>

						{{ $comment->body }}
					</li>

				@endforeach

			</ul>
			
		</div>

		<hr>

		<div class="card">

			<div class="card-block">
				

				<form method="POST" action="/post/{{ $post->id }}/comments">
					{{ csrf_field()}}


					<div class="form-group">
						<textarea id="body" name="body" class="form-control" placeholder="Add comment here"></textarea>
					</div>

					@if(Auth::check())

						<div class="form-group">
						  	<button type="submit" class="btn btn-primary">Add comment</button>
						</div>

					@else
						<div class="form-group">
							<div class="alert alert-danger">
								&nbsp;Sign up to comment.
							</div>	
						</div>
					@endif

					@include('layout.errors')

				</form>

				

			</div>

		</div>
		

	</div>


@endsection