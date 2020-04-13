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
            $image = $this->UploadImage();

            $prodId = $this->model->CreateProduct($name, $description, $price, $image);
            $this->model->UpdateProductCategories($prodId, $categories);
        }
    }

    /**
     * @return mixed
     */
    public function UploadImage()
    {var_dump($_FILES);
        if ((($_FILES["file"]["type"] == "image/jpeg")
                || ($_FILES["file"]["type"] == "image/gif")
                || ($_FILES["file"]["type"] == "image/png")
                || ($_FILES["file"]["type"] == "image/jpg"))
            && ($_FILES["file"]["size"] < 10000000)) {

            if ($_FILES["file"]["error"] > 0) {
                echo "Error: " . $_FILES["file"]["error"] . "<br>";
            } else {
                echo "Upload: " . $_FILES["file"]["name"] . "<br>";
                echo "Type: " . $_FILES["file"]["type"] . "<br>";
                echo "Size: " . ($_FILES["file"]["size"] / 1024) . "<br>";
                echo "Temp folder: " . $_FILES["file"]["tmp_name"] . "<br>";
                echo "Current directory: " . getcwd() . "<br>";
                if (file_exists("../ProductImages/" . $_FILES["file"]["name"])) {
                    echo "already exists";
                } else {
                    move_uploaded_file($_FILES["file"]["tmp_name"],
                        "../ProductImages/" . $_FILES["file"]["name"]);
                    echo "stored in ProductImages: " . $_FILES["file"]["name"];
                    return $_FILES["file"]["name"];
                }
            }
        } else {
            echo "invalid file!";
        }
    }

    public function UpdateProduct()
    {

    }

    public function DeleteProduct()
    {

    }


    
}