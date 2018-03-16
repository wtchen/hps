@extends('layouts.app')

@section('main')
<section class="section">
    <div class="container">
        <h1 class="title">Hundred Peaks Section Peak List</h1>
        <h2 class="subtitle">
            The following peaks are on the HPS List unless specified otherwise. They are approximately in order from North to South.
        </h2>
        <div class="notification">
            The HPS Management Committee acknowledges that there is no clear definition of what is required to count the peak. We stand by the tradition that summit blocks are optional.<br/>
            - 2006 HPS Management Committee
        </div>
        <div class="notification">
            Before visiting your favorite peak, visit your favorite peak guide (below). Each page has printable maps in JPEG or PDF format, GPX and KML files of the maps to use with your GPS unit or favorite map software, and a link to view our maps in the excellent web-based map program CalTopo.
        </div>
        <div class="content" id="peaks">
            <div class="columns">
                <div class="column is-8">
                    <input class="peaksearch input is-medium" placeholder="Search..."/>
                </div>
                <div class="column">
                    <div class="select is-medium is-fullwidth">
                        <select class="region">
                            <option>Select a region...</option>
                            @foreach ($regions as $region)
                                <option value="{{ $region['name'] }}">{{ $region['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <table class="table hps-peak-table">
                <thead>
                <tr>
                    <th></th>
                    <th>Peak</th>
                    <th>Elevation</th>
                    <th>Region</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th></th>
                    <th>Peak</th>
                    <th>Elevation</th>
                    <th>Region</th>
                </tr>
                </tfoot>
                <tbody class="list">
                @foreach ($peaks as $peak)
                    <tr @if ($peak['status'] == 0) class="delisted" @elseif ($peak['status'] == 2) class="suspended" @endif>
                        <td class="serial">{{ $peak -> serial }}</td>
                        <td class="name">
                            {{ $peak -> name }}
                            @if ($peak['status'] == 0)
                                <span class="tag is-light">Delisted</span>
                            @elseif ($peak['status'] == 2)
                                <span class="tag is-light">Suspended</span>
                            @endif
                        </td>
                        <td class="elevation">{{ $peak -> elevation }}'</td>
                        <td class="region">{{ $peak -> region -> name }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/hpslist.css') }}">
@endpush

@push('scripts')
    <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
    <script src="{{ asset('js/hpslist.js') }}"></script>
@endpush