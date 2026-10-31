@extends('layout')
@section('title', 'Dashboard')

@section('main')
<x-navbar></x-navbar>
 <div class="container">
  <p class="fs-4 text-font">Dashboard</p>
  <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"  aria-current="page">Admin</li>
    <li class="breadcrumb-item"><a href="/confirmdetails" class="text-black">Booking List</a></li>
  </ol>
</nav>
        <div class="row">
          <div class="col-lg-12 overflow-none">
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos praesentium ipsa excepturi ea doloremque 
    necessitatibus sit fuga, enim officiis magni placeat quasi in beatae dignissimos autem. Nulla ratione
     impedit dolore.</p>
          </div>
        </div>
        </div>

@endsection