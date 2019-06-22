<?php
namespace Web\FrontController\Models;
use Web\FrontController\Core\Repository;
use Web\FrontController\Models\Picture;


//require_once __DIR__.'/../Core/Repository.php';
//require_once __DIR__.'/../Models/Picture.php';
//будет брать данные из базы данных
class PictureRepository implements Repository
{

    private $pictures = [];

    public function __construct()
    {
        $this->pictures = [
            new Picture(1, 'Picture 1', 'description 1', ['pic1.jpg', 'pic2.jpg']),
            new Picture(2, 'Picture 2', 'description 2', ['pic3.jpg', 'pic4.jpg']),
            new Picture(3, 'Picture 3', 'description 3', ['pic5.jpg', 'pic6.jpg']),
            new Picture(4, 'Picture 4', 'description 4', ['pic7.jpg', 'pic8.jpg']),
            new Picture(5, 'Picture 5', 'description 5', ['pic5.jpg', 'pic6.jpg']),
            new Picture(6, 'Picture 6', 'description 6', ['pic7.jpg', 'pic8.jpg']),
        ];
    }

    public function getAll()
    {
        //возвращает все картинки
        return $this->pictures;
    }

    public function getById(int $id)
    {
        foreach ($this->pictures as $picture){
//            var_dump($picture->getId());
            if ($id == $picture->getId()){
//                echo "</br>".$picture->getId($id);
                return $picture;
            }

        }
    }
}