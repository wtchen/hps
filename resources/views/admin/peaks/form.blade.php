@if(!empty($peak)) @php(session(['viewHelperModel' => $peak])) @endif
<form method="POST" action="{{ route($post ?? 'admin.peaks.add') }}">
    {{ csrf_field() }}
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label">Name*</label>
        </div>
        <div class="field-body">
            <div class="field is-narrow is-narrow-desktop">
                <div class="control">
                    <input class="input{{ $errors -> has('name') ? ' is-danger' : '' }}" type="text" placeholder="e.g. Sunday Peak" name="name" value="{{ HpsView::value('name') }}">
                </div>
                @include('admin.components.error-help', ['field' => 'name'])
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
                    <input class="input{{ $errors -> has('serial') ? ' is-danger' : '' }}" type="text" placeholder="e.g. 01A" name="serial" value="{{ HpsView::value('serial') }}">
                </div>
                @include('admin.components.error-help', ['field' => 'serial'])
            </div>
        </div>
    </div>
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label">Height (in feet)</label>
        </div>
        <div class="field-body">
            <div class="field is-narrow is-narrow-desktop">
                <input class="input{{ $errors -> has('elevation') ? ' is-danger' : '' }}" type="number" placeholder="Elevation*" name="elevation" value="{{ HpsView::value('elevation') }}">
                @include('admin.components.error-help', ['field' => 'elevation'])
            </div>
            <div class="field is-narrow is-narrow-desktop">
                <input class="input" type="number" placeholder="Prominence" name="prominence" value="{{ HpsView::value('prominence') }}">
            </div>
        </div>
    </div>
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label">Coordinates (decimal)</label>
        </div>
        <div class="field-body">
            <div class="field is-narrow is-narrow-desktop">
                <input class="input" type="number" placeholder="Latitude" name="lat" value="{{ HpsView::value('lat') }}">
            </div>
            <div class="field is-narrow is-narrow-desktop">
                <input class="input" type="number" placeholder="Longitude" name="long" value="{{ HpsView::value('long') }}">
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
                    <input class="input" type="text" placeholder="e.g. Tobias Peak 7½, Alta Sierra 7½" name="usgs" value="{{ HpsView::value('usgs') }}">
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
                    <input class="input" type="text" placeholder="e.g. 7N00" name="caltopo" value="{{ HpsView::value('caltopo') }}">
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
                    <input class="input" type="text" placeholder="e.g. http://www.hundredpeaks.org/newmaps/01AB_SUNDAY-BOHNA_PEAKS_cs06-23-2000_SMALL.JPG" name="featured_image" value="{{ HpsView::value('featured_image') }}">
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
                    <textarea class="textarea" placeholder="Write peak description here" name="article_md" value="{{ HpsView::value('article_md') }}"></textarea>
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
                @if (isset($peak) && isset($peak -> status))
                    @php($checked = (int)($peak -> status))
                @else
                    @php($checked = 1)
                @endif
                <label class="radio">
                    <input type="radio" name="status" value="1" @if ($checked == 1) checked @endif>
                    Active
                </label>
                <label class="radio">
                    <input type="radio" name="status" value="2" @if ($checked == 2) checked @endif>
                    Suspended
                </label>
                <label class="radio">
                    <input type="radio" name="status" value="0" @if ($checked == 0) checked @endif>
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
                        Save Peak
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>