<?php

class ArticleController
{

    public function showAction()
    {
        echo "Генерация страницы Статьи";
        $content = 'article.php';
        $template = 'template.php';
        $data = [
            'title' => 'Статьи'
        ];
        echo $this->renderPage($content, $template, $data);
    }

    public function renderPage($content, $template, $data = [])
    {
        extract($data);
//        $title = 'Главная'; //ключ становится переменная а значение значением переменной
        ob_start(); //открываем буфер
        include_once __DIR__ . '/../Views/'.$template;
        $page = ob_get_contents(); //считывает в буфер
        ob_end_clean();  //закрываем буфер
        return $page;
    }
}