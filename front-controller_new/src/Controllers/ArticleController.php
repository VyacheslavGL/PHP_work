<?php
namespace Web\FrontController\Controllers;
require_once 'RenderPage.php';

class ArticleController extends RenderPage
{

    public function showAction()
    {
        echo "Генерация страницы Статьи";
        $content = 'article.php';
        $template = 'template.php';
        $data = [
            'title' => 'Статьи'
        ];
        echo parent::renderPage($content, $template, $data);
    }

}