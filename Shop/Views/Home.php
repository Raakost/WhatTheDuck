<?php ?>
<!-- !PAGE CONTENT! -->


<!-- Push down content on small screens -->
<div class="w3-hide-large" style="margin-top:83px"></div>

<!-- Top header -->
<header class="w3-container w3-xlarge">
    <p class="w3-right">
    </p>
</header>

<!-- Daily Special -->
<div class="w3-display-container w3-container" style="padding:0">
    <img src="assets/img/ducksonrow.jpeg" style="width:100%; opacity: 80%;">
    <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
        <h1 class="w3-hide-small">DAILY SPECIAL</h1>
        <h1 class="w3-hide-large w3-hide-medium">DAILY SPECIAL OFFER</h1>
        <h1 class="w3-large w3-hide-small">Check it out... </h1>
        <p><a href="#" class="w3-button w3-black w3-padding-large w3-large">SHOP NOW</a></p>
    </div>
</div>
<div class="w3-container w3-text-grey w3-margin-top-big" id="news-section" style="padding:0;">
    <h3 class="w3-black w3-padding-large">Latest News</h3>
</div>

<!-- News grid -->
<div class="news-wrapper">
    <?php foreach ($news as $item) {
        echo '
    <div class="news-box">
        <p style="float: right; font-size: 12px; margin-top: 0; margin-bottom: 0;">' . $item['Date'] . '</p>
        <img src="../ProductImages/' . $item['Image'] . '"  style="width:100%;">
        <div class="news-div-hover">
            <a href="News.php?id='. $item['ID'] . '&action=NewsDetails" class="w3-button w3-black" style="padding-right:0;">Read more <i
                        class="fa fa-angle-right w3-margin-right"></i></a>
        </div>
        <p><b>' . $item['Title'] . '</b></p>
    </div>';
    } ?>
</div>