@extends('layout')
@section('title', 'Update Photo')

@section('main')
<div class="container mt-5">
  <div class="card shadow-lg p-4" style="max-width:500px;margin:auto;">
    
    <h4 class="text-center mb-4">Update Room Photo</h4>

    <form action="{{ url('room/update/'.$result->id) }}" method="POST" enctype="multipart/form-data">
      
      @csrf
      @method('PUT')


     
      <div class="mb-3">
        <label class="form-label">Upload Room Photo</label>
        <input type="file" class="form-control" name="room_photo_update" onchange="previewImage(event)">
                    @error('room_photo_update') <p class="fs-6 text-danger">{{$message}}</p> @enderror
      </div>

      
      <div class="text-center mb-3">
        <img id="preview" src="" style="max-width:100%; display:none; border-radius:10px;">
      </div>

      
      <div class="text-center">
    <button type="submit" class="btn btn-primary px-4">
          Update 
        </button>
    
      </div>

    </form>
    

    

  </div>
</div>
<script>
function previewImage(event){
  var reader = new FileReader();
  reader.onload = function(){
    var output = document.getElementById('preview');
    output.src = reader.result;
    output.style.display = "block";
  }
  reader.readAsDataURL(event.target.files[0]);
}
</script>
@endsection