<?php ?>
<!-- Push down content on small screens -->
<style>
    body {
        font-family: "Montserrat", "Helvetica Neue", Arial, sans-serif;
        font-size: 12px;
        padding: 8px;
    }

    * {
        box-sizing: border-box;
    }

    .row {
        display: -ms-flexbox; /* IE10 */
        display: flex;
        -ms-flex-wrap: wrap; /* IE10 */
        flex-wrap: wrap;
        margin: 0 -16px;
    }

    .col-25 {
        -ms-flex: 25%; /* IE10 */
        flex: 25%;
    }

    .col-50 {
        -ms-flex: 50%; /* IE10 */
        flex: 50%;
    }

    .col-75 {
        -ms-flex: 75%; /* IE10 */
        flex: 75%;
    }

    .col-25,
    .col-50,
    .col-75 {
        padding: 0 16px;
    }

    .container {
        background-color: #e8e7e0;
        padding: 5px 20px 15px 20px;
        border: 1px solid #e8e7e0;
        border-radius: 3px;
    }

    input[type=text] {
        width: 100%;
        margin-bottom: 20px;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 0px;
    }

    label {
        margin-bottom: 10px;
        display: block;
    }

    .icon-container {
        margin-bottom: 20px;
        padding: 7px 0;
        font-size: 24px;
    }

    .btn {
        background-color: #4CAF50;
        color: white;
        padding: 12px;
        margin: 10px 0;
        border: none;
        width: 100%;
        border-radius: 3px;
        cursor: pointer;
        font-size: 17px;
    }

    .btn:hover {
        background-color: #45a049;
    }


    hr {
        border: 1px solid lightgrey;
    }

    span.price {
        float: right;
        color: grey;
    }

    /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
    @media (max-width: 800px) {
        .row {
            flex-direction: column-reverse;
        }

        .col-25 {
            margin-bottom: 20px;
        }
    }
</style>
<div class="w3-hide-large" style="margin-top:83px"></div>
<h3 class="w3-black w3-padding-large">Checkout</h3>
<div class="row">
    <div class="col-50">
        <div class="container">
            <form method="post" action="/action_page.php">
                <div class="row">
                    <div class="col-25">
                        <h3>Shipping Address</h3>
                        <label for="firstname">First Name</label>
                        <input type="text" name="firstname" required>

                        <label for="lastname">Last Name</label>
                        <input type="text" name="firstname" required>

                        <label for="street">Streetname & No.</label>
                        <input type="text" name="street">

                        <div class="row">
                            <div class="col-50">
                                <label for="zipcode">Zip Code</label>
                                <input type="text" name="zipcode" required>
                            </div>
                            <div class="col-50">
                                <label for="city">City</label>
                                <input type="text" name="city" required>
                            </div>
                        </div>

                        <label for="country">Country</label>
                        <input type="text" name="country" required>

                        <div class="row">
                            <div class="col-50">
                                <label for="email">Email</label>
                                <input style="width: 100%;margin-bottom: 20px;padding: 12px;border: 1px solid #ccc; border-radius: 3px;"
                                       type="email" name="email" required>
                            </div>
                            <div class="col-50">
                                <label for="phone">Phone</label>
                                <input style="width: 100%; margin-bottom: 20px; padding: 12px; border: 1px solid #ccc;border-radius: 3px;"
                                       type="tel" name="phone" required>
                            </div>
                        </div>
                    </div>
                </div>
                <input style="border-radius: 0px;" type="submit" value="Complete Order" class="btn">
            </form>
        </div>
    </div>

    <div class="col-50">
        <div class="container" style="border-radius: 0px;">
            <h3><i class="fa fa-shopping-cart"> </i> Shopping Cart</h3>
            <table>
                <thead>
                <tr>
                    <th width="10%"></th>
                    <th width="40"></th>
                    <th style="text-align: left;" width="40%">Product</th>
                    <th style="text-align: left;" width="10%">Quantity</th>
                    <th style="text-align: right;" width="25%">Total Price</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $orderTotal = 0;
                foreach ($cartProducts as $product) {
                    $orderTotal = $orderTotal + ($product['Price'] * $product['Quantity']);
                    echo '
                     <tr>
                    <td>
                        <button class="w3-btn" style="box-shadow: none; font-weight: bold; color: red;">X</button>
                    </td>
                    <td><img style="width: 40px;" src="../ProductImages/' . $product['Image'] . '"></td>
                    <td><span>' . $product['Name'] . '</span></td>
                    <td style="text-align: center;"><span>' . $product['Quantity'] . '</span></td>
                    <td style="text-align: right;"><span>' . ($product['Price'] * $product['Quantity']) . ' DKK</span></td>
                </tr>
                    ';
                } ?>

                </tbody>
            </table>
            <hr>
            <p><b>Order Total:</b><span class="price" style="color:black"><b><?php echo $orderTotal ?> DKK</b></span></p>


        </div>
    </div>
</div>