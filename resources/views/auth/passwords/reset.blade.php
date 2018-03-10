@extends('layouts.app')

@section('main')
    <section class="section">
        <div class="container">
            <h1 class="title">Reset Password</h1>
            <form method="POST" action="{{ route('password.request') }}">
                {{ csrf_field() }}

                <div class="field">
                    <label class="label">E-Mail Address</label>
                    <div class="control">
                        <input class="input{{ $errors->has('email') ? ' is-danger' : '' }}" name="email" type="text" value="{{ $email or old('email') }}" required autofocus>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Password</label>
                    <div class="control">
                        <input class="input{{ $errors->has('password') ? ' is-danger' : '' }}" name="password" type="password" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Confirm Password</label>
                    <div class="control">
                        <input class="input{{ $errors->has('password_confirmation') ? ' is-danger' : '' }}" name="password_confirmation" type="password">
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link">Reset Password</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
