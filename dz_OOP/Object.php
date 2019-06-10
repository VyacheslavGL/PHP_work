<?php
require_once "Doctor.php";
require_once "Patient.php";

$hirurg = new Doctor();
$hirurg->setName("Max");
$hirurg->setProfession("Хирург");

$terapevt = new Doctor();
$terapevt->setName("Zheka");
$terapevt->setProfession("Терапевт");

$lor = new Doctor();
$lor->setName("Miha");
$lor->setProfession("Лор");

$pat1 = new Patient();
$pat1->setName("Vasay");
$pat1->setDoctor($hirurg);

$pat2 = new Patient();
$pat2->setName("Petya");
$pat2->setDoctor($hirurg);
$pat2->setDate(date_create("2012-10-30 11:30"));

$pat3 = new Patient();
$pat3->setName("Vlad");
$pat3->setDoctor($hirurg);
$pat3->setDate(date_create("2012-10-30 11:30"));

$pat4 = new Patient();
$pat4->setName("Martin");
$pat4->setDoctor($terapevt);
$pat4->setDate(date_create("2013-09-30 10:30"));

$pat5 = new Patient();
$pat5->setName("Sanya");
$pat5->setDoctor($terapevt);
$pat5->setDate(date_create("2013-12-12 16:30"));

$pat6 = new Patient();
$pat6->setName("Damir");
$pat6->setDoctor($lor);
$pat6->setDate(date_create("2014-04-17 15:15"));

$pat7 = new Patient();
$pat7->setName("Mira");
$pat7->setDoctor($lor);
$pat7->setDate(date_create("2015-08-19 14:25"));

$hirurg->addPatient($pat1);
$hirurg->addPatient($pat2);
$hirurg->addPatient($pat3);

$terapevt->addPatient($pat4);
$terapevt->addPatient($pat5);

$lor->addPatient($pat6);
$lor->addPatient($pat7);

$arr1 = $hirurg->getPatient();
$arr2 = $terapevt->getPatient();
$arr3 = $lor->getPatient();

var_dump($arr1);
var_dump($arr2);
var_dump($arr3);
// перебор массива
foreach ($arr1 as $one_article){
    var_dump("У врача есть пациент: " . $one_article->getName());
    var_dump('Дата записи: ' . $one_article->getDate()->format("Y-m-d H:i:s"));
}
//".$one_article->getDoctor[getProfession()]. "
echo "</br>";
//var_dump($pat1->getDate()->format("Y-m-d H:i:s"));
//var_dump($pat3->getDate());