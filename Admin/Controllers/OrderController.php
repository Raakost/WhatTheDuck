<?php

class OrderController
{

    private $model;

    public function __construct()
    {
        $this->model = new Order();
    }

    public function Index()
    {
        include(__DIR__ . "./../Views/Order.php");
    }
}