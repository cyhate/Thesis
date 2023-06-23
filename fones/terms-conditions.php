<?php
	include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Fones project aims to create a digital archive with recordings from Cyprus (and perhaps from Greece) which will cover a wide range of populations (different ages, geographical areas, socio-economic classes, professions, etc.). The creation of this archive will open various research directions and will allow to establish collaborations with scientists from other research institutions in Cyprus and abroad.">
    <meta name="author" content="NUP">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title><?php echo $lang['terms-conditions'] ?></title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
<?php
    include('nav.php');
?>


    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1><?php echo $lang['terms-conditions1'] ?></h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="index.php"><?php echo $lang['terms-conditions2'] ?></a><i class="fa fa-angle-double-right"></i><span><?php echo $lang['terms-conditions3'] ?></span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->


    <!-- Terms Content -->
    <div class="ex-basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
				 <div class="text-container">
                        <p><?php echo $lang['terms-conditions4'] ?></p>
						<p><?php echo $lang['terms-conditions5'] ?></p>
                    </div> <!-- end of text-container -->
				
                    <div class="text-container">
                        <h3><?php echo $lang['terms-conditions6'] ?></h3>
                        <p><?php echo $lang['terms-conditions7'] ?></p>
                    </div> <!-- end of text-container -->

                    <div class="text-container">
                        <h3><?php echo $lang['terms-conditions8'] ?></h3>
                        <p><?php echo $lang['terms-conditions9'] ?></p>
                        <p><?php echo $lang['terms-conditions10'] ?></p>
						<ul class="list-unstyled li-space-lg indent">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><?php echo $lang['terms-conditions11'] ?></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><?php echo $lang['terms-conditions12'] ?></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><?php echo $lang['terms-conditions13'] ?></div>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->

                    <div class="text-container">
                        <h3><?php echo $lang['terms-conditions14'] ?></h3>
                        <p><?php echo $lang['terms-conditions15'] ?></p>
						<p><?php echo $lang['terms-conditions16'] ?></p>
						<p><?php echo $lang['terms-conditions17'] ?></p>
						<p><?php echo $lang['terms-conditions18'] ?></p>
                    </div> <!-- end of text-container -->
                    
					<div class="text-container">
                        <h3><?php echo $lang['terms-conditions19'] ?></h3>
                        <p><?php echo $lang['terms-conditions20'] ?></p>
						<p><?php echo $lang['terms-conditions21'] ?></p>
						<p><?php echo $lang['terms-conditions22'] ?></p>
                    </div> <!-- end of text-container -->
					
					<div class="text-container">
                        <h3><?php echo $lang['terms-conditions23'] ?></h3>
                        <p><?php echo $lang['terms-conditions24'] ?></p>
                    </div> <!-- end of text-container -->
					
					<div class="text-container">
                        <h3><?php echo $lang['terms-conditions25'] ?></h3>
                        <p><?php echo $lang['terms-conditions26'] ?></p>
						<p><?php echo $lang['terms-conditions27'] ?></p>
                    </div> <!-- end of text-container -->
					
					<div class="text-container">
                        <h3><?php echo $lang['terms-conditions28'] ?></h3>
                        <p><?php echo $lang['terms-conditions29'] ?></p>
                    </div> <!-- end of text-container -->
					
                    <div class="text-container last">
                        <h3><?php echo $lang['terms-conditions30'] ?></h3>
                        <p><?php echo $lang['terms-conditions31'] ?></p>
                        <a class="btn-outline-reg" href="index.php"><?php echo $lang['terms-conditions32'] ?></a>
                    </div> <!-- end of text-container -->
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic -->
    <!-- end of terms content -->

    
    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="index.php"><?php echo $lang['terms-conditions33'] ?></a><i class="fa fa-angle-double-right"></i><span><?php echo $lang['terms-conditions34'] ?></span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->


	
    <!-- Footer -->
<?php
	include('footer.php');
?>