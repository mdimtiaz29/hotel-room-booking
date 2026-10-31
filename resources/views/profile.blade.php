@extends('layout')
@section('title', 'User Profile')
<style>
.profile-card {
    transition: all 0.3s ease;
}

.profile-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.15);
}
    </style>
@section('main')


<div class="container mt-5">

<div class="row">

    <!-- Profile Card -->
<div class="col-md-4">
    <div class="card border-0 shadow-lg rounded-4 overflow-hidden profile-card">

        <!-- Cover / Top Gradient -->
        <div class="bg-primary" style="height: 100px;"></div>

        <div class="text-center position-relative px-4 pb-4">

            <!-- Profile Image -->
            <img src="{{ asset('storage/'.$result->image) }}"
                 class="rounded-circle border border-4 border-white shadow"
                 width="120"
                 height="120"
                 style="object-fit:cover; margin-top:-60px;">

            <!-- Name + Email -->
            <h4 class="fw-bold mt-3 mb-1">{{ $result->name }}</h4>
            <p class="text-muted small mb-3">{{ $result->email }}</p>

            <!-- Booking Badge -->
            <span class="badge bg-success px-3 py-2 mb-3">
                {{ $result->bookings_count }} Bookings
            </span>

            <hr>

            <!-- Info Section -->
            <div class="text-start px-3">

                <p class="mb-2">
                    <i class="bi bi-telephone-fill text-primary me-2"></i>
                    <strong>Phone:</strong> {{ $result->phn }}
                </p>

                <p class="mb-2">
                    <i class="bi bi-geo-alt-fill text-danger me-2"></i>
                    <strong>Address:</strong> {{ $result->address }}
                </p>

                <p class="mb-2">
                    <i class="bi bi-mailbox text-warning me-2"></i>
                    <strong>Postal:</strong> {{ $result->postalcode }}
                </p>

                <p class="mb-0">
                    <i class="bi bi-calendar-event-fill text-success me-2"></i>
                    <strong>DOB:</strong> {{ $result->dob }}
                </p>

            </div>
        </div>
    </div>
</div>

    <!-- Booking History -->
    <div class="col-md-8">

        <div class="card shadow border-0 rounded-4">
            <div class="card-header bg-dark text-white">
                <h5 class="mb-0">🏨 Booking History</h5>
            </div>

            <div class="card-body">

                @if($result->bookings->count() > 0)

                <table class="table table-bordered table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Sl no.</th>
                            <th>Room Name</th>
                            <th>Check In</th>
                            <th>Check Out</th>
                            <th>Guests</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                    @foreach($result->bookings as $booking)

                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td>
                            {{ $booking->room->name }}
                        </td>

                        <td>{{ $booking->checkin }}</td>

                        <td>{{ $booking->checkout }}</td>

                        <td>
                            Adult: {{ $booking->adult }} <br>
                            Child: {{ $booking->children }}
                        </td>

                        <td>
                            @if($booking->confirm == 1)
                                <span class="badge bg-success">Confirmed</span>
                            @elseif($booking->confirm == 0)
                                <span class="badge bg-warning text-dark">Pending</span>
                                @else
                                                                <span class="badge bg-warning text-dark">Cancelled</span>
                            @endif
                        </td>
                        <td>

    {{-- Cancel Button --}}
    @if($booking->confirm == 0)
        <a class="btn btn-danger btn-sm" href="/cancel/{{ $booking->id }}">
            Cancel
        </a>
    @endif

    {{-- Rate & Review Button --}}
    @if($booking->confirm == 1 && $booking->checkout < now())
        <a href="/ratereview/{{$booking->id}}" 
           class="btn btn-success btn-sm mt-1">
            ⭐ Rate & Review
        </a>
    @endif

</td>

                    </tr>

                    @endforeach

                    </tbody>
                </table>

                @else

                <div class="alert alert-info text-center">
                    You have not booked any rooms yet.
                </div>

                @endif

            </div>
        </div>

    </div>

</div>

</div>

@endsection