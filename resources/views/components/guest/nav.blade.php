<div data-collapse="small" data-animation="default" data-duration="400" class="navbar w-nav">
    <a href="{{ url('welcome') }}" class="w-nav-brand"><img src="{{ asset('images/Qisimah-logo.gif') }}" width="150"></a>

    <nav role="navigation" class="nav-menu w-nav-menu">
        <a href="{{ url('welcome') }}" class="nav-link w-nav-link">Home</a>
        <a href="{{ url('about.us') }}" class="nav-link w-nav-link">About</a>
        <a href="{{ url('welcome') }}#how-it-works" class="nav-link w-nav-link">How it works</a>
        <a href="{{ url('charts') }}" class="nav-link w-nav-link">Charts</a>
        <a href="{{ url('sign.up') }}" class="nav-link w-nav-link">Sign Up</a>
        <a href="{{ url('log.in') }}" class="button w-button">LOGIN</a>
    </nav>

    <div class="menu-button w-nav-button">
        <div class="w-icon-nav-menu"></div>
    </div>
</div>