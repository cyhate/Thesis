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
    <title><?php echo $lang['articl-details'] ?></title>
    
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
                <div class="col-md-12">
                    <h1><?php echo $lang['articl-details1'] ?></h1>
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
                        <a href="index.php"><?php echo $lang['articl-details2'] ?></a><i class="fa fa-angle-double-right"></i><span><?php echo $lang['articl-details3'] ?></span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->


    <!-- Privacy Content -->
    <div class="ex-basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="image-container-large">
                        <img class="img-fluid" src="images/article-details-large.jpg" alt="alternative">
                    </div> <!-- end of image-container-large -->
                    <div class="text-container">
                        <h3><?php echo $lang['articl-details4'] ?></h3>
                        <p><?php echo $lang['articl-details5'] ?></p>
                        <p><?php echo $lang['articl-details6'] ?> <a class="blue" href="#your-link"><?php echo $lang['articl-details7'] ?></a> <?php echo $lang['articl-details8'] ?></p>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-unstyled li-space-lg indent">
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body"><?php echo $lang['articl-details9'] ?></div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body"><?php echo $lang['articl-details10'] ?></div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body"><?php echo $lang['articl-details11'] ?></div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body"><?php echo $lang['articl-details12'] ?></div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body"><?php echo $lang['articl-details13'] ?></div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body"><?php echo $lang['articl-details14'] ?></div>
                                    </li>
                                </ul>
                            </div> <!-- end of col -->

                            <div class="col-md-6">
                                <ul class="list-unstyled li-space-lg indent">
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body"><?php echo $lang['articl-details15'] ?></div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body"><?php echo $lang['articl-details16'] ?></div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body"><?php echo $lang['articl-details17'] ?></div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body"><?php echo $lang['articl-details18'] ?></div>
                                    </li>
                                </ul>
                            </div> <!-- end of col -->
                        </div> <!-- end of row -->
                    </div> <!-- end of text-container-->
                    
                    <div class="text-container">
                        <div class="row">
                            <div class="col-md-6">
                                <h3><?php echo $lang['articl-details19'] ?></h3>
                                <p><?php echo $lang['articl-details20'] ?></p>
                                <p><?php echo $lang['articl-details21'] ?></p>
                            </div> <!-- end of col -->
                            <div class="col-md-6">
                                <div class="image-container-small">
                                    <img class="img-fluid" src="images/article-details-small.jpg" alt="alternative">
                                </div> <!-- end of image-container-small -->
                            </div> <!-- end of col -->
                        </div> <!-- end of row -->
                    </div> <!-- end of text-container -->

                    <div class="text-container dark">
                        <p class="testimonial-text"><?php echo $lang['articl-details22'] ?></p>
                    </div> <!-- end of text container -->

                    <div class="text-container last">
                        <h3><?php echo $lang['articl-details23'] ?></h3>
					    <p><?php echo $lang['articl-details24'] ?></p>
                    </div> <!-- end of text-container -->
                    <a class="btn-outline-reg" href="index.php"><?php echo $lang['articl-details25'] ?></a>
                </div> <!-- end of col-->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-2 -->
    <!-- end of privacy content -->


    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="index.php"><?php echo $lang['articl-details26'] ?></a><i class="fa fa-angle-double-right"></i><span><?php echo $lang['articl-details27'] ?></span>
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