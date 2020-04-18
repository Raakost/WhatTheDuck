<?php

class HomeController
{
    private $newsModel;

    public function __construct()
    {
        $this->newsModel = new NewsModel();
    }

    public function Index()
    {
        include(__DIR__ . "./../Views/Home.php");
    }


}