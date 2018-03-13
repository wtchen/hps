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
        <form method="POST" action="{{ route('admin.peaks.add') }}">
            {{ csrf_field() }}
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Name*</label>
                </div>
                <div class="field-body">
                    <div class="field is-narrow is-narrow-desktop">
                        <div class="control">
                            <input class="input{{ $errors -> has('name') ? ' is-danger' : '' }}" type="text" placeholder="e.g. Sunday Peak" name="name">
                        </div>
                        @if ($errors -> has('name'))
                            <p class="help is-danger">
                                This field is required
                            </p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Serial*</label>
                </div>
                <div class="field-body">
                    <div class="field is-narrow is-narrow-desktop">
                        <div class="control">
                            <input class="input{{ $errors -> has('serial') ? ' is-danger' : '' }}" type="text" placeholder="e.g. 01A" name="serial">
                        </div>
                        @if ($errors -> has('serial'))
                            <p class="help is-danger">
                                This field is required
                            </p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Height (in feet)</label>
                </div>
                <div class="field-body">
                    <div class="field is-narrow is-narrow-desktop">
                        <input class="input{{ $errors -> has('elevation') ? ' is-danger' : '' }}" type="number" placeholder="Elevation*" name="elevation">
                        @if ($errors -> has('elevation'))
                            <p class="help is-danger">
                                This field is required
                            </p>
                        @endif
                    </div>
                    <div class="field is-narrow is-narrow-desktop">
                        <input class="input" type="number" placeholder="Prominence" name="prominence">
                    </div>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Coordinates (decimal)</label>
                </div>
                <div class="field-body">
                    <div class="field is-narrow is-narrow-desktop">
                        <input class="input" type="number" placeholder="Latitude" name="lat">
                    </div>
                    <div class="field is-narrow is-narrow-desktop">
                        <input class="input" type="number" placeholder="Longitude" name="long">
                    </div>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">USGS Quads</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <input class="input" type="text" placeholder="e.g. Tobias Peak 7½, Alta Sierra 7½" name="usgs">
                        </div>
                    </div>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">CalTopo Link Code</label>
                </div>
                <div class="field-body">
                    <div class="field is-narrow is-narrow-desktop">
                        <div class="control">
                            <input class="input" type="text" placeholder="e.g. 7N00" name="caltopo">
                        </div>
                    </div>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Banner Image URL</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <input class="input" type="text" placeholder="e.g. http://www.hundredpeaks.org/newmaps/01AB_SUNDAY-BOHNA_PEAKS_cs06-23-2000_SMALL.JPG" name="featured_image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Article (Markdown)</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <textarea class="textarea" placeholder="Write peak description here" name="article_md"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label">
                    <!-- Left empty for spacing -->
                </div>
                <div class="field-body">
                    <div class="field">
                        <label class="radio">
                            <input type="radio" name="status" value="1" checked>
                            Active
                        </label>
                        <label class="radio">
                            <input type="radio" name="status" value="2">
                            Suspended
                        </label>
                        <label class="radio">
                            <input type="radio" name="status" value="0">
                            Delisted
                        </label>
                    </div>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label">
                    <!-- Left empty for spacing -->
                </div>
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <button class="button is-primary">
                                Add Peak to Database
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection