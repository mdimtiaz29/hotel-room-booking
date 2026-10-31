@extends('layout')
@section('title', 'Facilities')
<style>
    .pop:hover{
            border-top: 3px solid rgb(63, 55, 108) !important;
        transform: scale(1.03);
         transition: all 1s ease;
    }
    </style>
@section('main')
<x-usernavbar></x-usernavbar>

<p class="fs-4 h-font text-center h-pop">Our Facilities</p>
<p class="fs-6 text-font text-center" style="width: 350px; margin: 0 auto;">Our hotel offers modern facilities to ensure a comfortable and enjoyable stay for every guest. Guests can easily book rooms online through our simple and user-friendly booking system.</p>
<div class="container my-5">
  <div class="row g-5">
<div class="col-lg-4 col-12 p-4 bg-white shadow border border-1 border-top pop">
        <div class="d-flex align-item-center">
          <svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="55px" fill="#000000">
            <path
              d="M409-149q-29-29-29-71t29-71q29-29 71-29t71 29q29 29 29 71t-29 71q-29 29-71 29t-71-29ZM254-346l-84-86q59-59 138.5-93.5T480-560q92 0 171.5 35T790-430l-84 84q-44-44-102-69t-124-25q-66 0-124 25t-102 69ZM84-516 0-600q92-94 215-147t265-53q142 0 265 53t215 147l-84 84q-77-77-178.5-120.5T480-680q-116 0-217.5 43.5T84-516Z" />
          </svg>
                  <span class="text-font text-center py-3 px-3">Wifi</span>
        </div>
<p class="text-font">
Our hotel offers complimentary high-speed Wi-Fi in all rooms and common areas, ensuring guests stay connected at all times. Whether for business communication, online meetings, or entertainment, our reliable and secure internet service provides a smooth and convenient digital experience throughout your stay.
</p>
      </div>
      <div class="col-lg-4 col-12 p-4 bg-white shadow border border-1 border-top pop">
        <div class="d-flex align-item-center">
           <svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="55px" fill="#000000">
            <path
              d="M200-320h80q0-33-23.5-56.5T200-400v80Zm142 0h58q0-83-58.5-141.5T200-520v58q59 0 100.5 41.5T342-320Zm120 0h58q0-66-25-124.5t-68.5-102Q383-590 324.5-615T200-640v58q109 0 185.5 76.5T462-320ZM320-120v-80H160q-33 0-56.5-23.5T80-280v-480q0-33 23.5-56.5T160-840h640q33 0 56.5 23.5T880-760v480q0 33-23.5 56.5T800-200H640v80H320ZM160-280h640v-480H160v480Zm0 0v-480 480Z" />
          </svg>
                  <span class="text-font text-center py-3 px-3">TV</span>
        </div>
<p class="text-font">
All rooms at our hotel are equipped with modern flat-screen televisions offering a variety of local and international channels. Guests can relax and enjoy their favorite programs, movies, and news in the comfort of their rooms.
</p>
      </div>
<div class="col-lg-4 col-12 p-4 bg-white shadow border border-1 border-top pop">
        <div class="d-flex align-item-center">
          <svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="55px" fill="#000000">
            <path
              d="M160-160q-33 0-56.5-23.5T80-240v-440h80v440h280v80H160Zm120-560q-33 0-56.5-23.5T200-800q0-33 23.5-56.5T280-880q33 0 56.5 23.5T360-800q0 33-23.5 56.5T280-720ZM480-80v-200H280q-33 0-56.5-23.5T200-360v-236q0-35 24-59.5t58-24.5q19 0 35.5 8t28.5 22q45 49 96.5 89.5T560-520h54q-25-17-39.5-42.5T560-620h241q0 32-14.5 57.5T747-520h133v80H720v360h-80v-360h-80q-53 0-107-23t-93-55v138h120q33 0 56.5 23.5T560-300v220h-80Z" />
          </svg>
                  <span class="text-font text-center py-3 px-3">Dine in</span>
        </div>
<p class="text-font">
Our hotel features a dine-in restaurant where guests can savor a wide selection of freshly prepared local and international dishes. With a comfortable and inviting ambiance, our restaurant ensures a delightful dining experience for every guest.
</p>
      </div>
<div class="col-lg-4 col-12 p-4 bg-white shadow border border-1 border-top pop">
        <div class="d-flex align-item-center">
                   <svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="55px" fill="#000000">
            <path
              d="M500-120v-440q-14-18-34.5-29T420-600q-25 0-45.5 10.5T340-560h-80q0-117 81.5-198.5T540-840q117 0 198.5 81.5T820-560h-80q-14-19-34.5-29.5T660-600q-25 0-45.5 11T580-560v440h-80Zm33-520h14q23-19 52.5-29.5T661-680q11 0 21.5 1.5T704-675q-27-39-70-62t-94-23q-51 0-94 23t-70 62q11-2 21.5-3.5T419-680q32 0 61.5 10.5T533-640Zm107 520v-240h240v240h-80v-160h-80v160h-80Zm-480 0v-122q-18-5-30-19t-14-34L80-680h25q23 0 40.5 16t19.5 39l24 265h171q33 0 56.5 23.5T440-280v40h-40v120h-60v-120H220v120h-60Zm380-520Z" />
          </svg>
                  <span class="text-font text-center py-3 px-3">Chair umbrella</span>
        </div>
<p class="text-font">
Our hotel offers comfortable outdoor seating with chairs and umbrellas, allowing guests to relax in shaded areas while enjoying the fresh air and peaceful surroundings.
</p>
      </div>
<div class="col-lg-4 col-12 p-4 bg-white shadow border border-1 border-top pop">
        <div class="d-flex align-item-center">
         <svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="55px" fill="#000000"><path d="M80-120v-80q38 0 57-20t75-20q56 0 77 20t57 20q36 0 57-20t77-20q56 0 77 20t57 20q36 0 57-20t77-20q56 0 75 20t57 20v80q-59 0-77.5-20T748-160q-36 0-57 20t-77 20q-56 0-77-20t-57-20q-36 0-57 20t-77 20q-56 0-77-20t-57-20q-36 0-54.5 20T80-120Zm0-180v-80q38 0 57-20t75-20q56 0 77.5 20t56.5 20q36 0 57-20t77-20q56 0 77 20t57 20q36 0 57-20t77-20q56 0 75 20t57 20v80q-59 0-77.5-20T748-340q-36 0-55.5 20T614-300q-57 0-77.5-20T480-340q-38 0-56.5 20T346-300q-59 0-78.5-20T212-340q-36 0-54.5 20T80-300Zm196-204 133-133-40-40q-33-33-70-48t-91-15v-100q75 0 124 16.5t96 63.5l256 256q-17 11-33 17.5t-37 6.5q-36 0-57-20t-77-20q-56 0-77 20t-57 20q-21 0-37-6.5T276-504Zm463-306.5q29 29.5 29 70.5 0 42-29 71t-71 29q-42 0-71-29t-29-71q0-41 29-70.5t71-29.5q42 0 71 29.5Z"/></svg>
                  <span class="text-font text-center py-3 px-3">Pool</span>
        </div>
<p class="text-font">
Guests can relax and unwind in our well-maintained swimming pool, providing a refreshing and enjoyable experience during their stay.
</p>
      </div>
<div class="col-lg-4 col-12 p-4 bg-white shadow border border-1 border-top pop">
        <div class="d-flex align-item-center">
    <svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="55px" fill="#000000"><path d="M40-120v-80h42l35-525q2-32 25-53.5t55-21.5h245q32 0 55 21.5t25 53.5l36 525h162v-246q-52-14-86-56t-34-98q0-34 13-63.5t36-51.5q-5-11-7-22t-2-23q0-50 35-85t85-35q50 0 85 35t35 85q0 12-2 23t-7 22q23 22 36 51.5t13 63.5q0 56-34 98t-86 56v246h120v80H40Zm123-80h314l-35-520h-32v360h30v80H200v-80h30v-360h-32l-35 520Zm127-160h60v-360h-60v360Zm470-160q33 0 56.5-23.5T840-600q0-28-13-43t-27-29v-88q0-17-11.5-28.5T760-800q-17 0-28.5 11.5T720-760v88q-14 14-27 29t-13 43q0 33 23.5 56.5T760-520Zm0-80Z"/></svg>
                  <span class="text-font text-center py-3 px-3">Playground</span>
        </div>
<p class="text-font">
  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat repudiandae enim, minus dolorum consequuntur animi 
  est minima voluptatem ipsam, ipsa corporis earum officia quod ducimus amet. Non qui beatae eos.
</p>
      </div>

  </div>
</div>
<x-footer></x-footer>
@endsection