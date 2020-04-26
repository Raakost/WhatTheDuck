<?php

Class ProductController
{
    private $model;

    public function __construct()
    {
        $this->model = new ProductModel();
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
            $special = $row["IsSpecial"];
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
                $prodObj->special = $special;
              //  var_dump($special);
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
        } else {
            echo "couldn't create product!";
        }
        $this->Index();
    }

    /**
     * Upload image..
     * @return mixed
     */
    public function UploadImage()
    {
        if ((($_FILES["file"]["type"] == "image/jpeg")
                || ($_FILES["file"]["type"] == "image/gif")
                || ($_FILES["file"]["type"] == "image/png")
                || ($_FILES["file"]["type"] == "image/jpg"))
            && ($_FILES["file"]["size"] < 10000000)) {

            if ($_FILES["file"]["error"] > 0) {
                echo "Error: " . $_FILES["file"]["error"] . "<br>";
            } else {
                $newFileName = trim(com_create_guid(), '{}') . '.' . preg_split("/\./", $_FILES["file"]["name"])[1];

                if (file_exists("../ProductImages/" . $newFileName)) {
                    echo "already exists";
                } else {
                    move_uploaded_file($_FILES["file"]["tmp_name"],
                        "../ProductImages/" . $newFileName);
                    return $newFileName;
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


       /* if (isset($_GET['id'])) {
            $this->model->UpdateProduct($_GET['id']);
        } else {
            echo "No id, couldn't update!";
        }
        $this->Index();*/
    }

    /**
     * Delete row in table, confirm on delete.
     */
    public function DeleteProduct()
    {
        if (isset($_GET['id'])) {
            $this->model->DeleteProduct($_GET['id']);
        } else {
            echo "No id, couldn't delete!";
        }
        $this->Index();
    }


}