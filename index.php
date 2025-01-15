<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baby Bubbles</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/homee.css">
</head>
<body>

    <!-- 1. Header Section -->
    <header class="bg-light py-3">
        <div class="container">
            <div class="row align-items-center">
                <!-- Logo -->
                <div class="col-md-3" >
                  <a href="index.html"> 
                  <img src="images/WhatsApp Image 2024-10-24 at 21.32.53.jpeg" alt="Baby Bubbles Logo" class="img-fluid logo">
                    </a>      
                </div>
                <!-- Navigation Bar -->
                <div class="col-md-6">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Shop</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Contact Us</a></li>
                            <li class="nav-item"><a href="login.php" class="nav-link">Sign In</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Register</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Search Bar & Cart Icon -->
                <div class="col-md-3 text-right ">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" >
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <a href="#" class="shopping-cart">
                        <img src="images/6688652.png" alt="Cart Icon" class="img-fluid cart-icon">
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- 2. Hero Section -->
    <section class="hero bg-light text-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>Caring for Your Little Ones, One Bubble at a Time!</h1>
                    <p class="lead">Discover the best in baby products with love and care.</p>
                    <a href="#" class="btn btn-primary">Shop Now</a>
                    <a href="#" class="btn btn-outline-primary">Explore Our Collection</a>
                </div>
                
            </div>
        </div>
    </section>

    <!-- 3. Featured Products Section -->
    <section class="featured-products py-5">
        <div class="container text-center">
            <h2>Featured Products</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="images/81nq9V3+IhL._AC_UF894,1000_QL80_.jpg" class="card-img-top" alt="Product 1">
                        <div class="card-body">
                            <h5 class="card-title">New Arrival</h5>
                            <p class="card-text">Baby Blanket - Soft & Cozy</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="images/10-best-baby-carriers-under-1000-for-comfort-and-safety.webp" class="card-img-top" alt="Product 2">
                        <div class="card-body">
                            <h5 class="card-title">Best Seller</h5>
                            <p class="card-text">Baby Carrier - Comfortable & Safe</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="images/il_300x300.5538579349_rbn1.webp" class="card-img-top" alt="Product 3">
                        <div class="card-body">
                            <h5 class="card-title">Seasonal Special</h5>
                            <p class="card-text">Organic Baby Onesies - 3 Pack</p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="btn btn-outline-secondary mt-3">View All Products</a>
        </div>
    </section>

    <!-- 4. Special Offers Section -->
    <section class="special-offers bg-primary text-white py-5 text-center">
        <div class="container">
            <h2>Special Offers</h2>
            <p>Get 20% off on your first order!</p>
            <div id="countdown" class="countdown"></div>
        </div>
    </section>

    <!-- 5. Testimonials Section -->
    <section class="testimonials py-5 text-center">
        <div class="container">
            <h2>What Our Customers Are Saying</h2>
            <div class="row">
                <div class="col-md-4">
                    <blockquote class="blockquote">
                        <p>"Amazing products! My baby loves the soft fabrics."</p>
                        <footer class="blockquote-footer">Sarah, New York</footer>
                    </blockquote>
                </div>
                <div class="col-md-4">
                    <blockquote class="blockquote">
                        <p>"Fast shipping and great customer service. Highly recommend!"</p>
                        <footer class="blockquote-footer">Emma, California</footer>
                    </blockquote>
                </div>
                <div class="col-md-4">
                    <blockquote class="blockquote">
                        <p>"Beautiful packaging and quality products. Will order again!"</p>
                        <footer class="blockquote-footer">Liam, Texas</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Newsletter Signup Section -->
    <section class="newsletter bg-light py-5 text-center">
        <div class="container">
            <h2>Sign Up for Our Newsletter</h2>
            <p>Get exclusive deals and updates sent to your inbox.</p>
            <form class="form-inline justify-content-center">
                <input type="email" class="form-control mr-2" placeholder="Enter your email">
                <button type="submit" class="btn btn-primary">Subscribe</button>
            </form>
        </div>
    </section>

    <!-- 7. Footer Section -->
    <footer class="footer bg-dark text-white py-4">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-white">Terms of Service</a></li>
                        <li><a href="#" class="text-white">Shipping Information</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <p>Email: support@babybubbles.com</p>
                    <p>Phone: (123) 456-7890</p>
                </div>
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <a href="#" class="text-white mx-2"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white mx-2"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white mx-2"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
