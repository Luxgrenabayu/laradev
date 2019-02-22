<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ URL::asset('bootstrap/img/brand.svg') }}" width="40" height="40" alt="Zilux Digital" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/article')}}">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Video</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Layanan
                    </a>
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownPortfolio">
                        <a class="dropdown-item" href="{{ url('/product') }}">Produk</a>
                        <a class="dropdown-item" href="{{ url('/service') }}">Jasa</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="{{ URL::asset('bootstrap/img/id.svg') }}" width="20" height="20" alt="Indonesia" title="Indonesia">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="{{ URL::asset('bootstrap/img/gb.svg') }}" width="20" height="20" alt="English" title="English">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
