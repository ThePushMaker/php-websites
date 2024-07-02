<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
  </head>
  <body>
     <h2>Associative Arrays</h2>
     <?php
      $books = [
        [
          'name' => 'Do Androids Dream of Electric Sheep?',
          'author' => 'Philip K. Dick',
          'purchaseUrl' => 'http://example.com'
        ],
        [
          'name' => 'Project Hail Mary',
          'author' => 'Andy Weir',
          'purchaseUrl' => 'http://example.com'
        ]
      ];
     ?>
     
     <ul>
      <?php foreach ($books as $book): ?>
        <li>
          <a href="<?= $book['purchaseUrl'] ?>">
            <?= $book['name'] ?>
          </a>
        </li>
      <?php endforeach; ?>
     </ul>
     
     
  </body>
</html>