@extends('layouts.app')

@section('main')
    <section class="section">
        <div class="container">
            <h1 class="title">Site Management</h1>
            <div class="notification">
                You are logged in as <b>{{Auth::user() -> name}}</b> ({{Auth::user() -> email}})
            </div>
            <div class="content">
                <ul>
                    <li><a href="/admin/peaks">Peak Guides</a></li>
                    @if (Auth::user() -> is_super)
                        <li><a href="/admin/users">Users</a></li>
                    @endif
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Log Out</a></li>
                </ul>
            </div>
        </div>
    </section>
@endsection