@extends('frontend.layout')

@section('content')

  

<h2>Login</h2>

    <!-- Page Content -->
    <section class="py-5">
      <div class="container">
        @include('common.alert')
  @include('common.form_error')
        <form method="POST" action="{{ route('user.login.post') }}">
          @csrf
        
        
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input name="password" type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-2">Checkbox</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Example checkbox
        </label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </div>
</form>
      </div>
    </section>



   
@endsection   