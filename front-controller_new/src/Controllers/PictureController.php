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
        $content = 'picture.php';
        $template = 'template.php';
        $picture = $this->pictureRepository->getById($id);
        $data = [
            'title' => 'Картинка',
            'picture' => $picture
        ];

        echo parent::renderPage($content, $template, $data);
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