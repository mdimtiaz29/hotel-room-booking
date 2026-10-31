@extends('layout')
@section('title', 'Settings')

@section('main')

  <div class="container">
      <div class="row">
          <div class="col-lg-12 overflow-none">
<p class="fs-4">Settings</p>

<div class="card mb-3" style="width: 100%;">
  <div class="card-body bg-white shadow">
    
    <div class="d-flex justify-content-between">
<h5 class="card-title">General Setting</h5>
<a class="btn btn-dark" href="edit-settings"><svg class="m-0" xmlns="http://www.w3.org/2000/svg" height="15px" viewBox="0 -960 960 960" width="20px" fill="#F3F3F3"><path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/></svg>Add new</a>
    
</div>
<h6 class="card-subtitle m-0">Site title</h6>
<p id="site_title" class="card-text mb-2" style="font-style: italic;"></p>

<h6 class="card-subtitle m-0">About us</h6>
<p id="site_about" class="card-text" style="font-style: italic;"></p>
    
  </div>
</div>
<div class="card" style="width: 100%;">
  <div class="card-body bg-white shadow">
    
    <div class="d-flex justify-content-between">
<h5 class="card-title">Shutdown Website</h5>
<form action="#">
<div class="form-check form-switch mt-3">
  <input class="form-check-input" type="checkbox" role="switch" id="switchCheckChecked" checked>

</div>
</form>
</div>

    <p class="card-text">No customers will be allowed to book room of the hotel when shutdown mode is turned off.</p>
  </div>
</div>
<!--contact settings-->
    <div class="card my-3" style="width: 100%;">
  <div class="card-body bg-white shadow">
    
    <div class="d-flex justify-content-between">
<h5 class="card-title">Contact Settings</h5>
<button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#contactModal"><svg class="m-0" xmlns="http://www.w3.org/2000/svg" height="15px" viewBox="0 -960 960 960" width="20px" fill="#F3F3F3"><path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/></svg>Edit</button>
    
</div>
<div class="row">
<div class="col-lg-6">
<div class="mb-3">
      <h6 class="card-subtitle m-0 text-body-secondary">Address</h6>
    <p class="card-text mb-2">Empty</p>
</div>
<div class="mb-3">
      <h6 class="card-subtitle m-0 text-body-secondary">Google Map</h6>
    <p class="card-text mb-2">Empty</p>
</div>
<div class="mb-3">
      <h6 class="card-subtitle m-0 text-body-secondary">Phone Numbers</h6>
    <p class="card-text mb-2"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
              <path
                d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z" />
            </svg>
          <span class="phn1"></span>
          </p>
           <p class="card-text mb-2"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
              <path
                d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z" />
            </svg>
          <span class="phn2"></span>
          </p>
</div>
<div class="mb-3">
      <h6 class="card-subtitle m-0 text-body-secondary">Email</h6>
    <p class="card-text mb-2">Empty</p>
</div>
</div>
<div class="col-lg-6">

      <h6 class="card-subtitle m-0">Social Links</h6>
    <p class="card-text mb-2">
                         <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="me-3" fill="currentColor" viewBox="0 0 24 24">
  <path d="M22 12a10 10 0 1 0-11.56 9.88v-6.99H7.9V12h2.54V9.8c0-2.5 1.49-3.89 3.77-3.89 1.09 0 2.24.19 2.24.19v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56V12h2.77l-.44 2.89h-2.33v6.99A10 10 0 0 0 22 12z"/>
</svg></a>
    </p>
     <p class="card-text mb-2">
          <a href="#" class="text-danger">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="me-3" fill="currentColor" viewBox="0 0 24 24">
  <path d="M7.75 2h8.5A5.75 5.75 0 0 1 22 7.75v8.5A5.75 5.75 0 0 1 16.25 22h-8.5A5.75 5.75 0 0 1 2 16.25v-8.5A5.75 5.75 0 0 1 7.75 2zm0 2A3.75 3.75 0 0 0 4 7.75v8.5A3.75 3.75 0 0 0 7.75 20h8.5A3.75 3.75 0 0 0 20 16.25v-8.5A3.75 3.75 0 0 0 16.25 4h-8.5zm4.25 3.5A5.5 5.5 0 1 1 6.5 13 5.51 5.51 0 0 1 12 7.5zm0 2A3.5 3.5 0 1 0 15.5 13 3.5 3.5 0 0 0 12 9.5zm5.25-3.25a1.25 1.25 0 1 1-1.25 1.25 1.25 1.25 0 0 1 1.25-1.25z"/>
</svg></a>
    </p>
    <p class="card-text mb-2">
          <a href="#" class="text-dark">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="me-3" fill="currentColor" viewBox="0 0 24 24">
  <path d="M18.244 2H21l-6.56 7.5L22 22h-6.828l-5.347-6.986L3.8 22H1l7.02-8.02L2 2h6.828l4.84 6.32L18.244 2zm-2.39 18h1.885L7.14 4H5.12l10.734 16z"/>
</svg></a>
    </p>
          <h6 class="card-subtitle m-0">Ifram</h6>
  <iframe src="" frameborder="0"></iframe>  

</div>
</div>
    
  </div>
</div>
<!--Team Management-->
  <div class="card" style="width: 100%;">
  <div class="card-body bg-white shadow">
    
    <div class="d-flex justify-content-between">
<h5 class="card-title">Management Team</h5>
<form action="#">
<div class="form-check form-switch mt-3">
<a type="button" class="btn btn-dark" href="edit-addmember">
<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#F3F3F3"><path d="M440-280h80v-160h160v-80H520v-160h-80v160H280v80h160v160Zm40 200q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>Add</a>


</div>
</form>
</div>

  </div>
</div>
          </div>
        </div>
        </div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function(){

    function loadSettings(){
        $.ajax({
            url: "/fetch-settings",
            type: "GET",
            success: function(data){

                if(data){
                    $("#site_title").text(data.site_title);
                    $("#site_about").text(data.site_about);
                }

            }
        });
    }

    loadSettings();

});
</script>
@endsection