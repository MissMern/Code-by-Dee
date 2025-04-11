<!--dashboard to display my poems from the app.json-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Bundle with Popper JS (for things like dropdowns, modals, etc.) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Tailwind CSS via CDN -->
<script src="https://cdn.tailwindcss.com"></script>
<link href="styles.css" rel="stylesheet">


</head>
<body>
  <?php 
  require'navbar.php';
  ?>
   
      <?php
    // Include the dashboard.php file to display the poems

  require'dashboard.php';
  ?>

   
 

<?php require'footer.php'; ?>
</body>
</html>