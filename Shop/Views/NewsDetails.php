<!-- Push down content on small screens -->


<div class="w3-hide-large" style="margin-top:83px"></div>
<h3 class="w3-black w3-padding-large"><?php echo $news['Title'] ?></h3>
<div class="news-flex-box">
    <div>
        <img src="../ProductImages/<?php echo $news['Image'] ?>" style="width: 100%;">
    </div>
    <div style="position: relative; padding-left: 10px;">
        <p style="float: right;"><?php echo $news['Date'] ?></p><br><br>
        <p><?php echo $news['Text'] ?></p>
        <!--<a href="#" style="position: absolute; bottom:0;">(product link here.. later...)</a>-->
    </div>
</div>
