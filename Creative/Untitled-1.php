<h1 class="text-center">My Poems</h1>
<?php 
foreach ($poems as $poem) :?>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <?php if (!empty($poem['image'])): ?>
        <img src="<?= htmlspecialchars($poem['image']) ?>" alt="<?= htmlspecialchars($poem['name']) ?>">
      <?php endif; ?>
      <div class="card-body">
      <h5 class="card-title"><?= htmlspecialchars($poem['name'])?></h5>
      <?php if (!empty($poem['contents'])): ?>
        <?php foreach ($poem['contents'] as $content): ?>
          <?php if ($content['type'] === 'text'): ?>
        <p class="card-text"><?= nl2br(htmlspecialchars($content['content'])) ?></p>
          <?php elseif ($content['type'] === 'image'): ?>
            <?php endif; ?>  <?php endforeach; ?>
            <?php endif; ?>
      </div>
    </div>
  </div>
  
  