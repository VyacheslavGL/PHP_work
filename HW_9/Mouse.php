<?php
require_once "Move.php";
require_once "Eaten.php";

class Mouse implements Move, Eaten
{
    private $name;
    public $count = 10;


    public function getCount(): int
    {
        return $this->count;
    }

   /* public function setCount(int $count)
    {
        $this->count = $count;
    }*/


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
        var_dump("Мышь бежит");
    }

    public function eaten(Eaten $animal)
    {
        var_dump("Мышь сьел " . $animal->getName());
        if ($this->count <= 0 ){
            echo "Все мыши сьедены";
            return;
        }
        $this->count--;return;
    }
}