<?php
// Models
require_once("Models/DailySpecialModel.php");
require_once("Models/NewsModel.php");
require_once("Models/ProductModel.php");
require_once("Models/CompanyInfoModel.php");
require_once("Models/CheckoutModel.php");
// Controllers
require_once("Controllers/HomeController.php");
require_once("Controllers/ProductController.php");
require_once("Controllers/CompanyInfoController.php");
require_once("Controllers/NewsController.php");
require_once("Controllers/DailySpecialController.php");
require_once("Controllers/CheckoutController.php");
require_once("Controllers/CartController.php");
// Database
require_once("../DBConnection/Constants.php");
require_once("../DBConnection/DBConnection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Duck Shop</title>
    <meta charset="UTF-8">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/w3shopcss.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Helvetica Neue">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
    .w3-sidebar a {
        font-family: "Montserrat", "Helvetica Neue", Arial, sans-serif;
    }

    h1, h2, h3, h4, h5, h6, .w3-wide {
        font-family: "Montserrat", "Helvetica Neue", Arial, sans-serif;
    }

    body {
        background-color: #f4f3ef;
    }

</style>

<body class="w3-content" style="max-width:1200px">
<?php include("./Views/PartialViews/Menu.php"); ?>

<div class="w3-main" style="margin-left:250px">
    <?php

    session_start();

    var_dump($_SESSION['cartItem']);

    $action = "";
    if (isset($_GET['action']) && !empty($_GET['action'])) {
        $action = $_GET['action'];
    }
    if (isset($_POST['action']) && !empty($_POST['action'])) {
        $action = $_POST['action'];
    }
    $cartController = new CartController();

    switch (strtolower(preg_split("/\?/", $_SERVER['REQUEST_URI']) [0])) {
        case '/projects/whattheduck/shop/cart.php' : // LOCAL HOST
            // case '/whattheduck/shop/cart.php' :
            if (!empty($action)) {
                $cartController->{$action}();
            }
            break;
        case
        '/projects/whattheduck/shop/home.php': // LOCAL HOST
            //case '/whattheduck/shop/home.php':
            $controller = new HomeController();
            $newsController = new NewsController();
            if (!empty($action)) {
                $controller = $controller->{$action}();
            } else
                $controller->Index();
            break;
        case '/projects/whattheduck/shop/product.php': // LOCAL HOST
            // case '/whattheduck/shop/product.php':
            $controller = new ProductController();
            if (!empty($action)) {
                $controller = $controller->{$action}();
            } else
                $controller->Index();
            break;
        case '/projects/whattheduck/shop/news.php': // LOCAL HOST
            //case '/whattheduck/shop/news.php':
            $controller = new NewsController();
            if (!empty($action)) {
                $controller = $controller->{$action}();
            } else
                $controller->Index();
            break;
        case '/projects/whattheduck/shop/dailyspecial.php': // LOCAL HOST
            // case '/whattheduck/shop/dailyspecial.php':
            $controller = new DailySpecialController();
            if (!empty($action)) {
                $controller = $controller->{$action}();
            } else
                $controller->Index();
            break;
        case '/projects/whattheduck/shop/checkout.php': // LOCAL HOST
            // case '/whattheduck/shop/checkout.php':
            $controller = new CheckoutController($cartController);
            if (!empty($action)) {
                $controller = $controller->{$action}();
            } else
                $controller->Index();
            break;
    } ?>
    <?php
    $controller = new CompanyInfoController();
    $controller->Index(); ?>

</div>


<script>
    // Open and close sidebar
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
    }
</script>

</body>
</html>