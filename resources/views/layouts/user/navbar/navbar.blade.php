<header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assetsusers/img/logo.png" alt=""> -->
            <h1>APM<span>.</span></h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="#">Home</a></li>
                <li><a class="nav-link scrollto" href="index.html#information">information</a></li>
                <li><a class="nav-link scrollto" href="index.html#about">About Us</a></li>
                <li><a class="nav-link scrollto" href="index.html#contact">Contact Us</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle d-none"></i>
        </nav><!-- .navbar -->
        <ul class="list-unstyled">
            <li>
                @auth
                    <form action="/signout" method="POST">
                        @csrf
                        <button  class="btn-getstarted scrollto rounded-5">Sign-Out</button>
                    </form>
                @else
                <a class="color-black" href="{{ route('auth.login') }}">Login</a>
                <b class="border-5">/</b>
                    <a class="btn-getstarted scrollto rounded-5" href="{{ route('auth.register') }}">Register</a>
                @endauth
            </li>
        </ul>

    </div>
</header>