@extends('layouts.app')

@section('main')
    <section class="section">
        <div class="container">
            <h1 class="title">Login</h1>
            @if (session('status'))
                <div class="notification is-info">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="field">
                    <label class="label">E-Mail Address</label>
                    <div class="control">
                        <input class="input{{ $errors->has('email') ? ' is-danger' : '' }}" name="email" type="text">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Password</label>
                    <div class="control">
                        <input class="input{{ $errors->has('password') ? ' is-danger' : '' }}" name="password" type="password">
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <label class="checkbox">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link">Login</button>
                    </div>
                </div>

                <a href="/password/reset">Forgot Your Password?</a><br/>
                <a href="/register">Register</a>
            </form>
        </div>
    </section>
@endsection
