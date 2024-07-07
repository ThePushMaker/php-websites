<?php
      $books = [
        [
          'name' => 'Do Androids Dream of Electric Sheep?',
          'author' => 'Philip K. Dick',
          'releaseYear' => 1968,
          'purchaseUrl' => 'http://example.com'
        ],
        [
          'name' => 'Project Hail Mary',
          'author' => 'Andy Weir',
          'releaseYear' => 2021,
          'purchaseUrl' => 'http://example.com'
        ],
        [
          'name' => 'The Martian',
          'author' => 'Andy Weir',
          'releaseYear' => 2011,
          'purchaseUrl' => 'http://example.com'
        ]
      ];
      
      
      
    // call function
      $filteredBooks = array_filter($books, function ($book) {
          return $book['releaseYear'] >= 2000;
      });
      
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
  </head>
  <body>
     <ul>
      <?php foreach ($filteredBooks as $book): ?>
          <li>
            <a href="<?= $book['purchaseUrl'] ?>">
              <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
            </a>
          </li>
        <?php endforeach; ?>
     </ul>
  </body>
</html>