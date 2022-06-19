<!DOCTYPE html>
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
  <title>Fuji Bikes | Register</title>
    <!-- Style -->
    <link rel="stylesheet" href="assets/css/reset.css">

    <!--boostrap css-->
    <link href="/assets/css/bootstrap/bootstrap.css" rel="stylesheet">
    <!--    Css Style-->
    <link rel="stylesheet" href="assets/css/styles.css" />
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

    <style>
        #login-btn{
            text-align: center;
            background: #E42C1A;
            padding: 6px 10px;
            border-radius: 25px;
            color: #fff;
            display: block;
            width: 10%;
            margin: 0 auto;
            margin-bottom: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body style="background: #191e23">

<header><!--Header-->
<?php require "assets/blocks/header.php" ?>
<!--Header end--></header>
<main>

    <div class="container-xl p-3 my-3  bg-dark text-center text-white">
        <h1>Register Page</h1>
        <p>This container has a dark background color and a white text, and some extra padding and margins.</p>
    </div>

  <div class="container-xl text-center" style="padding-top: 10%">

      <div >
          <a id="login-btn" href="login.php">Login</a>
      </div>

    <form action="assets/validation-form/action_page_register.php" method="post" style="max-width:500px;margin:auto">

        <div class="input-container">
            <i class="fa fa-user icon"></i>
            <input class="input-field" type="text" placeholder="Username" name="username">
        </div>

        <div class="input-container">
            <i class="fa fa-envelope icon"></i>
            <input class="input-field" type="text" placeholder="Email" name="email">
        </div>

        <div class="input-container">
            <i class="fa fa-key icon"></i>
            <input class="input-field" type="password" placeholder="Password" name="psw">
        </div>

        <button type="submit" class="btn btn-primary login-register-btn">Register</button>
    </form>

</div>
</main>
<!--Footer-->
<footer>

<?php require "assets/blocks/footer.php" ?>
</footer>
<!--Footer end-->

<!--Boostrap JS-->
<script src="/assets/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
