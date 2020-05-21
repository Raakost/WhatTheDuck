<?php

class CartController
{
    public $itemArray = [];

    /**
     * CartController constructor.
     */
    public function __construct()
    {
        if (isset($_SESSION["cartItem"])) {
            $this->ExistingCart($_SESSION["cartItem"]);
        }
    }

    /**
     * Get items from session.
     * @param $existingItems
     */
    public function ExistingCart($existingItems)
    {
        if (!empty($existingItems)) {
            $this->itemArray = $existingItems;
        }
    }

    /**
     * Add product to session, redirect to product page.
     */
    public function Add()
    {
        if (isset($_POST['productId'])) {
            $productId = $_POST['productId'];
            if (isset($this->itemArray[$productId])) {
                $this->itemArray[$productId] = $this->itemArray[$productId] + 1;
            } else {
                $this->itemArray[$productId] = 1;
            }
        }
        $_SESSION['cartItem'] = $this->itemArray;
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }

    /**
     * @return array
     */
    public function GetCart()
    {
        return $this->itemArray;
    }

    /**
     * Remove one item from shopping cart.
     */
    public function Remove()
    {
        if (isset($_POST['productId'])) {
            $productId = $_POST['productId'];
            unset($this->itemArray[$productId]);
        }
        $_SESSION['cartItem'] = $this->itemArray;
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }

    /**
     * Remove all items from the shopping cart.
     */
    public function EmptyCart()
    {
        $this->itemArray = [];
        $_SESSION['cartItem'] = $this->itemArray;
    }


}