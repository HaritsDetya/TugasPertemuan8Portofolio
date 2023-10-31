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
      <div class="form-register">
        <!-- {{-- send email --}}
        @if (session('status'))
            <div class="alert alert-primary" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('postemail') }}" method="post"> -->
        <form action="{{ route('store') }}" method="post">
        @csrf
        <div class="frame1"></div>
        <div class="frame2">
          <div class="button-register">
            <input type="submit" class="login2" value="Register">
          </div>
          <div class="confirm-password">
            <label class="confirm-password1" for="password_confirmation">Confirm Password</label>
            <input type="password" class="form-control2 @error('password') is-invalid @enderror" id="password_confirmation" placeholder="password_confirmation">
          </div>
          <div class="password2">
            <label class="confirm-password1" for="password">Password</label>
            <input type="password" class="form-control2 @error('password') is-invalid @enderror" id="password" placeholder="password">
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
          </div>
          <div class="email">
            <label class="confirm-password1" for="email">Email</label>
            <input type="email" class="form-control2 @error('email') is-invalid @enderror" id="email" placeholder="email" value="{{ old('email') }}">
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
          </div>
          <div class="username2">
            <label class="confirm-password1" for="name">Username</label>
            <input type="text" class="form-control2 @error('name') is-invalid @enderror" id="name" placeholder="name" value="{{ old('name') }}">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
          </div>
          <div class="register4">
            <div class="register5">Register</div>
          </div>
        </div>
        </form>
      </div>
    </div>
  </body>
</html>

<!-- <div class="row mt-5">
<div class="register">
        <div class="form-register">
        <form action="{{ route('store') }}" method="post">
            @csrf
            <div class="form-register-child"></div>
            <div class="register2">
                <div class="register-child"></div>
                <div class="register3">Register</div>
            </div>
            <div class="form-floating username mb-3 row">
                <div class="username-child"></div>
                <input type="text" class="form-control username1 @error('name') is-invalid @enderror" id="name" placeholder="name" value="{{ old('name') }}">
                <label for="name">Name</label>
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="form-floating email mb-3 row">
                <div class="username-child"></div>
                <input type="email" class="form-control username1 @error('email') is-invalid @enderror" id="email" placeholder="email" value="{{ old('email') }}">
                <label for="email">Email</label>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-floating password mb-3 row">
                <div class="username-child"></div>
                <input type="password" class="form-control username1 @error('password') is-invalid @enderror" id="password" placeholder="password">
                <label for="password">Password</label>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="form-floating mb-3 row confirm-password">
                <input type="password" class="form-control username1" id="password_confirmation" placeholder="password_confirmation">
                <label for="password_confirmation">Confirm Password</label>
            </div>
            <div class="button-register mb-3 row">
                <input type="submit" class="col-md-3 offset-md-5 btn btn-primary register1" value="Register">
            </div>
        </form>
        </div>
</div>
</div> -->
@endsection