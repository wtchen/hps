<aside class="menu">
    <p class="menu-label">
        General
    </p>
    <ul class="menu-list">
        <li><a href="{{ route('admin') }}">Admin Panel Home</a></li>
    </ul>
    <p class="menu-label">
        Administration
    </p>
    <ul class="menu-list">
        <li><a href="{{ route('admin.peaks') }}">Peaks</a></li>
        @if (Auth::user() -> is_super)
            <li><a href="/admin/users">Users</a></li>
        @endif
    </ul>
</aside>