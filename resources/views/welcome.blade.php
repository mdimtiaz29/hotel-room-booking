@extends('layout')
@section('title', 'Home')

<style>
     

.color-bg{
  background-color:#918450;
}
    .testimonial-section {
      width: 85%;
      margin: auto;
      padding: 80px 0;
    }

    .section-title {
      text-align: center;
      color: black;
      margin-bottom: 50px;
      font-size: 32px;
      font-weight: bold;
    }

    .swiper-slide {
      display: flex;
      justify-content: center;
    }

    .testimonial-card {
      backdrop-filter: blur(12px);
      background: rgba(255, 255, 255, 0.1);
      border-radius: 20px;
      padding: 30px;
      width: 320px;
      text-align: center;
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
      color: black;
    }

    .testimonial-card img {
      width: 70px;
      height: 70px;
      border-radius: 50%;
      margin-bottom: 15px;
      border: 3px solid white;
    }

    .stars {
      color: gold;
      margin-bottom: 10px;
      font-size: 18px;
    }

    .review {
      font-size: 14px;
      margin-bottom: 15px;
      line-height: 1.6;
    }

    .name {
      font-weight: bold;
      font-size: 16px;
    }
  </style>

@section('main')
<x-usernavbar></x-usernavbar>

@if(session('addmsg'))

<p class="text-success px-5" role="alert">
   {{ session('addmsg') }}
  
  </p>
@endif
@if(session('forgetmsg'))

<p class="text-success px-5" role="alert">
   {{ session('forgetmsg') }}
  
  </p>
@endif
  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('images/hotel1.jpg')}}" class="d-block w-100" alt="room" style="height: 70vh;">
      </div>
      <div class="carousel-item">
        <img src="{{asset('images/hotel5.jpg')}}" class="d-block w-100" alt="room1" style="height: 70vh;">
      </div>
      <div class="carousel-item">
        <img src="{{asset('images/hotel4.jpg')}}" class="d-block w-100" alt="room3" style="height: 70vh;">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container">
    <div class="text-font bg-white border border-top p-4 shadow form-format">
      <p class="fs-4 text-center" style="color: rgb(63, 55, 108);">Check Room Availability</p>
    <form id="availabilityForm"
      class="d-flex flex-lg-row justify-content-between align-content-center flex-column">

  <div class="me-3">
    <label>Check-in</label>
    <input type="date" class="form-control shadow-none border border-black bg-secondary-subtle" id="chi">
  </div>

  <div class="me-3">
    <label>Check-out</label>
    <input type="date" class="form-control shadow-none border border-black bg-secondary-subtle" id="cho">
  </div>

  <div class="me-3">
    <label>Adult</label>
    <select id="adult" class="form-select shadow-none border border-black bg-secondary-subtle">
      <option value="">select here</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
      <option value="4">Four</option>
    </select>
  </div>

  <div class="me-3">
    <label>Children</label>
    <select id="children" class="form-select shadow-none border border-black bg-secondary-subtle">
      <option value="">select here</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
      <option value="4">Four</option>
    </select>
  </div>

  <div class="me-3 mt-3">
    <button type="submit" class="btn fw-bold text-light"
      style="background-color: rgb(63, 55, 108);">
      Submit
    </button>
  </div>

</form>

<!-- result box -->
<div class="mt-3 text-center">
  <h5 id="result"></h5>
</div>
    </div>

  </div>

  <p class="fs-4 text-center h-font mt-5">Our Rooms</p>
  <div class="container" id="our-rooms">
    <div class="row">
      <div class="col-lg-4 p-4 col-12">
        <div class="card bg-white shadow" style="width: 18rem;">
          <img src="{{asset('images/hotel1.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body" style="max-width: 350px; margin: auto;">
            <h5 class="card-title">Standard Room</h5>
            <div class="price">
              <span class="badge text-bg-light">$100 per night</span>
            </div>
            <p class="fs-6" style="margin: 0;">Features</p>
            <div class="features d-flex">
                               
              <span class="badge text-bg-light">2 rooms</span>
              <span class="badge text-bg-light">1 bathroom</span>
              <span class="badge text-bg-light">1 balcony</span>
              <span class="badge text-bg-light">3 sofas</span>
                           
            </div>
            <p class="fs-6" style="margin: 0;">Facilities</p>
            <div class="Facilities d-flex">

              <span class="badge text-bg-light">Wifi</span>
              <span class="badge text-bg-light">Television</span>
              <span class="badge text-bg-light">AC</span>
              <span class="badge text-bg-light">Room heater</span>

            </div>
                        <p class="fs-6" style="margin: 0;">Guests</p>
            <div class="Facilites d-flex">

              <span class="badge text-bg-light">3 adults</span>
              <span class="badge text-bg-light">5 Children</span>


            </div>
            <p class="fs-6" style="margin: 0;">Rating</p>
            <div class="rating d-flex">
              <span class="badge text-bg-light">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                  fill="#FFFF55">
                  <path
                    d="M480-644v236l96 74-36-122 90-64H518l-38-124ZM233-120l93-304L80-600h304l96-320 96 320h304L634-424l93 304-247-188-247 188Z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                  fill="#FFFF55">
                  <path
                    d="M480-644v236l96 74-36-122 90-64H518l-38-124ZM233-120l93-304L80-600h304l96-320 96 320h304L634-424l93 304-247-188-247 188Z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                  fill="#FFFF55">
                  <path
                    d="M480-644v236l96 74-36-122 90-64H518l-38-124ZM233-120l93-304L80-600h304l96-320 96 320h304L634-424l93 304-247-188-247 188Z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                  fill="#FFFF55">
                  <path
                    d="M480-644v236l96 74-36-122 90-64H518l-38-124ZM233-120l93-304L80-600h304l96-320 96 320h304L634-424l93 304-247-188-247 188Z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                  fill="#FFFF55">
                  <path
                    d="M480-644v236l96 74-36-122 90-64H518l-38-124ZM233-120l93-304L80-600h304l96-320 96 320h304L634-424l93 304-247-188-247 188Z" />
                </svg>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mt-3">
              <a href="roomdetails" class="btn btn-outline-primary">Book Now</a>
              <a href="/moredetails/6" class="btn btn-outline-dark">More Details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 p-4 col-12">
        <div class="card bg-white shadow" style="width: 18rem;">
          <img src="{{asset('images/hotel4.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body" style="max-width: 350px; margin: auto;">
            <h5 class="card-title">Deluxe Room</h5>
            <div class="price">
              <span class="badge text-bg-light">$200 per night</span>
            </div>
            <p class="fs-6" style="margin: 0;">Features</p>
            <div class="features d-flex">

              <span class="badge text-bg-light">2 rooms</span>
              <span class="badge text-bg-light">1 bathroom</span>
              <span class="badge text-bg-light">1 balcony</span>
              <span class="badge text-bg-light">3 sofas</span>

            </div>
            <p class="fs-6" style="margin: 0;">Facilites</p>
            <div class="Facilites d-flex">

              <span class="badge text-bg-light">Wifi</span>
              <span class="badge text-bg-light">Television</span>
              <span class="badge text-bg-light">AC</span>
              <span class="badge text-bg-light">Room heater</span>

            </div>
                  <p class="fs-6" style="margin: 0;">Guests</p>
            <div class="Facilites d-flex">

              <span class="badge text-bg-light">3 adults</span>
              <span class="badge text-bg-light">5 Children</span>


            </div>
            <p class="fs-6" style="margin: 0;">Rating</p>
            <div class="rating d-flex">
              <span class="badge text-bg-light">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                  fill="#FFFF55">
                  <path
                    d="M480-644v236l96 74-36-122 90-64H518l-38-124ZM233-120l93-304L80-600h304l96-320 96 320h304L634-424l93 304-247-188-247 188Z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                  fill="#FFFF55">
                  <path
                    d="M480-644v236l96 74-36-122 90-64H518l-38-124ZM233-120l93-304L80-600h304l96-320 96 320h304L634-424l93 304-247-188-247 188Z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                  fill="#FFFF55">
                  <path
                    d="M480-644v236l96 74-36-122 90-64H518l-38-124ZM233-120l93-304L80-600h304l96-320 96 320h304L634-424l93 304-247-188-247 188Z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                  fill="#FFFF55">
                  <path
                    d="M480-644v236l96 74-36-122 90-64H518l-38-124ZM233-120l93-304L80-600h304l96-320 96 320h304L634-424l93 304-247-188-247 188Z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                  fill="#FFFF55">
                  <path
                    d="M480-644v236l96 74-36-122 90-64H518l-38-124ZM233-120l93-304L80-600h304l96-320 96 320h304L634-424l93 304-247-188-247 188Z" />
                </svg>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mt-3">
              <a href="roomdetails" class="btn btn-outline-primary">Book Now</a>
              <a href="/moredetails/7" class="btn btn-outline-dark">More Details</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 p-4 col-12">
        <div class="card bg-white shadow" style="width: 18rem;">
          <img src="{{asset('images/hotel5.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body" style="max-width: 350px; margin: auto;">
            <h5 class="card-title">Luxury Room</h5>
            <div class="price">
              <span class="badge text-bg-light">$200 per night</span>
            </div>
            <p class="fs-6" style="margin: 0;">Features</p>
            <div class="features d-flex">

              <span class="badge text-bg-light">2 rooms</span>
              <span class="badge text-bg-light">1 bathroom</span>
              <span class="badge text-bg-light">1 balcony</span>
              <span class="badge text-bg-light">3 sofas</span>

            </div>
            <p class="fs-6" style="margin: 0;">Facilities</p>
            <div class="Facilities d-flex">

              <span class="badge text-bg-light">Wifi</span>
              <span class="badge text-bg-light">Television</span>
              <span class="badge text-bg-light">AC</span>
              <span class="badge text-bg-light">Room heater</span>

            </div>
                  <p class="fs-6" style="margin: 0;">Guests</p>
            <div class="Facilites d-flex">

              <span class="badge text-bg-light">3 adults</span>
              <span class="badge text-bg-light">5 Children</span>


            </div>
            <p class="fs-6" style="margin: 0;">Rating</p>
            <div class="rating d-flex">
              <span class="badge text-bg-light">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                  fill="#FFFF55">
                  <path
                    d="M480-644v236l96 74-36-122 90-64H518l-38-124ZM233-120l93-304L80-600h304l96-320 96 320h304L634-424l93 304-247-188-247 188Z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                  fill="#FFFF55">
                  <path
                    d="M480-644v236l96 74-36-122 90-64H518l-38-124ZM233-120l93-304L80-600h304l96-320 96 320h304L634-424l93 304-247-188-247 188Z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                  fill="#FFFF55">
                  <path
                    d="M480-644v236l96 74-36-122 90-64H518l-38-124ZM233-120l93-304L80-600h304l96-320 96 320h304L634-424l93 304-247-188-247 188Z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                  fill="#FFFF55">
                  <path
                    d="M480-644v236l96 74-36-122 90-64H518l-38-124ZM233-120l93-304L80-600h304l96-320 96 320h304L634-424l93 304-247-188-247 188Z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                  fill="#FFFF55">
                  <path
                    d="M480-644v236l96 74-36-122 90-64H518l-38-124ZM233-120l93-304L80-600h304l96-320 96 320h304L634-424l93 304-247-188-247 188Z" />
                </svg>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mt-3">
              <a href="roomdetails" class="btn btn-outline-primary">Book Now</a>
              <a href="/moredetails/8" class="btn btn-outline-dark">More Details</a>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="col-12 mt-3">
      <a href="roomdetails" class="btn btn-dark rounded-0 offset-5 shadow-none">More Rooms</a>
    </div>

  </div>
  </div>
  </div>


  <p class="fs-4 h-font text-center my-5" id="hotel-facilities">Our Facilities</p>
  <div class="container">

    <div class="row">
      <div class="col-lg-3 col-12 p-3 bg-tertiary shadow">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="55px" fill="#000000">
            <path
              d="M409-149q-29-29-29-71t29-71q29-29 71-29t71 29q29 29 29 71t-29 71q-29 29-71 29t-71-29ZM254-346l-84-86q59-59 138.5-93.5T480-560q92 0 171.5 35T790-430l-84 84q-44-44-102-69t-124-25q-66 0-124 25t-102 69ZM84-516 0-600q92-94 215-147t265-53q142 0 265 53t215 147l-84 84q-77-77-178.5-120.5T480-680q-116 0-217.5 43.5T84-516Z" />
          </svg>
        </div>
        <span class="text-font text-center py-3 px-3">Wifi</span>
      </div>
      <div class="col-lg-3 col-12 p-3 bg-tertiary shadow">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="55px" fill="#000000">
            <path
              d="M200-320h80q0-33-23.5-56.5T200-400v80Zm142 0h58q0-83-58.5-141.5T200-520v58q59 0 100.5 41.5T342-320Zm120 0h58q0-66-25-124.5t-68.5-102Q383-590 324.5-615T200-640v58q109 0 185.5 76.5T462-320ZM320-120v-80H160q-33 0-56.5-23.5T80-280v-480q0-33 23.5-56.5T160-840h640q33 0 56.5 23.5T880-760v480q0 33-23.5 56.5T800-200H640v80H320ZM160-280h640v-480H160v480Zm0 0v-480 480Z" />
          </svg>
        </div>
        <span class="text-font text-center py-3 px-3">TV</span>
      </div>
      <div class="col-lg-3 col-12 p-3 bg-tertiary shadow">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="55px" fill="#000000">
            <path
              d="M160-160q-33 0-56.5-23.5T80-240v-440h80v440h280v80H160Zm120-560q-33 0-56.5-23.5T200-800q0-33 23.5-56.5T280-880q33 0 56.5 23.5T360-800q0 33-23.5 56.5T280-720ZM480-80v-200H280q-33 0-56.5-23.5T200-360v-236q0-35 24-59.5t58-24.5q19 0 35.5 8t28.5 22q45 49 96.5 89.5T560-520h54q-25-17-39.5-42.5T560-620h241q0 32-14.5 57.5T747-520h133v80H720v360h-80v-360h-80q-53 0-107-23t-93-55v138h120q33 0 56.5 23.5T560-300v220h-80Z" />
          </svg>
        </div>
        <span class="text-font text-center py-3 px-3">Dine in</span>
      </div>
      <div class="col-lg-3 col-12 p-3 bg-tertiary shadow">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="55px" fill="#000000">
            <path
              d="M500-120v-440q-14-18-34.5-29T420-600q-25 0-45.5 10.5T340-560h-80q0-117 81.5-198.5T540-840q117 0 198.5 81.5T820-560h-80q-14-19-34.5-29.5T660-600q-25 0-45.5 11T580-560v440h-80Zm33-520h14q23-19 52.5-29.5T661-680q11 0 21.5 1.5T704-675q-27-39-70-62t-94-23q-51 0-94 23t-70 62q11-2 21.5-3.5T419-680q32 0 61.5 10.5T533-640Zm107 520v-240h240v240h-80v-160h-80v160h-80Zm-480 0v-122q-18-5-30-19t-14-34L80-680h25q23 0 40.5 16t19.5 39l24 265h171q33 0 56.5 23.5T440-280v40h-40v120h-60v-120H220v120h-60Zm380-520Z" />
          </svg>
        </div>
        <span class="text-font text-center py-3 px-3">Chair umbrella</span>
      </div>
    </div>

    <div class="col-12 my-3">
      <a href="/facilities" class="btn btn-dark rounded-0 offset-5 shadow-none">More Facilities</a>
    </div>
  </div>
  </div>


  <p class="fs-4 h-font text-center my-5">Testimonials</p>
  <div class="container">

    <div class="swiper testimonialSwiper">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-card">
            <img src="https://randomuser.me/api/portraits/men/32.jpg">
            <div class="stars">⭐⭐⭐⭐⭐</div>
            <p class="review">
              Amazing hotel! The rooms were very clean and the staff were extremely helpful.
            </p>
            <div class="name">John Smith</div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="testimonial-card">
            <img src="https://randomuser.me/api/portraits/women/44.jpg">
            <div class="stars">⭐⭐⭐⭐⭐</div>
            <p class="review">
              Wonderful experience. Perfect location and great service.
            </p>
            <div class="name">Emma Wilson</div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonial-card">
            <img src="https://randomuser.me/api/portraits/women/45.jpg">
            <div class="stars">⭐⭐⭐⭐⭐</div>
            <p class="review">
              Wonderful experience. Perfect location and great service.
            </p>
            <div class="name">Emma Wilson</div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="testimonial-card">
            <img src="https://randomuser.me/api/portraits/men/52.jpg">
            <div class="stars">⭐⭐⭐⭐</div>
            <p class="review">
              Very comfortable stay with beautiful views. Highly recommended!
            </p>
            <div class="name">Michael Brown</div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonial-card">
            <img src="https://randomuser.me/api/portraits/men/33.jpg">
            <div class="stars">⭐⭐⭐⭐⭐</div>
            <p class="review">
              Amazing hotel! The rooms were very clean and the staff were extremely helpful.
            </p>
            <div class="name">John Smith</div>
          </div>
        </div>
      </div>

      <div class="swiper-pagination"></div>
    </div>

    <div class="col-12 mt-3">
      <a href="/" class="btn btn-dark rounded-0 offset-5 shadow-none my-5">Know More</a>
    </div>
  </div>


  <p class="fs-4 h-font text-center my-5">Reach Us</p>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-12">
        <div class="text-center p-4 bg-tertiary shadow">
          <iframe height="450" class="w-100"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13118.54767150872!2d103.83480024786445!3d34.71433670499213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3659c112cdc8905f%3A0x51e8d860ed698762!2sZhanqi%2C%20Min%20County%2C%20Dingxi%2C%20Gansu%2C%20China%2C%20747504!5e0!3m2!1sen!2sbd!4v1773617050992!5m2!1sen!2sbd"
            height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div class="col-lg-4 col-12 p-4">
        <div class="p-1 bg-tertiary shadow my-3">
          <p class="fs-6 fw-bold text-font px-4">Call us</p>
          <p class="fs-6 text-font px-4">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
              <path
                d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z" />
            </svg>
            <a href="tel:+0947878728323" class="text-dark" style="text-decoration: none;">tel: +0947878728323</a>
          </p>
          <p class="fs-6 text-font px-4">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
              <path
                d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z" />
            </svg>
            <a href="tel:+0947878728323" class="text-dark" style="text-decoration: none;">tel: +0947878728323</a>
          </p>
        </div>
        <div class="p-1 bg-tertiary shadow">
          <p class="fs-6 fw-bold text-font px-4">Follow us</p>
          <p class="fs-6 text-font px-4 social">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
              <path
                d="M22 12a10 10 0 1 0-11.6 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.8 3.7-3.8 1.1 0 2.2.2 2.2.2v2.4h-1.2c-1.2 0-1.6.8-1.6 1.5V12h2.8l-.4 2.9h-2.4v7A10 10 0 0 0 22 12z" />
            </svg>
            <a href="https://www.facebook.com/home.php?_rdr" target="_blank" class="text-dark"
              style="text-decoration: none;">Facebook</a>
          </p>
          <p class="fs-6 text-font px-4 social">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
              <path d="M7 2C4.2 2 2 4.2 2 7v10c0 2.8 2.2 5 5 5h10c2.8 
  0 5-2.2 5-5V7c0-2.8-2.2-5-5-5H7zm5 
  5a5 5 0 1 1 0 10 5 5 0 0 1 
  0-10zm0 2a3 3 0 1 0 0 
  6 3 3 0 0 0 0-6zm5.5-2.8a1.2 
  1.2 0 1 1-2.4 0 1.2 1.2 
  0 0 1 2.4 0z" />
            </svg>
            <a href="https://www.instagram.com/?hl=en" target="_blank" class="text-dark"
              style="text-decoration: none;">Instagram</a>
          </p>
          <p class="fs-6 text-font px-4 social">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
              <path d="M22 5.8c-.8.4-1.7.6-2.6.7.9-.6 
  1.6-1.4 1.9-2.4-.9.5-1.9.9-3 
  1.1a4.5 4.5 0 0 0-7.7 4.1A12.8 
  12.8 0 0 1 3 4.8a4.5 4.5 0 0 
  0 1.4 6c-.7 0-1.3-.2-1.9-.5v.1a4.5 
  4.5 0 0 0 3.6 4.4c-.6.2-1.3.2-1.9.1a4.5 
  4.5 0 0 0 4.2 3.1A9 9 0 0 1 2 
  19.5a12.7 12.7 0 0 0 6.9 2" />
            </svg>
            <a href="https://x.com/" target="_blank" class="text-dark" style="text-decoration: none;">X</a>
          </p>
        </div>
      </div>

    </div>
  </div>
<x-footer></x-footer>
  <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".testimonialSwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      centeredSlides: false,

      pagination: {
        el: ".swiper-pagination",
        clickable: true
      },

      autoplay: {
        delay: 2500
      },

      breakpoints: {
        0: { slidesPerView: 1 },
        768: { slidesPerView: 2 },
        1024: { slidesPerView: 3 }
      },

      loop: true
    });
  </script>




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$('#availabilityForm').on('submit', function(e){
    e.preventDefault();

    let checkin = $('#chi').val();
    let checkout = $('#cho').val();
    let adult = $('#adult').val();
    let children = $('#children').val();

    if(!checkin || !checkout){
        $('#result').html("<span class='text-danger'>Please select dates</span>");
        return;
    }

    $.ajax({
        url: "/check-availability",
        type: "POST",
        data: {
            _token: "{{ csrf_token() }}",
            checkin: checkin,
            checkout: checkout,
            adult: adult,
            children: children
        },
        success: function(res){

            if(res.status === 'available'){
                $('#result').html(
                    "<span class='text-warning'>Room Available ✅ ("+res.available_rooms+" rooms left)</span>"
                );
            } else {
                $('#result').html(
                    "<span class='text-danger'>No Rooms Available ❌</span>"
                );
            }

        }
    });

});
</script>
@endsection


