<?php
  include 'base.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Free mobile app HTML landing page template to help you build a great online presence for your app which will convert visitors into users">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Impact Break - Hult Prize</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet">
    <link href="<?php echo BASE_URL ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo BASE_URL ?>/css/fontawesome-all.css" rel="stylesheet">
    <link href="<?php echo BASE_URL ?>/css/swiper.css" rel="stylesheet">
  	<link href="<?php echo BASE_URL ?>/css/magnific-popup.css" rel="stylesheet">
  	<link href="<?php echo BASE_URL ?>/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

	<!-- Favicon  -->
    <link rel="icon" href="<?php echo BASE_URL ?>/img/fav.jpg">
</head>
<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
	<!-- <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div> -->
    <!-- end of preloader -->


    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.php">Leno</a> -->

        <!-- Image Logo -->
        <!-- <a class="navbar-brand logo-image" href="index.php"><img src="images/logo.svg" alt="alternative"></a> -->
        <a class="navbar-brand logo-image" href="<?php echo BASE_URL ?>/index.php"><img src="<?php echo BASE_URL ?>/img/impact-logo.png" alt="Impact-Break"></a>

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll <?php echo $page=='home'? 'active': ''; ?>" href="<?php echo BASE_URL ?>/">HOME</a>
                </li>
                <!-- Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll <?php echo $page=='programs'? 'active': ''; ?>" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Programs</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo BASE_URL ?>/cancun"><span class="item-text">CANCUN</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="<?php echo BASE_URL ?>/dead-sea"><span class="item-text">DEAD SEA</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->
                <li class="nav-item">
                    <a class="nav-link page-scroll <?php echo $page=='competitions'? 'active': ''; ?>" href="<?php echo BASE_URL ?>/competitions">COMPETITIONS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll <?php echo $page=='organizers'? 'active': ''; ?>" href="<?php echo BASE_URL ?>/organizers">ORGANIZERS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll <?php echo $page=='agenda'? 'active': ''; ?>" href="<?php echo BASE_URL ?>/agenda">AGENDA</a>
                </li>
                <li class="nav-item">
                    <a class="btn-solid-rg page-scroll animated pulse infinite" href="#your-link">REGISTER NOW</a>
                </li>
            </ul>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->
