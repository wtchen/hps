@extends('layouts.app')

@section('main')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-2">
                    @include('admin.sidebar')
                </div>
                <div class="column">
                    <h1 class="title">{{ $title ?? 'Administration' }}</h1>
                    @yield('content')
                </div>
            </div>
        </div>
    </section>
@endsection