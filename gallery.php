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

    <div class="headerTextWrapper">
        <div class = "blurryHeaderWrapper"></div>
        <!-- TODO: Make this pull the event's featured image -->
        <div class = "blurryHeader" style = "background-image:url('img/examples/imageOne.jpg');"></div>
        <h1 class = "headerText">Elk Appreciation Party</h1>
    </div>


    <div id = "wrap" class = "container text-center">

        <!-- Use the descriptionBox class for successful uploads (See Interface Docs item 5B). -->
        <div class = "descriptionBox">
            A gathering to celebrate the majesty of Elk everywhere. Upload your best "Elkie" for a chance to win Elk-related prizes.
        </div>
        <p class = "text-left">
            <button class = "ghost miniGhost ghostDropdown">All Event Photos</button>
            <button class = "ghost miniGhost ghostDropdown">Most Popular</button>
        </p>

        <div class = "row noInternalPadding">
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