@extends('layouts.admin')

@section('content')
    <div class="notification">
        You are logged in as <b>{{Auth::user() -> name}}</b> - {{Auth::user() -> email}} (<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Log Out</a>)
    </div>
@endsection