<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-lg px-3">
        <a class="navbar-brand" href="/">Inventory X</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="ion-navicon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown me-3">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown07XL" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="ion-grid" style="font-size: 25px"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown07XL">
                        <li><a class="dropdown-item btn" {{ count($categories) == 0 ? 'disabled' : '' }}
                                data-bs-toggle="modal" data-bs-target="#staticBackdropItem">Create Item</a></li>
                        <li><a class="dropdown-item btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Create
                                Category</a></li>
                        <li><a class="dropdown-item" href="{{ route('auth.logout') }}">Logout</a></li>
                    </ul>
                </li>


                <li class="nav-item" style="line-height: 50px; font-size:15px">{{ auth()->user()->email }}</li>

            </ul>

        </div>
    </div>
</nav>
