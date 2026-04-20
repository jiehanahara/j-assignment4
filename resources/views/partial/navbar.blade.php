<nav class="navbar navbar-expand-lg navbar-dark custom-navbar sticky-top">
    <div class="container">

        <!-- BRAND -->
        <a class="navbar-brand fw-bold brand-text">C.J Travel</a>

        <!-- USERS BUTTON (optional left side) -->
        <a href="/User" class="btn btn-add ms-3">Users</a>

        <!-- TOGGLER -->
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- NAV LINKS -->
        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto align-items-center gap-2">

                <li class="nav-item">
                    <a href="/master" class="nav-link custom-link active">Home</a>
                </li>

                <li class="nav-item">
                    <a href="/attractions" class="nav-link custom-link">Features</a>
                </li>

                <li class="nav-item">
                    <a href="/reviews" class="nav-link custom-link">Reviews</a>
                </li>

                <li class="nav-item">
                    <a href="/destinations" class="btn btn-main btn-sm px-3">Explore</a>
                </li>

                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-outline-light rounded-pill px-4 fw-bold btn-sm">Logout</button>
                </form>

            </ul>
        </div>
    </div>
</nav>