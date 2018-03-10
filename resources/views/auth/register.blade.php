@extends('layouts.app')

@section('main')
    <section class="section">
        <div class="container">
            <h1 class="title">Register</h1>
            @if (session('status'))
                <div class="notification is-info">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="field">
                    <label class="label">Name</label>
                    <div class="control">
                        <input class="input{{ $errors->has('name') ? ' is-danger' : '' }}" name="name" type="text">
                    </div>
                </div>
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
                    <label class="label">Confirm Password</label>
                    <div class="control">
                        <input class="input" name="password_confirmation" type="password">
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
