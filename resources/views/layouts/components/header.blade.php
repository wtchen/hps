<nav class="navbar is-primary hps-main-nav" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item hps-logo" href="/">
            Hundred Peaks Section
        </a>
        <div class="navbar-burger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="https://angeles.sierraclub.org/">
                Sierra Club Angeles Chapter
            </a>
        </div>
        <div class="navbar-end">
            <a class="navbar-item" href="/aboutus">
                About Us
            </a>
            <a class="navbar-item" href="/outings">
                Outings
            </a>
            <a class="navbar-item" href="/hpslist">
                Peak List
            </a>
            <a class="navbar-item" href="/newsletter">
                Newsletter
            </a>
            <a class="navbar-item" href="/emblems">
                Emblems
            </a>
            <a class="navbar-item" href="/membership">
                Membership
            </a>
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    More
                </a>
                <div class="navbar-dropdown is-right">
                    <a class="navbar-item">
                        Management Committee
                    </a>
                    <a class="navbar-item">
                        Archives
                    </a>
                    <a class="navbar-item">
                        Awards
                    </a>
                    <a class="navbar-item">
                        Register Box
                    </a>
                    <a class="navbar-item">
                        Bylaws/Policies
                    </a>
                    <a class="navbar-item">
                        Merchandise
                    </a>
                </div>
            </div>
            @if (Auth::check())
                <div class="navbar-item has-dropdown is-hoverable logged-dropdown">
                    <a class="navbar-link">
                        {{ Auth::user() -> name }}
                    </a>
                    <div class="navbar-dropdown is-right">
                        <a class="navbar-item" href="{{ route('admin') }}">
                            Admin Panel
                        </a>
                        <a class="navbar-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                            Log Out
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</nav>
<form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>