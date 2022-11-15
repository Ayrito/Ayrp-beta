@extends('layouts.app')

@section('content')


<div class="modal-content center" style="padding-right: 30%; padding-left: 30%;">
        <h4>{{ __('Login Form') }}</h4>
        <br>

        <form method="POST" action="{{ route('login') }}">
		@csrf

            <div class="input-field">
                <i class="material-icons prefix">email</i>
				<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <label for="email">{{ __('E-Mail Address') }}</label>
				@error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <br>

            <div class="input-field">
                <i class="material-icons prefix">lock</i>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
				<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
				@error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <br>

            <label class="form-check-label left" for="remember">
				<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <span for="remember">{{ __('Remember Me') }}</span>
            </label>
            <br>
            <br>

			<button type="submit" class="btn btn-large">
                {{ __('Login') }}
            </button>

            <div class="row">
                <div class="input-field col s6 m6 l6">
                    <p class="margin left medium-small"><a href="{{ route('register') }}">{{ __('Register Now!') }}</a></p>
                </div>
                <div class="input-field col s6 m6 l6">
				@if (Route::has('password.request'))
                    <p class="margin right-align medium-small">
					<a class="margin right-align medium-small" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
					</a>
					</p>
				@endif
                </div>
            </div>
        </form>
</div>
               
@endsection
