<!--
 This page serves as the landing for both a successful upload and an incoming share link.
 -->
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <!-- TODO: Make this dynamic and write a text resize script to ensure the title isn't too wide. -->
    <title>Elk Appreciation Party</title>
    <?php include_once("includes/meta.php");?>
    <?php include_once("includes/resources.php"); ?>
</head>
<body>
<!-- TODO: make the background image for this class dynamic. On this page, it should match the img from .mainPhoto -->
<div class = "mainBackground" style = 'background-image:url("img/elements/white-40.png"), url("http://events.fotam.com/img/featured/1");'></div>
<?php include_once("includes/nav.php");?>

<div id = "container">

    <div class="headerTextWrapper">
        <div class = "blurryHeaderWrapper"></div>
        <!-- TODO: Make this pull the event's featured image -->
        <div class = "blurryHeader" style = "background-image:url('img/examples/imageOne.jpg');"></div>
        <h1 class = "headerText">Elk Appreciation Party</h1>
    </div>




    <div id = "wrap">

        <!-- TODO: If user came here from a gallery: include both fauxCards and implement swipe navigation (swipe left to right = go to previous, vice versa) -->
        <!-- TODO: Make clicking this go to previous photo from the gallery. -->
        <div class = "card fauxCard fauxCardPrevious glassy">
            <div class = "descriptionBox">
                <!-- TODO: Make this pull the previous gallery image. -->
                <img class = "blurry" src = "http://flashfotoapi.com/api/get/3401921?partner_username=facebook&partner_apikey=apikey4facebook&resize=fit&height=200"/>
            </div>

        </div>

        <div class = "card large-card glassy">
            <img src = "http://events.fotam.com/img/featured/1"/>
            <div class = "descriptionBox">
                <div>
                    <img class = "userProfilePic" src = "img/examples/archie.png" alt = "Firstname Lastname" />
                    <div class = "userInfoText">
                        <p class = "username">DIDDLEYDOODLE</p>
                        <p class= "photoMetaTimestamp">March 10, 2015 7:03 PM</p>
                    </div>
                </div>
                <div class = "socialStat socialStatFB"><span class = "bold uppercase">102</span>Likes</div>
                <div class = "socialStat socialStatShare"><span class = "bold uppercase">3</span>Shares</div>
                <div class = "socialStat socialStatTW"><span class = "bold uppercase">44</span>Tweets</div>
                <button class = "shareButton fbShareButton bold uppercase">Facebook Post</button>
                <button class = "shareButton twShareButton bold uppercase">Tweet</button>
            </div>
        </div>

        <!-- TODO: Make clicking this advance the gallery. -->
        <div class = "card fauxCard fauxCardNext glassy">
            <div class = "descriptionBox">
                <!-- TODO: Make this pull the next gallery image. -->
                <img class = "blurry" src = "http://flashfotoapi.com/api/get/3406732?partner_username=facebook&partner_apikey=apikey4facebook&resize=fit&height=200"/>
            </div>
        </div>

    </div>




    <?php include_once "includes/footer.php"; ?>
</div>
<script src = "js/hammerTimeMenu.js"></script>
</body>
</html>