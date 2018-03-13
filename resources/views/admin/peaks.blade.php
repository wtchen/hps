@extends('layouts.admin')

@section('content')
    @if (session('status'))
        <div class="notification is-success">
            <button class="delete"></button>
            {!! session('status') !!}
        </div>
    @endif
    <div class="buttons">
        <a class="button is-primary" href="{{ route('admin.peaks.add') }}">Add Peak</a>
    </div>
    <div class="content">
        <table class="table hps-peak-table">
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
                <tr @if ($peak['status'] == 0) class="delisted" @elseif ($peak['status'] == 2) class="suspended" @endif>
                    <td>{{ $peak -> serial }}</td>
                    <td>
                        {{ $peak -> name }}
                        @if ($peak['status'] == 0)
                            <span class="tag is-light">Delisted</span>
                        @elseif ($peak['status'] == 2)
                            <span class="tag is-light">Suspended</span>
                        @endif
                    </td>
                    <td>{{ $peak -> elevation }}'</td>
                    <td class="actions">
                        <a class="button icon"><i class="fas fa-pencil-alt"></i></a>
                        <a class="button icon remove" href="{{ route('admin.peaks.deletePage', ['serial' => $peak -> serial]) }}"><i class="fas fa-times"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection