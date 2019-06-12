<?php

require_once "Dog.php";
require_once "Cat.php";
require_once "Mouse.php";



$cat1 = new Cat();
$cat1->move();
$cat1->setName("Кот1");

$cat2 = new Cat();
$cat2->setName("Кот2");

$cat3 = new Cat();
$cat3->setName("Кот3");

$mouse = new Mouse();
$mouse->setName("Мышь");
$mouse->eaten($cat1);
$mouse->eaten($cat2);
$mouse->eaten($cat3);
$mouse->eaten($cat1);
$mouse->eaten($cat2);
$mouse->eaten($cat3);
$mouse->eaten($cat1);
$mouse->eaten($cat2);
$mouse->eaten($cat3);
/*$mouse->eaten($cat1);*/
//$mouse->eaten($cat2);



$mouse2 = new Mouse();

$mouse3 = new Mouse();

//$cat1->eat($mouse);
//$cat2->eat($mouse2);
//$cat3->eat($mouse3);

$dog = new Dog();
$dog->eat($cat1);

echo "Количество мышей: ".$mouse->getCount();
