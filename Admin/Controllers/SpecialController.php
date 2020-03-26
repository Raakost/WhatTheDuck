<?php

class SpecialController
{
    private $model;

    public function __construct()
    {
        $this->model = new Special();
    }

    public function Index()
    {
        include(__DIR__ . "./../Views/Special.php");
    }
}