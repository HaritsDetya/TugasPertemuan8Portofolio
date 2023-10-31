@extends('porto.main')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
  </head>
  <body>
    <div class="login">
      <div class="form-login">
        <form action="{{ route('authenticate') }}" method="post">
        @csrf
        <div class="frame"></div>
        <div class="login1">
          <div class="button-login">
            <input type="submit" class="login2" value="Login">
          </div>
          <div class="password">
            <label class="password1" for="password">Password</label>
            <input type="password" class="form-control1 @error('password') is-invalid @enderror" id="password" name="password" placeholder="password">
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
          </div>
          <div class="username">
            <label class="password1" for="email">Email</label>
            <input type="email" class="form-control1 @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
          </div>
          <div class="login3">
            <div class="register">Login</div>
          </div>
        </div>
        </form>
      </div>
    </div>
  </body>
</html>








<!-- <div class="justify-content-center row mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header justify-content-center row">Login</div>
            <div class="card-body">
                <form action="{{ route('authenticate') }}" method="post">
                    @csrf
                    <div class="form-floating mb-3 mx-5 row">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="email" value="{{ old('email') }}">
                        <label for="email">Email</label>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div> -->
                    <!-- <div class="form-floating mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email Address</label>
                        <div class="col-md-6">
                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div> -->
                    <!-- <div class="form-floating mb-3 mx-5 row">
                        <input type="password" class="form-control @error('email') is-invalid @enderror" id="password" name="password" placeholder="password"">
                        <label for="password">Password</label>
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div> -->
                    <!-- <div class="mb-3 row">
                        <label for="password" class="col-md-4 col-form-label text-md-end text-start">Password</label>
                        <div class="col-md-6">
                          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div> -->
                    <!-- <div class="justify-content-center mb-3">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>    
</div> -->
    
@endsection