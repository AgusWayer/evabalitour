<nav class="navbar navbar-expand-md bg-transparent position-fixed w-100 ">
    <div class=" offcanvas offcanvas-start" id="navbar">
        <div class="offcanvas-header">
            <a href="" class="navbar-brand">Eva Bali Tours</a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="container-md menu-container">
                <a href="/" class="navbar-brand d-none d-md-block">Eva Bali Tours</a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link {{Request::is('/') ? 'text-orange' : ''}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/about-us" class="nav-link {{Request::is('/about-us') ? 'text-orange' : ''}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="/packages" class="nav-link {{Request::is('/packages') ? 'text-orange' : ''}}">Our Packages</a>
                    </li>
                    <li class="nav-item">
                        <a href="/destinations" class="nav-link {{Request::is('/destinations*') ? 'text-orange' : ''}}">Destinations</a>
                    </li>
                </ul>
                <a href="" class="btn btn-orange fw-semibold">Book Now</a>
            </div>
        </div>
    </div>
    <div class="container d-md-none">
        <a href="" class="navbar-brand text-white">Eva Bali Tours</a>
        <button class="btn text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbar">
            <i class="fa-solid fa-bars-staggered"></i>
        </button>
    </div>

</nav>
