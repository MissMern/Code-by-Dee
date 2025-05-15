@extends('layouts.app')

@section('content')
  <!--main content hapa-->
  <section class="text-center text-light d-flex align-items-center justify-content-center" style="background: url('/images/mara10.jpg') center/cover no-repeat; height: 70vh; margin-top: 100px;">
  <div class="bg-dark bg-opacity-50 p-5 rounded">
    <h1 class="display-4 fw-bold">Welcome to the Majestic Mara</h1>
    <p class="lead">Stories from the Edge of the Map 🧡</p>
  </div>
</section>
<!--about sisi-->
<section id="about" class="py-5 bg-light" style="background-color:rgb(159, 247, 178)">
    <div class="container text-center">
      <h2 class="section-heading">About Mara</h2>
      <p class="lead">The Maasai Mara is a wild paradise in Kenya, home to the Big Five, golden sunrises, and the Great Migration. Whether you're camping under the stars or riding in a hot air balloon, Mara always delivers unforgettable memories.</p>
    </div>
  </section>
   <!-- Gallery Section -->
   <section id="gallery" class="py-5 bg-light">
    <div class="container text-center">
      <h2 class="section-heading mb-4">Safari Gallery</h2>
      <div id="multiImageCarousel" class="carousel slide" data-bs-ride="carousel">
        
        <div class="carousel-inner">
          <!-- Slide 1 -->
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-4">
                <img src="/images/mara3.jpg" class="d-block w-100 rounded shadow-sm" alt="Mara 1">
              </div>
              <div class="col-md-4">
                <img src="/images/mara4.jpg" class="d-block w-100 rounded shadow-sm" alt="Mara 2">
              </div>
              <div class="col-md-4">
                <img src="/images/mara5.jpg" class="d-block w-100 rounded shadow-sm" alt="Mara 3">
              </div>
            </div>
          </div>
  
          <!-- Slide 2 -->
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-4">
                <img src="/images/mara6.jpg" class="d-block w-100 rounded shadow-sm" alt="Mara 4">
              </div>
              <div class="col-md-4">
                <img src="/images/mara7.jpg" class="d-block w-100 rounded shadow-sm" alt="Mara 5">
              </div>
              <div class="col-md-4">
                <img src="/images/mara8.jpg" class="d-block w-100 rounded shadow-sm" alt="Mara 6">
              </div>
            </div>
          </div>
          
          <!-- Add more slides if you have more images -->
        </div>
  
        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#multiImageCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#multiImageCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
  
      </div>
    </div>
  </section>
    <!-- Destinations -->
    <section id="destinations" class="py-5 bg-light">
    <div class="container text-center">
      <h2 class="section-heading">Top Destinations</h2>
      <div class="row">
        <div class="col-md-4 text-center">
            <img src="/images/mara7.jpg" alt="Mara Triangle" class="img-fluid rounded mb-3 shadow-sm">
            <h4>Mara Triangle</h4>
            <p>Where the wild roams freely in a secluded and scenic part of the reserve.</p>
          </div>
          
        <div class="col-md-4">
            <img src="/images/hippo.jpg" alt="Mara Triangle" class="img-fluid rounded mb-3 shadow-sm">
          <h4>Talek River</h4>
          <p>A hotspot for wildlife sightings and the heart of many lodges and camps.</p>
        </div>
        <div class="col-md-4">
            <img src="/images/balloon.jpg" alt="Mara Triangle" class="img-fluid rounded mb-3 shadow-sm">
          <h4>Hot Air Balloon Safari</h4>
          <p>Witness the sunrise over the savannah from the sky—simply breathtaking.</p>
        </div>
      </div>
    </div>
  </section>

 <!-- Contact Section -->
 <section id="contact" class="py-5 bg-light">
    <div class="container text-center">
      <h2 class="section-heading">Contact Us</h2>
      <p>Got questions or want to book a trip? Let's chat!</p>
      <a href="mailto:dorcaschepkoech10@gmail.com" class="btn btn-primary" style="background-color: #2e7d32;">Send Email</a>
    </div>
  </section>

  <!-- Footer -->

@endsection
