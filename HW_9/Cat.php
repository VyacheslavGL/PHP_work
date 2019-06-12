<?php
require_once "Move.php";
require_once "Eat.php";
require_once "Eaten.php";
//require_once "Mouse.php";

class Cat implements Move, Eat, Eaten
{
    private $name;


    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }

    public function move()
    {
        var_dump("Кот бежит");
    }

    public function eat(Eaten $animal)
    {
        var_dump("Кот ест: " . $animal->getName());
        if ($this->count <= 0 ){
            echo "Все ". $animal->getName() ." сьедены";
            return;
        }
        $animal->count--;
    }
    public function eaten(Eaten $animal)
    {
        var_dump("Кота сьели" , $animal);
    }
}