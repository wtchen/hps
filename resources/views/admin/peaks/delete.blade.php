@extends('layouts.admin')

@section('content')
    @if (session('status'))
        <div class="notification is-success">
            <button class="delete"></button>
            {!! session('status') !!}
        </div>
    @else
        <div class="notification">Are you sure you want to delete <b>{{ $peak -> name }}</b> ({{ $peak -> serial }})?</div>
        <div class="content">
            <form method="POST" action="{{ route('admin.peaks.add') }}">
                {{ csrf_field() }}
                <input type="hidden" name="serial" value="{{ $peak -> serial }}">
            </form>
            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-danger">
                    <span class="icon is-small">
                        <i class="fas fa-trash-alt"></i>
                    </span>
                        <span>Delete</span>
                    </button>
                    <a class="button is-text" onclick="window.history.back();">Back</a>
                </div>
            </div>
        </div>
    @endif
@endsection