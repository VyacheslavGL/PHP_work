<?php


namespace Web\FrontController\Models;
use Web\FrontController\Core\Repository;
use Web\FrontController\Core\DB;

//все что связано с базой данных пользователя
class UserRepository implements Repository
{
    private $db;
    public function __construct()
    {
        $this->db = DB::getDB();
    }


    public function getAll()
    {
        // TODO: Implement getAll() method.
    }
    public function getById(int $id)
    {
        // TODO: Implement getById() method.
    }
    public function save($params)
    {
        //добавление нового пользователя
        $sql = 'INSERT into User (email, `name`, hash, phone, role) VALUES (:email, :username, :hash, :phone, :role)';
        return $this->db->nonSelectQuery($sql, $params);
    }

    public function isAuth($post){
        $sql = 'SELECT * FROM User WHERE email=:email';
        $params = [
            'email' => $post['email']
        ];
        $result = $this->db->paramsGetOne($sql, $params);
        if (!$result) return false; //если по емайлу не будет записи то вернется фолс, значит записи в базе нет
//        $post['password'] - ввел пользователь, $result['hash'] - то что лежит в базе
        if (!password_verify($post['password'], $result['hash'])) return false;
        session_start();
        $_SESSION['name'] = $result['name'];
        $_SESSION['role'] = $result['role'];
        return true;
    }
}