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
            $id = trim(htmlspecialchars($row["ID"], ENT_QUOTES));
            $name = trim(htmlspecialchars($row["Name"], ENT_QUOTES));
            $description = trim(htmlspecialchars($row["Description"], ENT_QUOTES));
            $price = trim(htmlspecialchars($row["Price"], ENT_QUOTES));
            $cid = trim(htmlspecialchars($row["CID"], ENT_QUOTES));
            $catName = trim(htmlspecialchars($row["Category_name"], ENT_QUOTES));
            $image = trim(htmlspecialchars($row["Image"], ENT_QUOTES));
            $special = trim(htmlspecialchars($row["IsSpecial"], ENT_QUOTES));
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
                $prodCat = array();
                array_push($prodCat, $catObj);

                $prodObj->categories = $prodCat;
                $tableProd[$id] = $prodObj;
            }
        }
        $editProduct = null;
        if (isset($_GET['editProduct'])) {
            $editProduct = $this->model->GetProduct($_GET['editProduct']);
        }
        require(__DIR__ . "./../Views/Product.php");
    }

    /**
     * Create new product.
     * Use the new product's ID to update its categories.
     */
    public function CreateProduct()
    {
        if (isset($_POST['name']) && ($_POST['price']) && ($_POST['description']) && ($_POST['categories'])) {
            $name = trim(htmlspecialchars($_POST['name'], ENT_QUOTES));
            $price = trim(htmlspecialchars($_POST['price'], ENT_QUOTES));
            $description = trim(htmlspecialchars($_POST['description'], ENT_QUOTES));
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
            && ($_FILES["file"]["size"] < 1000000)) {

            if ($_FILES["file"]["error"] > 0) {
                echo "Error: " . $_FILES["file"]["error"] . "<br>";
            } else {
                //  $newFileName = $_FILES["file"]["name"];
                $newFileName = trim(com_create_guid(), '{}') . '.' . preg_split("/\./", $_FILES["file"]["name"])[1];

                //   if (file_exists("../ProductImages/" . $newFileName)) {
                if (file_exists(__DIR__ . "./../../ProductImages/" . $newFileName)) {
                    echo "already exists";
                } else {
                    move_uploaded_file($_FILES["file"]["tmp_name"],
                        // "../ProductImages/" . $newFileName);
                        __DIR__ . "./../../ProductImages/" . $newFileName);
                    return $newFileName;
                }
            }
        } else {
            echo "invalid file!";
        }
    }

    public function UpdateProduct()
    {
        if (isset($_POST['id']) && ($_POST['name']) && ($_POST['description']) && ($_POST['price'])) {
            $id = trim(htmlspecialchars($_POST['id'], ENT_QUOTES));
            $name = trim(htmlspecialchars($_POST['name'], ENT_QUOTES));
            $description = trim(htmlspecialchars($_POST['description'], ENT_QUOTES));
            $price = trim(htmlspecialchars($_POST['price'], ENT_QUOTES));
            $image = $this->UploadImage();

            // need to update categories
            $this->model->UpdateProduct($id, $name, $description, $price, $image);
            $this->model->UpdateProductCategories($id, $_POST['categories']);
        }
        $this->Index();
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