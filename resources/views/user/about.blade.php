@extends('user.layout.main')
@section('content')


<style>
    .about {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 10%;

    }

    p {
        font-family: 'Times New Roman', Times, serif;
    }
    h3{
        text-align: center;
        /* margin-bottom:8px ; */
        font-size: 2rem;
        margin-bottom: 3%;
    }
    h4{
        text-align: center;
        font-size: 4rem;
        margin-bottom: 2%; 
    }
    .footer-about{
    background-image: url('/Images/blue.png') no-repeat;
    background-size: cover;
    background-position: center;
    min-height: 500px;
    position: relative;
    bottom: 0;
    width: 100%;
    background-color: #624170;
    margin-top: 10%;

}

/* Create a grid layout for the box container */
.box-container {
    margin-bottom: 100px;
    display: flex;
    grid-template-columns: repeat(auto-fit, minmax(15rem, 1fr));
    gap: 3rem;
    margin-right: 20px;
    /* padding: 10px; */


}

.footer-about .box-container .box h3 {
    color: rgb(5, 5, 5);
    font-size: 1rem;
    padding-bottom: 2rem;
}

.footer-about .box-container .box a {
    color: rgb(184, 178, 178);
    font-size: 1rem;
    padding-bottom: 1rem;
    display: block;
}

.footer-about .box-container .box a i {
    color: var(--main-color);
    padding-right: .5rem;
    transition: .2s linear;
}

.footer-about .box-container .box a:hover i {
    color: rgb(21, 20, 20);
    padding-right: 2rem;
}

.footer-about .credit {
    text-align: center;
    padding-top: 3rem;
    margin-top: 3rem;
    border-top: .1rem solid var(--light-black);
    font-size: 1.5rem;
    color: rgb(252, 251, 251);
}

.footer-about .credit span {
    color: var(--main-color);
}
.heading-about{
    background-image: url('frontend/Images/maldives.jpg');
}

</style>


<div class="heading-about">
        <h4>about us</h4>
    </div>

    <section class="about">
        <div class="image">
            <img src="{{asset('frontend/Images/slide.png')}}" alt="" height="300" style="border-radius: 8px;">
        </div>
        <div class="content">
            <h3>Why choose us?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt veritatis nobis, praesentium laborum
                quae voluptate alias repudiandae minus reprehenderit, totam quibusdam aliquid consectetur illo
                inventore, perferendis nesciunt! Exercitationem, cupiditate.?Lorem ipsum dolor sit amet consectetur
                adipisicing elit. </p>
            <p> minima consequatur officiis possimus! Nisi possimus magni suscipit ipsum hic
                fuga. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non eos, illum in mollitia incidunt
                eligendi, fuga vero sed eum molestias iste consequatur a distinctio, iusto facere alias explicabo
                debitis libero. </p>
            <!-- <a href="about.html" class="btn">read more</a> -->

            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-map"></i>
                    <span>top destinations</span>
                </div>

                <div class="icons">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>affordable price</span>
                </div>

                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 guide services</span>
                </div>
            </div>

        </div>
    </section>


    <section class="reviews">
        <h3>Client reviews</h3>
        <div class="swiper reviews-slider">
            <div class="swiper-wrapper">
                <div class="slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <h3>Jennifer watson </h3>
                    <span>traveller</span>
                    <img src="{{asset('frontend/Images/girl.jpg')}}" alt="" >
                </div>
                <div class="slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    </p>
                    <h3>Jack Hebert</h3>
                    <span>traveller</span>
                    <img src="{{asset('frontend/Images/glassboy.png')}}" alt="" >
                </div>
                <div class="slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>


                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    </p>
                    <h3>Monica Rial</h3>
                    <span>traveller</span>
                    <img src="{{asset('frontend/Images/girlss.jpg')}}" alt="">
                </div>

            </div>
        </div>

    </section>





















@endsection