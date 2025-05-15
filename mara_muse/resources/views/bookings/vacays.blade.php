@extends('layouts.app')
@section('content')
<div class="container-fluid">

       
  

    <!-- Header -->
    <header class="text-white text-center py-5" style="margin-top:100px; background-color:#5b3e2f;">
        <h1>Explore Our Vacation Packages</h1>
        <p class="lead">Find your perfect getaway today</p>
    </header>

    <!-- Packages Grid -->
    <section class="container my-5">
        <div class="row g-4">
            <!-- Package 1 -->
            <div class="col-md-4">
                <div class="card package-card">
                    <img src="/images/mara4.jpg" class="card-img-top" alt="Beach Package">
                    <div class="card-body">
                        <h5 class="card-title">Beach Paradise</h5>
                        <p class="card-text">Relax on pristine beaches with this 5-day tropical escape.</p>
                        <p class="package-price">$1,499.99</p>
                        <a href="#" class="btn btn-outline-primary">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Package 2 -->
            <div class="col-md-4">
                <div class="card package-card">
                    <img src="https://source.unsplash.com/400x200/?mountains" class="card-img-top" alt="Mountain Retreat">
                    <div class="card-body">
                        <h5 class="card-title">Mountain Retreat</h5>
                        <p class="card-text">Breathe fresh air and hike beautiful trails in our mountain resort.</p>
                        <p class="package-price">$1,199.99</p>
                        <a href="#" class="btn btn-outline-primary">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Package 3 -->
            <div class="col-md-4">
                <div class="card package-card">
                    <img src="https://source.unsplash.com/400x200/?safari" class="card-img-top" alt="Safari Adventure">
                    <div class="card-body">
                        <h5 class="card-title">Safari Adventure</h5>
                        <p class="card-text">Experience the wild like never before with our guided safaris.</p>
                        <p class="package-price">$2,299.99</p>
                        <a href="#" class="btn btn-outline-primary">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



        
       

</div>





@endsection