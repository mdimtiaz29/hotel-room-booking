@extends('layout')
@section('title', 'users_query')
<style>
  .custom-row:hover{
    cursor: pointer;
}
.custom-row:nth-child(even){
background-color: #8E8E90;
}
</style>
@section('main')
<x-navbar></x-navbar>
<div class="container text-center">
   
<div class="d-flex justify-content-between align-items-center mb-3">

<p class="fs-4 h-pop h-font m-0">Users Query</p>

<form action="{{route('mark.all')}}" method="POST">
@csrf
<button type="submit" 
class="btn btn-success"
onclick="return confirm('Mark all queries as read?')">
Mark All as Read
</button>
</form>

</div>
@if(session('dltquery'))

<div class="alert alert-success alert-dismissible fade show px-5" role="alert">
   {{ session('dltquery') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
 @if(session('markquery'))

<div class="alert alert-success alert-dismissible fade show px-5" role="alert">
   {{ session('markquery') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif 

  <div class="row bg-dark text-light p-3">
    <div class="col-sm-2 col">
      Sl no
    </div>
    <div class="col-sm-2 col">
      Name
    </div>
    <div class="col-sm-2 col">
      Email
    </div>
    <div class="col-sm-3 col">
      Message
    </div>
        <div class="col-sm-1 col">
      Created-at
    </div>
        <div class="col-sm-2 col">
      Action
    </div>
  </div>
  @foreach($users as $key=>$r)
<div class="row custom-row p-3">
  <div class="col-sm-2 col">
      {{$key+1}}
    </div>
    <div class="col-sm-2 col">
      {{$r->name}}
    </div>
    <div class="col-sm-2 col">
      {{$r->email}}
    </div>
    <div class="col-sm-3 col">
     {{$r->message}}
    </div>
            <div class="col-sm-1 col">
      {{$r->created_at}}
    </div>
        <div class="col-sm-2 col">
    <a href="delete/{{$r->id}}" class="btn sm btn-danger" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
    @if($r->seen==0)
    <a href="markread/{{$r->id}}" class="btn sm btn-dark">Mark read</a>
    @else
        <a href="#" class="btn sm btn-primary">Marked</a>
        @endif
    </div>
    </div>
  @endforeach
  <div class="my-3">
{{$users->links()}}  
</div>
</div>


@endsection