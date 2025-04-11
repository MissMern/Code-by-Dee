<?php
//pulling the poems by id from the app.json file
// and displaying them in a card format
// using bootstrap and tailwind css

$jsonFile = 'app.json';
$jsonData = file_get_contents($jsonFile);
$poems = json_decode($jsonData, true);
$poemId = $_GET['id'] ?? null;
$poem = null;
?> 
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
  <img src="..." class="card-img-bottom" alt="...">
</div>