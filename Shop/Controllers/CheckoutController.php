<?php

class CheckoutController
{
    private $model;
    private $cartController;

    /**
     * CheckoutController constructor.
     */
    public function __construct($cartController)
    {
        $this->cartController = $cartController;
        $this->model = new CheckoutModel();
    }

    /**
     *
     */
    public function Index()
    {
        $cart = $this->cartController->GetCart();
        $cartProducts = [];

        // both key(id) and value(quantity)
        foreach ($cart as $key => $value) {
            $cartProducts[$key] = $this->model->GetById($key);
            $cartProducts[$key]['Quantity'] = $value;
        }

        require(__DIR__ . "./../Views/Checkout.php");

    }


}