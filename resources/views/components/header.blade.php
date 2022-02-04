<header class="mb-3">
    Header

    @auth
        <div class="container-name">
            Ciao {{ Auth::user()->name }}
            <span>
                <a class="btn btn-danger" href="{{ route('logout') }}">LOGOUT</a>
            </span>
        </div>
    @endauth

</header>