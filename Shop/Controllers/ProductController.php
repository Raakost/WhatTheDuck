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
            //var_dump($product);

            $categories = $this->model->GetProductCategories($id);
            // var_dump($categories);

            $uniqueProducts = array();
            foreach ($categories as $category) {
                $products = $this->model->GetProductsByCategoryId($category['CID']);
                //  var_dump($products);
                foreach ($products as $uniqueProduct) {
                    if (!isset($uniqueProducts [$uniqueProduct['Id']])) {
                        $uniqueProducts[$uniqueProduct['Id']] = $uniqueProduct;
                    }
                }
            }
            // var_dump($uniqueProducts);
            include(__DIR__ . "./../Views/ProductDetails.php");
        }
    }


}
