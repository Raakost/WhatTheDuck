<?php

class HomeController
{
    private $newsModel;

    /**
     * HomeController constructor.
     */
    public function __construct()
    {
        $this->newsModel = new NewsModel();
    }

    /**
     *
     */
    public function Index()
    {
        $news = $this->newsModel->GetLatestFour();
        require(__DIR__ . "./../Views/Home.php");
    }


}