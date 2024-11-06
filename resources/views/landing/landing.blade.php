<!-- resources/views/landing/landing.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Type2Career</title>
    <!-- Link to your CSS (Bootstrap or custom styles) -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Type2Career</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#features">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testimonials">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary text-white" href="{{ route('login') }}">Get Started</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero bg-primary text-white text-center py-5">
        <div class="container">
            <h1>Discover Your Personality Type</h1>
            <p class="lead">Find the best career path based on your personality.</p>
            <a href="{{ route('register') }}" class="btn btn-light btn-lg mt-3">Get Started</a>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features py-5">
        <div class="container">
            <h2 class="text-center mb-5">Features</h2>
            <div class="row">
                <div class="col-md-4 text-center">
                    <i class="fas fa-brain fa-3x mb-3"></i>
                    <h3>Personality Test</h3>
                    <p>Understand your personality type through a comprehensive assessment.</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fas fa-briefcase fa-3x mb-3"></i>
                    <h3>Career Matching</h3>
                    <p>Explore career paths that align with your personality and strengths.</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fas fa-users fa-3x mb-3"></i>
                    <h3>Community Support</h3>
                    <p>Join a community of like-minded individuals for growth and support.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-5">What Our Users Say</h2>
            <div class="row">
                <div class="col-md-6">
                    <blockquote class="blockquote">
                        <p class="mb-0">This platform helped me understand my personality and find the perfect career path!</p>
                        <footer class="blockquote-footer">Alex, Software Engineer</footer>
                    </blockquote>
                </div>
                <div class="col-md-6">
                    <blockquote class="blockquote">
                        <p class="mb-0">A valuable resource for anyone seeking guidance in their career journey.</p>
                        <footer class="blockquote-footer">Sarah, Marketing Specialist</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <!-- Call-to-Action Section -->
    <section class="cta text-center py-5">
        <div class="container">
            <h2>Ready to Discover Your True Potential?</h2>
            <p>Sign up now and begin your journey!</p>
            <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Sign Up</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-dark text-white text-center py-3">
        <div class="container">
            <p>&copy; 2024 Type2Career. All rights reserved.</p>
        </div>
    </footer>

    <!-- Optional JavaScript for Bootstrap (if using Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
