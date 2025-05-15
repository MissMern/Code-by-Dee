<?php
require_once('navbar.php');
$poemId = $_GET['id'] ?? null;
$jsonFile = 'app.json';
$jsonData = file_get_contents($jsonFile);
$poems = json_decode($jsonData, true);
$selectedPoem = null;

foreach ($poems as $poem) {
    if ($poem['id'] == $poemId) {
        $selectedPoem = $poem;
        break;
    }
}

if ($selectedPoem === null) {
    echo "<div class='text-center text-red-600 mt-10 text-lg font-semibold'>Poem not found.</div>";
    exit;
}
?>
<div class="p-6 sm:p-10 md:p-16 lg:p-24">
<div class="poem-card">
  <?php if (!empty($selectedPoem['image'])): ?>
    <img src="<?= htmlspecialchars($selectedPoem['image']) ?>" alt="<?= htmlspecialchars($selectedPoem['name']) ?>" class="poem-image" style="width: 100%; height: auto; max-height: 300px; object-fit: cover;">
  <?php endif; ?>

  <div class="poem-body">
    <h1 class="poem-title"><?= htmlspecialchars($selectedPoem['name']) ?></h1>
    <p class="poem-author">By <?= htmlspecialchars($selectedPoem['author']) ?></p>
    <p class="poem-description"><?= htmlspecialchars($selectedPoem['description']) ?></p>

    <div class="poem-content">
      <?php foreach ($selectedPoem['contents'] as $content): ?>
        <?php if ($content['type'] === 'text'): ?>
          <p class="poem-text"><?= nl2br(htmlspecialchars($content['content'])) ?></p>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>

    <a href="index.php" class="poem-back">← Back to Poems</a>
  </div>
</div>
</div>
<?php require_once('footer.php'); ?>
<script src="https://cdn.tailwindcss.com"></script>