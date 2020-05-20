<?php

class NewsController
{
    private $model;

    /**
     * NewsController constructor.
     */
    public function __construct()
    {
        $this->model = new NewsModel();
    }

    /**
     *
     */
    public function Index()
    {
        $news = $this->model->GetAll();
        require(__DIR__ . "./../Views/News.php");
    }

    /**
     *
     */
    public function NewsDetails()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $news = $this->model->GetById($id);
            require(__DIR__ . "./../Views/NewsDetails.php");
        }

    }
}