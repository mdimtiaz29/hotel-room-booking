@extends('layout')
@section('title','confirmbooking')

@section('main')

<div class="container my-5">

<div class="card shadow-lg border-0 rounded-4 overflow-hidden">

<div class="row g-0">

<!-- Room Image -->
<div class="col-lg-6">
<img src="{{ asset('storage/'.$detail->allinfo->photoname) }}"
class="img-fluid w-100 h-100 object-fit-cover"
style="min-height:420px;">
</div>


<!-- Booking Form -->
<div class="col-lg-6">

<div class="p-4 p-lg-5">

<h3 class="fw-bold mb-3 text-dark">
Confirm Your Booking
</h3>

<p class="text-muted mb-4">
Fill the details below to complete your room reservation.
</p>

<form action="/confirm-booking" method="post">
@csrf

<input type="hidden" name="room_id" value="{{$detail->id}}">

<div class="row g-3">

<!-- Checkin -->
<div class="col-md-6">
<label class="form-label fw-semibold">Check-in</label>
<input type="date" name="checkin"
class="form-control shadow-none border border-secondary-subtle bg-info">
@error('checkin') <p class="fs-6 text-danger">{{$message}}</p> @enderror
</div>

<!-- Checkout -->
<div class="col-md-6">
<label class="form-label fw-semibold">Check-out</label>
<input type="date" name="checkout"
class="form-control shadow-none border border-secondary-subtle bg-info">
@error('checkout') <p class="fs-6 text-danger">{{$message}}</p> @enderror
</div>

<!-- Adult -->
<div class="col-md-6">
<label class="form-label fw-semibold">Adults</label>
<input type="number" name="adult"
class="form-control shadow-none border border-secondary-subtle"
min="0" max="{{$detail->adult}}" value="{{$detail->adult}}">
</div>

<!-- Children -->
<div class="col-md-6">
<label class="form-label fw-semibold">Children</label>
<input type="number" name="children"
class="form-control shadow-none border border-secondary-subtle"
min="0" max="{{$detail->children}}" value="{{$detail->children}}">
</div>

</div>

<!-- Confirm Button -->
<div class="mt-4 d-grid">

<button class="btn btn-success fw-bold py-2 rounded-pill shadow">
🛎 Confirm Booking
</button>
</div>

</form>

</div>
</div>

</div>

</div>

</div>

@endsection