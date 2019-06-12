<?php
require_once "Move.php";
require_once "Eat.php";

class Dog implements Move, Eat
{

    public function move()
    {
        var_dump("Сабака бежит");
    }

    public function eat(Eaten $animal)
    {
        var_dump("Сабака ест: " . $animal->getName());
    }

}