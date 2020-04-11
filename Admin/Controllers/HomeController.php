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
        $companyInfo = $this->model->GetCompanyInfo();
        $businessHours = $this->model->GetBusinessHours();
        include(__DIR__ . "./../Views/Home.php");
    }

    public function Save(){

    }
}