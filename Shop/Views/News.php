<?php ?>
<!-- Push down content on small screens -->
<div class="w3-hide-large" style="margin-top:83px"></div>
<h3 class="w3-black w3-padding-large">News Section</h3>
<!-- News grid -->
<div class="all-news-wrapper">
    <?php foreach ($news as $item) {
        echo '
    <div>
        <img src="../ProductImages/' . $item['Image'] . ' " style="width: 100%;">
    </div>
    <div style="padding-left: 10px; background-color: #e8e7e0;">
       <h3 style="margin-top: 0;">' . $item['Title'] . '<span style="float: right; font-size:14px; padding-top: 5px; padding-right: 5px;" > ' . $item['Date'] . '</span> </h3>
       <hr style="border-top: 1px solid #000000;">
       <p>' . $item['Text'] . '</p>
    </div>
';
    } ?>
</div>