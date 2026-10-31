@extends('layout')
@section('title', 'features')

@section('main')
 @if(session('addfet'))

<div class="alert alert-success alert-dismissible fade show px-5" role="alert">
   {{ session('addfet') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="container mt-5">
<a class="btn btn-success" href="fandf" 
   data-bs-toggle="tooltip" 
   data-bs-placement="top" 
   title="Back">

<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
<path d="m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z"/>
</svg>

</a></div>
<div class="container d-flex justify-content-center align-items-center" style="min-height:80vh;">
    
    <div class="card shadow-lg p-4" style="width:420px; background:white; border-radius:12px;">
        
        <h4 class="text-center mb-4 text-font">Add Feature</h4>

        <form method="post" action="addfeature">
            @csrf
            <div class="mb-3">
                <label class="form-label">Enter Feature Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter feature name" required>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">
                    Add
                </button>
            </div>
        </form>

    </div>

</div>
<script>
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>
@endsection