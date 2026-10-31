@extends('layout')
@section('title', 'features and facilities')

@section('main')
<x-navbar></x-navbar>
<div class="container">
 @if(session('dltfet'))

<div class="alert alert-success alert-dismissible fade show px-5" role="alert">
   {{ session('dltfet') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
 @if(session('dltfac'))

<div class="alert alert-success alert-dismissible fade show px-5" role="alert">
   {{ session('dltfac') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="d-flex justify-content-between align-items-center mb-3">
<p class="fs-4 h-pop h-font m-0">Features</p>

<div>
<a class="btn btn-warning" href="addfeature">Add New</a>
</div>

</div>
  <div class="row text-center bg-dark text-light" style="width:50vw; margin:0 auto;">
    <div class="col">
      Sl no
    </div>
    <div class="col">
      Name
    </div>
    <div class="col">
      Action
    </div>
  </div>
  @if($allfet->count() > 0)
@foreach($allfet as $key=>$r)
<div class="row text-center border border-bottom-black" style="width:50vw; margin:0 auto;">
    <div class="col">
      {{$key+1}}
    </div>
    <div class="col">
      {{$r->name}}
    </div>
    <div class="col">
      <a class="" href="deletefeature/{{$r->id}}"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000ff"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg></a>
    </div>
  </div>
@endforeach
@else

    <div class="col-12 text-center text-muted py-3">
        No Feature found. Add new feature.
    </div>
@endif
</div>

<div class="container mt-5">
 
<div class="d-flex justify-content-between align-items-center mb-3">
<p class="fs-4 h-pop h-font m-0">Facilities</p>

<div>
<a class="btn btn-warning" href="addfacilities">Add New</a>
</div>

</div>

<div class="row text-center bg-dark text-light" style="width:50vw; margin:0 auto;">
    <div class="col">
      Sl no
    </div>
    <div class="col">
      Name
    </div>
    <div class="col">
      Action
    </div>
  </div>
  @if($allfac->count() > 0)
@foreach($allfac as $key=>$r)
<div class="row text-center border border-bottom-black" style="width:50vw; margin:0 auto;">
    <div class="col">
      {{$key+1}}
    </div>
    <div class="col">
      {{$r->name}}
    </div>
    <div class="col">
      <a class="" href="delfac/{{$r->id}}"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000ff"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg></a>
    </div>
  </div>
@endforeach
@else

    <div class="col-12 text-center text-muted py-3">
        No Feature found. Add new feature.
    </div>
@endif
</div>
@endsection