<?php

require 'functions.php';
// require 'router.php';

// env variables
$dotenv = parse_ini_file('.env', true);
$host = $dotenv['DB_HOST'] ?? '';
$port = $dotenv['DB_PORT'] ?? '';
$dbName = $dotenv['DB_NAME'] ?? '';
$user = $dotenv['DB_USER'] ?? '';
$password = $dotenv['DB_PASSWORD'] ?? '';


// connect to our MySQL database usin PDO
$dsn = "mysql:host=$host;port=$port;dbname=$dbName;user=$user;password=$password;charset=utf8mb4";
$pdo = new PDO($dsn);

$statement = $pdo->prepare("SELECT * FROM Posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($posts as $post)
{
  echo "<li>". $post['title'] ."</li>";
}