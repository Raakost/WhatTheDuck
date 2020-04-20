<?php

class DailySpecialController
{
    private $model;

    /**
     * SpecialController constructor.
     */
    public function __construct()
    {

    }

    public function Index()
    {
        include(__DIR__ . "./../Views/DailySpecial.php");
    }
}
