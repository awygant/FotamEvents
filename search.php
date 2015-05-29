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
            <h1 class = "headerText">Find an Event</h1>
        </div>
        <div id = "wrap" class = "container text-center">
            <div class = "row">
                <div class = "col-sm-5 col-xs-12">
                    <!-- TODO: This button requests user's location and redirects to events.php -->
                    <button class = "ghost large">Use My Location</button>
                </div>
                <div class = "col-sm-2 col-xs-12">
                    <div class = "separator">
                        <div class = "uppercase boldItalic">OR</div>
                    </div>
                </div>
                <div class = "col-sm-5 col-xs-12">
                    <!-- TODO: This form takes user input and redirects to events.php -->
                    <input type = "text" class = "ghost large" placeholder = "TYPE IN SEARCH"/>
                </div>
            </div>
            <p class = "uppercase boldItalic large">Search events, addresses, brands, or categories.</p>
            <p class = "uppercase boldItalic large">Hit enter to continue.</p>
        </div>

    <?php include_once "includes/footer.php"; ?>
</div>

<script src = "js/hammerTimeMenu.js"></script>
</body>
</html>