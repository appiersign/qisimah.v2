<div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease-in-out-quart" data-no-scroll="1" class="navbar w-nav">
    <div class="container w-container">
        <a href="#" class="brand w-nav-brand">
            <img src="{{ asset('images/Qisimah-logo-qhite.gif') }}" width="726">
        </a>
        <nav role="navigation" class="nav-menu w-nav-menu">
            <div class="srcoll-bar-wrap">
                <a href="{{ url('/') }}" class="nav-link w-nav-link w--current">Dashboard</a>
                {{--<a href="#" class="nav-link w-nav-link">Ads Dashboard</a>--}}
                <a href="{{ route('artists.index') }}" class="nav-link w-nav-link">Artists</a>
                <a href="{{ route('albums.index') }}" class="nav-link w-nav-link">Albums</a>
                <a href="{{ route('broadcasters.index') }}" class="nav-link w-nav-link">Broadcasters</a>
                <p class="nav-separator-text">Monitoring</p>
                <a href="{{ route('songs.index') }}" class="nav-link w-nav-link">Songs</a>
                {{--<a href="#" class="nav-link w-nav-link">Ads</a>--}}
                {{--<a href="charts.html" class="nav-link w-nav-link">Charts</a>--}}
                <div class="drop-parent">
                    <div class="drop-triger" data-ix="open-drop-menu">
                        <div class="div-block-19" data-ix="open-drop-menu">
                            <div class="reports-head" data-ix="open-drop-menu">Reports</div>
                            <div class="open-and-close-drop">+</div>
                        </div>
                    </div>
                    <div class="drop-child">
                        <a href="{{ route('reports.summary') }}" class="dropnav-links w-nav-link">Summary</a>
                        <a href="{{ route('reports.compare') }}" class="dropnav-links w-nav-link">Compare</a>
                        <a href="{{ route('reports.general') }}" class="dropnav-links w-nav-link">General Reports</a>
                    </div>
                </div>
                {{--<p class="nav-separator-text">Account</p>--}}
                {{--<a href="settings.html" class="nav-link w-nav-link">Settings</a>--}}
                {{--<div class="drop-parent-2">--}}
                    {{--<div class="admin-drop-triger" data-ix="open-admin-drop-menu">--}}
                        {{--<div class="div-block-19">--}}
                            {{--<div class="reports-head-2">Admin</div>--}}
                            {{--<div class="admin-open-and-close-drop">+</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="admin-drop-child">--}}
                        {{--<a href="email-input.html" class="dropnav-links-2 w-nav-link">Email Verification</a>--}}
                        {{--<a href="add-artist-details.html" class="dropnav-links-2 w-nav-link">Add Role &amp; Details</a>--}}
                        {{--<a href="add-artist-filla.html" class="dropnav-links-2 w-nav-link">Another page</a>--}}
                        {{--<a href="new-signup.html" class="dropnav-links-2 w-nav-link">Welcome Screen</a>--}}
                        {{--<a href="#" class="dropnav-links-2 w-nav-link">Admin Dashboard</a>--}}
                        {{--<a href="#" class="dropnav-links-2 w-nav-link">Client Mgt</a>--}}
                        {{--<a href="#" class="dropnav-links-2 w-nav-link">User Mgt.</a>--}}
                        {{--<a href="#" class="dropnav-links-2 w-nav-link">Reporting Tool</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </nav>
        <div class="menu-button w-nav-button">
            <div class="icon-3 w-icon-nav-menu"></div>
        </div>
    </div>
</div>