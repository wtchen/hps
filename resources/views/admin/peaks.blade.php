@extends('layouts.admin')

@section('content')
    <div class="buttons">
        <a class="button is-primary" href="{{ route('admin.peaks.add') }}">Add Peak</a>
    </div>
    <div class="content">
        {{ App\Peak::all() }}
    </div>
@endsection