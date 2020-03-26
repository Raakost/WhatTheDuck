<?php

class NewsController
{

    private $model;

    public function __construct()
    {
        $this->model = new News();
    }

    public function Index()
    {
        include(__DIR__ . "./../Views/News.php");
    }
}