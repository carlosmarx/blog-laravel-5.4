@extends('layouts.template')

@section('content')
  <h2>
    {{ $post->title }}
  </h2>

  @if(count($post->tags))
    <ul>
    @foreach($post->tags as $tag)
      <li><a href="/posts/tags/{{ $tag->name }}">{{ $tag->name }}</a></li>
    @endforeach
    </ul>
  @endif

  <p class="lead">
    by <a href="#">Carlos Marx</a>
  </p>
  <p><span class="glyphicon glyphicon-time"></span> Posted on {{-- August 28, 2013 at 10:00 PM --}} {{ $post->created_at }}</p>
  <hr>
  <p>{{ $post->body }}</p>
  <a class="btn btn-primary" href="{{ url('/') }}">Back to List Posts <span class="glyphicon glyphicon-chevron-right"></span></a>

  <hr>

  <div class="comments">
    <h2>Comments</h2>
    <hr>
    <ul class="list-group">
      @foreach($post->comments as $comment)
        <li class="list-group-item">
          <strong>{{ $comment->created_at->diffForHumans() }}: </strong>
          {{ $comment->body }}

        </li>
      @endforeach
    </ul>
  </div>

  <hr>
  {{-- Add a comment --}}
  <div class="card">
    <div class="card-block">
      @include('layouts.partials.errors')
      <form method="POST" action="/posts/{{$post->id}}/comments">
        {{ csrf_field() }}
        <div class="form-group">
          <textarea class="form-control" name="body" placeholder="Your comment here..."></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-success">Add Comment</button>
        </div>
      </form>
    </div>
  </div>
@endsection

