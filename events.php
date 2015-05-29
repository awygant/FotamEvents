<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Fotam Events</title>
    <?php include_once("includes/meta.php");?>
    <?php include_once("includes/resources.php"); ?>
</head>
<body>
<div class = "mainBackground"></div>
<?php include_once("includes/nav.php");?>

<div id = "container">
    <div class="headerTextWrapper">
        <h1 class = "headerText">Events Near Here</h1>
    </div>
    <div id = "wrap" class = "container">
        <ul class = "searchResults row">
            <!-- TODO: add onclick events to each list item. -->
            <li class = "col-lg-3 col-sm-6 col-xs-12">
                <!-- TODO: the classes searchResultBlurry and searchResultInfo need to be given dynamic backgrounds. -->
                <!-- The reason the blur structure is a little crazy is because it blurs the whole div (including edges), not just what's inside of it.
                     Needed a wrapper to keep things looking crisp. -->
                <div class = "searchResultBlurryWrapper">
                    <div class = "searchResultBlurry" style = "background-image:url('img/elements/white-40.png'), url('img/examples/imageOne.jpg');"></div>
                </div>
                <div class = "searchResultInfo" style = "background-image:url('img/examples/imageOne.jpg');"><p>Elk Appreciation Party</p></div>
            </li>
            <li class = "col-lg-3 col-sm-6 col-xs-12">
                <div class = "searchResultBlurryWrapper">
                    <div class = "searchResultBlurry" style = "background-image:url('img/elements/white-40.png'), url('img/examples/imageTwo.jpg');"></div>
                </div>
                <div class = "searchResultInfo" style = "background-image:url('img/examples/imageTwo.jpg');"><p>Super Phun Thyme</p></div>
            </li>
        </ul>
    </div>

    <?php include_once "includes/footer.php"; ?>
</div>

<script src = "js/hammerTimeMenu.js"></script>
</body>
</html>