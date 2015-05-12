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
<div class = "mainBackground" style = 'background-image:url("img/elements/white-40.png"), url("img/examples/imageOne.jpg");'></div>
<?php include_once("includes/nav.php");?>

<div id = "container">

    <!--div class = "container"-->
        <div class="headerTextWrapper" style = "position:relative">
            <div class = "blurryHeaderWrapper"></div>
            <div class = "blurryHeader"></div>
            <button class = "ghost miniGhost headerButton">View Gallery</button>
            <div class = "text-center vertical-center" style = "z-index:1; position:absolute; width:100%; height:100%">
                <h1 class = "headerText">Elk Appreciation Party</h1>
            </div>


        </div>
    <!--/div-->




    <!--div class = "headerTextWrapper">
        <div class = "searchResultBlurryWrapper">
            <div class = "searchResultBlurry" style = "background-image:url('img/elements/white-40.png'), url('http://events.fotam.com/img/featured/1');"></div>
        </div>
        <div class = "searchResultInfo" style = "background-image:url('http://events.fotam.com/img/featured/1');"><h1 class = "headerText text-center vertical-center">Elk Appreciation Party</h1></div>
    </div-->





    <!--div id = "wrap" class = "container text-center">
        <div class = "row">
            <div class = "col-md-9 col-xs-12 text-right">
                <div class = "mainPhoto">

                    <img src = "img/examples/imageOne.jpg"/>
                </div>
            </div>
            <div class = "col-md-3 col-xs-12 text-left">
                <div class = "photoMeta">

                    <div>
                        <img class = "userProfilePic" src = "img/examples/imageTwo.jpg" alt = "Firstname Lastname" />
                        <div class = "userInfoText">
                            <p class = "username">DIDDLEYDOODLE</p>
                            <p class= "photoMetaTimestamp">March 10, 2015 7:03 PM</p>
                        </div>
                    </div>
                    <div class = "socialStat socialStatFB"><span class = "bold uppercase">102</span>Likes</div>
                    <div class = "socialStat socialStatShare"><span class = "bold uppercase">3</span>Shares</div>
                    <div class = "socialStat socialStatTW"><span class = "bold uppercase">44</span>Tweets</div>

                    <button class = "ghost miniGhost">Share</button>

                    <div class="arrow-up horiz-center"></div>
                    <div class = "shareButtonDropDown">
                        <button class = "shareButton fbShareButton bold uppercase">Facebook</button>
                        <button class = "shareButton twShareButton bold uppercase">Twitter</button>
                    </div>

                </div>

            </div>
        </div>
    </div-->

    <div id = "wrap" class = "container text-center">
        <div class = "row">
            <div class = "col-md-9 col-xs-12 text-right mainPhoto">
                <img src = "img/examples/imageOne.jpg"/>
            </div>
            <div class = "col-md-3 col-xs-12 text-left photoMeta">
                <div>
                <img class = "userProfilePic" src = "img/examples/imageTwo.jpg" alt = "Firstname Lastname" />
                <div class = "userInfoText">
                    <p class = "username">DIDDLEYDOODLE</p>
                    <p class= "photoMetaTimestamp">March 10, 2015 7:03 PM</p>
                </div>
            </div>
            <div class = "socialStat socialStatFB"><span class = "bold uppercase">102</span>Likes</div>
            <div class = "socialStat socialStatShare"><span class = "bold uppercase">3</span>Shares</div>
            <div class = "socialStat socialStatTW"><span class = "bold uppercase">44</span>Tweets</div>

            <button class = "ghost miniGhost">Share</button>

            <div class="arrow-up horiz-center"></div>
            <div class = "shareButtonDropDown">
                <button class = "shareButton fbShareButton bold uppercase">Facebook</button>
                <button class = "shareButton twShareButton bold uppercase">Twitter</button>
            </div>
        </div>
        </div>
    </div>



    <?php include_once "includes/footer.php"; ?>
</div>
<div class = "fixedUploadButton"></div>
<script src = "js/hammerTimeMenu.js"></script>
</body>
</html>