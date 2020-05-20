<?php

class CartController
{
    public $itemArray = [];
    public $newItemArray;

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
     * Load items from session.
     * @param $existingItems
     */
    public function ExistingCart($existingItems)
    {
        if (!empty($existingItems)) {
            $this->itemArray = $existingItems;
        }
    }

    /**
     * Add product to session variable, redirect to product page.
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

        header("Location: product.php");
    }

    public function GetCart()
    {
        return $this->itemArray;
    }

    /**
     *
     */
    public function Remove()
    {
        if (isset($_POST['productId'])) {
            $productId = $_POST['productId'];
            unset($this->itemArray[$productId]);
        }
        $_SESSION['cartItem'] = $this->itemArray;
    }

    /**
     *
     */
    public function EmptyCart()
    {
        $this->itemArray = [];
        $_SESSION['cartItem'] = $this->itemArray;
    }


}