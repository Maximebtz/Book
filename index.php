<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});


$a1 = New Author("King", "Stephen", "1947", "Portland", $book);
$b1 = New Book("Ca","1986", 1138, 20, $a1);
$b2 = New Book("Simetierre","1983", 374, 15, $a1);
$b3 = New Book("Le Fléau","1978", 823, 14, $a1);
$b4 = New Book("Shining","1977", 447, 16, $a1);


echo $a1->getInfo();
