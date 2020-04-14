<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Duck Shop</title>
    <meta charset="UTF-8">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/css/w3shopcss.css">
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

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-light w3-collapse w3-top" style="z-index:3;width:250px;" id="mySidebar">
    <div class="w3-container w3-display-container w3-padding-16">
        <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
        <img style="width: 80px;" src="../assets/img/logo.png" class="center-image" alt="">
        <h3 class="w3-wide">WHAT THE DUCK?!</h3>
    </div>
    <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
        <a href="#" class="w3-bar-item w3-button">Duck Shop</a>
        <a href="#news-section" class="w3-bar-item w3-button">News</a>
        <a href="#" class="w3-bar-item w3-button">Daily Special</a>
    </div>
    <div class="w3-large w3-text-grey" style="font-weight:bold">
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-shopping-cart w3-margin-right"></i>Shopping Cart</a>
    </div>
    <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
        <a href="#footer" class="w3-bar-item w3-button w3-padding">Contact</a>
        <a href="#footer" class="w3-bar-item w3-button w3-padding">About</a>
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

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

    <!-- Push down content on small screens -->
    <div class="w3-hide-large" style="margin-top:83px"></div>

    <!-- Top header -->
    <header class="w3-container w3-xlarge">
        <p class="w3-right">
        </p>
    </header>

    <!-- Daily Special -->
    <div class="w3-display-container w3-container">
        <img src="../assets/img/ducksonrow.jpeg" style="width:100%; opacity: 80%;">
        <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
            <h1 class="w3-hide-small">DAILY SPECIAL OFFER</h1>
            <h1 class="w3-hide-large w3-hide-medium">DAILY SPECIAL OFFER</h1>
            <h1 class="w3-large w3-hide-small">Check it out... </h1>
            <p><a href="#" class="w3-button w3-black w3-padding-large w3-large">SHOP NOW</a></p>
        </div>
    </div>
    <div class="w3-container w3-text-grey w3-margin-top-big" id="news-section">
        <h2>LATEST NEWS</h2>
    </div>

    <!-- Product grid -->
    <div class="w3-row w3-grayscale">
        <div class="w3-col s4">
            <div class="w3-container">
                <div class="w3-display-container">
                    <img src="../assets/img/abe.jpeg" style="width:100%">
                    <div class="w3-display-middle w3-display-hover">
                        <button class="w3-button w3-black">Go to</button>
                    </div>
                    <p>News title<br><b>News description</b></p>
                </div>
            </div>
        </div>
        <div class="w3-col s4">
            <div class="w3-container">
                <div class="w3-display-container">
                    <img src="../assets/img/abe.jpeg" style="width:100%">
                    <div class="w3-display-middle w3-display-hover">
                        <button class="w3-button w3-black">Go to</button>
                    </div>
                    <p>News title<br><b>News description</b></p>
                </div>
            </div>
        </div>
        <div class="w3-col s4">
            <div class="w3-container">
                <div class="w3-display-container">
                    <img src="../assets/img/abe.jpeg" style="width:100%">
                    <div class="w3-display-middle w3-display-hover">
                        <button class="w3-button w3-black">Go to</button>
                    </div>
                    <p>News title<br><b>News description</b></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Subscribe section -->
    <div class="w3-container w3-black w3-padding-64 w3-margin-top-big">

    </div>

    <!-- Footer -->
    <footer class="w3-padding-64 footer-background w3-small w3-center" id="footer">
        <div class="w3-row-padding">
            <div class="w3-col s4">
                <h4>CONTACT</h4>
                <p>Questions? Go ahead.</p>
                <form action="/action_page.php" target="_blank">
                    <p><input class="w3-input w3-border" type="text" placeholder="Name" name="Name" required></p>
                    <p><input class="w3-input w3-border" type="text" placeholder="Email" name="Email" required></p>
                    <p><input class="w3-input w3-border" type="text" placeholder="Subject" name="Subject" required></p>
                    <p><input class="w3-input w3-border" type="text" placeholder="Message" name="Message" required></p>
                    <button type="submit" class="w3-button w3-block w3-black">Send</button>
                </form>
            </div>
            <div class="w3-col s4">
                <h4>STORE</h4>
                <p></i> Company Name</p>
                <p><i class="fa fa-fw fa-map-marker"></i> streetname/number</p>
                <p> zip/city</p>
                <p> country</p>
                <p><i class="fa fa-fw fa-phone"></i> phone</p>
                <p><i class="fa fa-fw fa-envelope"></i> ex@mail.com</p>
            </div>
            <div class="w3-col s4">
                <h4>ABOUT</h4>
                <p class="w3-justify">Company info description here Company info description here</p>
            </div>
        </div>
    </footer>

    <div class="w3-black w3-center w3-padding-32 w3-small">
        <h5 class="w3-padding-32">OPENING HOURS</h5>
        <ul class="w3-tiny">
            <li class="display-li-inline">Mon 08:00 - 17:00 </li>
            <li class="display-li-inline">Tue 08:00 - 17:00 </li>
            <li class="display-li-inline">Wed 08:00 - 17:00 </li>
            <li class="display-li-inline">Thur 08:00 - 17:00 </li>
            <li class="display-li-inline">Fri 08:00 - 17:00 </li>
            <li class="display-li-inline">Sat 08:00 - 17:00 </li>
            <li class="display-li-inline">Sun 08:00 - 17:00 </li>
        </ul>
    </div>

    <!-- End page content -->
</div>

<script>
    // Click on the "Jeans" link on page load to open the accordion for demo purposes
    document.getElementById("myBtn").click();


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

