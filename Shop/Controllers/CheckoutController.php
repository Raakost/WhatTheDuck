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
     * Get cart (cartController, the productId's), get products from DB by id.
     */
    public function Index()
    {
        $cart = $this->cartController->GetCart();
        $cartProducts = [];

        foreach ($cart as $key => $value) {
            $cartProducts[$key] = $this->model->GetById($key);
            $cartProducts[$key]['Quantity'] = $value;
        }

        require(__DIR__ . "./../Views/Checkout.php");
    }

    /**
     * Place order.
     */
    public function CreateOrder()
    {
        if (isset($_POST['firstname'])
            && ($_POST['lastname'])
            && ($_POST['street'])
            && ($_POST['zipcode'])
            && ($_POST['city'])
            && ($_POST['country'])
            && ($_POST['email'])
            && ($_POST['phone'])) {

            $firstname = trim(htmlspecialchars($_POST['firstname'], ENT_QUOTES));
            $lastname = trim(htmlspecialchars($_POST['lastname'], ENT_QUOTES));
            $street = trim(htmlspecialchars($_POST['street'], ENT_QUOTES));
            $zipcode = trim(htmlspecialchars($_POST['zipcode'], ENT_QUOTES));
            $city = trim(htmlspecialchars($_POST['city'], ENT_QUOTES));
            $country = trim(htmlspecialchars($_POST['country'], ENT_QUOTES));
            $email = trim(htmlspecialchars($_POST['email'], ENT_QUOTES));
            $phone = trim(htmlspecialchars($_POST['phone'], ENT_QUOTES));

            $this->model->PlaceOrder($zipcode, $city, $street, $country, $firstname, $lastname, $phone, $email, $this->cartController->GetCart());

            header("Location: OrderConfirm.php");
        }
    }


}