@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m10 offset-m1">
            <div class="card white">
                <div class="card-content">
                <span class="card-title">{{ __('Register') }}</span>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <br>
                        <div class="input-field">
                            
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>
                            
                            @if ($errors->has('name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                            <label for="name">{{ __('Name') }}</label>
                        </div>

                        <div class="input-field">
                            <input id="email" type="email" class="validate form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                            
                            @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                            <label for="email">{{ __('E-Mail Address') }}</label>
                        </div>

                        <div class="input-field">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                            <label for="password"> {{ __('Password') }}</label>
                        </div>

                        <div class="input-field">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            <label for="password-confirm"> {{ __('Confirm Password') }}</label>
                        </div>

                        <div class="input-field mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
