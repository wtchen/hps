<aside class="menu">
    <h3 class="menu-label title">
        Site Management
    </h3>
    <p class="menu-label">
        General
    </p>
    <ul class="menu-list">
        <li>@include('admin.components.menu-link', ['route' => 'admin', 'text' => 'Dashboard'])</li>
    </ul>
    <p class="menu-label">
        Administration
    </p>
    <ul class="menu-list">
        <li>@include('admin.components.menu-link', ['route' => 'admin.peaks', 'text' => 'Peaks'])</li>
    </ul>
    @if (Auth::user() -> is_super)
        <p class="menu-label">
            Meta
        </p>
        <ul class="menu-list">
            <li><a href="/admin/users">Users</a></li>
        </ul>
    @endif
    <p class="menu-label">
        {{ Auth::user() -> name }}
    </p>
    <ul class="menu-list">
        <li><a>Settings</a></li>
        <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                Log Out
            </a>
        </li>
    </ul>
</aside>