<?php

Class ProductController
{
    private $model;

    public function __construct()
    {
        $this->model = new Product();
    }

    public function Index()
    {
        include(__DIR__ . "./../Views/Product.php");
    }
}