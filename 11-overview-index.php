<?php

$business = [
    'name' => 'Laracasts',
    'cost' => 15,
    'categories' => ['Laravel', 'PHP', 'Javascript'],
];

if($business['name'] > 99)
{
    echo 'Wow, that is expensive!';
}

echo "<br>";

foreach ($business['categories'] as $category)
{
    echo $category . "<br>";
}

function register($user)
{
    // create the user record in the db
    
    // log them in
    
    // send them a welcome email
    
    // redirect them to the dashboard
}

require 'index.view.php';