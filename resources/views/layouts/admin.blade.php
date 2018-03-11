@extends('layouts.app')

@section('main')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h1 class="title">{{ $name ?? 'Administration' }}</h1>
                    @yield('content')
                </div>
                <div class="column is-one-quarter">
                    @include('admin.sidebar')
                </div>
            </div>
        </div>
    </section>
@endsection