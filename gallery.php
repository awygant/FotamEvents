<!-- TODO: Redirect user to login if user is not logged in.
     After logging in, user will be directed to search.php.
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

<!-- TODO: make the background image for this class dynamic. -->
<div class = "mainBackground" style = 'background-image:url("img/elements/white-40.png"), url("img/examples/imageOne.jpg");'></div>
<?php include_once("includes/nav.php");?>



<div id = "container">

    <!-- Gallery viewer that pops up when a photo is clicked -->
    <div class = "fullScreenOverlay">
        <!-- TODO: Make this close button close the gallery -->
        <div class = "fullScreenClose"></div>
        <!-- TODO: Make all .galleryLeft elements go back through the gallery, make all .galleryRight elements advance the gallery. -->
        <!-- TODO: Make these background elements pull the previous and next gallery elements. Use API resize call to set source image height to 180 for faster loading. -->
        <div class = "fullScreenBlurry galleryLeft" style = "background-image:url('http://flashfotoapi.com/api/get/3400695?partner_username=facebook&partner_apikey=apikey4facebook&height=180&resize=fit')"></div>
        <div class = "fullScreenBlurry galleryRight" style = "background-image:url('http://flashfotoapi.com/api/get/3400747?partner_username=facebook&partner_apikey=apikey4facebook&height=180&resize=fit')"></div>
        <div class = "fullScreenImg">
            <div class = "container">
                <div class = "row miniPadding">
                    <div class = "col-xs-6 col-md-3 text-left">
                        <div class = "glassy galleryLeft">
                            <div class = "blinkingArrow"></div>
                            <div class = "blinkingArrow"></div>
                            <div class = "blinkingArrow"></div>
                        </div>
                    </div>
                    <div class = "col-xs-6 col-md-9 text-right">
                        <div class = "glassy galleryRight">
                            <div class = "blinkingArrow"></div>
                            <div class = "blinkingArrow"></div>
                            <div class = "blinkingArrow"></div>
                        </div>
                    </div>
                </div>
                <div class = "row miniPadding">
                    <div class = "col-md-9 col-xs-12 col-md-push-3 text-left">
                        <img src = "http://flashfotoapi.com/api/get/3400740?partner_username=facebook&partner_apikey=apikey4facebook"/>
                    </div>
                    <div class = "col-md-3 col-xs-12 col-md-pull-9 text-left">
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
            </div>
        </div>
    </div>


    <!-- New header format: Implement on all pages tied to an event (everything but event finder/search results) -->
    <div class="headerTextWrapper">
        <div class = "blurryHeaderWrapper"></div>
        <!-- TODO: Make this pull the event's featured image -->
        <div class = "blurryHeader" style = "background-image:url('img/examples/imageOne.jpg');"></div>
        <h1 class = "headerText">Elk Appreciation Party</h1>
    </div>


    <div id = "wrap" class = "container text-center">
        <div class = "descriptionBox">
            A gathering to celebrate the majesty of Elk everywhere. Upload your best "Elkie" for a chance to win Elk-related prizes.
        </div>
        <ul class = "dropdownContainer">
            <!-- TODO: These buttons should reflect the current selection (default is shown) with additional selection options shown in the submenu. -->
            <li><button class = "ghost miniGhost ghostDropdown" onclick = "$(this).next('.ghostSubMenu').toggle();">All Event Photos</button>
                <ul class = "ghostSubMenu">
                    <!-- TODO: Clicking this li will refresh the page and display only the user's photos. -->
                    <li>My Photos</li>
                </ul>
            </li>
            <li><button class = "ghost miniGhost ghostDropdown" onclick = "$(this).next('.ghostSubMenu').toggle();">Most Popular</button>
                <ul class = "ghostSubMenu">
                    <!-- TODO: Clicking this li will refresh the page and display the photos chronologically. -->
                    <li>Most Recent</li>
                </ul>
            </li>
        </ul>


        <div class = "row noInternalPadding">
            <!-- TODO: Output 4 columns per row. Each column type (A, B, or C) should be randomly selected. Populate each column with the list of photos generated by the options in .dropdownContainer. -->
            <div class = "col-xs-12 col-sm-6 col-md-3 typeA">
                <img src = "http://flashfotoapi.com/api/get/3400684?partner_username=facebook&partner_apikey=apikey4facebook&resize=crop&height=235&width=235"/>
                <img src = "http://flashfotoapi.com/api/get/3400688?partner_username=facebook&partner_apikey=apikey4facebook&resize=crop&height=235&width=235"/>
                <img src = "http://flashfotoapi.com/api/get/3400692?partner_username=facebook&partner_apikey=apikey4facebook&resize=crop&height=235&width=235"/>
                <img src = "http://flashfotoapi.com/api/get/3400695?partner_username=facebook&partner_apikey=apikey4facebook&resize=crop&height=235&width=235"/>
                <img src = "http://flashfotoapi.com/api/get/3400740?partner_username=facebook&partner_apikey=apikey4facebook&resize=crop&height=235&width=235"/>
                <img src = "http://flashfotoapi.com/api/get/3400747?partner_username=facebook&partner_apikey=apikey4facebook&resize=crop&height=235&width=235"/>
            </div>
            <div class = "col-xs-12 col-sm-6 col-md-3 typeB">
                <div>
                    <img src = "http://flashfotoapi.com/api/get/3401921?partner_username=facebook&partner_apikey=apikey4facebook&resize=crop&height=235&width=235"/>
                </div>
                <div>
                    <img src = "http://flashfotoapi.com/api/get/3401037?partner_username=facebook&partner_apikey=apikey4facebook&resize=crop&height=235&width=235"/>
                    <img src = "http://flashfotoapi.com/api/get/3405329?partner_username=facebook&partner_apikey=apikey4facebook&resize=crop&height=235&width=235"/>
                </div>
            </div>
            <div class = "col-xs-12 col-sm-6 col-md-3 typeC">
                <div>
                    <img src = "http://flashfotoapi.com/api/get/3402137?partner_username=facebook&partner_apikey=apikey4facebook&resize=crop&height=235&width=235"/>
                    <img src = "http://flashfotoapi.com/api/get/3402145?partner_username=facebook&partner_apikey=apikey4facebook&resize=crop&height=235&width=235"/>
                </div>
                <div>
                    <img src = "http://flashfotoapi.com/api/get/3406732?partner_username=facebook&partner_apikey=apikey4facebook&resize=crop&height=235&width=235"/>
                </div>
            </div>
            <div class = "col-xs-12 col-sm-6 col-md-3 typeA">
                <img src = "http://flashfotoapi.com/api/get/3406766?partner_username=facebook&partner_apikey=apikey4facebook&resize=crop&height=235&width=235"/>
                <img src = "http://flashfotoapi.com/api/get/3410738?partner_username=facebook&partner_apikey=apikey4facebook&resize=crop&height=235&width=235"/>
                <img src = "http://flashfotoapi.com/api/get/3410390?partner_username=facebook&partner_apikey=apikey4facebook&resize=crop&height=235&width=235"/>
                <img src = "http://flashfotoapi.com/api/get/3410772?partner_username=facebook&partner_apikey=apikey4facebook&resize=crop&height=235&width=235"/>
                <img src = "http://flashfotoapi.com/api/get/3412249?partner_username=facebook&partner_apikey=apikey4facebook&resize=crop&height=235&width=235"/>
                <img src = "http://flashfotoapi.com/api/get/3421509?partner_username=facebook&partner_apikey=apikey4facebook&resize=crop&height=235&width=235"/>
            </div>
        </div>



    </div>

    <?php include_once "includes/footer.php"; ?>
</div>

<script src = "js/hammerTimeMenu.js"></script>
</body>
</html>