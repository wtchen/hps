@extends('layouts.admin')

@section('content')
    <div class="buttons">
        <a class="button is-primary" href="{{ route('admin.peaks.add') }}">Add Peak</a>
    </div>
    <div class="content">
        <table class="table is-hoverable">
            <thead>
            <tr>
                <th></th>
                <th>Peak</th>
                <th>Elevation</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th></th>
                <th>Peak</th>
                <th>Elevation</th>
                <th>Actions</th>
            </tr>
            </tfoot>
            <tbody>
            @foreach (App\Peak::all() as $peak)
                <tr>
                    <td>{{ $peak -> serial }}</td>
                    <td>{{ $peak -> name }}</td>
                    <td>{{ $peak -> elevation }}'</td>
                    <td></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection