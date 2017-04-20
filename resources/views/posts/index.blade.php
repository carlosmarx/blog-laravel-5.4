@extends('layouts.template')

  @section('content')

                {{-- <h1 class="page-header">
                    Posts Index
                    <small>Secondary Text</small>
                </h1> --}}

                <!-- First Blog Post -->
                @foreach($posts as $post)
                    <h2>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }} </a>
                    </h2>
                    <p class="lead">
                        by <a href="#">Carlos Marx</a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> Posted on {{-- August 28, 2013 at 10:00 PM --}} {{ $post->created_at }}</p>
                    <hr>
                    <p>{{ $post->body }}</p>
                    <a class="btn btn-primary" href="/posts/{{ $post->id }}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                    <hr>
                @endforeach
                

                <!-- Pager -->
                @include('layouts.partials.pager')

  @endsection