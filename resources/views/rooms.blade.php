@extends('layout')
@section('title', 'Room')
<style>
.color-bg {
      background-color: #918450;
    }

    .btn-border {
      background-color: #918450;
    }

    .btn-dark {
      border-radius: 30px;
      transition: 0.3s;
    }

    .btn-dark:hover {
      background-color: #333;
      transform: translateY(-2px);
    }
    </style>
@section('main')
<x-usernavbar></x-usernavbar>
 @if(session('confirm'))

<p class="text-success alert-dismissible fade show px-3" role="alert">
   {{ session('confirm') }}
  <button type="button" class="btn-close text-black" data-bs-dismiss="alert" aria-label="Close"></button>
  </p>
@endif

<p class="fs-4 h-font text-center h-pop">Rooms</p>
  <div class="container my-5">
    <div class="row">
      <div class="col-lg-3">

        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse bg-light" id="navbarNav">

              <div class="d-flex flex-column bg-white shadow border p-4">
                <p class="fs-5 text-font" href="#">FILTERS</p>
                <p class="fs-5 m-0">Check Availability</p>
                <div class="mb-3">
                  <label for="checkin">Check-in</label>
                  <input type="date" class="form-control shadow-none border border-black bg-secondary-subtle rounded"
                    id="checkin">
                </div>
                <div class="mb-3">
                  <label for="checkout">Check-out</label>
                  <input type="date" class="form-control shadow-none border border-black bg-secondary-subtle rounded"
                    id="checkout">
                </div>
                <p class="fs-5 m-0">FACILITIES</p>
                <div class="form-check">
                  <input class="form-check-input border border-black shadow-none" type="checkbox" value="f1" id="f1">
                  <label class="form-check-label" for="f1">
                    Facility one
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input border border-black shadow-none" type="checkbox" value="f2" id="f2">
                  <label class="form-check-label" for="f2">
                    Facility two
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input border border-black shadow-none" type="checkbox" value="f3" id="f3">
                  <label class="form-check-label" for="f3">
                    Facility three
                  </label>
                </div>
                <div class="d-flex my-3">

                  <div class="me-1">
                    <label>Child</label>
                    <input type="number"
                      class="form-control shadow-none border border-black bg-secondary-subtle rounded">
                  </div>
                  <div class="">
                    <label>Adult</label>
                    <input type="number"
                      class="form-control shadow-none border border-black bg-secondary-subtle rounded">
                  </div>
                </div>
              </div>


            </div>
          </div>
        </nav>
      </div>
      <div class="col-lg-9">
@foreach($details as $r)

<div class="card mb-4 shadow-sm border-0">
<div class="row g-0">


<div class="col-md-4">
<img src="{{ asset('storage/'.$r->allinfo->photoname) }}" 
class="img-fluid rounded-start h-100 object-fit-cover">
</div>


<div class="col-md-5 p-3">

<h4 class="fw-bold">{{$r->name}}</h4>


<div>
<p class="fw-semibold mb-1">Features</p>

@foreach(explode(',', $r->features) as $feature)
<span class="badge bg-light text-dark me-1 mb-1">{{ $feature }}</span>
@endforeach

</div>

<div>
<p class="fw-semibold mt-3 mb-1">Facilities</p>

@foreach(explode(',', $r->facilities) as $facility)
<span class="badge bg-light text-dark me-1 mb-1">{{ $facility }}</span>
@endforeach

</div>
<p class="fw-semibold mt-3 mb-1">Guests</p>
<span class="badge bg-secondary">{{$r->adult}} Adults</span>
<span class="badge bg-secondary">{{$r->children}} Children</span>

</div>


<div class="col-md-3 text-center p-4 border-start">

<h4 class="text-success fw-bold">${{$r->price}}</h4>
<p class="text-muted">per night</p>
<span class="fw-semibold fs-4 p-0">
  <small class="text-black fw-light p-0">
   Available: {{ $r->remaining }}
      Total:{{ $r->quantity }}
  </small> 
  </span>
@if($r->status == 1)

    <a class="btn btn-success w-100" href="/book/{{$r->id}}">
        🛎️ Book Now
    </a>
@else
    <button class="btn btn-dark w-100 mt-3" disabled>
          Book Now
    </button>
@endif
<a href="{{ route('room.more', $r->id) }}" class="btn btn-outline-dark w-100 mt-3">
    More Details
</a>

</div>

</div>
</div>

@endforeach        
                </div> 
  </div> 
  </div>
<x-footer></x-footer>
@endsection