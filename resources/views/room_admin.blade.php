@extends('layout')
@section('title', 'room_admin')

@section('main')
<x-navbar></x-navbar>

<style>
    body{
        background: #f4f7fb;
    }

    .room-wrapper{
        padding: 25px 0;
    }

    .room-card{
        background: #ffffff;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        border: none;
    }

    .room-header{
        background: linear-gradient(135deg,#111827,#1f2937,#374151);
        padding: 22px 30px;
        color: white;
    }

    .room-title{
        font-size: 30px;
        font-weight: 700;
        margin: 0;
        letter-spacing: .5px;
    }

    .add-btn{
        background: linear-gradient(135deg,#f59e0b,#fbbf24);
        border: none;
        color: white;
        padding: 10px 22px;
        border-radius: 12px;
        font-weight: 600;
        transition: .3s;
        text-decoration: none;
    }

    .add-btn:hover{
        transform: translateY(-2px);
        color: white;
        box-shadow: 0 8px 18px rgba(245,158,11,.4);
    }

    .custom-alert{
        border: none;
        border-radius: 12px;
        box-shadow: 0 5px 18px rgba(0,0,0,0.08);
    }

    .table-header{
        background: linear-gradient(135deg,#4f46e5,#6366f1);
        color: white;
        font-weight: 600;
        border-radius: 12px 12px 0 0;
    }

    .room-row{
        background: white;
        border-bottom: 1px solid #eef2f7;
        transition: .3s;
        padding: 10px 0;
    }

    .room-row:hover{
        background: #f9fbff;
        transform: scale(1.005);
    }

    .room-row .col{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 85px;
        font-weight: 500;
        color: #374151;
    }

    .price{
        color: #059669;
        font-weight: 700;
        font-size: 17px;
    }

    .guest-box p{
        margin: 0;
        line-height: 1.5;
    }

    .status-btn{
        border: none;
        padding: 8px 16px;
        border-radius: 30px;
        font-size: 14px;
        font-weight: 600;
        transition: .3s;
        text-decoration: none;
    }

    .active-btn{
        background: #dcfce7;
        color: #15803d;
    }

    .inactive-btn{
        background: #fee2e2;
        color: #b91c1c;
    }

    .status-btn:hover{
        transform: translateY(-2px);
    }

    .action-btn{
        width: 42px;
        height: 42px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: .3s;
        text-decoration: none;
    }

    .delete-btn{
        background: #fee2e2;
    }

    .delete-btn:hover{
        background: #ef4444;
        transform: translateY(-3px);
    }

    .delete-btn:hover svg{
        fill: white;
    }

    .photo-btn{
        background: #dbeafe;
    }

    .photo-btn:hover{
        background: #2563eb;
        transform: translateY(-3px);
    }

    .photo-btn:hover svg{
        fill: white;
    }

    .action-group{
        gap: 12px;
    }

    @media(max-width:768px){

        .table-header{
            display: none;
        }

        .room-row{
            border-radius: 16px;
            margin-bottom: 16px;
            padding: 15px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.06);
        }

        .room-row .col{
            justify-content: space-between;
            min-height: auto;
            padding: 8px 12px;
        }

        .room-row .col::before{
            content: attr(data-label);
            font-weight: 700;
            color: #111827;
        }
    }
</style>

<div class="container room-wrapper">

    {{-- Success Alerts --}}
    @if(session('insertimg'))
    <div class="alert alert-success alert-dismissible fade show custom-alert" role="alert">
        {{ session('insertimg') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    @if(session('deleteroom'))
    <div class="alert alert-success alert-dismissible fade show custom-alert" role="alert">
        {{ session('deleteroom') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    @if(session('updt'))
    <div class="alert alert-success alert-dismissible fade show custom-alert" role="alert">
        {{ session('updt') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    <div class="room-card">

        {{-- Header --}}
        <div class="room-header d-flex justify-content-between align-items-center flex-wrap">
            <div>
                <h2 class="room-title">Room Management</h2>
                <p class="m-0 text-light opacity-75">
                    Manage hotel rooms, status and photos
                </p>
            </div>

            <a class="add-btn mt-3 mt-md-0" href="addroom">
                + Add New Room
            </a>
        </div>

        <div class="p-3">

            {{-- Table Header --}}
            <div class="row text-center table-header py-3 mx-0">
                <div class="col">Sl</div>
                <div class="col">Room</div>
                <div class="col">Area</div>
                <div class="col">Guests</div>
                <div class="col">Price</div>
                <div class="col">Quantity</div>
                <div class="col">Status</div>
                <div class="col">Actions</div>
            </div>

            {{-- Room Rows --}}
            @foreach($allroom as $key=>$r)

            <div class="row text-center room-row mx-0 align-items-center">

                <div class="col" data-label="SL">
                    #{{$key+1}}
                </div>

                <div class="col fw-bold text-dark" data-label="Room">
                    {{$r->name}}
                </div>

                <div class="col" data-label="Area">
                    {{$r->area}} sq ft
                </div>

                <div class="col guest-box" data-label="Guests">
                    <div>
                        <p>👦 Child: {{$r->child}}</p>
                        <p>🧑 Adult: {{$r->adult}}</p>
                    </div>
                </div>

                <div class="col price" data-label="Price">
                    $ {{$r->price}}
                </div>

                <div class="col" data-label="Quantity">
                    {{$r->quantity}}
                </div>

                <div class="col" data-label="Status">

                    @if($r->status==0)

                    <a href="{{ url('updatestatus/'.$r->id) }}"
                       class="status-btn inactive-btn">
                        Inactive
                    </a>

                    @endif

                    @if($r->status==1)

                    <a href="{{ url('updatestatus/'.$r->id) }}"
                       class="status-btn active-btn">
                        Active
                    </a>

                    @endif

                </div>

                <div class="col" data-label="Actions">

                    <div class="d-flex justify-content-center align-items-center action-group">

                        {{-- Delete --}}
                        <a class="action-btn delete-btn"
                           href="delroom/{{$r->id}}"
                           data-bs-toggle="tooltip"
                           data-bs-placement="top"
                           title="Delete Room">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 height="22px"
                                 viewBox="0 -960 960 960"
                                 width="22px"
                                 fill="#dc2626">

                                <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Z"/>
                            </svg>

                        </a>

                        {{-- Add Photo --}}
                        <a class="action-btn photo-btn"
                           href="addphoto/{{$r->id}}"
                           data-bs-toggle="tooltip"
                           data-bs-placement="top"
                           title="Add Photo">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 height="22px"
                                 viewBox="0 -960 960 960"
                                 width="22px"
                                 fill="#2563eb">

                                <path d="M440-440ZM120-120q-33 0-56.5-23.5T40-200v-480q0-33 23.5-56.5T120-760h126l74-80h240v80H355l-73 80H120v480h640v-360h80v360q0 33-23.5 56.5T760-120H120Z"/>
                            </svg>

                        </a>

                    </div>

                </div>

            </div>

            @endforeach

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