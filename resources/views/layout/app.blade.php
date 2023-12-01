<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    <link rel="icon" href="{{ asset('assets/images/japanese-food.svg') }}" type="image/png" sizes="16x16">
    <link rel="stylesheet" href='{{ asset("assets/css/all.min.css") }}'>
    <link rel="stylesheet" href='{{ asset("assets/css/bootstrap.css") }}'>
    <link rel="stylesheet" href='{{ asset("assets/css/style.css") }}'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,100;9..40,200;9..40,300;9..40,400;9..40,500;9..40,600;9..40,700;9..40,800&family=Playfair+Display:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="top">
        <div class="container">
            <div class="contact">
                <p><i class="fa fa-light fa-phone"></i>(414) 857 - 0107</p>
                <p><i class="fa fa-light fa-envelope"></i>yummy@bistrobliss</p>
            </div>
            <ul class="social position-relative">
                <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                    <a href="https://www.facebook.com/malak.sati.7" target="_blank"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa-brands fa-github"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container d-flex justify-content-between">
            <a href="{{ url("/")  }}" class="logo navbar-brand">
                <div>
                    <img src="{{ asset('assets/images/japanese-food.svg') }}" alt="">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="" class="lo">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0 fw-medium">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ url('/about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ url('/menu') }}">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ url('/blogs') }}">Pages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ url('/contact') }}">Contact</a>
                    </li>
                    @if(!Auth::user())
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('register') }}">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('login') }}">Login</a>
                        </li>
                        @else
                        <?php $id = Auth::user()->id; ?>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('profile', $id) }}">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('logout') }}">Logout</a>
                        </li>
                        @endif
                </ul>
            </div>
            <div class="d-flex gap-2 btns">
                <a href="{{ url('/book') }}" class="btn btn-outline-dark rounded-pill border-2 fw-medium ">Book A Table</a>
                @if(Auth::user() && Auth::user()->role == 'admin')
                <a href="{{ url('/dashboard') }}" class="btn btn-outline-dark rounded-pill border-2 fw-medium">Dashboard</a>
                @endif
            </div>
        </div>
    </nav>
    @yield("basic-section")
    <footer>
        <div class="container">
            <div class="box">
                <a href="{{ url("/")  }}" class="logo">
                    <div>
                        <img src="{{ asset('assets/images/japanese-food (1).svg') }}" alt="" class="tea">
                        <img src="{{ asset('assets/images/download.png') }}" alt="">
                    </div>
                </a>
                <p class="text">
                    In the new era of technology we look a in the future with certainty and pride to for our company and.
                </p>
                <ul class="social">
                    <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/malak.sati.7" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-github"></i></a>
                    </li>
                </ul>
            </div>
            <div class="box px-5">
                <h4>Pages</h4>
                <ul class="links">
                    <li><a href="{{ url("/") }}">Home</a></li>
                    <li><a href="{{ url("/about") }}">About</a></li>
                    <li><a href="{{ url("/menu") }}">Menu</a></li>
                    <li><a href="contact.php">Pricing</a></li> 
                    <li><a href="{{ url('/blogs') }}">Blog</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                    <li><a href="">Delivery</a></li>
                </ul>
            </div>
            <div class="box">
                <h4>Utility Pages</h4>
                <ul class="links">
                    <li><a href="{{ url("/") }}">Start Here</a></li>
                    <li><a href="{{ url("/products") }}">Styleguide</a></li>
                    <li><a href="{{ url("/about") }}">Password Protected</a></li>
                    <li><a href="contact.php">404 Not Found</a></li>
                    <li><a href="">Licenses</a></li>
                    <li><a href="">Changelog</a></li>
                    <li><a href="">View More</a></li>
                </ul>
            </div>
            <div class="box-img">
                <h4>Follow Us on Instagram</h4>
                <div class="footer-images">
                    <img src="{{ asset('assets/images/footer1.png') }}" alt="">
                    <img src="{{ asset('assets/images/footer2.png') }}" alt="">
                    <img src="{{ asset('assets/images/footer3.png') }}" alt="">
                    <img src="{{ asset('assets/images/footer4.png') }}" alt="">
                </div>
            </div>
        </div>
        <p class="copyright">Copyright © 2023 Luca Developer. All Rights Reserved</p>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>

