<?php
namespace Web\FrontController\Core;


interface Repository
{

    public function getAll(); //получение всех записей
    public function getById(int $id);//получение записей по id
    public function save($date); //добавление новой записи в базу

}