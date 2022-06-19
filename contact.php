<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="Junior Web Developer Test">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP">
    <meta name="author" content="Sergiu">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Title Page-->
    <title>Furi Contact| Page</title>
    <!-- Style -->
    <link rel="stylesheet" href="assets/css/reset.css">

    <!-- Icons via Font Awesome -->
    <link href="/assets/fonts/css/all.css" rel="stylesheet"/>

    <!--font-family-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;subset=devanagari,latin-ext" rel="stylesheet">

    <!--boostrap css-->
    <link href="/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!--Style css-->
    <link rel="stylesheet" href="assets/css/styles.css">

</head>
<body>

<header>
    <!--Header-->
    <?php require "assets/blocks/header.php" ?>
    <!--Header end-->
</header>


<div class="wrapper">
    <div class="overlay">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-9">
                <div class="contact-us text-center">
                    <div class="container-xl p-3 my-3 bg-dark text-center">
                        <h1>Contact Us</h1>
                        <p>This container has a dark background color and a white text, and some extra padding and margins.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-5 text-center px-3">
                                <div class="d-flex flex-row align-items-center"> <span class="icons"><i class="fa fa-map-marker"></i></span>
                                    <div class="address text-left">
                                        <p>str. Stefan cel Mare, &nbsp;1/1,&nbsp;Chișinău, Republica Moldova</p>
                                    </div>
                                </div>
                                <div class="d-flex flex-row align-items-center mt-3"> <span class="icons"><i class="fa fa-phone"></i></span>
                                    <div class="address text-left">
                                        <p>+373 60001122</p>
                                    </div>
                                </div>
                                <div class="d-flex flex-row align-items-center mt-3"> <span class="icons"><i class="fa fa-envelope-o"></i></span>
                                    <div class="address text-left">
                                        <p><a href="mailto: nixor91@gmail.com">nixor91@gmail.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-center px-1">
                                <div class="forms p-4 py-5 bg-white">
                                    <h5>Send Message</h5>
                                    <form action="notify-me.php"  method="POST">
                                    <div class="mt-4 inputs" style="background-color: transparent">
                                        <input type="text" class="form-control" placeholder="Name">
                                        <input type="text" class="form-control" placeholder="Email">
                                        <textarea class="form-control" placeholder="Type your message"></textarea> </div>
                                    <div class="button mt-4 text-left"> <button class="btn btn-dark">Send</button> </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="hero" style="background-image: url('assets/img/cont_1.jpg');"></div>
       <!-- Second screen -->
<div class="overlap">

           <!-- Link "Scroll down to learn more" -->
           <a class="more" href="">Scroll down <i class="fa fa-chevron-down"></i> to learn more</a>

           <!-- Detailed info -->
           <div class="container few-words">
               <div class="row">
                   <!-- First column -->
                   <div class="col col-heading">
                       <!-- Detailed info -->
                       <h2>A few words about our awesome company!</h2>

                       <!-- Social icons -->
                       <div class="social">
                           <a class="social-icon" href="">
                               <i class="fa fa-twitter fa-lg"></i>
                           </a>
                           <a class="social-icon" href="">
                               <i class="fa fa-facebook fa-lg"></i>
                           </a>
                           <a class="social-icon" href="">
                               <i class="fa fa-google-plus fa-lg"></i>
                           </a>
                           <a class="social-icon" href="">
                               <i class="fa fa-instagram fa-lg"></i>
                           </a>
                       </div>
                       <!-- Social icons block end -->
                   </div>
                   <!-- First column end -->

                   <!-- Second column -->
                   <div class="col col-content">
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                           et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                           aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                           culpa qui officia deserunt.</p>
                   </div>
                   <!-- Second column end -->

                   <!-- Third column -->
                   <div class="col col-contacts">
                       <h3>Contact us</h3>
                       <div class="contact">
                           <span class="icon"><i class="fa fa-phone fa-fw"></i></span>
                           <span class="value">+373 60001122</span>
                       </div>
                       <div class="contact">
                           <span class="icon"><i class="fa fa-envelope-o fa-fw"></i></span>
                           <span class="value"><a href="mailto: nixor91@gmail.com">nixor91@gmail.com</a></span>
                       </div>
                       <div class="contact">
                           <span class="icon"><i class="fa fa-map-marker fa-fw"></i></span>
                           <span class="value">str. Stefan cel Mare 1/1,&nbsp;Chișinău, Republica Moldova</span>
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
                               <input name="email" placeholder="Your e-mail address" type="text"/>
                               <button>Send</button>
                               <p class="note">We promise not to spam... No seriously, we won't!</p>
                           </form>
                           <!-- Subscribe form end -->
                       </div>
                   </div>
               </div>
           </div>
           <!-- Send me an email when it's done block end	 -->

</div>
       <footer>
           <!-- Footer -->
           <?php require "assets/blocks/footer.php" ?>
           <!-- Footer end -->
       </footer>

       <!--Boostrap JS-->
       <script src="/assets/js/bootstrap.bundle.min.js" ></script>
       <!-- JavaScripts -->
       <script src="assets/js/jquery-3.3.1.min.js"></script>

       <script src="assets/js/jquery.sticky.js"></script>
       <script src="assets/js/notifyMe.js"></script>
       <script src="assets/js/main.js"></script>
       <script src="assets/js/jquery.validate.min.js"></script>

       <script type="text/javascript">
           $().ready(function () {


               // Activate notifyMe plugin on a '#notifyMe' element
               $("#notifyMe").notifyMe();


               // Add handler on 'Scroll down to learn more' link
               $().ready(function () {
                   $(".overlap .more").click(function (e) {
                       e.preventDefault();
                       $("body,html").animate({scrollTop: $(window).height()});
                   });
               });


           });
       </script>

</body>
</html>

