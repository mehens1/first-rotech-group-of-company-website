<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="index.html"> <img src="{{ asset('assets/img/logo.png') }}" alt="logo"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse main-menu-item" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">about</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#">Blog</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Companies
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/companies/anambra-line-ltd">Anambra Line lTD</a>
                    <a class="dropdown-item" href="/companies/rotech-automobile-and-real-estate">Rotech Automobile and Real Estate</a>
                    <a class="dropdown-item" href="#">Mariam Intergreted Services</a>
                    <a class="dropdown-item" href="#">North East Quarry and Granite Processing Company Limited</a>
                    <a class="dropdown-item" href="#">Rotech Energy Services LTD</a>
                    <a class="dropdown-item" href="#">Rotech Agro Allied Company LTD</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Estates Development
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Luxury Place Estate Nkwere</a>
                    <a class="dropdown-item" href="#">Luxuary Place Estate Pyakasa Lugbe Abuja</a>
                    <a class="dropdown-item" href="#">Luxury Place Estate Phase IV Kyami District Abuja</a>
                    <a class="dropdown-item" href="#">Luxury Place Estate Jabi (Under Construction)</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact us</a>
            </li>
        </ul>
    </div>
    <div class="btn_1 d-none d-lg-block">
        <a href="#" class="float-right">Contact Us</a>
    </div>
</nav>
