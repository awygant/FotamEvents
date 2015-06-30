<!--
 This page serves as the landing for both a successful upload and an incoming share link.
 -->
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <!-- TODO: Make this dynamic and write a text resize script to ensure the title isn't too wide. -->
    <title>Palm Trees & Chickens</title>
    <?php include_once("includes/meta.php");?>
    <?php include_once("includes/resources.php"); ?>
    <?php include_once("includes/owl.php"); ?>
    <script type = "text/javascript">
        $(document).ready(function() {

            carousel = $("#carousel");

            carousel.owlCarousel({
                singleItem: true,
                afterMove: navigate,
                pagination: false,
                slideSpeed: 300
            });

            owl = carousel.data('owlCarousel');
            owl.jumpTo(1);

            $(".goRight").click(function(){
                carousel.trigger('owl.next');
            });
            $(".goLeft").click(function(){
                carousel.trigger('owl.prev');
            });

            function navigate(){
                if(owl.currentItem == 0){
                    // Navigate to the left (refresh the viewer to feature the left item)
                }
                else if(owl.currentItem == 2){
                    // Navigate to the right
                }
            }

            $('.collapsingHeader').click(function(){
                $(this).toggleClass('heightAuto');
                $(this).children('h1').toggleClass('truncate');
            });

        })
    </script>

</head>
<body>
<!-- TODO: make the background image for this class dynamic. On this page, it should match the img from .mainPhoto -->
<div class = "mainBackground" style = 'background-image:url("img/elements/white-40.png"), url("http://flashfotoapi.com/api/get/3406732?partner_username=facebook&partner_apikey=apikey4facebook");'></div>
<?php include_once("includes/nav.php");?>


<div id = "container">

    <!--div class="headerTextWrapper">
        <div class = "blurryHeaderWrapper"></div>
        <div class = "blurryHeader" style = "background-image:url('http://flashfotoapi.com/api/get/3406732?partner_username=facebook&partner_apikey=apikey4facebook');"></div>
        <h1 class = "headerText">Palm Trees & Chickens</h1>
        <div class = "descriptionBox headerDescription">An event dedicated to subjecting developers to my vacation photos. Enter to win absolutely nothing.</div>
    </div-->

    <!-- TODO: Indicate that clicking this thing expands it -->
    <!-- TODO: Implement blurry header style -->
    <div class = "collapsingHeader">
        <h1 class = "truncate bold">Palm Trees & Chickens Chickens Chickens</h1>
        <p>An event dedicated to subjecting developers to my vacation photos. Enter to win absolutely nothing.</p>
    </div>



    <div id = "wrap">




        <div id = "carousel">
            <!-- TODO: If user came here from a gallery: include both fauxCards and implement swipe navigation (swipe left to right = go to previous, vice versa) -->
            <!-- TODO: Make clicking this go to previous photo from the gallery. -->
            <div class = "card large-card-blurry glassy">
                <!-- TODO: Make this pull the previous gallery image. -->
                <div class = "blurryWrapper">
                    <img class = "blurry" src = "http://flashfotoapi.com/api/get/3401921?partner_username=facebook&partner_apikey=apikey4facebook&resize=fit&height=200"/>
                </div>
                <div class = "descriptionBox">
                    <div class = "gearOne spinner reverseSpinner"></div>
                    <div class = "gearTwo spinner"></div>
                    <div class = "gearThree spinner reverseSpinner"></div>
                </div>
            </div>

            <div>
                <button class = "glassy photoNav goLeft"><span class = "carrot carrot-left"></span></button>
                <div class = "card large-card glassy">
                    <img src = "http://flashfotoapi.com/api/get/3400747?partner_username=facebook&partner_apikey=apikey4facebook"/>
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
                <button class = "glassy photoNav goRight"><span class = "carrot carrot-right"></span></button>
            </div>


            <!-- TODO: Make clicking this advance the gallery. -->
            <div class = "card large-card-blurry glassy">
                <!-- TODO: Make this pull the next gallery image. -->
                <div class = "blurryWrapper">
                    <img class = "blurry" src = "http://flashfotoapi.com/api/get/3406732?partner_username=facebook&partner_apikey=apikey4facebook&resize=fit&height=200"/>
                </div>
                <div class = "descriptionBox">
                    <div class = "gearOne spinner reverseSpinner"></div>
                    <div class = "gearTwo spinner"></div>
                    <div class = "gearThree spinner reverseSpinner"></div>
                </div>
            </div>
        </div>


    </div>





    <?php include_once "includes/footer.php"; ?>
</div>
<script src = "js/hammerTimeMenu.js"></script>
</body>
</html>