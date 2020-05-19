<?php ?>
<style>
    .sidebar-link {
        text-decoration: none;
        text-transform: uppercase;
    }

    .sidebar-link:hover,
    .sidebar-link:active {
        text-decoration: none;
        color: #fbc658;
    }
</style>
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-light w3-collapse w3-top" style="z-index:3;width:250px; position: relative;"
     id="mySidebar">
    <div class="w3-container w3-display-container w3-padding-16">
        <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
        <a href="Home.php"><img style="width: 80px;" src="assets/img/logo.png" class="center-image" alt=""></a>
        <h3 class="w3-wide">WHAT THE DUCK?!</h3>
    </div>
    <div class="w3-padding-32 w3-large w3-text-grey" style="font-weight:bold">
        <a href="Product.php" class="w3-bar-item sidebar-link">Shop</a>
        <a href="News.php" class="w3-bar-item sidebar-link">News</a>
        <a href="Checkout.php" class="w3-bar-item sidebar-link">Checkout</a>
    </div>
    <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold; position: absolute; bottom:0;">
        <a href="#footer" class="w3-bar-item sidebar-link w3-padding">Contact</a>
        <a href="#footer" class="w3-bar-item sidebar-link w3-padding">About</a>
    </div>

</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
    <div class="w3-bar-item w3-padding-24 w3-wide">WHAT THE DUCK?!</div>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i
                class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu"
     id="myOverlay"></div>