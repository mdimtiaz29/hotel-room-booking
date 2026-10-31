@extends('layout')
@section('title', 'rating-review')
@section('main')
<div class="container mt-4">

    <h3 class="mb-4 fw-bold">⭐ Guest Reviews</h3>

    @forelse($result as $review)
        <div class="card mb-3 shadow-sm border-0 rounded-4">
            <div class="card-body">

                <!-- User Info -->
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('storage/'.$review->user->image) }}" 
                         class="rounded-circle me-3"
                         width="50" height="50"
                         style="object-fit: cover;">

                    <div>
                        <h6 class="mb-0 fw-semibold">
                            {{ $review->user->name }}
                        </h6>
                        <small class="text-muted">
                            {{ $review->created_at->format('d M Y') }}
                        </small>
                    </div>
                </div>

                <!-- Rating Stars -->
                <div class="mb-2">
                    @for($i = 1; $i <= 5; $i++)
                        @if($i <= $review->rating)
                            <span style="color: #ffc107;">★</span>
                        @else
                            <span style="color: #e4e5e9;">★</span>
                        @endif
                    @endfor

                    <span class="ms-2 text-muted">
                        ({{ $review->rating }}/5)
                    </span>
                </div>

                <!-- Review Text -->
                <p class="mb-2">
                    {{ $review->review_text }}
                </p>

                <!-- Room Info -->
                <div class="bg-light p-2 rounded-3 mt-2">
                    <small class="text-muted">
                        Room: <strong>{{ $review->room->name }}</strong> |
                        Price: ${{ $review->room->price }}
                    </small>
                </div>

            </div>
        </div>

    @empty
        <div class="alert alert-info">
            No reviews found for this room.
        </div>
    @endforelse

</div>
@endsection