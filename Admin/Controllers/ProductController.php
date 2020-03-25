<?php
require("../Database/Models/ProductModel.php");

Class ProductController implements IGetSet
{

    public function Create()
    {
        // TODO: Implement Create() method.
    }

    public function Get($ID)
    {
        // TODO: Implement Get() method.
    }

    public function GetAll()
    {
        $model = new ProductModel();
        $model->GetAll();
    }

    public function Update($ID)
    {
        // TODO: Implement Update() method.
    }

    public function Delete($ID)
    {
        // TODO: Implement Delete() method.
    }
}

