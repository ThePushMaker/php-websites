<?php

require 'functions.php';
// require 'router.php';
require 'Database.php';

// env variables
$dotenv = parse_ini_file('.env', true);

$config = require('config.php');

$db = new Database($config['database'], $dotenv['DB_USER'], $dotenv['DB_PASSWORD']);

$posts = $db->query("SELECT * FROM Posts where id = 1")->fetch();

dd($posts);