<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>StyleHub - Premium Fashion & Clothing</title>
    <meta name="description" content="Discover premium fashion and clothing at StyleHub. Shop the latest trends in women's and men's fashion, accessories, and more.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css" />

    @stack('styles')
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar bg-dark text-white py-2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="d-flex align-items-center gap-3">
                        <small><i class="fas fa-phone me-1"></i> +1 (555) 123-4567</small>
                        <small><i class="fas fa-envelope me-1"></i> info@stylehub.com</small>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-center justify-content-end gap-3">
                        <small>Free shipping on orders over $100</small>
                        <div class="social-links">
                            <a href="#" class="text-white me-2"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <header class="main-header bg-white shadow-sm">
        <div class="container">
            <div class="row align-items-center py-3">
                <!-- Logo -->
                <div class="col-lg-3 col-6">
                    <a href="{{ url('/') }}" class="logo">
                        <h2 class="mb-0 fw-bold">Style<span class="text-primary">Hub</span></h2>
                    </a>
                </div>

                <!-- Search Bar -->
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="search-bar">
                        <div class="input-group">
                            <input type="text" class="form-control border-0 bg-light" placeholder="Search for products...">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Header Actions -->
                <div class="col-lg-3 col-6">
                    <div class="header-actions d-flex align-items-center justify-content-end gap-3">
                        @guest
                            <a href="{{ route('login') }}" class="text-decoration-none">
                                <i class="fas fa-user"></i>
                                <span class="d-none d-md-inline ms-1">Login</span>
                            </a>
                        @else
                            <div class="dropdown">
                                <a href="#" class="text-decoration-none dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="fas fa-user"></i>
                                    <span class="d-none d-md-inline ms-1">{{ Auth::user()->name }}</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('home') }}">Dashboard</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        @endguest

                        <a href="#" class="text-decoration-none position-relative">
                            <i class="fas fa-heart"></i>
                            <span class="badge bg-primary rounded-pill position-absolute top-0 start-100 translate-middle">2</span>
                            <span class="d-none d-md-inline ms-1">Wishlist</span>
                        </a>

                        <a href="#" class="text-decoration-none position-relative">
                            <i class="fas fa-shopping-bag"></i>
                            <span class="badge bg-primary rounded-pill position-absolute top-0 start-100 translate-middle">3</span>
                            <span class="d-none d-md-inline ms-1">Cart</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Navigation -->
        <nav class="main-nav bg-light border-top">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="nav justify-content-center py-2">
                            <li class="nav-item">
                                <a class="nav-link text-dark fw-medium" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link text-dark fw-medium dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                    Women
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Dresses</a></li>
                                    <li><a class="dropdown-item" href="#">Tops & Blouses</a></li>
                                    <li><a class="dropdown-item" href="#">Pants & Skirts</a></li>
                                    <li><a class="dropdown-item" href="#">Outerwear</a></li>
                                    <li><a class="dropdown-item" href="#">Shoes</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link text-dark fw-medium dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                    Men
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Shirts</a></li>
                                    <li><a class="dropdown-item" href="#">Pants</a></li>
                                    <li><a class="dropdown-item" href="#">Jackets</a></li>
                                    <li><a class="dropdown-item" href="#">Shoes</a></li>
                                    <li><a class="dropdown-item" href="#">Accessories</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark fw-medium" href="#">Accessories</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark fw-medium" href="#">Sale</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark fw-medium" href="#">New Arrivals</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark fw-medium" href="#">Brands</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer bg-dark text-white py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Company Info -->
                <div class="col-lg-4">
                    <h3 class="mb-3">Style<span class="text-primary">Hub</span></h3>
                    <p class="text-light">Your premier destination for fashion and style. We curate the finest collections from around the world to bring you the latest trends and timeless classics.</p>
                    <div class="contact-info">
                        <p class="mb-1"><i class="fas fa-map-marker-alt me-2"></i> 123 Fashion Street, NY 10001</p>
                        <p class="mb-1"><i class="fas fa-phone me-2"></i> +1 (555) 123-4567</p>
                        <p class="mb-0"><i class="fas fa-envelope me-2"></i> info@stylehub.com</p>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6">
                    <h5 class="mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light text-decoration-none">About Us</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Contact</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Size Guide</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Shipping Info</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Returns</a></li>
                    </ul>
                </div>

                <!-- Categories -->
                <div class="col-lg-2 col-md-6">
                    <h5 class="mb-3">Categories</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light text-decoration-none">Women's Fashion</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Men's Fashion</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Accessories</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Shoes</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Sale Items</a></li>
                    </ul>
                </div>

                <!-- Customer Service -->
                <div class="col-lg-2 col-md-6">
                    <h5 class="mb-3">Customer Service</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light text-decoration-none">Help Center</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Track Order</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Privacy Policy</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Terms of Service</a></li>
                        <li><a href="#" class="text-light text-decoration-none">FAQ</a></li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div class="col-lg-2 col-md-6">
                    <h5 class="mb-3">Stay Connected</h5>
                    <p class="text-light small">Subscribe to get updates on new collections and exclusive offers.</p>
                    <div class="mb-3">
                        <input type="email" class="form-control form-control-sm" placeholder="Your email">
                        <button class="btn btn-primary btn-sm mt-2 w-100">Subscribe</button>
                    </div>
                    <div class="social-links">
                        <a href="#" class="text-white me-2"><i class="fab fa-facebook fa-lg"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-youtube fa-lg"></i></a>
                    </div>
                </div>
            </div>

            <!-- Payment Methods -->
            <div class="row mt-4 pt-4 border-top border-secondary">
                <div class="col-md-6">
                    <p class="mb-0 text-light">&copy; 2024 StyleHub. All rights reserved.</p>
                </div>
                <div class="col-md-6">
                    <div class="payment-methods text-end">
                        <span class="text-light me-3">We Accept:</span>
                        <i class="fab fa-cc-visa fa-lg me-2"></i>
                        <i class="fab fa-cc-mastercard fa-lg me-2"></i>
                        <i class="fab fa-cc-amex fa-lg me-2"></i>
                        <i class="fab fa-cc-paypal fa-lg"></i>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
