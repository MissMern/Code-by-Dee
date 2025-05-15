@extends('layouts.app')
@section('content')
<div class="container-fluid">
<main class="mt-5 pt-5">
    <div class="container py-5">
        <h1 class="text-center mb-5">Book a Game Drive</h1>
        
        <!-- Game Drive Booking Form -->
        <form action="" method="POST">
            @csrf
            <div class="row">
                <!-- Park Selection -->
                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="park" class="form-label">Choose Park</label>
                        <select class="form-select" id="park" name="park" required>
                            <option value="">Select Park</option>
                            <option value="serengeti">Serengeti National Park</option>
                            <option value="masai_mara">Masai Mara</option>
                            <option value="kruger">Kruger National Park</option>
                            <option value="chobe">Chobe National Park</option>
                        </select>
                    </div>
                </div>

                <!-- Date -->
                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="date" class="form-label">Preferred Date</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Time Slot -->
                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="time_slot" class="form-label">Time Slot</label>
                        <select class="form-select" id="time_slot" name="time_slot" required>
                            <option value="">Select Time</option>
                            <option value="morning">Morning Drive (6 AM - 9 AM)</option>
                            <option value="afternoon">Afternoon Drive (3 PM - 6 PM)</option>
                            <option value="evening">Evening Drive (7 PM - 9 PM)</option>
                        </select>
                    </div>
                </div>

                <!-- People -->
                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="people" class="form-label">Number of People</label>
                        <input type="number" class="form-control" id="people" name="people" min="1" max="10" required>
                    </div>
                </div>
            </div>

            <!-- Contact -->
            <div class="mb-4">
                <label for="email" class="form-label">Contact Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="your@email.com" required>
            </div>

            <!-- Notes -->
            <div class="mb-4">
                <label for="notes" class="form-label">Special Requests</label>
                <textarea class="form-control" id="notes" name="notes" rows="4" placeholder="Anything else we should know?"></textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-success">Book Game Drive</button>
            </div>
        </form>
    </div>
</main>

</div>





@endsection