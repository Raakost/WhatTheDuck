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
        $news = $this->model->GetAll();
        require(__DIR__ . "./../Views/News.php");
    }
}