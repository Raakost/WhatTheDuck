<?php

Class ProductController
{
    private $model;

    public function __construct()
    {
        $this->model = new Product();
    }

    /**
     * Get data to populate products table and categories select.
     * Include view to render page.
     */
    public function Index()
    {
        $products = $this->model->GetAllProducts();
        $categories = $this->model->GetAllCategories();
        include(__DIR__ . "./../Views/Product.php");
    }

    public function CreateProduct()
    {
        echo var_dump($_POST);
        if (isset($_POST['name']) && ($_POST['price']) && ($_POST['description']) && ($_POST['categories'])) {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $categories = $_POST['categories'];
            $image = "";

            $prodId = $this->model->CreateProduct($name, $description, $price, $image);
            $this->model->UpdateProductCategories($prodId, $categories);
        }
    }

    public function UpdateProduct()
    {

    }

    public function DeleteProduct()
    {

    }
}