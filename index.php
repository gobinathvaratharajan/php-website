<?php

require 'function.php';
// require 'router.php';
require 'Database.php';

$config = require('config.php');

$db = new Database($config['database']);

// :: scope resolution operator
$posts = $db->query("select * from posts")->fetchAll();

dd($posts);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}

// instance of class is refer to as an object
// class Person {
//     public $name;
//     public $age;

//     public function eating() {
//         echo $this->name . " " . "is eating myself";
//     }
// }

// $person = new Person();

// $person->name = 'John';
// $person->age = '25';

// $person->eating();
