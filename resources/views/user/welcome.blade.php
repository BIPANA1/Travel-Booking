@extends('user.layout.main')
@section('content')


<section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background: url(/frontend/Images/about.png) no-repeat;">
                    <div class="slide-content">
                        <span>explore, discover, travel</span>
                        <h3>travel arround the world</h3>
                        <a href="" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide" style="background: url(/frontend/Images/architecture.jpg) no-repeat;">
                    <div class="slide-content">
                        <span>explore, discover, travel</span>
                        <h3>discover new places</h3>
                        <a href="" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide" style="background: url(/frontend/Images/sol.jpg) no-repeat;">
                
                    <div class="slide-content">
                        <span>explore, discover, travel</span>
                        <h3>make your tour worthwhile</h3>
                        <a href="" class="btn">discover more</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>
    </section>



    <!-- services section start -->

    <section class="services">
        <h1 class="heading-title">Our services</h1>

        <div class="box-container">
            <div class="box">
                <img src="{{asset('frontend/Images/trekking.png')}}" alt="" height="100" width="100">
                <h5>adventure</h5>
            </div>

            <div class="box">
                <img src="{{asset('frontend/Images/tourguide.png')}}" alt="" height="100" width="100">
                <h5>tour guide</h5>
            </div>

            <div class="box">
                <img src="{{asset('frontend/Images/firecamp.png')}}" alt="" height="100" width="100">
                <h5>camp fire</h5>
            </div>


            <div class="box">
                <img src="{{asset('frontend/Images/offroad.png')}}" alt="" height="100" width="100">
                <h5>off road</h5>
            </div>


        </div>
    </section>
    <!-- services section end -->

    <!-- home about section start -->

    <section class="home-about">
        <div>
            <img src="{{asset('frontend/Images/slide3.jpg')}}" alt="" height="300" style="border-radius: 8px;">
        </div>
        <div class="content">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt veritatis nobis, praesentium laborum quae voluptate alias repudiandae minus reprehenderit, totam in quibusdam aliquid consectetur illo inventore, perferendis nesciunt! Exercitationem, cupiditate.?</p>
            <a href="about.html" class="btn">read more</a>

        </div>
    </section>
    <!-- home about section end -->


    <!-- home package start -->


    <section class="home-packages">
        <h1 class="heading">Our packages</h1> <br><br>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="{{asset('frontend/Images/slid.jpg')}}" alt="" height="300" width="250">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis beatae molestias asperiores
                        assumenda necessitatibus reiciendis a quasi! Ullam, deserunt architecto!</p>
                        <a href="book.html" class="btn-package">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{asset('frontend//Images/slide1.jpg')}}" alt="" height="300" width="250">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis beatae molestias asperiores
                        assumenda necessitatibus reiciendis a quasi! Ullam, deserunt architecto!</p>
                        <a href="book.html" class="btn-package">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{asset('frontend//Images/sli.jpg')}}" alt="" height="300" width="250">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis beatae molestias asperiores
                        assumenda necessitatibus reiciendis a quasi! Ullam, deserunt architecto!</p>
                        <a href="book.html" class="btn-package">book now</a>
                </div>
            </div>
        </div>

        <div class="load-more">
        <a href="package.html" class="btn">load more</a>
        </div>
    </section>











@endsection