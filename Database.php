<?php
// connect to Database and execute a query
class Database {

    public $connection;

    // initial running the application
    public function __construct($config, $username = "root", $password = "Test@123") {

        $dsn = 'mysql:' . http_build_query($config, '', ';'); // example.com?host=localhost

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function query($query) {
        // connect to mySQL database
        $statement = $this->connection->prepare($query);

        $statement->execute();

        // return $statement->fetch(PDO::FETCH_ASSOC);
        return $statement;
    }
}
