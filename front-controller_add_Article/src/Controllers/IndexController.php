<?php
namespace Web\FrontController\Controllers;

use Web\FrontController\Models\PictureRepository;
use Web\FrontController\Controllers;
//require_once __DIR__.'/../Models/PictureRepository.php';
//require_once "RenderPage.php";

//для главной страницы
class IndexController extends RenderPage
{
    private $pictureRepository;

    public function __construct()
    {
        $this->pictureRepository = new PictureRepository();
    }

    public function indexAction(){
        echo "Генерация главной страницы";
        $content = 'main.php';
        $template = 'template.php';
        $pictures = $this->pictureRepository->getAll();
//        var_dump($pictures);
        $data = [
            'title' => 'Главная',
            'pictures' => $pictures
        ];
       echo parent::renderPage($content, $template, $data);
    }

}