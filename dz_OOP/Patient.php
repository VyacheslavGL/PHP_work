<?php
require_once "Doctor.php";
class Patient
{
    private $name = null;
//    private $date = null;
    private $date = [];
    private $doctor = null;
    function __construct()
    {
        $this->date = date_create();
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getDate()
    {
//      $date = $this->date;
        return $this->date;
//        foreach ($date as $key => $value){
//            echo "ваша дата: ".$key." - ".$value."</br>";
//            echo $date->$key."</br>";
//            return $date->date."</br>";
//            echo  $value;
//        }
//        return $value;
//     return  $this->date = format("Y-m-d H:i:s");*/
    }
    public function setDate(DateTime $date)
    {
//      $arr = $hirurg->getPatient();
//      $arr = $this->date;
//        foreach ($arr as $one_article){
//            /*$one_article->getName();
//            $one_article->getDate()->format("Y-m-d H:i:s");*/
//        if ($one_article->getDate()->format("Y-m-d H:i:s") == $date){
//            echo "Это время записи занято";
//            return;
//            }
//        }*
//        array_push($this->date, $date);
        $this->date = $date;
    }
    public function getDoctor()
    {
        return $this->doctor;
    }
    public function setDoctor(Doctor $doctor)
    {
        $this->doctor = $doctor;
    }
}