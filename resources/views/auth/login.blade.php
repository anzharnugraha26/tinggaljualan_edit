@extends('layouts.app')
@section('title')
    Login Page
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Silahkan Login</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}
                                {{-- <a class="btn btn-primary" href="{{url("/auth/google")}}">Login With Google</a> --}}
                            </div>
                            
                            <div class="col-md-8 offset-md-4" style="margin-top: 20px">
                                <a class="btn btn-primary" href="{{url("/auth/google")}}" style="background-color: white;"><img src="{{asset('img/google.png')}}">  <label style="color: black"> Login With Google</label></a>
                            </div>
                            <div class="col-md-8 offset-md-3">
                                <a class="btn btn-link" href="{{url("/register")}}">
                                Belum Punya Akun ? Silahkan register terlebih dahulu
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@if(Session::has('belum_login'))
<script>
Swal.fire({
    icon: 'error',
    title: 'Anda belum login atau register',
    text: 'Anda Belum Login Atau Register',
    text: 'Silahkan Login atau Register untuk melanjutkan !!',
    // footer: 'Silahkan Login atau Register untuk melanjutkan'
  })
</script>
@endif
@endsection
