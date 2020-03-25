<?php

Class ProductController
{
    private $product;

    public function __construct()
    {
        $this->product = new DBModel();
    }

}

