<?php
namespace Web\FrontController\Models;

use Web\FrontController\Core\DB;
use Web\FrontController\Core\Repository;
use Web\FrontController\Models\Picture;

//будет брать данные из базы данных
class PictureRepository implements Repository
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
      $sql = 'SELECT * FROM Picture';
      return $this->db->getAll($sql);

    }

    public function getById(int $id)
    {

        $params = [
            'id' => $id
        ];

        $sql = 'SELECT * FROM Picture WHERE id=:id';
        return $this->db->paramsGetOne($sql, $params);
    }

    public function save($params)
    {
        $sql = 'INSERT INTO Picture(title, description, img, yearCreated) VALUES (:title, :description, :img, :yearCreated)';
        return $this->db->nonSelectQuery($sql, $params);
    }


}