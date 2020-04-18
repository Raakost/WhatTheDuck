<?php

class ProductController
{
    private $model;

    /**
     * ProductController constructor.
     */
    public function __construct()
    {
        $this->model = new ProductModel();

    }

    public function Index()
    {
        $products = $this->model->GetAll();
        include(__DIR__ . "./../Views/Product.php");
    }

    public function ProductDetails()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $product = $this->model->GetById($id);
            include("../Views/ProductDetails.php");
            var_dump($product);
            echo $id;
        }
    }

}
