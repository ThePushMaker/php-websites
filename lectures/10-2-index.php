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

require 'index.view.php';