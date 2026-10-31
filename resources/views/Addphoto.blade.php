@extends('layout')
@section('title', 'add_photo')

@section('main')

<style>
    body{
        background: #f4f7fb;
    }

    .photo-page{
        padding: 40px 0;
    }

    .photo-card{
        max-width: 950px;
        margin: auto;
        border: none;
        border-radius: 24px;
        overflow: hidden;
        background: white;
        box-shadow: 0 15px 40px rgba(0,0,0,0.08);
    }

    .photo-header{
        background: linear-gradient(135deg,#4f46e5,#6366f1,#7c3aed);
        padding: 35px;
        color: white;
        text-align: center;
    }

    .photo-header h3{
        font-weight: 700;
        margin-bottom: 8px;
        letter-spacing: .5px;
    }

    .photo-header p{
        margin: 0;
        opacity: .85;
    }

    .photo-body{
        padding: 35px;
    }

    .upload-box{
        border: 2px dashed #c7d2fe;
        border-radius: 18px;
        padding: 35px;
        background: #f8faff;
        transition: .3s;
    }

    .upload-box:hover{
        border-color: #6366f1;
        background: #eef2ff;
    }

    .form-label{
        font-weight: 600;
        color: #374151;
        margin-bottom: 10px;
    }

    .form-control{
        border-radius: 12px;
        padding: 12px;
        border: 1px solid #d1d5db;
        box-shadow: none !important;
    }

    .form-control:focus{
        border-color: #6366f1;
        box-shadow: 0 0 0 4px rgba(99,102,241,.15) !important;
    }

    .preview-wrapper{
        margin-top: 25px;
        text-align: center;
    }

    #preview{
        width: 100%;
        max-width: 350px;
        border-radius: 18px;
        display: none;
        object-fit: cover;
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        border: 4px solid white;
    }

    .upload-btn{
        background: linear-gradient(135deg,#2563eb,#4f46e5);
        border: none;
        color: white;
        padding: 12px 30px;
        border-radius: 14px;
        font-weight: 600;
        transition: .3s;
        text-decoration: none;
        display: inline-block;
    }

    .upload-btn:hover{
        transform: translateY(-3px);
        color: white;
        box-shadow: 0 10px 20px rgba(79,70,229,.3);
    }

    .update-btn{
        background: linear-gradient(135deg,#f59e0b,#f97316);
    }

    .section-title{
        font-size: 24px;
        font-weight: 700;
        color: #111827;
        margin-bottom: 20px;
        text-align: center;
    }

    .gallery-card{
        position: relative;
        overflow: hidden;
        border-radius: 18px;
        transition: .4s;
        background: white;
        box-shadow: 0 6px 18px rgba(0,0,0,0.08);
    }

    .gallery-card:hover{
        transform: translateY(-6px);
        box-shadow: 0 12px 25px rgba(0,0,0,0.15);
    }

    .gallery-card img{
        width: 100%;
        height: 220px;
        object-fit: cover;
        transition: .4s;
    }

    .gallery-card:hover img{
        transform: scale(1.06);
    }

    .empty-box{
        padding: 35px;
        border-radius: 18px;
        background: #f9fafb;
        color: #6b7280;
        text-align: center;
        font-weight: 500;
    }

    .divider{
        margin: 40px 0 30px;
        border-top: 1px solid #e5e7eb;
    }

    .icon-circle{
        width: 75px;
        height: 75px;
        background: rgba(255,255,255,.15);
        border-radius: 50%;
        margin: auto;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 18px;
        backdrop-filter: blur(8px);
    }

    @media(max-width:768px){

        .photo-body{
            padding: 20px;
        }

        .upload-box{
            padding: 20px;
        }

        .gallery-card img{
            height: 180px;
        }
    }
</style>

<div class="container photo-page">

    <div class="card photo-card">

        {{-- Header --}}
        <div class="photo-header">

            <div class="icon-circle">
                <svg xmlns="http://www.w3.org/2000/svg"
                     height="38px"
                     viewBox="0 -960 960 960"
                     width="38px"
                     fill="#ffffff">

                    <path d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320ZM200-160q-33 0-56.5-23.5T120-240v-480q0-33 23.5-56.5T200-800h126l74-80h160l74 80h126q33 0 56.5 23.5T840-720v480q0 33-23.5 56.5T760-160H200Z"/>
                </svg>
            </div>

            <h3>Add Room Photos</h3>
            <p>Upload and manage beautiful room gallery images</p>

        </div>

        <div class="photo-body">

            {{-- Upload Form --}}
            <form action="/addphoto/uploadroomphoto"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <input type="hidden"
                       value="{{$id}}"
                       name="id">

                <div class="upload-box">

                    <div class="mb-3">

                        <label class="form-label">
                            Upload Room Photo
                        </label>

                        <input type="file"
                               class="form-control"
                               name="room_photo"
                               onchange="previewImage(event)">

                        @error('room_photo')
                        <p class="text-danger mt-2 mb-0 fw-semibold">
                            {{$message}}
                        </p>
                        @enderror

                    </div>

                    {{-- Preview --}}
                    <div class="preview-wrapper">
                        <img id="preview" src="">
                    </div>

                    {{-- Button --}}
                    <div class="text-center mt-4">

                        @if($photos->count()==0)

                        <button type="submit"
                                class="upload-btn">

                            Upload New Photo

                        </button>

                        @endif

                        @if($photos->count()>0)

                        <a href="/updatephoto/{{$id}}"
                           class="upload-btn update-btn">

                            Update Existing Photo

                        </a>

                        @endif

                    </div>

                </div>

            </form>

            {{-- Divider --}}
            <div class="divider"></div>

            {{-- Previous Photos --}}
            <h4 class="section-title">
                Previous Room Photos
            </h4>

            <div class="row">

                @forelse($photos as $photo)

                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="gallery-card">

                        <img src="{{ asset('storage/'.$photo->photoname) }}">

                    </div>

                </div>

                @empty

                <div class="col-12">

                    <div class="empty-box">
                        No room photos uploaded yet 📷
                    </div>

                </div>

                @endforelse

            </div>

        </div>

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