<?php ?>


<!-- Push down content on small screens -->
<div class="w3-hide-large" style="margin-top:83px"></div>

<!-- Top header -->
<header class="w3-container w3-xlarge">
    <p class="w3-right"></p>
</header>

<!-- Product grid -->
<h1>What a load of ducks</h1>
<style>
    .wrapper {
        width: 100%;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        grid-gap: 10px;
        color: #444;
    }

    .box {
        color: #000000;
        font-size: 100%;
    }
</style>
<div class="wrapper">

    <?php foreach ($products as $product) {
        echo '
        <div class="box">
            <img src="../ProductImages/' . $product['Image'] . '" style="width:100%">
                <div class="btn-group">
                <a href="ProductDetails.php?id=' . $product['ID'] . '"><button class="w3-button w3-black" style="width: 50%;">Details</button></a>
                    <button class="w3-button w3-black" style="width: 50%;">Add <i class="fa fa-shopping-cart w3-margin-right"></i></button>
                </div>
                <p><span style="float: left;">' . $product['Name'] . '</span><b style="float: right">' . $product['Price'] . ' DKK</b></p>                 
        </div>  
             ';
    } ?>
</div>

