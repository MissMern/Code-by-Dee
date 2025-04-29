<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;600&display=swap" rel="stylesheet">
        <!-- Add this in the <head> section of your layout file -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJ1Q8R7/F4L7vqjz7pXlHkp++Xz+gTqeg0jtxzpyksVuI1+rxM0SSWzHeR6v" crossorigin="anonymous">
<!-- Add this in the <head> section of your layout file -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
        <style>

        .new-footer {
  background: linear-gradient(to right, rgb(254, 253, 254), rgb(159, 247, 178)); /* The gradient you specified */
  color: #2c3e50;
  padding: 40px 0;
  font-family: 'Arial', sans-serif;
}

.new-footer h4 {
  color: #ff7e5f;
  font-weight: bold;
}

.new-footer p {
  font-size: 14px;
  line-height: 1.5;
}

.new-footer ul {
  list-style: none;
  padding: 0;
}

.new-footer ul li {
  margin: 5px 0;
}

.new-footer ul li a {
  color: #2c3e50;
  text-decoration: none;
  transition: color 0.3s ease;
}

.new-footer ul li a:hover {
  color: #ff7e5f;
}

.social-icons a {
  color: #2c3e50;
  margin: 0 10px;
  font-size: 18px;
  transition: color 0.3s ease;
}

.social-icons a:hover {
  color: #ff7e5f;
}

.footer-bottom {
  background-color: #34495e;
  padding: 10px 0;
}

.footer-bottom p {
  margin: 0;
  color: #bdc3c7;
  font-size: 12px;
}
/* Remove underlines from all footer links */
.footer a {
    text-decoration: none;
}

/* Optionally, add a hover effect to make the links stand out when hovered */
.footer a:hover {
    text-decoration: underline;  /* Optional: you can keep or remove this */
    color: #28a745; /* Optional: change the color on hover */
}


</style>
        @endif
    </head>
   <body>
 
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: linear-gradient(to right,rgb(254, 253, 254),rgb(159, 247, 178)); height: 100px;">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <!-- Navbar Brand (Logo + Name) -->
      <a class="navbar-brand d-flex align-items-center ms-auto" href="#">
    <img src="/images/logo.png" alt="Brand Logo" width="60" height="60" class="d-inline-block align-text-top">
    <h3 class="ms-2 mb-0" style="font-family: 'Comfortaa', sans-serif;">Mara Muse</h3>
</a>



      
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <!-- Navigation Links moved to the right -->
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{ route('about') }}">About Us</a>

          </li> 
        
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Book With Us</a>
          </li>
          <!-- Dropdown Menu for Categories -->
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categories
            </a> -->
            <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li> -->
        </ul>

        <!-- Login and Register Buttons -->
        <div class="d-flex">
        <a href="{{ route('login') }}" class="btn me-2" style="background-color: #28a745; color: white; font-weight: bold; font-size: 18px; padding: 12px 24px; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#fff'; this.style.color='#28a745';" onmouseout="this.style.backgroundColor='#28a745'; this.style.color='white';">
  <i class="fas fa-user me-2"></i> Login
</a>

<a href="{{ route('register') }}" class="btn me-2" style="background-color: #28a745; color: white; font-weight: bold; font-size: 18px; padding: 12px 24px; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#fff'; this.style.color='#28a745';" onmouseout="this.style.backgroundColor='#28a745'; this.style.color='white';">
  <i class="fas fa-user-plus me-2"></i> Register
</a>

          
        </div>
      </div>
    </div>
  </nav>
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

<footer class="site-footer" style="background: linear-gradient(to right, rgb(159, 247, 178), rgb(159, 247, 178)); color: #333; padding: 40px 0;">
    <div class="container">
        <div class="row">
            <!-- About Column -->
            <div class="col-md-3 footer-column">
                <h4 class="text-dark">About Mara Muse</h4>
                <p>Dee's Travel Blog shares inspiring stories, travel tips, and beautiful destinations from around the world. </p>
                <h6><em>Hakuna Matata!!</em></h6>
            </div>
  
            <!-- Quick Links Column -->
            <div class="col-md-3 footer-column">
                <h4 class="text-dark">Quick Links</h4>
                <ul class="list-unstyled"style="text-decoration:none">
                    <li><a href="#" class="text-dark">Home</a></li>
                    <li><a href="#" class="text-dark">Destinations</a></li>
                    <li><a href="#" class="text-dark">Travel Tips</a></li>
                    <li><a href="#" class="text-dark">Contact</a></li>
                    <li><a href="#" class="text-dark">Feedback</a></li>
                </ul>
            </div>
  
            <!-- Follow Me Column -->
            <div class="col-md-3 footer-column">
                <h4 class="text-dark">Follow Me</h4>
                <div class="social-icons">
                    <a href="#" class="text-dark"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-dark"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-dark"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-dark"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
  
            <!-- Payment Methods Column -->
            <div class="col-md-3 footer-column">
                <h4 class="text-dark">Payment Methods</h4>
                <div class="payment-icons">
                    <i class="fab fa-cc-visa"></i>
                    <i class="fab fa-cc-mastercard"></i>
                    <i class="fab fa-cc-paypal"></i>
                    <i class="fab fa-cc-amex"></i>
                    <i class="fab fa-apple"></i> <!-- Apple Pay Icon -->
                    <i class="fab fa-mobile-alt"></i> <!-- MPesa (could be a placeholder for mobile payment) -->
                  
                </div>
            </div>
        </div>
    </div>
  
    
    
</footer>







</body>
 
</html>
