@extends('layout')
@section('title', 'moredetails')
@section('main')

<p class="fs-4 h-font text-center h-pop">{{$more->name}}</p>
  <div class="container mt-5">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>

  </ol>
</nav>
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
      <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
  <div class="row g-0 align-items-center">

    
    <div class="col-md-6">
      <img src="{{ asset('storage/'.$more->allinfo->photoname) }}"
        class="img-fluid w-100 h-100 object-fit-cover"
        style="min-height:350px;">
    </div>

   
    <div class="col-md-6">
      
      <div class="p-4 p-lg-5">

    
        <h3 class="fw-bold text-success mb-2">
          ${{$more->price}} <small class="text-muted fs-6">/ night</small>
        </h3>

        <div class="mb-2">
<a class="text-black" href="/checkreview/{{$more->id}}">Rate and review</a>
</div>


       <div>
<p class="fw-semibold mb-1">Features</p>

@foreach(explode(',', $more->features) as $feature)
<span class="badge bg-light text-dark me-1 mb-1">{{ $feature }}</span>
@endforeach

</div>

<div>
<p class="fw-semibold mt-3 mb-1">Facilities</p>

@foreach(explode(',', $more->facilities) as $facility)
<span class="badge bg-light text-dark me-1 mb-1">{{ $facility }}</span>
@endforeach

</div>

        <p class="fw-semibold mt-3 mb-1">Guests</p>
        <div class="mb-4">
          <span class="badge bg-secondary px-3 py-2">{{$more->adult}} Adults</span>
          <span class="badge bg-secondary px-3 py-2">{{$more->children}} Children</span>
        </div>

@if($more->status == 1)
    <a class="btn btn-success px-4 py-2 rounded-pill shadow-sm" href="/book/{{$more->id}}">
        🛎️ Book Now
    </a>
@else
    <button class="btn btn-dark px-4 py-2 rounded-pill shadow-sm" disabled>
        Unavailable
    </button>
@endif

      </div>
    </div>

  </div>
                </div> 
  </div> 

  </div>
<div class="container">
  <p class="text-muted small my-4">
    {{$more->description}}
  </p>
</div>
</div>
<x-footer></x-footer>
@endsection
