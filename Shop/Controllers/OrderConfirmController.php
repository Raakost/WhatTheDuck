<?php

class OrderConfirmController
{
    /**
     * OrderConfirmController constructor.
     * Kill session.
     */
    public function __construct()
    {
        session_destroy();
    }

    /**
     *
     */
    public function Index()
    {
        require(__DIR__ . "./../Views/OrderConfirm.php");
    }
}