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

<!--div class = "infoBoxWrapper">
    <div class = "ghost infoBox vertical-center" style = "pointer-events:none">
        <div class = "fotamInfoHeader"></div>
        <p>To upload a photo, you must first login with your Fotam account.</p>
        <div class = "row">
            <div class = "col-xs-12 col-sm-6"><p><button class = "ghost miniGhost">Login</button></p></div>
            <div class = "col-xs-12 col-sm-6"><button class = "warning ghost miniGhost">Cancel</button></div>
        </div>
    </div>
</div-->

<!-- TODO: make the background image for this class dynamic. -->
<div class = "mainBackground" style = 'background-image:url("img/elements/white-40.png"), url("img/examples/imageOne.jpg");'></div>
<?php include_once("includes/nav.php");?>

<div id = "container">


    <!--div class="headerTextWrapper">
        <h1 class = "headerText text-center vertical-center">Elk Appreciation Party</h1>
    </div-->

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