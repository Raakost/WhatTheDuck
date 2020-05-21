<?php

class OrderController
{
    private $model;

    /**
     * OrderController constructor.
     */
    public function __construct()
    {
        $this->model = new OrderModel();
    }

    /**
     * Get all orders
     */
    public function Index()
    {
        $orders = $this->model->GetAllOrders();
        include(__DIR__ . "./../Views/Order.php");
    }

    /**
     *
     */
    public function ShipOrder()
    {
        if (isset($_POST['orderId'])) {
            $this->model->ShipOrder($_POST['orderId']);
        }
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }

}