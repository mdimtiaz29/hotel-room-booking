@extends('layout')

@section('title', 'Rating & Review')

@section('main')

<div class="container py-5">
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif
<a class="btn btn-success mb-3"
   href="/user-profile/{{ session('user')['id'] }}"
   data-bs-toggle="tooltip"
   data-bs-placement="top"
   title="Back">
   ← Back
</a>
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-4">

                    <h3 class="text-center mb-4 fw-bold">
                        ⭐ Rate Your Experience
                    </h3>

                    <form method="POST" action="/review">
                        @csrf

                        <input type="hidden" name="booking_id" value="{{ $info->id }}">
                                                <input type="hidden" name="room_id" value="{{ $info->room_id }}">

                        <input type="hidden" name="rating" id="rating" required>

                        <!-- Star Rating -->
                        <div class="text-center mb-4">
                            <label class="form-label fw-semibold d-block mb-2">Your Rating</label>

                            <div id="starRating" style="font-size: 30px; cursor: pointer;">
                                <span data-value="1">☆</span>
                                <span data-value="2">☆</span>
                                <span data-value="3">☆</span>
                                <span data-value="4">☆</span>
                                <span data-value="5">☆</span>
                            </div>

                            <small id="ratingText" class="text-muted d-block mt-2"></small>
                        </div>

                        <!-- Review -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Your Review</label>
                            <textarea 
                                name="review_text" 
                                class="form-control rounded-3" 
                                rows="4" 
                             style="resize: none;"
                                placeholder="Write your experience..." 
                                required></textarea>
                        </div>

                        <!-- Submit -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary rounded-3 py-2 fw-semibold">
                                Submit Review
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

<!-- JS for star interaction -->
<script>
    const stars = document.querySelectorAll('#starRating span');
    const ratingInput = document.getElementById('rating');
    const ratingText = document.getElementById('ratingText');

    const messages = {
        1: "Very Bad 😞",
        2: "Poor 😕",
        3: "Average 😐",
        4: "Good 🙂",
        5: "Excellent 😍"
    };

    stars.forEach(star => {
        star.addEventListener('click', function () {
            let value = this.getAttribute('data-value');
            ratingInput.value = value;

            stars.forEach(s => s.textContent = "☆");

            for (let i = 0; i < value; i++) {
                stars[i].textContent = "⭐";
            }

            ratingText.textContent = messages[value];
        });
    });
</script>

@endsection