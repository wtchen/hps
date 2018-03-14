@extends('layouts.admin')

@section('content')
    @if (session('status'))
        <div class="notification is-success">
            <button class="delete"></button>
            {!! session('status') !!}
        </div>
    @endif
    <div class="content">
        <p>Field marked with * are required.</p>
        @include('admin.peaks.form')
    </div>
@endsection