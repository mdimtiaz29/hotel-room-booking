```blade
@extends('layout')
@section('title', 'Contact Us')

@section('main')

<style>
    .contact-hero{
        background: linear-gradient(rgba(0,0,0,.55),rgba(0,0,0,.55)),
                    url('https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=1920');
        background-size: cover;
        background-position: center;
        min-height: 320px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: #fff;
        margin-bottom: 60px;
    }

    .contact-hero h1{
        font-size: 3rem;
        font-weight: 700;
    }

    .contact-hero p{
        max-width: 650px;
        margin: auto;
        opacity: .9;
    }

    .contact-card{
        background: #fff;
        border-radius: 20px;
        padding: 25px;
        box-shadow: 0 10px 30px rgba(0,0,0,.08);
        transition: .3s;
        height: 100%;
    }

    .contact-card:hover{
        transform: translateY(-5px);
    }

    .map-box{
        overflow: hidden;
        border-radius: 15px;
    }

    .map-box iframe{
        width: 100%;
        border: none;
    }

    .section-heading{
        font-weight: 700;
        margin-bottom: 5px;
    }

    .section-sub{
        color: #6c757d;
        margin-bottom: 25px;
    }

    .info-item{
        display: flex;
        align-items: flex-start;
        gap: 15px;
        margin-bottom: 20px;
    }

    .info-icon{
        width: 45px;
        height: 45px;
        border-radius: 50%;
        background: #f5f5f5;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .social-links a{
        width: 45px;
        height: 45px;
        border-radius: 50%;
        background: #f8f9fa;
        color: #212529;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        transition: .3s;
    }

    .social-links a:hover{
        background: #212529;
        color: #fff;
        transform: translateY(-3px);
    }

    .contact-form .form-control{
        border-radius: 12px;
        border: 1px solid #ddd;
        padding: 12px 15px;
        box-shadow: none;
    }

    .contact-form .form-control:focus{
        border-color: #212529;
        box-shadow: none;
    }

    .send-btn{
        background: #212529;
        color: #fff;
        border: none;
        border-radius: 50px;
        padding: 12px 35px;
        transition: .3s;
        font-weight: 600;
    }

    .send-btn:hover{
        background: #000;
    }

    .contact-badge{
        background: #f8f9fa;
        padding: 12px;
        border-radius: 12px;
        text-align: center;
    }

    @media(max-width:768px){
        .contact-hero h1{
            font-size: 2.2rem;
        }
    }
</style>

<x-usernavbar></x-usernavbar>

<div class="contact-hero">
    <div class="container">
        <h1>Contact Us</h1>
        <p>
            Have questions, booking inquiries, or special requests?
            Our team is available 24/7 to assist you and ensure
            a comfortable stay at our hotel.
        </p>
    </div>
</div>

@if(session('queries'))
<div class="container mb-4">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('queries') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
</div>
@endif

<div class="container mb-5">
    <div class="row g-4">

        {{-- Contact Information --}}
        <div class="col-lg-6">
            <div class="contact-card">

                <div class="map-box mb-4">
                    <iframe
                        height="320"
                        loading="lazy"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13118.54767150872!2d103.83480024786445!3d34.71433670499213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3659c112cdc8905f%3A0x51e8d860ed698762!2sZhanqi%2C%20Min%20County%2C%20Dingxi%2C%20Gansu%2C%20China%2C%20747504!5e0!3m2!1sen!2sbd!4v1773617050992!5m2!1sen!2sbd">
                    </iframe>
                </div>

                <h4 class="section-heading">Get In Touch</h4>
                <p class="section-sub">
                    We're here to answer your questions and provide assistance whenever needed.
                </p>

                <div class="info-item">
                    <div class="info-icon">📍</div>
                    <div>
                        <strong>Address</strong><br>
                        <a href="https://maps.app.goo.gl/iaiihnRjkKyEXCBo7"
                           target="_blank"
                           class="text-decoration-none text-dark">
                            Zanqing, China
                        </a>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">📞</div>
                    <div>
                        <strong>Phone</strong><br>
                        <a href="tel:+0947878728323"
                           class="text-decoration-none text-dark">
                            +0947878728323
                        </a>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">✉️</div>
                    <div>
                        <strong>Email</strong><br>
                        <a href="mailto:ask.tjhotel@gmail.com"
                           class="text-decoration-none text-dark">
                            ask.tjhotel@gmail.com
                        </a>
                    </div>
                </div>

                <div class="row mt-4 g-3">
                    <div class="col-6">
                        <div class="contact-badge">
                            <strong>24/7</strong><br>
                            Support
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="contact-badge">
                            <strong>Fast</strong><br>
                            Response
                        </div>
                    </div>
                </div>

                <h5 class="mt-4 mb-3">Follow Us</h5>

                <div class="social-links d-flex gap-3">
                    <a href="#"><i class="bi bi-facebook"></i>F</a>
                    <a href="#"><i class="bi bi-instagram"></i>I</a>
                    <a href="#"><i class="bi bi-twitter-x"></i>X</a>
                </div>

            </div>
        </div>

        {{-- Contact Form --}}
        <div class="col-lg-6">
            <div class="contact-card">

                <h3 class="text-center mb-4">
                    Send a Message
                </h3>

                <form action="queries" method="POST" class="contact-form">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            Full Name
                        </label>
                        <input type="text"
                               name="name"
                               class="form-control"
                               placeholder="Enter your name">

                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            Email Address
                        </label>
                        <input type="email"
                               name="email"
                               class="form-control"
                               placeholder="Enter your email">

                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            Subject
                        </label>
                        <input type="text"
                               name="subject"
                               class="form-control"
                               placeholder="Subject">

                        @error('subject')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold">
                            Message
                        </label>

                        <textarea
                            name="message"
                            rows="5"
                            class="form-control"
                            placeholder="Write your message..."
                            style="resize:none;"></textarea>

                        @error('message')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="text-center">
                        <button type="submit" class="send-btn">
                            Send Message
                        </button>
                    </div>

                </form>

            </div>
        </div>

    </div>
</div>

<x-footer></x-footer>

@endsection
```
