@extends('layouts.app')

@section('main')
    <section class="section">
        <div class="container">
            <h1 class="title">Reset Password</h1>
            @if (session('status'))
                <div class="notification is-info">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}

                <div class="field">
                    <label class="label">E-Mail Address</label>
                    <div class="control">
                        <input class="input{{ $errors->has('email') ? ' is-danger' : '' }}" name="email" type="text" placeholder="Text input">
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link">Send Password Reset Link</button>
                    </div>
                    <div class="control">
                        <button class="button is-text">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
