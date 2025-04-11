<?php
$jsonFile = 'app.json';
$jsonData = file_get_contents($jsonFile);
$poems = json_decode($jsonData, true);
?>

<h1 class="text-center my-4">My Poems</h1>

<div class="container"> <!-- Add this -->
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php foreach ($poems as $poem): ?>
      <div class="col">
        <div class="card h-100 shadow-sm">
          <?php if (!empty($poem['image'])): ?>
            <img src="<?= htmlspecialchars($poem['image']) ?>" alt="<?= htmlspecialchars($poem['name']) ?>" class="card-img-top">
          <?php endif; ?>
          <div class="card-body">
            <h5 class="card-title"><?= htmlspecialchars($poem['name']) ?></h5>
            <p class="text-muted"><?= htmlspecialchars($poem['author']) ?></p>
            <p class="card-text"><?= htmlspecialchars($poem['description']) ?></p>
            <a href="poem.php?id=<?= urlencode($poem['id']) ?>" class="btn btn-outline-primary">View Poem</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div> <!-- End container -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>