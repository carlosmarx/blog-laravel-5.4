@extends('layouts.template')

@section('content')
  <h2>
    {{ $post->title }}
  </h2>
  <p class="lead">
    by <a href="#">Carlos Marx</a>
  </p>
  <p><span class="glyphicon glyphicon-time"></span> Posted on {{-- August 28, 2013 at 10:00 PM --}} {{ $post->created_at }}</p>
  <hr>
  <p>{{ $post->body }}</p>
  <a class="btn btn-primary" href="{{ url('/') }}">Back to List Posts <span class="glyphicon glyphicon-chevron-right"></span></a>

  <hr>
@endsection

