@extends('layouts.template')

@section('content')
  
  <div class="col-md-6 col-md-offset-3">
        @include('layouts.partials.errors')
        <div class="panel panel-login">
          <div class="panel-heading">
            <div class="row">
                <a href="#" class="active" id="login-form-link">Login</a>
            </div>
            <hr>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <form id="register-form" action="/login" method="POST" role="form">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Sign In">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
 
@endsection
