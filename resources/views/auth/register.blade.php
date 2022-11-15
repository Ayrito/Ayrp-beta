@extends('layouts.app')

@section('content')


<div class="modal-content center" style="padding-right: 500px; padding-left: 500px;">
        <h4>{{ __('Register Form') }}</h4>
        <br>

        <form method="POST" action="{{ route('register') }}">
		@csrf

            <div class="input-field">
                <i class="material-icons prefix">person</i>
				<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
				@error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <br>

            <div class="input-field">
                <i class="material-icons prefix">email</i>
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
				<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <br>

			<div class="input-field">
                <i class="material-icons prefix">lock</i>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
				<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
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
				<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
            </div>
            <br>
			
			<button type="submit" class="btn btn-primary">
                {{ __('Register') }}
            </button>

        </form>
    
</div>



<!--register-->


				
@endsection
