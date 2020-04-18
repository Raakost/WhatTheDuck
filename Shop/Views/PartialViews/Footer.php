<?php ?>
<!-- Subscribe section -->
<div class="w3-container w3-black w3-padding-64 w3-margin-top-big"></div>

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
            <h4>LOCATION</h4><br>
            <p><?php echo $info["Street"]; ?></p>
            <p><span><?php echo $info["Zipcode"]; ?> </span><span><?php echo $info["City"]; ?></span></p>
            <p><?php echo $info["Country"]; ?></p>
            <p><i class="fa fa-fw fa-phone"></i> <?php echo $info["Phone"]; ?></p>
            <p><i class="fa fa-fw fa-envelope"></i> <?php echo $info["Email"]; ?></p>
            <i class="fa fa-facebook-official w3-hover-opacity w3-large" style="margin-top: 50px;"></i>
            <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
            <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity w3-large"></i>
        </div>
        <div class="w3-col s4">
            <h4>ABOUT</h4><br>
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
