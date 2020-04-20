<!-- Push down content on small screens -->
<div class="w3-hide-large" style="margin-top:83px"></div>
<h3 class="w3-black w3-padding-large"><?php echo strtoupper($product['Name']) ?></h3>
<div class="row">
    <div class="col-md-6">
        <img src="../ProductImages/<?php echo $product['Image'] ?>" style="width:50%">
    </div>
    <div class="col-md-6">
        <p><?php echo $product['Description'] ?></p>
        <p><?php echo $product['Price'] ?><span><b> DKK</b></span></p>
        <button class="w3-button w3-black">Add <i class="fa fa-shopping-cart w3-margin-right"></i></button>
    </div>
</div>

<!-- Product grid -->
<h3 class="w3-black w3-padding-large">YOU MIGHT ALSO LIKE...</h3>
<div class="recommended-wrapper">
    <?php foreach ($uniqueProducts as $up) {
        echo '
        <div class="box">
            <a href="Product.php?id=' . $up['Id'] . '&action=ProductDetails">
                <img src="../ProductImages/' . $up['Image'] . '" style="width:100%">
            </a>        
        </div>';
    } ?>
</div>

