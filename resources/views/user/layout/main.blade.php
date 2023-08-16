<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- font awesome cnd link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- custom css link -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>

<body>

    <!-- header section starts-->
    <section class="header">

        <a href="/index.html" class="logo">Travel</a>

        <nav class="navbar">
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/package">Package</a>
            <a href="/book">Book</a>
            @if(auth()->user())
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            @else
            <a class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </a>
            <a class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </a>
            @endif
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    <!-- header section ends -->



    @yield('content')





    <!-- home package ends -->


    <!-- footer section start -->
    <section class="footer">

        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="/index.html"><i class="fas fa-angle-right"></i> Home</a>
                <a href="/about.html"><i class="fas fa-angle-right"></i> About</a>
                <a href="/package.html"><i class="fas fa-angle-right"></i> Package</a>
                <a href="/book.html"><i class="fas fa-angle-right"></i> Book</a>

            </div>


            <div class="box">
                <h3>extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
                <a href="#"><i class="fas fa-angle-right"></i> about us</a>
                <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
            </div>


            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
                <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
                <a href="#"><i class="fas fa-envelope"></i> bipanashrestha@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i> Dharan,Nepal</a>
            </div>

            <div class="box">
                <h3>Follow us</h3>
                <a href="#"><i class="fab fa-facebook"></i>facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
            </div>
        </div>

        <div class="credit">created by <span> Bipana Shrestha </span>| all rights reserved! </div>

    </section>



    <!-- footer section ends -->








    <!-- swiper js link -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- javascript link -->
    <script src="{{asset('/script.js')}}"></script>
</body>

</html>