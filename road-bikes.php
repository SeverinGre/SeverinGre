<?php
  include('assets/cms/db.php');
  $upload_dir = 'assets/cms/uploads/';
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Furi Bikes | Road</title>
    <!-- Main styles file -->
    <link rel="stylesheet" href="assets/css/reset.css"/>

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

</head>
<body class="bg-light">
<!--Header-->
<header class="bg-dark">
  <?php require "assets/blocks/header.php" ?>
</header>
<!--Header end-->

<main>
    <div class="container-xl mt-5">
        <div class="container-xl p-3 my-3 bg-dark text-center text-white">
            <h1>Road Bikes</h1>
            <p>This container has a dark background color and a white text, and some extra padding and margins.</p>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            $sql = "select * from bikes where type='Road'";

            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)){
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <div class="col">
                        <div class="card ">
                            <img class="card-img-top"  alt="Card image" style="margin-top: 2rem" src="<?php echo $upload_dir.$row['image'] ?>" >
                            <div class="card-body mb-3">
                                <h3 class="card-title" style="color: #374a88 ; text-align:center;"><b> <?php echo $row['name'] ?></b></h3>
                                <h3 style="color:black; font-size: 2rem; text-align:left;">Starting at <span>$<?php echo $row['price'] ?></span> </h3>

                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</main>
<!-- Footer -->
<footer class="bg-dark text-white mt-5">
    <?php require "assets/blocks/footer.php" ?>
</footer>
<!-- Footer end -->


<!--Boostrap JS-->
<script src="/assets/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
