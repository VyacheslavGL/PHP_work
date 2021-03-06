<?php


namespace Web\FrontController\Core;

use Web\FrontController\Core\Repository;

class MainRepository implements Repository
{

    //методы на добавление записи, получение записи по первичному ключу
    //получение всех записей
    //(общие для всех репозиториев)

    protected $db;
    private $class;

    public function __construct()
    {
        $this->db = DB::getDB();
        $this->class = $class;
    }

    public function getAll()
    {
        //$class соответствует таблице в ДБ
        //пример, Picture
        $sql = 'SELECT * FROM '.basename(str_replace('\\', '/', $this->class)); //Picture
        return $this->db->getAll($sql, $this->class);
    }

    public function getById(int $id)
    {
        $sql = 'SELECT * FROM '.basename(str_replace('\\', '/', $this->class)).' WHERE id=:id';
        return $this->db->paramsGetOne($sql, ['id'=>$id], $this->class);
    }

}