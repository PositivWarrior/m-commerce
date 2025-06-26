@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-6">
                <div class="hero-content">
                    <span class="badge bg-primary mb-3">New Collection 2024</span>
                    <h1 class="display-3 fw-bold mb-4">
                        Fashion That
                        <span class="text-primary">Speaks</span>
                        Your Style
                    </h1>
                    <p class="lead mb-4">
                        Discover our curated collection of premium fashion pieces that blend contemporary design with timeless elegance. Express yourself with confidence.
                    </p>
                    <div class="d-flex gap-3 mb-5">
                        <a href="#products" class="btn btn-primary btn-lg px-5">Shop Now</a>
                        <a href="#about" class="btn btn-outline-dark btn-lg px-5">Learn More</a>
                    </div>
                    <div class="stats-row">
                        <div class="d-flex gap-4">
                            <div class="stat-item">
                                <h3 class="fw-bold mb-0">50K+</h3>
                                <small class="text-muted">Happy Customers</small>
                            </div>
                            <div class="stat-item">
                                <h3 class="fw-bold mb-0">1000+</h3>
                                <small class="text-muted">Products</small>
                            </div>
                            <div class="stat-item">
                                <h3 class="fw-bold mb-0">100+</h3>
                                <small class="text-muted">Brands</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-image">
                    <div class="image-grid">
                        <div class="floating-card card-1">
                            <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" alt="Fashion Model" class="img-fluid rounded-3">
                            <div class="card-overlay">
                                <span class="badge bg-white text-dark">Trending</span>
                            </div>
                        </div>
                        <div class="floating-card card-2">
                            <img src="https://images.unsplash.com/photo-1445205170230-053b83016050?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" alt="Fashion Style" class="img-fluid rounded-3">
                            <div class="card-overlay">
                                <span class="badge bg-white text-dark">New</span>
                            </div>
                        </div>
                        <div class="floating-icon icon-1">
                            <i class="fas fa-tshirt"></i>
                        </div>
                        <div class="floating-icon icon-2">
                            <i class="fas fa-gem"></i>
                        </div>
                        <div class="floating-icon icon-3">
                            <i class="fas fa-shopping-bag"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Categories Section -->
<section id="categories" class="section bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold mb-3">Shop by Category</h2>
            <p class="lead text-muted">Explore our diverse range of fashion categories</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="category-card card h-100 border-0 shadow-sm">
                    <div class="card-img-container">
                        <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Women's Fashion">
                        <div class="category-overlay">
                            <h4 class="text-white fw-bold">Women's Fashion</h4>
                            <p class="text-white-50 mb-3">Elegant & Contemporary</p>
                            <a href="#" class="btn btn-light btn-sm">Shop Women</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="category-card card h-100 border-0 shadow-sm">
                    <div class="card-img-container">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Men's Fashion">
                        <div class="category-overlay">
                            <h4 class="text-white fw-bold">Men's Fashion</h4>
                            <p class="text-white-50 mb-3">Classic & Modern</p>
                            <a href="#" class="btn btn-light btn-sm">Shop Men</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="category-card card h-100 border-0 shadow-sm">
                    <div class="card-img-container">
                        <img src="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Accessories">
                        <div class="category-overlay">
                            <h4 class="text-white fw-bold">Accessories</h4>
                            <p class="text-white-50 mb-3">Complete Your Look</p>
                            <a href="#" class="btn btn-light btn-sm">Shop Accessories</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Products Section -->
<section id="products" class="section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold mb-3">Featured Products</h2>
            <p class="lead text-muted">Handpicked pieces from our latest collection</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="product-card card border-0 h-100">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1595777457583-95e059d581b8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" class="card-img-top" alt="Summer Dress">
                        <div class="product-overlay">
                            <div class="product-actions">
                                <button class="btn btn-primary btn-sm">
                                    <i class="fas fa-shopping-cart"></i> Add to Cart
                                </button>
                                <button class="btn btn-outline-light btn-sm">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                        </div>
                        <span class="badge bg-danger position-absolute top-0 start-0 m-2">Sale</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Elegant Summer Dress</h5>
                        <p class="card-text text-muted">Perfect for any occasion</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="price">
                                <span class="text-decoration-line-through text-muted">$120</span>
                                <span class="fw-bold text-primary">$89</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <small class="text-muted">(24)</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-card card border-0 h-100">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1551028719-00167b16eac5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" class="card-img-top" alt="Leather Jacket">
                        <div class="product-overlay">
                            <div class="product-actions">
                                <button class="btn btn-primary btn-sm">
                                    <i class="fas fa-shopping-cart"></i> Add to Cart
                                </button>
                                <button class="btn btn-outline-light btn-sm">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                        </div>
                        <span class="badge bg-success position-absolute top-0 start-0 m-2">New</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Premium Leather Jacket</h5>
                        <p class="card-text text-muted">Genuine leather craftsmanship</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="price">
                                <span class="fw-bold text-primary">$299</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="far fa-star text-warning"></i>
                                <small class="text-muted">(18)</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-card card border-0 h-100">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1543163521-1bf539c55dd2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" class="card-img-top" alt="Designer Shoes">
                        <div class="product-overlay">
                            <div class="product-actions">
                                <button class="btn btn-primary btn-sm">
                                    <i class="fas fa-shopping-cart"></i> Add to Cart
                                </button>
                                <button class="btn btn-outline-light btn-sm">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Designer Heels</h5>
                        <p class="card-text text-muted">Comfort meets style</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="price">
                                <span class="fw-bold text-primary">$159</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <small class="text-muted">(31)</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-card card border-0 h-100">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" class="card-img-top" alt="Handbag">
                        <div class="product-overlay">
                            <div class="product-actions">
                                <button class="btn btn-primary btn-sm">
                                    <i class="fas fa-shopping-cart"></i> Add to Cart
                                </button>
                                <button class="btn btn-outline-light btn-sm">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                        </div>
                        <span class="badge bg-warning position-absolute top-0 start-0 m-2">Trending</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Luxury Handbag</h5>
                        <p class="card-text text-muted">Sophisticated and practical</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="price">
                                <span class="fw-bold text-primary">$199</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="far fa-star text-warning"></i>
                                <small class="text-muted">(27)</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Special Offers Section -->
<section class="section bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="display-6 fw-bold mb-3">Special Summer Sale</h2>
                <p class="lead mb-4">Get up to 50% off on selected items. Limited time offer!</p>
                <div class="d-flex gap-3">
                    <a href="#" class="btn btn-light btn-lg">Shop Sale Items</a>
                    <a href="#" class="btn btn-outline-light btn-lg">View Collection</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="text-center">
                    <div class="offer-badge">
                        <span class="display-4 fw-bold">50%</span>
                        <br>
                        <span class="h5">OFF</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Brands Section -->
<section class="section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold mb-3">Trusted Brands</h2>
            <p class="lead text-muted">We partner with the world's leading fashion brands</p>
        </div>
        <div class="row align-items-center g-4">
            <div class="col-lg-2 col-md-4 col-6">
                <div class="brand-logo text-center">
                    <h4 class="text-muted fw-bold">ZARA</h4>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <div class="brand-logo text-center">
                    <h4 class="text-muted fw-bold">H&M</h4>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <div class="brand-logo text-center">
                    <h4 class="text-muted fw-bold">NIKE</h4>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <div class="brand-logo text-center">
                    <h4 class="text-muted fw-bold">ADIDAS</h4>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <div class="brand-logo text-center">
                    <h4 class="text-muted fw-bold">GUCCI</h4>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <div class="brand-logo text-center">
                    <h4 class="text-muted fw-bold">PRADA</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="section bg-dark text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h2 class="display-6 fw-bold mb-3">Stay Updated</h2>
                <p class="lead mb-4">Subscribe to our newsletter and be the first to know about new collections and exclusive offers.</p>
                <form class="d-flex gap-2 mb-4">
                    <input type="email" class="form-control" placeholder="Enter your email">
                    <button type="submit" class="btn btn-primary px-4">Subscribe</button>
                </form>
                <div class="social-links">
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-youtube fa-lg"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
/* Hero Section Styles */
.hero-section {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    min-height: 100vh;
    position: relative;
}

.hero-content {
    animation: fadeInLeft 1s ease-out;
}

.stats-row .stat-item {
    text-align: center;
}

.image-grid {
    position: relative;
    height: 500px;
}

.floating-card {
    position: absolute;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.floating-card:hover {
    transform: translateY(-5px);
}

.card-1 {
    width: 250px;
    height: 350px;
    top: 20px;
    right: 50px;
    animation: floatUp 2s ease-out;
}

.card-2 {
    width: 200px;
    height: 280px;
    bottom: 40px;
    left: 20px;
    animation: floatUp 2s ease-out 0.5s both;
}

.card-overlay {
    position: absolute;
    top: 15px;
    right: 15px;
}

.floating-icon {
    position: absolute;
    width: 60px;
    height: 60px;
    background: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    color: var(--primary-color);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    animation: float 3s ease-in-out infinite;
}

.icon-1 {
    top: 150px;
    left: 50px;
    animation-delay: 0s;
}

.icon-2 {
    top: 300px;
    right: 20px;
    animation-delay: 1s;
}

.icon-3 {
    bottom: 150px;
    right: 150px;
    animation-delay: 2s;
}

/* Category Cards */
.category-card {
    overflow: hidden;
    transition: transform 0.3s ease;
}

.category-card:hover {
    transform: translateY(-5px);
}

.card-img-container {
    position: relative;
    height: 300px;
    overflow: hidden;
}

.card-img-top {
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.category-card:hover .card-img-top {
    transform: scale(1.05);
}

.category-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(transparent, rgba(0,0,0,0.7));
    padding: 30px 20px 20px;
}

/* Product Cards */
.product-card {
    transition: transform 0.3s ease;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}

.product-image {
    position: relative;
    height: 250px;
    overflow: hidden;
}

.product-image img {
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.product-card:hover .product-image img {
    transform: scale(1.05);
}

.product-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,0,0,0.7);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.product-card:hover .product-overlay {
    opacity: 1;
}

.product-actions {
    display: flex;
    gap: 10px;
}

/* Special Offers */
.offer-badge {
    width: 150px;
    height: 150px;
    background: white;
    color: var(--primary-color);
    border-radius: 50%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
}

/* Animations */
@keyframes fadeInLeft {
    from {
        opacity: 0;
        transform: translateX(-50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes floatUp {
    from {
        opacity: 0;
        transform: translateY(50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes float {
    0%, 100% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-10px);
    }
}

/* Brand Logos */
.brand-logo {
    padding: 20px;
    transition: transform 0.3s ease;
}

.brand-logo:hover {
    transform: scale(1.1);
}

/* Responsive */
@media (max-width: 768px) {
    .hero-section {
        text-align: center;
    }

    .image-grid {
        height: 300px;
        margin-top: 50px;
    }

    .card-1, .card-2 {
        width: 180px;
        height: 250px;
    }

    .floating-icon {
        width: 40px;
        height: 40px;
        font-size: 18px;
    }
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add to cart animation
    document.querySelectorAll('.product-actions button').forEach(button => {
        button.addEventListener('click', function() {
            if (this.innerHTML.includes('Add to Cart')) {
                const originalText = this.innerHTML;
                this.innerHTML = '<i class="fas fa-check"></i> Added!';
                this.classList.add('btn-success');
                this.classList.remove('btn-primary');

                setTimeout(() => {
                    this.innerHTML = originalText;
                    this.classList.remove('btn-success');
                    this.classList.add('btn-primary');
                }, 2000);
            }
        });
    });

    // Newsletter form
    document.querySelector('form').addEventListener('submit', function(e) {
        e.preventDefault();
        const email = this.querySelector('input[type="email"]').value;
        if (email) {
            alert('Thank you for subscribing!');
            this.reset();
        }
    });
});
</script>
@endpush
