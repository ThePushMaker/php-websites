<?php
    
return [
  'database' => [
    'host' => $dotenv['DB_HOST'],
    'port' => $dotenv['DB_PORT'],
    'dbname' => $dotenv['DB_NAME'],
    'charset' => 'utf8mb4'
  ]
];