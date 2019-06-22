<?php
namespace Web\FrontController\Core;


interface Repository
{

    public function getAll(); //получение всех записей
    public function getById(int $id);//получение записей по id

}