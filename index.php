<?php

require 'function.php';
// require 'router.php';
require 'Database.php';

$db = new Database();

$posts = $db->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC);

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
