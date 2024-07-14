<?php

class Database
{
  public $connection;
  
  public function __construct()
  {
    // env variables
    $dotenv = parse_ini_file('.env', true);

    // connect to our MySQL database usin PDO
    $dsn = "mysql:host={$dotenv['DB_HOST']};port={$dotenv['DB_PORT']};dbname={$dotenv['DB_NAME']};user={$dotenv['DB_USER']};password={$dotenv['DB_PASSWORD']};charset=utf8mb4";
    
    $this->connection = new PDO($dsn);
  }
  
  public function query($query)
  {
    $statement = $this->connection->prepare($query);
    $statement->execute();

    return $statement;
  }
}