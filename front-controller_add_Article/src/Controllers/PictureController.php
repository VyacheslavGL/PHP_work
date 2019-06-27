<?php
namespace Web\FrontController\Controllers;

use Web\FrontController\Models\PictureRepository;
use Web\FrontController\Controllers\RenderPage;
//require_once __DIR__.'/../Models/PictureRepository.php';
//require_once 'RenderPage.php';

class PictureController extends RenderPage
{
    private $pictureRepository;

    public function __construct()
    {
        $this->pictureRepository = new PictureRepository();
    }

    public function showAction($id)
    {
        echo "Страница с картинкой";
        $picture = $this->pictureRepository->getById($id);
        $content = 'picture.php';
        $template = 'template.php';

//        var_dump($picture);
        $data = [
            'title' => 'Картинка',
            'picture' => $picture
        ];

        echo parent::renderPage($content, $template, $data);
    }

//запрос /picture/add
    public function addAction(){
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            //если get запрос, отображаем форму
            $date = [
                'title' => 'Добавление картины'
            ];
            echo parent::renderPage('add-picture.php', 'template.php', $date);

        }elseif ($_SERVER['REQUEST_METHOD'] == 'POST'){
            //если post запрос, отображаем форму
            $post = $_POST;
            $file = $_FILES;
            $params = [
                'title' => $post['title'],
                'description' => $post['description'],
                'yearCreated' => explode("-", $post['yearCreated'])[0],
                'img' => $file['img']['name']
            ];
            //добавлена картина или нет
            if ($this->pictureRepository->save($params) === false){
                $addResult = 'Картина не была добавлена';
            }else{
                $addResult = 'Картина добавлена';
            }
            //отрисовка формы
            $date = [
                'title' => 'Добавление картины',
                'addResult' => $addResult
            ];
            echo parent::renderPage('add-picture.php', 'template.php', $date);

        }
    }


    /*public function renderPage($content, $template, $data = [])
    {
        extract($data);
//        $title = 'Главная'; //ключ становится переменная а значение значением переменной
        ob_start(); //открываем буфер
        include_once __DIR__ . '/../Views/'.$template;
        $page = ob_get_contents(); //считывает в буфер
        ob_end_clean();  //закрываем буфер
        return $page;
    }*/

}