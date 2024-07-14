<?php

require 'functions.php';
// require 'router.php';

require 'Database.php';


$db = new Database();

$posts = $db->query("SELECT * FROM Posts where id = 1")->fetch(PDO::FETCH_ASSOC);

dd($posts);