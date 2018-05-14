@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m10 offset-m1">
            <div class="card white">
                <div class="card-content">
                    <span class="card-title">{{ __('Login') }}</span>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <br>
                        <div class="row">
                            <div class="input-field">
                                    <input placeholder="Email" id="email" type="email" name="email" value="{{ old('email') }}" class="validate">
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    <label for="email">E-mail</label>
                            </div>
    
                            <div class="input-field">
                                    <div class="input-field">
                                        <input placeholder="Password" id="password" type="password" name="password" value="" class="validate">
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        <label for="password">Password</label>
                                    </div>
                            </div>
                        </div>

                
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="waves-effect waves-light btn-small">
                                    {{ __('Login') }}
                                </button>

                                <a class="waves-effect waves-light btn-small" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
