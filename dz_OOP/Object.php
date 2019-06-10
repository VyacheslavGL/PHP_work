<?php
require_once "Doctor.php";
require_once "Patient.php";



$hirurg = new Doctor();
$hirurg->setName("Max");
$hirurg->setProfession("Хирург");


$pat1 = new Patient();
$pat1->setName("Vasay");
$pat1->setDoctor($hirurg);

$pat2 = new Patient();
$pat2->setName("Petya");
$pat2->setDoctor($hirurg);
$pat2->setDate(date_create("2012-10-30 11:30"));

$pat3 = new Patient();
$pat3->setName("Alex");
$pat3->setDoctor($hirurg);
$pat3->setDate(date_create("2012-10-30 11:30"));


$hirurg->addPatient($pat1);
$hirurg->addPatient($pat2);
$hirurg->addPatient($pat3);


$arr = $hirurg->getPatient();
var_dump($arr);
// перебор массива
foreach ($arr as $one_article){
    var_dump("У врача есть пациент: " . $one_article->getName());
    var_dump('Дата записи: ' . $one_article->getDate()->format("Y-m-d H:i:s"));
}

//".$one_article->getDoctor[getProfession()]. "

echo "</br>";

//var_dump($pat1->getDate()->format("Y-m-d H:i:s"));
var_dump($pat3->getDate());