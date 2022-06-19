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
    <title>Furi Bikes| About</title>
    <!-- Style -->
    <link rel="stylesheet" href="assets/css/reset.css">

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
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Modernizr -->
    <script src="assets/js/modernizr.js"></script>

    <style>
        /*-------------------------------------
                4.  About
        --------------------------------------*/
        .about {padding: 50px 0 100px;}
        .about-content {padding-top: 100px;}
        /*.single-about-txt*/
        .single-about-txt h3 {
            font-size:18px;
            color: white;
            text-transform: initial;
            line-height: 1.8;
        }
        .single-about-txt p {
            font-size: 16px;
            color: White;
            padding: 35px 0 43px;
            border-bottom: 1px solid #999fb3;
        }
        .single-about-add-info {
            margin: 35px 0;

        }
        .single-about-add-info h3 {
            color: #636a82;
            font-size: 16px;
            text-transform: capitalize;
        }
        .single-about-add-info p {font-weight:  300;border:  0;padding: 0;margin-top: 3px;}
        /*.single-about-txt*/

        /*.single-about-img */
        .single-about-img{position: relative;box-shadow: 0 5px 20px rgba(14,25,80,.30);}

        .single-about-img img {
            max-width: 500px;
            height: 570px;
        }


    </style>
</head>
<body style="background: #191e23" >

<!--Header-->
<header>
  <?php require "assets/blocks/header.php" ?>
</header>
<!--Header end-->
<main>
    <!--about start -->
    <section id="about" class="about">
        <div class="section-heading text-center">
            <h2>About Us</h2>
        </div>
        <div class="container">
            <div class="about-content">
                <div class="row">
                    <div class="col-xl-6" style="max-width:60%; flex: 1;">
                        <div class="single-about-txt">
                            <h3>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                It has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged.
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <div class="row">
                                <div class="col-xl-4 ">
                                    <div class="single-about-add-info">
                                        <h3>phone</h3>
                                        <p>+373 60 000 000</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 ">
                                    <div class="single-about-add-info ">
                                        <h3>email</h3>
                                        <p class="me-lg-5">sergiu.buga404@gmail.com</p>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="single-about-add-info">
                                        <h3>website</h3>
                                        <p>www.furibikes.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-offset-1 col-sm-5">
                        <div class="single-about-img">
                            <img src="/assets/img/brand/brand.png" alt="profile_image">


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


</main>
<!-- Footer -->
<footer class="text-white mt-5">
    <?php require "assets/blocks/footer.php" ?>
</footer>
<!-- Footer end -->


<!--Boostrap JS-->
<script src="/assets/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
