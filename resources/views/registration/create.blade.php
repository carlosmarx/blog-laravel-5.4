@extends('layouts.template')

@section('content')
  
  <h1 class="page-header">
    Registrate a user
  </h1>

  @include('layouts.partials.errors')
  
  <form method="POST" action="/register">

  {{ csrf_field() }}
  
  <div class="form-group">
    <label for="name">Name: </label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Your name" required>
  </div>

  <div class="form-group">
    <label for="email">Email: </label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Your email" required>
  </div>

  <div class="form-group">
    <label for="password">Password: </label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>

  <div class="form-group">
    <label for="password_confirmation">Password Confirm: </label>
    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
  </div>

  <button type="submit" class="btn btn-primary">Register</button>
</form>
@endsection
