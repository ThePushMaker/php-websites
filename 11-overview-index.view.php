<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
  </head>
  <body>
    <h1><?= $business['name'] ?></h1>
    
    <?php foreach($business['categories'] as $category): ?>
      <li><?= $category; ?></li>
    <?php endforeach; ?>
  </body>
</html>