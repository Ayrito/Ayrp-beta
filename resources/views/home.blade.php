@extends('layouts.app')

@section('content')
<div class="container">
    <div class="modal-content center">
        <div class="col-md-8">
            <div class="card">
                <div class="input-field">Dashboard</div>

                <div class="input-field">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
