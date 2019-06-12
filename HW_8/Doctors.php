<?php
require_once "Glavvrach.php";

class Doctors extends Glavvrach
{

    private $patient = null;
    private $date = [];

    public function __construct()
    {
        $this->date = date_create();
    }


    public function addPatient()
    {
        parent::addPatient();
    }

    public function seeAllZapic()
    {
        parent::seeAllZapic();
    }

    public function zapic()
    {
        parent::zapic();
    }
}