<!-- TODO: Redirect user to login if user is not logged in.
     After logging in, user will be directed to search.php.
 -->
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <!-- TODO: Make this dynamic and write a text resize script to ensure the title isn't too wide. -->
    <title>Palm Trees & Chickens</title>
    <?php include_once("includes/meta.php");?>
    <?php include_once("includes/resources.php"); ?>
</head>
<body>

<!-- TODO: make the background image for this class dynamic. -->
<div class = "mainBackground" style = 'background-image:url("img/elements/white-40.png"), url("http://flashfotoapi.com/api/get/3406732?partner_username=facebook&partner_apikey=apikey4facebook");'></div>
<?php include_once("includes/nav.php");?>

<div id = "container">



    <div class="headerTextWrapper">
        <div class = "blurryHeaderWrapper"></div>
        <!-- TODO: Make this pull the event's featured image -->
        <div class = "blurryHeader" style = "background-image:url('http://flashfotoapi.com/api/get/3406732?partner_username=facebook&partner_apikey=apikey4facebook');"></div>
        <h1 class = "headerText">Palm Trees & Chickens</h1>
        <div class = "descriptionBox headerDescription">An event dedicated to subjecting developers to my vacation photos. Enter to win absolutely nothing.</div>
    </div>

    <!-- TODO: Make a click on .infoBoxWrapper close .infoBoxWrapper -->
    <div class = "infoBoxWrapper">
        <div class = "glassy infoBox vertical-center" style = "pointer-events:none">
            <div class = "fotamInfoHeader"></div>
            <p>To upload a photo, you must first login with your Fotam account.</p>
            <div class = "row">
                <!-- TODO: Link to login -->
                <div class = "col-xs-12 col-sm-6"><p><button class = "glassy">Login</button></p></div>
                <!-- TODO: Make this cancel button close .infoBoxWrapper -->
                <div class = "col-xs-12 col-sm-6"><button class = "warning glassy">Cancel</button></div>
            </div>
        </div>
    </div>

    <div id = "wrap" class = "container text-center">

        <!-- TODO: Turn this div into a real upload button -->
        <div class = "uploadButton descriptionBox uppercase bold horiz-center">
            <div class = "large">Upload</div>
        </div>
        <!-- TODO: Hide the previous div and show this one when the user selects a photo. -->
        <div class = "hidden uploadProgress descriptionBox uppercase boldItalic horiz-center large">
            <div class = "vertical-center">
                <div class = "gearOne spinner reverseSpinner"></div>
                <div class = "gearTwo spinner"></div>
                <div class = "gearThree spinner reverseSpinner"></div>
                <!-- TODO: Make this p meaningful -->
                <p>[ Uploading... 100% ]</p>
            </div>
        </div>
        <!-- TODO: Show this button when user selects a photo, make it cancel the upload if the user clicks it.
             Use the "warning" class for cancelled or failed uploads (See Interface Docs Item 5A).
        -->
        <div class = "warning cancelUpload horiz-center" >Cancel Upload</div>

    </div>

    <?php include_once "includes/footer.php"; ?>
</div>

<script src = "js/hammerTimeMenu.js"></script>
</body>
</html>