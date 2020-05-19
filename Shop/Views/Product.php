<?php ?>
<!-- Push down content on small screens -->
<div class="w3-hide-large" style="margin-top:83px"></div>

<!-- Product grid -->
<h3 class="w3-black w3-padding-large">What a load of ducks..</h3>
<div class="product-wrapper">
    <?php foreach ($products as $product) {
        echo '
        <div class="box">
            <a class="img-responsive" href="Product.php?id=' . $product['ID'] . '&action=ProductDetails">
                <img src="../ProductImages/' . $product['Image'] . '" style="width:100%">
            </a>
            <form method="post" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="productId" value="' . $product['ID'] . '">
            <button type="submit" class="w3-button w3-black" style="width: 100%;">Add <i class="fa fa-shopping-cart w3-margin-right"></i></button>
            </form>
            <p><span style="float: left; font-weight:600;">' . $product['Name'] . '</span><span style="float: right; font-size: 12px;">' . $product['Price'] . ' DKK</span></p>                 
        </div>';
    } ?>
</div>


