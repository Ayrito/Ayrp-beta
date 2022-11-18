@extends('layouts.app')

@section('content')


<div class="container">
<div class="container">
<div class="content col s12 m3 container">
        <h4>{{ __('Reset Password') }}</h4>
        <br>
		
		@if (session('status'))
            <div class="alert alert-success" role="alert">
            {{ session('status') }}
            </div>
        @endif
		
        <form method="POST" action="{{ route('password.email') }}">
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

			<button type="submit" class="btn btn-primary blue">
                {{ __('Send Password Reset Link') }}
            </button>
        </form>
</div>
</div></div>

<br>
                
@endsection
