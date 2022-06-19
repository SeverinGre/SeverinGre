<?php
  include('assets/cms/db.php');
  $upload_dir = 'assets/cms/uploads/products/';
?>
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
  <title>Fuji Gear| Page</title>
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
        #shop-button{
            text-align: center;
            background: #E42C1A;
            padding: 6px 10px;
            border-radius: 25px;
            color: #fff;
            display: block;
            width: 50%;
            margin: 0 auto;
            margin-top: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body STYLE="background: white">
<header class="bg-dark">
    <!--Header-->
    <?php require "assets/blocks/header.php" ?>
    <!--Header end-->
</header>
<main>
<div class="container-xl mt-5">
  <div class="container-xl p-3 my-3 bg-dark text-center text-white">
    <h1>Bike Gear</h1>
    <p>This container has a dark background color and a white text, and some extra padding and margins.</p>
  </div>


          <div class="row row-cols-1 row-cols-md-3 g-4">
              <?php
                $sql = "select * from products";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result)){
                  while($row = mysqli_fetch_assoc($result)){
              ?>
              <div class="col">
                <div class="card ">
                  <img class="card-img-top"  alt="Card image" style="margin-top: 2rem" src="<?php echo $upload_dir.$row['image'] ?>" >
                  <div class="card-body mb-3">
                    <h3 class="card-title" style="color: #374a88 ; text-align:center;"><b> <?php echo $row['name'] ?></b></h3>
                    <h5 style="color:black; text-align:center;">$ <?php echo $row['price'] ?> </h5>
                    <a id="shop-button" href="shop.php" >Shop</a>
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




<footer class="bg-dark text-white mt-5" >
  <!--Footer-->
  <?php require "assets/blocks/footer.php" ?>
  <!--Footer end-->
</footer>
<!--Boostrap JS-->
<script src="/assets/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
