@extends('layouts.app')

@section('content')


<div class="container">
<div class="container">
<div class="content col s12 m3 container">
        <h5 class="center">{{ __('Register Form') }}</h5>
        <br>

        <form method="POST" action="{{ route('register') }}">
		@csrf

            <div class="input-field">
                <i class="material-icons prefix">person</i>
				<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                <label for="name">{{ __('Name') }}</label>
				@error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @enderror
            </div>
            <br>
			
			<div class="input-field">
                <i class="material-icons prefix">email</i>
                <label for="email">{{ __('E-Mail Address') }}</label>
				<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <br>

            <div class="input-field">
                <i class="material-icons prefix">account_circle</i>
                <label for="username">{{ __('Username') }}</label>
				<input id="username" type="text" class="form-control @error('email') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">
                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <br>

			<div class="input-field">
                <i class="material-icons prefix">lock</i>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
				<label for="password">{{ __('Password') }}</label>
				@error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <br>
				
			<div class="input-field">
                <i class="material-icons prefix">lock</i>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
				<label for="password-confirm">{{ __('Confirm Password') }}</label>
            </div>
            <br>
			
			<button type="submit" class="btn btn-primary blue">
                {{ __('Register') }}
            </button>
			
        </form>
		<br><br><br>
</div>

</div></div>


				
@endsection
