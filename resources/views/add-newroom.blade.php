@extends('layout')
@section('title', 'add-newroom')

@section('main')
 @if(session('roomadded'))

<div class="alert alert-success alert-dismissible fade show px-5" role="alert">
   {{ session('roomadded') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="container mt-4">

<a class="btn btn-success mb-3"
   href="room"
   data-bs-toggle="tooltip"
   data-bs-placement="top"
   title="Back">
   ← Back
</a>

<div class="row justify-content-center">
<div class="col-lg-8">

<div class="card shadow-lg border-0 rounded-4">
<div class="card-body p-4">

<h4 class="text-center mb-4 fw-bold">Add New Room</h4>

<form method="post" action="addnewroom">
@csrf

<div class="row">

<div class="col-md-6 mb-3">
<label class="form-label">Room Name</label>
<input type="text" name="name" class="form-control" required>
</div>

<div class="col-md-6 mb-3">
<label class="form-label">Area</label>
<input type="text" name="area" class="form-control" required>
</div>

<div class="col-md-6 mb-3">
<label class="form-label">Price</label>
<input type="number" name="price" class="form-control" required>
</div>

<div class="col-md-6 mb-3">
<label class="form-label">Quantity</label>
<input type="number" name="quantity" class="form-control" required>
</div>

<div class="col-md-6 mb-3">
<label class="form-label">Adult</label>
<input type="number" name="adult" class="form-control" required>
</div>

<div class="col-md-6 mb-3">
<label class="form-label">Children</label>
<input type="number" name="children" class="form-control" required>
</div>

</div>


<div class="mb-3">
<label class="form-label">Description</label>
<textarea class="form-control" rows="3" name="description"></textarea>
</div>


<!-- Features -->
<div class="mb-3">
<label class="form-label fw-bold">Room Features</label>

<div class="row">
@foreach($allfet as $r)
<div class="col-md-4 form-check">
<input class="form-check-input border border-black" type="checkbox" name="features[]" value="{{$r->name}}" id="{{$r->id}}">
<label class="form-check-label" for="{{$r->id}}">{{$r->name}}</label>
</div>
@endforeach

</div>

</div>


<!-- Facilities -->
<div class="mb-4">
<label class="form-label fw-bold">Facilities</label>

<div class="row">
@foreach($allfac as $f)
<div class="col-md-4 form-check">
<input class="form-check-input border border-black" type="checkbox" name="facilities[]" value="{{$f->name}}">
<label class="form-check-label">{{$f->name}}</label>
</div>
@endforeach

</div>
</div>


<div class="d-grid">
<button type="submit" class="btn btn-primary btn-lg">
Add Room
</button>
</div>

</form>

</div>
</div>

</div>
</div>

</div>
<script>
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>
@endsection