<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
  </head>
  <body>
     <h1>Recomended Books</h1>
     
     <?php
      $books = [
        "Do Androids Dream of Electric Sheep?",
        "The Langoliers",
        "Hail Mary",
      ];
     ?>
     
     <ul>
        <?php foreach ($books as $book) : ?>
          <li><?= $book ?></li>
        <?php endforeach; ?>
     </ul>
  </body>
</html>