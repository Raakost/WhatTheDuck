<?php

class NewsController
{

    private $model;

    public function __construct()
    {
        $this->model = new NewsModel();
    }

    public function Index()
    {
        include(__DIR__ . "./../Views/News.php");
    }
}