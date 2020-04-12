<?php

Class ProductController
{
    private $model;

    public function __construct()
    {
        $this->model = new Product();
    }

    /**
     * Store data from model, include file to render product page.
     */
    public function Index()
    {
        $products = $this->model->GetAllProducts();
        $product = $this->model->GetProduct();
        include(__DIR__ . "./../Views/Product.php");
    }

    public function CreateProduct()
    {
        if (isset($_POST['name']) && ($_POST['price']) && ($_POST['Category'])
            && ($_POST['image']) && ($_POST['description'])) {

        }
    }

    public function UpdateProduct()
    {

    }

    public function DeleteProduct()
    {

    }
}