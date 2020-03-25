<?php

class HomeController
{
    private $model;

    public function __construct()
    {
        $this->model = new HomeModel();
    }

    public function Get()
    {
        $this->model->Get();
        require_once("Admin_web/Views/Home.php");
    }
}