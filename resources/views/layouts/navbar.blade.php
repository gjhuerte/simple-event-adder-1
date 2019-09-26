<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
    <button 
        class="navbar-toggler" 
        type="button"        
        data-toggle="collapse" 
        data-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" 
        aria-expanded="true" 
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
