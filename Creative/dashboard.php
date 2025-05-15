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
            <!-- display love, delete, and view buttons -->
            <a href="love.php?id=<?= urlencode($poem['id']) ?>" class="btn btn-outline-danger">Love</a>
            <a href="delete.php?id=<?= urlencode($poem['id']) ?>" class="btn btn-outline-danger">Delete</a>
            <a href="edit.php?id=<?= urlencode($poem['id']) ?>" class="btn btn-outline-primary">Edit</a>
            <a href="comment.php?id=<?= urlencode($poem['id']) ?>" class="btn btn-outline-primary">Comment</a>
            <a href="poem.php?id=<?= urlencode($poem['id']) ?>" class="btn btn-outline-primary">View Poem</a>
            
          </div>
          <!--div that has the love, edit and X colourful buttons-->
          
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div> <!-- End container -->
