<?php
// $course_session_variable_key='';
// session_start();

$pathRealtiveToAssetFolder = "../../";


require_once 'config.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $page_title; ?></title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo $pathRealtiveToAssetFolder;?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo $pathRealtiveToAssetFolder;?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo $pathRealtiveToAssetFolder;?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo $pathRealtiveToAssetFolder;?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo $pathRealtiveToAssetFolder;?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo $pathRealtiveToAssetFolder;?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo $pathRealtiveToAssetFolder;?>assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo $pathRealtiveToAssetFolder;?>assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo $pathRealtiveToAssetFolder;?>assets/css/style.css" rel="stylesheet">
  <link href="<?php echo $pathRealtiveToAssetFolder;?>assets/css/inner_page.css" rel="stylesheet">


  <!-- =======================================================
  * Template Name: Appland - v2.2.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    .databox,
    .questionbox,
    .answerbox {
      width: 95%;
      margin: 0 auto;
      padding: 0px;
      text-align: left;
      margin-bottom: 15px;

    }

    .databox pre,
    .questionbox pre,
    .answerbox pre {
      font-size: 17px;
      white-space: pre-wrap;

    }
  </style>


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="../">Eat Maths</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="../">Eat Maths Home</a></li>
          <li><a href="index.php">Put Code Home</a></li>
          <!-- <li><a href="../faq.php">F.A.Q</a></li> -->
          <li><a href="#contact">Contact Us</a></li>
          <?php



          if (isset($_SESSION[$course_session_array_key]['IsLogin'])) {
            echo '<li><a href="logout.php">Logout</a></li>';
            // echo '<li><a href="user_account_details.php" target="_blank">My Click Account</a></li>';
            echo '<li><a href="search.php" target="_blank">Search User</a></li>';
            
          } else {
            echo '<li><a href="loginform.php">Login</a></li>';
          }
          ?>

          <?php
          // if (!isset($_SESSION[$course_session_array_key]['IsLogin'])) {
          //   echo '<li><a href="#features">Register here</a></li>';
          // }

          ?>

          <!-- <li class="get-started"><a href="#features">Get Started</a></li> -->
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">