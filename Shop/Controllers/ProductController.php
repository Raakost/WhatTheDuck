<?php
include(__DIR__ . "./../Views/Home.php");

class ProductController
{
    private $model;
    private $products;

    /**
     * ProductController constructor.
     */
    public function __construct()
    {
        $this->model = new Product();
        $this->products = $this->model->GetAllProducts();

    }

    /**
     *
     */
    public function Index()
    {

        include(__DIR__ . "./../Views/Product.php");
    }


    function ObjectToArrayrray($obj)
    {
        if (is_array($this->products) || is_object($this->products)) {
            $result = array();
            foreach ($this->products as $key => $value) {
                $result[$key] = object_to_array($value);
            }
            return $result;
            var_dump($result);
        }
        return $obj;
    }
}
