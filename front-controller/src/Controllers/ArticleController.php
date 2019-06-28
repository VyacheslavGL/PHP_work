<?php

namespace Web\FrontController\Controllers;


use Web\FrontController\Models\ArticleRepository;
use Web\FrontController\Controllers\RenderPage;
use Web\FrontController\Controllers;

class ArticleController extends RenderPage
{
    private $articleRepository;

    public function __construct()
    {
        $this->articleRepository = new ArticleRepository();
    }
    public function showAction()
    {
        session_start();
//        echo "Генерация страницы со Статьями";
        $content = 'article.php';
        $template = 'template.php';
        $articles = $this->articleRepository->getAll();
        $data = [
            'title' => 'Статьи',
            'articles' => $articles,
            'auth' => isset($_SESSION['name'])
        ];
        echo parent::renderPage($content, $template, $data);
    }

    public function showOneAction($id)
    {
        session_start();
//        echo "Генерация одной страницы Статьи";
        $content = 'articleOne.php';
        $template = 'template.php';
        $article = $this->articleRepository->getById($id);
        $data = [
            'title' => 'Статьи',
            'article' => $article,
            'auth' => isset($_SESSION['name'])
        ];
        echo parent::renderPage($content, $template, $data);
    }

    public function addAction(){
        session_start();
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            //если get запрос, отображаем форму
            $date = [
                'title' => 'Добавление статьи',
                'auth' => isset($_SESSION['name'])
            ];
            echo parent::renderPage('add-article.php', 'template.php', $date);

        }elseif ($_SERVER['REQUEST_METHOD'] == 'POST'){
            //если post запрос, отображаем форму
            $post = $_POST;

            $params = [
                'title' => $post['title'],
                'description' => $post['description'],
                'yearCreated' => $post['yearCreated']
            ];
            //добавлена картина или нет
            if ($this->articleRepository->save($params) === false){
                $addResult = 'Статья не была добавлена';
            }else{
                $addResult = 'Статья добавлена';
            }
            //отрисовка формы
            $date = [
                'title' => 'Добавление статьи',
                'addResult' => $addResult,
                'auth' => isset($_SESSION['name'])
            ];
            echo parent::renderPage('add-article.php', 'template.php', $date);

        }
    }

}