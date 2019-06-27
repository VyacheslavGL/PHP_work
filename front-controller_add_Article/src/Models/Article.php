<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 27.06.2019
 * Time: 13:40
 */

namespace Web\FrontController\Models;


class Article
{
    private $id;
    private $title;
    private $description;
    private $paths = [];

    public function __construct($id, $title, $description, $paths)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->paths = $paths;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPaths()
    {
        return $this->paths;
    }

}