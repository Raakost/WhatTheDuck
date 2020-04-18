<?php
// Models
require_once("Database/Models/NewsModel.php");
require_once("Database/Models/ProductModel.php");
require_once("Database/Models/CompanyInfoModel.php");
// Controllers
require_once("Controllers/HomeController.php");
require_once("Controllers/ProductController.php");
require_once("Controllers/CompanyInfoController.php");

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
<?php include("views/PartialViews/Menu.php"); ?>
<div class="w3-main" style="margin-left:250px">
    <?php
    $action = "";
    if (isset($_GET['action']) && !empty($_GET['action'])) {
        $action = $_GET['action'];
    }
    if (isset($_POST['action']) && !empty($_POST['action'])) {
        $action = $_POST['action'];
    }

    switch (preg_split("/\?/", $_SERVER['REQUEST_URI']) [0]) {
        case '/projects/WhatTheDuck/Shop/Home.php':
            $controller = new HomeController();
            if (!empty($action)) {
                $controller = $controller->{$action}();
            } else
                $controller->Index();
            break;
        case '/projects/WhatTheDuck/Shop/Product.php':
            $controller = new ProductController();
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