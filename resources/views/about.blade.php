```blade
@extends('layout')
@section('title', 'About Us')

@section('main')

<style>
body{
    padding-top:80px;
    background:#f8f9fa;
}

/* Hero Section */
.about-hero{
    min-height:420px;
    background:
    linear-gradient(rgba(0,0,0,.60),rgba(0,0,0,.60)),
    url('https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=1920');
    background-size:cover;
    background-position:center;
    display:flex;
    align-items:center;
    justify-content:center;
    text-align:center;
    color:white;
}

.about-hero h1{
    font-size:3.5rem;
    font-weight:700;
    margin-bottom:15px;
}

.about-hero p{
    max-width:750px;
    margin:auto;
    opacity:.95;
}

/* Section Heading */
.section-title{
    text-align:center;
    margin-bottom:50px;
}

.section-title h2{
    font-weight:700;
    color:#222;
}

.gold-line{
    width:90px;
    height:4px;
    background:#c8a96a;
    margin:15px auto;
    border-radius:10px;
}

/* Founder */
.founder-card{
    background:white;
    border-radius:25px;
    overflow:hidden;
    box-shadow:0 15px 35px rgba(0,0,0,.08);
}

.founder-img{
    width:100%;
    height:100%;
    object-fit:cover;
    min-height:450px;
}

.founder-content{
    padding:50px;
}

.founder-badge{
    color:#c8a96a;
    font-weight:700;
    letter-spacing:1px;
    text-transform:uppercase;
}

.founder-content h2{
    font-weight:700;
    margin:15px 0;
}

/* Statistics */
.stat-card{
    background:white;
    border-radius:20px;
    padding:30px;
    text-align:center;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
    transition:.4s;
    height:100%;
}

.stat-card:hover{
    transform:translateY(-10px);
}

.stat-card img{
    width:65px;
    margin-bottom:15px;
}

.stat-number{
    font-size:2rem;
    font-weight:700;
    color:#c8a96a;
}

/* Values */
.value-card{
    background:white;
    border-radius:20px;
    padding:30px;
    text-align:center;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
    height:100%;
    transition:.4s;
}

.value-card:hover{
    transform:translateY(-10px);
}

.value-icon{
    font-size:3rem;
    color:#c8a96a;
}

/* Team */
.team-section{
    padding:60px 0;
}

.team-box{
    background:white;
    border-radius:25px;
    padding:30px;
    text-align:center;
    box-shadow:0 12px 30px rgba(0,0,0,.08);
    transition:.4s;
}

.team-box:hover{
    transform:translateY(-10px);
}

.img-box{
    width:140px;
    height:140px;
    margin:auto;
    overflow:hidden;
    border-radius:50%;
    border:5px solid #f3f3f3;
}

.img-box img{
    width:100%;
    height:100%;
    object-fit:cover;
    transition:.4s;
}

.team-box:hover img{
    transform:scale(1.1);
}

.team-box h5{
    margin-top:20px;
    font-weight:700;
}

.team-box p{
    color:#777;
}

.team-social{
    margin-top:15px;
}

.team-social a{
    width:40px;
    height:40px;
    border-radius:50%;
    background:#f5f5f5;
    color:#333;
    display:inline-flex;
    align-items:center;
    justify-content:center;
    text-decoration:none;
    margin:0 5px;
    transition:.3s;
}

.team-social a:hover{
    background:#c8a96a;
    color:white;
}

.swiper-pagination-bullet-active{
    background:#c8a96a !important;
}

/* CTA */
.cta-section{
    background:#1f1f1f;
    color:white;
    border-radius:25px;
    padding:60px 30px;
    text-align:center;
}

.cta-btn{
    background:#c8a96a;
    color:white;
    border:none;
    padding:12px 35px;
    border-radius:50px;
    text-decoration:none;
    display:inline-block;
    margin-top:15px;
}

.cta-btn:hover{
    background:#b8954f;
    color:white;
}

@media(max-width:768px){

.about-hero h1{
    font-size:2.5rem;
}

.founder-content{
    padding:30px;
}

}
</style>

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<x-usernavbar></x-usernavbar>

<!-- Hero -->
<section class="about-hero">
    <div class="container">
        <h1>About TJ Hotel</h1>

        <p>
            {{ $setting ? $setting->site_about : 'About content not available.' }}
        </p>
    </div>
</section>

<!-- Founder -->
<section class="container my-5">

    <div class="founder-card">

        <div class="row g-0 align-items-center">

            <div class="col-lg-5">
                <img
                src="https://randomuser.me/api/portraits/men/56.jpg"
                class="founder-img">
            </div>

            <div class="col-lg-7">

                <div class="founder-content">

                    <span class="founder-badge">
                        Our Founder
                    </span>

                    <h2>
                        A Vision of Luxury Hospitality
                    </h2>

                    <p>
                        TJ HOTEL was established with a mission to create a world-class hospitality experience where comfort, luxury, and exceptional service come together.
                    </p>

                    <p>
                        Our founder believed every guest deserves a memorable stay, personalized service, and an atmosphere that feels like home while maintaining the elegance of a premium hotel.
                    </p>

                    <h5 class="mt-4">
                        John Carter
                    </h5>

                    <p class="text-muted">
                        Founder & CEO
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Statistics -->
<section class="container my-5">

    <div class="section-title">
        <h2>Our Achievements</h2>
        <div class="gold-line"></div>
    </div>

    <div class="row g-4">

        <div class="col-lg-3 col-md-6">
            <div class="stat-card">
                <img src="{{ asset('images/security.png') }}">
                <div class="stat-number">100+</div>
                <p>Luxury Rooms</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="stat-card">
                <img src="{{ asset('images/web.png') }}">
                <div class="stat-number">200+</div>
                <p>Happy Guests</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="stat-card">
                <img src="{{ asset('images/customer-satisfaction.png') }}">
                <div class="stat-number">150+</div>
                <p>Positive Reviews</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="stat-card">
                <img src="{{ asset('images/teamwork.png') }}">
                <div class="stat-number">200+</div>
                <p>Professional Staff</p>
            </div>
        </div>

    </div>

</section>

<!-- Core Values -->
<section class="container my-5">

    <div class="section-title">
        <h2>Our Core Values</h2>
        <div class="gold-line"></div>
    </div>

    <div class="row g-4">

        <div class="col-lg-4">
            <div class="value-card">
                <div class="value-icon">
                    <i class="bi bi-star-fill"></i>
                </div>
                <h5 class="mt-3">Excellence</h5>
                <p>Delivering exceptional hospitality and world-class guest experiences.</p>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="value-card">
                <div class="value-icon">
                    <i class="bi bi-heart-fill"></i>
                </div>
                <h5 class="mt-3">Guest Satisfaction</h5>
                <p>Creating memorable moments and ensuring every guest feels valued.</p>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="value-card">
                <div class="value-icon">
                    <i class="bi bi-shield-check"></i>
                </div>
                <h5 class="mt-3">Trust & Safety</h5>
                <p>Providing a secure, reliable, and comfortable environment.</p>
            </div>
        </div>

    </div>

</section>

<!-- Team -->
<section class="container team-section">

    <div class="section-title">
        <h2>Management Team</h2>
        <div class="gold-line"></div>
    </div>

    <div class="swiper teamSlider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="team-box">
                    <div class="img-box">
                        <img src="https://randomuser.me/api/portraits/men/51.jpg">
                    </div>

                    <h5>John Carter</h5>
                    <p>Founder & CEO</p>

                    <div class="team-social">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="team-box">
                    <div class="img-box">
                        <img src="https://randomuser.me/api/portraits/women/52.jpg">
                    </div>

                    <h5>Sarah Miller</h5>
                    <p>Operations Manager</p>

                    <div class="team-social">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="team-box">
                    <div class="img-box">
                        <img src="https://randomuser.me/api/portraits/men/53.jpg">
                    </div>

                    <h5>David Lee</h5>
                    <p>Marketing Head</p>

                    <div class="team-social">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<!-- CTA -->
<section class="container my-5">

    <div class="cta-section">

        <h2>Experience Luxury & Comfort</h2>

        <p class="mt-3">
            Book your stay today and discover premium hospitality designed around your comfort.
        </p>

        <a href="{{ url('/rooms') }}" class="cta-btn">
            Explore Rooms
        </a>

    </div>

</section>

<x-footer></x-footer>

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<script>
new Swiper(".teamSlider",{

    loop:true,

    autoplay:{
        delay:2500,
        disableOnInteraction:false
    },

    pagination:{
        el:".swiper-pagination",
        clickable:true
    },

    spaceBetween:30,

    breakpoints:{
        0:{
            slidesPerView:1
        },
        768:{
            slidesPerView:2
        },
        1024:{
            slidesPerView:3
        }
    }

});
</script>

@endsection
```
