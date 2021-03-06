<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Furi Bikes | Home</title>
    <!-- Main styles file -->
    <link rel="stylesheet" href="assets/css/reset.css"/>

    <!-- Open Sans from Google Webfonts -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'> -->

    <!--boostrap css-->
    <link href="/assets/css/bootstrap/bootstrap.css" rel="stylesheet">
    <!--    Css Style-->
    <link rel="stylesheet" href="assets/css/styles.dev.css" />
    <!-- Icons via Font Awesome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />

    <!--    Icons favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/ico/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/ico/favicon-16x16.png">
    <link rel="manifest" href="assets/img/ico/site.webmanifest">
    <link rel="mask-icon" href="assets/img/ico/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="application-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Modernizr -->
    <script src="assets/js/modernizr.js"></script>
<style>

</style>
</head>
<body>
<!-- Animated background -->
<canvas id="bg-canvas"></canvas>
<!--Header-->
<header>

    <?php require "assets/blocks/header.php"?>

</header>
<!--Header end-->

<!-- First screen -->
<div class="splash">
    <div class="centered-unit">
        <div class="container">
            <!-- Main header -->
            <h1 id="text-effect">Website is coming soon. We are working on the full version of our new site and will be back shortly!</h1>
            <!-- Sub header -->
            <p class="lead">Dealing with some really complicated stuff here.</p>

            <!-- Countdown -->
            <div class="countdown large">
                <!-- Days -->
                <div class="time days">
                    <div class="value">00</div>
                    <div class="unit">Days</div>
                </div>
                <!-- Hours -->
                <div class="time hours">
                    <div class="value">00</div>
                    <div class="unit">Hours</div>
                </div>
                <!-- Minutes -->
                <div class="time minutes">
                    <div class="value">00</div>
                    <div class="unit">Minutes</div>
                </div>
                <!-- Seconds -->
                <div class="time seconds">
                    <div class="value">00</div>
                    <div class="unit">Seconds</div>
                </div>
            </div>
            <!-- Countdown end -->
        </div>
    </div>
</div>

<!-- Second screen -->
<div class="overlap">

    <!-- Link "Scroll down to learn more" -->
    <a href="" class="more">Scroll down <i class="fa fa-chevron-down"></i> to learn more</a>

    <!-- Detailed info -->
    <div class="container few-words">
        <div class="row">
            <!-- First column -->
            <div class="col col-heading">
                <!-- Detailed info -->
                <h2>A few words about our awesome company!</h2>

                <!-- Social icons -->
                <div class="social">
                    <a href="" class="social-icon">
                        <i class="fa fa-twitter fa-lg"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fa fa-facebook fa-lg"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fa fa-google-plus fa-lg"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fa fa-instagram fa-lg"></i>
                    </a>
                </div>
                <!-- Social icons block end -->
            </div>
            <!-- First column end -->

            <!-- Second column -->
            <div class="col col-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
            </div>
            <!-- Second column end -->

            <!-- Third column -->
            <div class="col col-contacts">
                <h3>Contact us</h3>
                <div class="contact">
                    <span class="icon"><i class="fa fa-phone fa-fw"></i></span>
                    <span class="value">+373 60 000 000</span>
                </div>
                <div class="contact">
                    <span class="icon"><i class="fa fa-envelope-o fa-fw"></i></span>
                    <span class="value"><a href="mailto: info@company.com">furibikes@myself.com</a></span>
                </div>
                <div class="contact">
                    <span class="icon"><i class="fa fa-map-marker fa-fw"></i></span>
                    <span class="value">Mateevici&nbsp;101, 2009&nbsp;Chisinau, Moldova</span>
                </div>
            </div>
            <!-- Third column end -->
        </div>
    </div>
    <!-- Detailed info block end -->

    <!-- Send me an email when it's done -->
    <div class="notify-by-email">
        <div class="container">
            <div class="row">
                <div class="col col-one-third">
                    <h3>Send me an email when&nbsp;it's done!</h3>
                </div>
                <div class="col col-two-thirds">
                    <!-- Subscribe form -->
                    <form action="notify-me.php" id="notifyMe" method="POST">
                        <input type="text" name="email" placeholder="Your e-mail address"/>
                        <button>Send</button>
                        <p class="note">We promise not to spam... No seriously, we won't!</p>
                    </form>
                    <!-- Subscribe form end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Send me an email when it's done block end	 -->


    <!-- Footer -->
    <div class="footer">
        <div class="container mb-2">
            <img class="me-3" src="/assets/img/moldova-flag.png" alt="" width="32" height="32">
            &copy; <script>document.write(new Date().getFullYear())</script> Design as religion. All rights reserved.
        </div>
    </div>
    <!-- Footer end -->
</div>
<!--Boostrap JS-->
<script src="/assets/js/bootstrap.bundle.min.js" ></script>
<!-- JavaScripts -->

<script src="assets/js/jquery.js"></script>
<script src="assets/js/countdown.js"></script>
<script src="assets/js/bezierCanvas.js"></script>
<script src="assets/js/notifyMe.js"></script>

<script type="text/javascript">
    $().ready(function(){

        // Activate countdownTimer plugin on a '.countdown' element
        $(".countdown").countdownTimer({
            // Set the end date for the countdown
            endTime: new Date("December 31, 2021 11:13:00 UTC+0200")
        });


        // Activate notifyMe plugin on a '#notifyMe' element
        $("#notifyMe").notifyMe();


        // Activate bezierCanvas plugin on a #bg-canvas element
        $("#bg-canvas").bezierCanvas({
            maxStyles: 10,
            maxLines: 100,
            lineSpacing: 1,
            colorBase: {r: 100,g: 100,b: 100},
            colorVariation: {r: 150, g: 120, b: 150},
            delayVariation: 0.5,
            globalAlpha: 0.5,
            globalSpeed: 500,
        });

        // Add handler on 'Scroll down to learn more' link
        $().ready(function(){
            $(".overlap .more").click(function(e){
                e.preventDefault();
                $("body,html").animate({scrollTop: $(window).height()});
            });
        });


    });
</script>

</body>
</html>
