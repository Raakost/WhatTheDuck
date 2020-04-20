<?php ?>
<!-- Subscribe section -->
<div class="w3-container w3-black w3-padding-64 w3-margin-top-big"></div>

<style>
    .footer-wrapper {
        width: 100%;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-gap: 10px;
        color: #444;
        padding: 0 16px
    }

    /* On screens that are 992px wide or less, go from four columns to two columns */
    @media screen and (max-width: 992px) {
        .footer-wrapper {
            grid-template-columns: 1fr 1fr 1fr;
            padding: 15px;
            grid-gap: 10px;
        }

        .footer-headers {
            background-color: #000000;
            color: #ffffff;
            padding: 20px;
        }
    }

    /* On screens that are 600px wide or less, make the columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
        .footer-wrapper {
            grid-template-columns: 1fr;
            padding: 15px;
            grid-gap: 10px;
        }

        .footer-headers {
            background-color: #000000;
            color: #ffffff;
            padding: 20px;
        }
    }


</style>


<!-- Footer -->
<footer class="w3-padding-16 footer-background w3-small w3-center" id="footer">
    <div class="footer-wrapper">
        <div class="box">
            <h4 class="footer-headers">CONTACT</h4>
            <p>Questions? Go ahead.</p>
            <form action="/action_page.php" target="_blank">
                <p><input class="w3-input w3-border" type="text" placeholder="Name" name="Name" required></p>
                <p><input class="w3-input w3-border" type="text" placeholder="Email" name="Email" required></p>
                <p><input class="w3-input w3-border" type="text" placeholder="Subject" name="Subject" required></p>
                <p><input class="w3-input w3-border" type="text" placeholder="Message" name="Message" required></p>
                <button type="submit" class="w3-button w3-block w3-black">Send</button>
            </form>
        </div>
        <div class="box">
            <h4 class="footer-headers">LOCATION</h4><br>
            <p><?php echo $info["Street"]; ?></p>
            <p><span><?php echo $info["Zipcode"]; ?> </span><span><?php echo $info["City"]; ?></span></p>
            <p><?php echo $info["Country"]; ?></p>
            <p><i class="fa fa-fw fa-phone"></i> <?php echo $info["Phone"]; ?></p>
            <p><i class="fa fa-fw fa-envelope"></i> <?php echo $info["Email"]; ?></p>

        </div>
        <div class="box">
            <h4 class="footer-headers">ABOUT</h4><br>
            <p class="w3-justify"><?php echo $info["Description"]; ?></p>
        </div>
    </div>
</footer>

<div class="w3-black w3-center w3-padding-32">
    <h5>OPENING HOURS</h5>
    <ul class="w3-tiny w3-center" style="list-style: none; padding-left: 0; text-align: center;">
        <div style="display: inline-block; text-align: left;">
            <?php foreach ($businessHours as $businessHour) {
                echo ' <li>
                     <span>' . $businessHour["Weekday"] . ' </span>  <span> ' . $businessHour["Open_at"] . '</span> - <span>' . $businessHour["Close_at"] . '</span>
                        </li>';
            } ?>
        </div>
    </ul>
</div>
