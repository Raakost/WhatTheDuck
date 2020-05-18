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
        require(__DIR__ . "./../Views/Product.php");
    }

    /**
     * Get product and all category id's.
     * Recommended products are fetched from db with the same category id's and added to list.
     * lastly the product itself is removed from the list.
     */
    public function ProductDetails()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $product = $this->model->GetById($id);
            $categories = $this->model->GetProductCategories($id);
            $uniqueProducts = array();
            foreach ($categories as $category) {
                $categoryProducts = $this->model->GetProductsByCategoryId($category['CID']);
                foreach ($categoryProducts as $categoryProduct) {
                    if (!isset($uniqueProducts [$categoryProduct['Id']])) {
                        $uniqueProducts[$categoryProduct['Id']] = $categoryProduct;
                    }
                }
            }
            unset($uniqueProducts[$id]);
            include(__DIR__ . "./../Views/ProductDetails.php");
        }
    }


}
