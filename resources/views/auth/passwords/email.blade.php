@extends('layouts.app')

@section('content')


<div class="modal-content center" style="padding-right: 30%; padding-left: 30%;">
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
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
				@error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <br>

			<button type="submit" class="btn btn-primary">
                {{ __('Send Password Reset Link') }}
            </button>
        </form>
</div>

                
@endsection
