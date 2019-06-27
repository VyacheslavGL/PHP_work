<?php
namespace Web\FrontController\Controllers;

use Web\FrontController\Models\PictureRepository;
use Web\FrontController\Controllers\RenderPage;
//require_once __DIR__.'/../Models/PictureRepository.php';
//require_once 'RenderPage.php';

class InfoController extends RenderPage
{
    private $pictureRepository;

    public function __construct()
    {
        $this->pictureRepository = new PictureRepository();
    }

    public function rulesAction()
    {
        echo "Генерация страницы с правилами покупки картин";
        $content = 'rules.php';
        $template = 'template.php';
        $data = [
            'title' => 'Правила'
        ];
        echo parent::renderPage($content, $template, $data);
    }

    public function contactsAction()
    {
        echo "Генерация страницы контактов";
        $content = 'contacts.php';
        $template = 'template.php';
        $data = [
            'title' => 'Контакты'
        ];
        echo parent::renderPage($content, $template, $data);
    }

}