<?php
    class Cat {
        public $name;
        public $breed;
        public $age;
        public $declawed;
    }
    $cat = new Cat();
    $cat->name = "BaiGotLeh";
    $cat->age = 10;
    $cat->declawed = false;

    echo "<br>". $cat->name; 
    echo "<br>". $cat->age;
?>