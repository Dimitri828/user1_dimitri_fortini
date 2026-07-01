<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="#">
            <img src="/media/logo2.png" alt="" class="logo img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link font-wh" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link font-wh" href="{{route("article.create")}}">Inserisci Annuncio</a>
                    </li>
                    @if (Auth::user()->reviewer||Auth::user()->admin)
                    <li class="nav-item">
                        <a class="nav-link font-wh" href="{{route("article.review")}}">Revisiona Annunci</a>
                    </li>
                        
                    @endif
                @endauth
                <li class="nav-item">
                    <a class="nav-link font-wh" href="{{route("article.index")}}">Tutti gli Annunci</a>
                </li>
            </ul>
            @guest
                <a href="{{ route('login') }}" class="btn  ms-1 font-wh">Login</a>

                <a href="{{ route('register') }}" class="btn  ms-1 font-wh">Registrati</a>

            @endguest

            @auth
                <div class="dropdown">
                    <button class="btn text-white dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Ciao,
                        {{ ucwords(strtolower((Auth::user()->name))) }}!
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn dropdown-item">Logout</button>
                            </form>
                        </li>
                        <li>
                            <a href="{{route("article.create")}}" class="btn dropdown-item font-blk">Inserisci Annuncio</a>
                        </li>

                    </ul>
                </div>

            @endauth
        </div>
    </div>
</nav>

