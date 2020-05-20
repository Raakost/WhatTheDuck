<?php

class SpecialController
{
    private $model;

    /**
     * SpecialController constructor.
     */
    public function __construct()
    {
        $this->model = new SpecialModel();
    }

    /**
     *
     */
    public function Index()
    {
        include(__DIR__ . "./../Views/Special.php");
    }
}