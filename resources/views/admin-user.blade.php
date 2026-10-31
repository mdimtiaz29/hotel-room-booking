@extends('layout')
@section('title','Admin User')

@section('main')

<style>
    body{
        background: #f4f7fb;
    }

    .booking-card{
        border: none;
        border-radius: 18px;
        overflow: hidden;
        background: #ffffff;
    }

    .booking-header{
        background: linear-gradient(135deg, #1e3c72, #2a5298);
        padding: 20px;
    }

    .booking-header h4{
        margin: 0;
        color: white;
        font-weight: 700;
        letter-spacing: 0.5px;
    }

    .table{
        margin-bottom: 0;
    }

    .table thead th{
        background: #0f172a;
        color: white;
        border: none;
        padding: 16px;
        font-size: 15px;
    }

    .table tbody tr{
        transition: 0.3s ease;
    }

    .table tbody tr:hover{
        background: #eef4ff;
        transform: scale(1.003);
    }

    .table td{
        vertical-align: middle;
        padding: 15px;
        font-weight: 500;
    }

    .badge-confirmed{
        background: #16a34a;
        color: white;
        padding: 8px 14px;
        border-radius: 30px;
        font-size: 13px;
    }

    .badge-cancelled{
        background: #dc2626;
        color: white;
        padding: 8px 14px;
        border-radius: 30px;
        font-size: 13px;
    }

    .confirm-btn{
        background: linear-gradient(135deg, #facc15, #f59e0b);
        color: #111827;
        border: none;
        padding: 8px 18px;
        border-radius: 10px;
        font-weight: 600;
        text-decoration: none;
        transition: 0.3s;
        display: inline-block;
    }

    .confirm-btn:hover{
        background: linear-gradient(135deg, #f59e0b, #d97706);
        color: white;
        transform: translateY(-2px);
    }

    .mail-link{
        text-decoration: none;
        margin-left: 10px;
        background: #e0e7ff;
        padding: 8px;
        border-radius: 10px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: 0.3s;
    }

    .mail-link:hover{
        background: #c7d2fe;
        transform: scale(1.08);
    }

    .mail-link svg{
        fill: #1e3a8a;
    }

    .serial-box{
        background: #dbeafe;
        color: #1d4ed8;
        padding: 6px 12px;
        border-radius: 8px;
        font-weight: bold;
    }

    .table-responsive{
        border-radius: 15px;
        overflow: hidden;
    }
</style>

<x-navbar></x-navbar>

<div class="container py-4">

    <div class="card booking-card shadow-lg">

        <div class="booking-header d-flex justify-content-between align-items-center">
            <h4>Room Booking List</h4>

            <span class="badge bg-light text-dark px-3 py-2">
                Total Bookings : {{ count($bookings) }}
            </span>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover text-center align-middle">

                    <thead>
                        <tr>
                            <th>Sl No.</th>
                            <th>User</th>
                            <th>Room</th>
                            <th>Check In</th>
                            <th>Check Out</th>
                            <th>Adults</th>
                            <th>Children</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($bookings as $key=>$booking)

                        <tr>

                            <td>
                                <span class="serial-box">
                                    {{ $key+1 }}
                                </span>
                            </td>

                            <td class="fw-semibold">
                                {{ $booking->user->name }}
                            </td>

                            <td>
                                <span class="badge bg-primary px-3 py-2">
                                    {{ $booking->room->name }}
                                </span>
                            </td>

                            <td>{{ $booking->checkin }}</td>

                            <td>{{ $booking->checkout }}</td>

                            <td>
                                <span class="badge bg-info text-dark px-3 py-2">
                                    {{ $booking->adult }}
                                </span>
                            </td>

                            <td>
                                <span class="badge bg-secondary px-3 py-2">
                                    {{ $booking->children }}
                                </span>
                            </td>

                            <td>

                                @if($booking->confirm == 1)

                                    <span class="badge-confirmed">
                                        Confirmed
                                    </span>

                                    <a href="/confirmgmail/{{$booking->user->email}}" 
                                       class="mail-link"
                                       data-bs-toggle="tooltip"
                                       title="Send Confirmation Mail">

                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             height="22px"
                                             viewBox="0 -960 960 960"
                                             width="22px">

                                            <path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 
                                            23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 
                                            33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 
                                            320-200H160l320 200ZM160-640v-80 480-400Z"/>
                                        </svg>

                                    </a>

                                @elseif($booking->confirm == 2)

                                    <span class="badge-cancelled">
                                        Cancelled
                                    </span>
                                    <span class="badge m-0">
                                        <a
                                     data-bs-toggle="tooltip"
                                       title="Delete" href="" class="m-0 p-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#EA3323">
                                            <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/>
                                    </svg>
                                </a>
                                    </span>
                                @else

                                    <a href="/finalconfirm/{{ $booking->id }}"
                                       class="confirm-btn"
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Click here to confirm this Guest">

                                        Confirm Booking

                                    </a>

                                @endif

                            </td>

                        </tr>

                        @endforeach

                    </tbody>

                </table>
<div class="my-3">
{{$bookings->links()}}  
</div>
            </div>

        </div>

    </div>

</div>

@endsection