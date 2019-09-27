<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">{{ config('app.name') }}</a>

    <div id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a 
                    class="nav-link" 
                    href="{{ route('event.create') }}">
                    Events <span class="sr-only">(current)</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
