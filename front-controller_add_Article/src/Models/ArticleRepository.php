<?php

namespace Web\FrontController\Models;

use Web\FrontController\Core\DB;
use Web\FrontController\Core\Repository;
use Web\FrontController\Models\Article;

class ArticleRepository
{

    private $db;

    public function __construct()
    {
        $this->db = DB::getDB();

    }

    public function getAll()
    {
        //возвращает все картинки
//        return $this->pictures;
        /*  1. составить sql запрос
          2. получить все записи*/
        $sql = 'SELECT * FROM Article';
        return $this->db->getAll($sql);
    }

    public function getById(int $id)
    {

        $params = [
            'id' => $id
        ];

        $sql = 'SELECT * FROM Article WHERE id=:id';
        return $this->db->paramsGetOne($sql, $params);
    }

    public function save($params)
    {
        $sql = 'INSERT INTO Article(title, description, yearCreated) VALUES (:title, :description, :yearCreated)';
        return $this->db->nonSelectQuery($sql, $params);
    }
}