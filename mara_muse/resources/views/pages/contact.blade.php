@extends('layouts.app') <!-- or whatever your layout is called -->

@section('content')
<!-- Hero Section -->
<section class="text-center text-light d-flex align-items-center justify-content-center" style=" height: 40vh;">
  <div class="bg-dark bg-opacity-50 p-5 rounded">
    <h1 class="display-4 fw-bold">Get In Touch</h1>
  </div>
</section>

    <main class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <h2 class="text-center mb-4">Send Us a Message</h2>

      <form action="{{ route('contact.store') }}" method="POST">
      @csrf
        <div class="mb-3">
          <label for="name" class="form-label fw-semibold">Your Name</label>
          <input type="text" class="form-control" id="name" placeholder="John Doe">
        </div>

        <div class="mb-3">
          <label for="email" class="form-label fw-semibold">Email Address</label>
          <input type="email" class="form-control" id="email" placeholder="name@example.com">
        </div>

        <div class="mb-3">
          <label for="subject" class="form-label fw-semibold">Subject</label>
          <input type="text" class="form-control" id="subject" placeholder="Safari Booking, Blog Feedback, etc.">
        </div>

        <div class="mb-3">
          <label for="message" class="form-label fw-semibold">Message</label>
          <textarea class="form-control" id="message" rows="5" placeholder="Type your message here..."></textarea>
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-success rounded-pill px-5 py-2">Send Message</button>
        </div>
      </form>
    </div>
  </div>
</main>
<section class="bg-light py-5">
  <div class="container text-center">
    <h3 class="fw-bold mb-4">Other Ways to Reach Us</h3>
    <div class="row justify-content-center g-4">
      <div class="col-md-4">
        <i class="fas fa-envelope fa-2x text-success mb-3"></i>
        <p>hello@mamamara.com</p>
      </div>
      <div class="col-md-4">
        <i class="fas fa-phone fa-2x text-success mb-3"></i>
        <p>+254 743 114536</p>
      </div>
      <div class="col-md-4">
        <i class="fas fa-map-marker-alt fa-2x text-success mb-3"></i>
        <p>Nairobi, Kenya</p>
      </div>
    </div>
  </div>
</section>

</div>
@endsection
