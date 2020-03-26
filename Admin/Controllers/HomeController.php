<?php

class HomeController
{
    private $model;

    public function __construct()
    {
        $this->model = new Home();
    }

    public function Index()
    {
        include(__DIR__ . "./../Views/Home.php");
    }
}