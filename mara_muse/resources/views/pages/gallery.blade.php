@extends('layouts.app')
@section('content')

<main class="mt-5" style="padding: 20px;">
    <div class="container text-center my-5">
      <h2 class="display-5 fw-bold">📸 Migration Moments Gallery</h2>
      <p class="text-muted">A breathtaking visual journey across the Mara's Great Migration.</p>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <img src="/images/mara11.jpg" class="card-img-top" alt="Wildebeests crossing river in Maasai Mara">
          <div class="card-body">
            <h5 class="card-title">River Crossing Frenzy</h5>
            <p class="card-text">Witness the heart-stopping moment wildebeests brave the crocodile-infested waters during migration.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Captured by: Dee</small>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100">
          <img src="/images/zebra.jpg" class="card-img-top" alt="Zebras grazing peacefully on Maasai Mara plains">
          <div class="card-body">
            <h5 class="card-title">Zebra Parade</h5>
            <p class="card-text">Elegant zebras wandering freely across the endless golden savannah. Nature's finest patterns on full display.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Captured by: Dee Chep</small>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100">
          <img src="/images/mara12.jpg" class="card-img-top" alt="Maasai Mara sunset over wildlife silhouettes">
          <div class="card-body">
            <h5 class="card-title">Golden Hour Magic</h5>
            <p class="card-text">As the sun kisses the Mara plains goodnight, the silhouettes of wildlife create a mesmerizing canvas.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Captured by: Dee & Dee</small>
          </div>
        </div>
      </div>
    </div>
  </main>
  @endsection