<?php
// Models
require_once("Database/Models/Home.php");
require_once("Database/Models/Product.php");
require_once("Database/Models/Order.php");
require_once("Database/Models/News.php");
require_once("Database/Models/Special.php");
// Controllers
require_once("Controllers/HomeController.php");
require_once("Controllers/ProductController.php");
require_once("Controllers/OrderController.php");
require_once("Controllers/NewsController.php");
require_once("Controllers/SpecialController.php");
// Database
require_once("Database/Constants.php");
require_once("Database/DBConnection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>General Info</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet"/>
    <script src="assets/js/core/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
</head>
<body class="">
<div class="wrapper ">
    <?php include("views/PartialViews/SideMenu.php"); ?>
    <div class="main-panel">
        <?php include("views/PartialViews/Navbar.php"); ?>
        <h5>front controller routing</h5>
        <?php
        /*
        function StartsWith($string, $startString)
        {
            $length = strlen($startString);
            return (substr($string, 0, $length) === $startString);
        }
        */
        $action = "";
        if (isset($_GET['action']) && !empty($_GET['action'])) {
            $action = $_GET['action'];
        }
        if (isset($_POST['action']) && !empty($_POST['action'])) {
            $action = $_POST['action'];
        }

        switch (preg_split("/\?/", $_SERVER['REQUEST_URI']) [0]) {
            case '/projects/WhatTheDuck/Admin/Home.php':
                $controller = new HomeController();
                if (!empty($action)) {
                    $controller = $controller->{$action}();
                } else
                    $controller->Index();
                break;
            case '/projects/WhatTheDuck/Admin/Product.php':
                $controller = new ProductController();
                $controller->Index();
                break;
            case '/projects/WhatTheDuck/Admin/Order.php':
                $controller = new OrderController();
                $controller->Index();
                break;
            case '/projects/WhatTheDuck/Admin/News.php':
                $controller = new NewsController();
                $controller->Index();
                break;
            case '/projects/WhatTheDuck/Admin/Special.php':
                $controller = new SpecialController();
                $controller->Index();
                break;
        } ?>
        <?php include("views/PartialViews/Footer.php"); ?>
    </div>
</div>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<script src="assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/i18n/defaults-*.min.js"></script>
</body>
</html>