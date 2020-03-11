<div>
    <!-- Start Preloader Area -->
    <div class="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- End Preloader Area -->

    <!-- Start Arduix Navbar Area -->
    <div id="header" class="arduix-nav-style">
        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="index.html" class="logo">
                    <img src="{{ asset('assets') }}/img/white-logo.png" alt="Logo">
                </a>
            </div>
            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="container">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{ asset('assets') }}/img/white-logo.png" alt="Logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="{{ route('home') }}"
                                       class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}">
                                        Home
                                        {{--                                    <i class='bx bx-chevron-down'></i>--}}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('web.about') }}" class="nav-link {{ Request::routeIs('web.about') ? 'active' : '' }}">
                                        About
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        Pages
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="pricing.html" class="nav-link">Pricing</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="team.html" class="nav-link">Team</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="faq.html" class="nav-link">FAQ</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="testimonial.html" class="nav-link">Testimonial</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link dropdown-toggle">
                                                User
                                                <i class='bx bx-chevron-down'></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="log-in.html" class="nav-link">Log In</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="sign-up.html" class="nav-link">Sign Up</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="recover-password.html" class="nav-link">Recover
                                                        Password</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="terms-conditions.html" class="nav-link">Terms Conditions</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="404.html" class="nav-link">404 Error</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        Services
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="services-style-one.html" class="nav-link">Services Style One</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="services-style-two.html" class="nav-link">Services Style two</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="services-style-three.html" class="nav-link">Services Style
                                                Three</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="services-style-four.html" class="nav-link">Services Style Four</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="services-details.html" class="nav-link">Services Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        Shop
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="product-grid.html" class="nav-link">Product Grid</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="checkout.html" class="nav-link">Checkout</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="cart.html" class="nav-link">Cart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="single-product.html" class="nav-link">Single Product</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        News
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="news-grid.html" class="nav-link">News Grid</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="news-left-sidebar.html" class="nav-link">News Left Sidebar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="news-right-sidebar.html" class="nav-link">News Right Sidebar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="news-details.html" class="nav-link">News Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('web.contact') }}" class="nav-link {{ Request::routeIs('web.contact') ? 'active' : '' }}">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                            <!-- Start Other Option -->
                            <div class="others-option">
                                <a class="default-btn" href="log-in.html">
                                    Log In
                                    <i class="bx bx-log-in-circle"></i>
                                </a>
                            </div>
                            <!-- End Other Option -->
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Arduix Navbar Area -->

</div>
