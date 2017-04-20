@extends('layouts.template')

@section('content')
  
  <h1 class="page-header">
    Publish a Post
  </h1>

  @include('layouts.partials.errors')
  
  <form method="POST" action="/posts">

  {{ csrf_field() }}
  
  <div class="form-group">
    <label for="ttle">Title: </label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Post Title">
  </div>
  
  <div class="form-group">
    <label for="body">Body: </label>
    
    <textarea class="form-control" id="body" name="body"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Publish</button>
</form>
@endsection
