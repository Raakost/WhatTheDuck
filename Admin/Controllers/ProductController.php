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
        $tableProd = array();
        foreach ($products as $row) {
            $id = $row["ID"];
            $name = $row["Name"];
            $description = $row["Description"];
            $price = $row["Price"];
            $cid = $row["CID"];
            $catName = $row["Category_name"];
            $image = $row["Image"];
            $catObj = new stdClass;
            $catObj->cid = $cid;
            $catObj->catName = $catName;

            if (isset($tableProd[$id])) {
                $prodObj = $tableProd[$id];
                array_push($prodObj->categories, $catObj);
            } else {
                $prodObj = new stdClass;
                $prodObj->id = $id;
                $prodObj->name = $name;
                $prodObj->description = $description;
                $prodObj->price = $price;
                $prodObj->image = $image;

                $prodCat = array();
                array_push($prodCat, $catObj);

                $prodObj->categories = $prodCat;
                $tableProd[$id] = $prodObj;
            }
        }
        include(__DIR__ . "./../Views/Product.php");
    }

    /**
     * Create new product.
     * Use the new product's ID to update its categories.
     */
    public function CreateProduct()
    {
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
     * Upload image..
     * @return mixed
     */
    public function UploadImage()
    {
        var_dump($_FILES);
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

    /**
     * Update row in table.
     */
    public function UpdateProduct()
    {

    }

    /**
     * Delete row in table, confirm on delete.
     */
    public function DeleteProduct()
    {

    }


}