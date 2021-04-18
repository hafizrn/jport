@extends('layouts.app')

@section('pageTitle', 'Registration')
@section('content')



<div class="padding-bottom-90 access-page-bg" style="margin-top: 80px">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="access-form">
                    <div class="form-header">
                        <h5><i data-feather="edit"></i>{{ __('Register') }}</h5>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div class="form-group">
                            <select name="role_id" id="user-role" class="form-control">
                                <option>Your Account For</option>
                                <option value="3">Employer</option>
                                <option value="4">JobSeeker</option>
                            </select>
                        </div>
                        <button type="submit" class="button primary-bg btn-block">
                            {{ __('Register') }}
                        </button>
                    </form>
                    <br/>
                    <div class="form-group">
                        <label for="user-role">If already registered: </label>
                        
                        <a href="{{ route('login') }}">Login</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
