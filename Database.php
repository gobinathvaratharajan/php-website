<?php
// connect to Database and execute a query
class Database {

    public $connection;
    public function __construct() {
        $dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";
        $username = "root";
        $password = "Test@123";

        $this->connection = new PDO($dsn, $username, $password);
    }
    public function query($query) {
        // connect to mySQL database
        $statement = $this->connection->prepare($query);

        $statement->execute();

        // return $statement->fetch(PDO::FETCH_ASSOC);
        return $statement;
    }
}
