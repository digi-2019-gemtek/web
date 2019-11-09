@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-group">
                <div class="card p-4">
                    <div class="card-body">
                        <h1>{{__('auth.login')}}</h1>
                        <p class="text-muted">Sign In to your account</p>
                        <form class="user" method="POST" action="{{ route('auth.login') }}">
                            @csrf
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon-user"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="account" name="account" placeholder="{{__('auth.account')}}" value="{{ old('account') }}" required autofocus>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon-lock"></i>
                                    </span>
                                </div>
                                <input type="password" class="form-control" id="password" name="password" placeholder="{{__('auth.password')}}" required>
                            </div>
                            <div class="input-group mb-4">
                                <div class="form-check checkbox">
                                    <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">{{ __('auth.rememberMe') }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary px-4" type="button">{{__('auth.login')}}</button>
                                </div>
                                <div class="col-6 text-right">
                                    <button class="btn btn-link px-0" type="button">{{__('auth.haveForgotPassword')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection