@extends('layouts.app')

@section('pageTitle', 'Login')
@section('content')


<div class="padding-top-90 padding-bottom-90 access-page-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="access-form">
                        <div class="form-header">
                            <h5><i data-feather="user"></i>{{ __('Login') }}</h5>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="more-option">
                                <div class="mt-0 terms">
                                    <input class="custom-radio" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember">
                                        <span class="dot"></span> {{ __('Remember Me') }}
                                    </label>
                                </div>
                                 @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            <button type="submit" class="button primary-bg btn-block">{{ __('Login') }}</button>
                        </form>
                        <div class="shortcut-login">
    
                            <p>Don't have an account? <a href="/register">Register</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

































<hr>
=======  Employer Login Email: e4@admin.com<br/>
=======  Employer Login Password: 123456<br/><br/>
<hr>
<hr>
=======  Job Seeker Login Email: jobsr@admin.com<br/>
=======  Job Seeker Login Password: 123456<br/><br/>
<hr>
@endsection
