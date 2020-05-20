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

    /**
     *
     */
    public function Index()
    {
        require(__DIR__ . "./../Views/DailySpecial.php");
    }
}
