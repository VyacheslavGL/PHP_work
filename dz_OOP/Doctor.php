<?php


class Doctor
{
private $name = null;
private $profession = null;
private $patient = [];
//private $date = [];

    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }

    public function getProfession()
    {
        return $this->profession;
    }

    public function setProfession($profession)
    {
        $this->profession = $profession;
    }

    public function addPatient($patient)
    {
        array_push($this->patient, $patient);
    }

    public function getPatient(): array
    {
        return $this->patient;
    }


    /*public function addDate($date)
    {
        array_push($this->date, $date);
    }

    public function getDate(): array
    {
        return $this->date;
    }*/


}