<?php
require_once("Database/DBConnectTest.php");

class HomeModel
{
    public $model;
    private $stmt;

    public function Get()
    {
        $this->stmt = "SELECT * FROM Home";
        $this->model = array($this->stmt);
        return $this->model;
    }

    public function Update()
    {
        return $this->model;
    }
}