<?php
	//We always need to start the session so that we can access any existing Session Data. We might land here as already loggedin
	include('config.php');
	require_once ('authentication.php');
	include_once('includes/functions.php'); 
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
    <title><?php echo $lang['title'] ?> &#10022;</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"> -->
	
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
	
	<style>
table {
  
  border-spacing: 0;
  width: 100%;
  
}

th, td {
  text-align: center;  <!-- left  -->
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>

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
    include('navadmin.php');
?>

    <!-- Header -->
    <header id="header" class="header">
	<div>
	<img src="images/Voices-01.png" alt="nup" style="width:100%">
	</div>
        
    </header> <!-- end of header -->
    <!-- end of header -->
	
	
<!-- ADMIN PANEL -->
					<div style="background-color:#dbd7d2;">
					<br>
					<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
					<div class="container">
					<div class="collapse navbar-collapse" id="navbarsExampleDefault">
					<ul class="navbar-nav ml-auto">
					 <!-- Dropdown Menu -->          
                    <li class="nav-item dropdown">
                        <a style="color:#5f4dee; margin-right:20px; font-size:20px;" class="nav-link dropdown-toggle page-scroll" href="##" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false"><em><b>User Management Functionalities</b></em></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="<?php echo getBaseUrl();?>ADMIN/add/adduser.php"><span class="item-text">&#129146;  Add User / Admin</span></a>
							<div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="<?php echo getBaseUrl();?>ADMIN/edit/edituser.php"><span class="item-text">&#129146;  Edit User / Admin</span></a>
							<div class="dropdown-items-divide-hr"></div>
							<a class="dropdown-item" href="<?php echo getBaseUrl();?>ADMIN/delete/deleteuser.php"><span class="item-text">&#129146;  Delete User / Admin</span></a>
							<div class="dropdown-items-divide-hr"></div>
							<a class="dropdown-item" href="<?php echo getBaseUrl();?>ADMIN/view/viewusers.php"><span class="item-text">&#129146;  View Users / Admins</span></a>
                        </div>
                    </li>
					<li class="nav-item dropdown">
                        <a style="color:#5f4dee; margin-right:20px; font-size:20px" class="nav-link dropdown-toggle page-scroll" href="##" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false"><em><b>Content Management</b></em></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="<?php echo getBaseUrl();?>ADMIN/AddContent/addcontent.php"><span class="item-text">&#129146;  Add Content</span></a>
							<div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="<?php echo getBaseUrl();?>ADMIN/EditContent/editcontent.php"><span class="item-text">&#129146;  Edit Content</span></a>
							<div class="dropdown-items-divide-hr"></div>
							<a class="dropdown-item" href="<?php echo getBaseUrl();?>ADMIN/DeleteContent/deletecontent.php"><span class="item-text">&#129146;  Delete Content</span></a>
                        </div>
                    </li>
					<li class="nav-item"><a style="color:#5f4dee; margin-right:20px; font-size:20px" class="nav-link active" aria-current="page" href="<?php echo getBaseUrl();?>ADMIN/adminsettings/adminaccount_settings.php"><em><b>Settings</b></em></a></li>
					<li class="nav-item"><a style="color:#5f4dee; margin-right:20px; font-size:20px" class="nav-link active" aria-current="page" href="recordadmin.php"><em><b>Speak/Upload as Admin</b></em></a></li>
					<li class="nav-item"><a style="color:#5f4dee; margin-right:200px; font-size:20px" class="nav-link active" aria-current="page" href="index.php" target="_blank"><em><b>Interface User</b></em></a></li>
					</ul>
					</div>
					</div>
					</nav><br><br>
					</div>
                    <!-- end of dropdown menu -->
<br><br><br>
 
    <!-- <div id="features" class="tabs"> -->
  
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h1>Welcome to admin panel</h1>
                <p class="lead">Browse the collection of records and management them online.</p>
            </div>
            <div class="col-md-4">
                <form  method="get">
                    <div class="form-group">
                        <label for="search">Search Records</label>
                        <div class="input-group">
                            <input type="search" class="form-control" id="search" name="search" placeholder="Type here...">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit" name="submit" id="submit" value="read">Search</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <hr>
	</div>
  
	<!-- VIEW RECORS -->
	<center>
	

<?php 
include('db.php');

	
$sql ="SELECT * from records";
if (isset($_GET["search"]) && !empty($_GET["search"])) {
    $search = $_GET["search"];
    $sql .= " WHERE id LIKE '$search%' OR userid LIKE '$search%' OR full_name LIKE '$search%' OR email_address LIKE '$search%' OR place_of_birth LIKE '$search%' OR birth_date LIKE '$search%' OR gender LIKE '$search%' OR country LIKE '$search%' OR city LIKE '$search%' OR language LIKE '$search%' OR refugee LIKE '$search%' ";
}

echo "<table class='table' style='color:#5f4dee; width:50%;'>";
echo "<thead class='table-dark'>"; //width:100%;
echo "<tr>";
echo "<th>Record ID:</th>";
echo "<th>Record URL:</th>";
echo "<th>User ID:</th>";
echo "<th>User FullName:</th>";
echo "<th>User Email:</th>";
echo "<th>User Birth Place:</th>";
echo "<th>User Birth Date:</th>";
echo "<th>User Gender:</th>";
echo "<th>User Country:</th>";
echo "<th>User City:</th>";
echo "<th>User Language:</th>";
echo "<th>User Refugee:</th>";
echo "</tr>";
echo "</thead>";

if ($result=mysqli_query($con,$sql)) {
 while ($row=mysqli_fetch_row($result))
 {
 echo "<tr><td>",$row[0], "</td><td>",'<audio src="uploads/'.$row[1].'"controls></audio>', "</td><td>",$row[2], "</td><td>",$row[3], "</td><td>",$row[4], "</td><td>",$row[5], "</td><td>",$row[6], "</td><td>",$row[7], "</td><td>",$row[8], "</td><td>",$row[9], "</td><td>",$row[10], "</td><td>",$row[11], "</td></tr>";
 }
 echo "</table>";
 
 mysqli_free_result($result);
} 
 
?>
</center>
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of CONTRIBUTE -->
	<!-- END VIEW RECORS -->
	
	<br><br><br>
	<hr>
    <!-- Partners -->
    <div class="slider-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Image Slider -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                        <img class="img-fluid" src="images/customer-logo-1.png" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                        <img class="img-fluid" src="images/customer-logo-2.png" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                        <img class="img-fluid" src="images/customer-logo-3.png" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                        <img class="img-fluid" src="images/customer-logo-4.png" alt="alternative">
                                </div>
                            <!--<div class="swiper-slide">
                                        <img class="img-fluid" src="images/customer-logo-5.png" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                        <img class="img-fluid" src="images/customer-logo-6.png" alt="alternative">
                                </div> -->
                            </div> <!-- end of swiper-wrapper -->
                        </div> <!-- end of swiper container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of image slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of partners -->


<!-- CONTRIBUTE -->
    <div id="pricing" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="above-heading"><?php echo $lang['contribute1'] ?></div>
                    <h2 class="h2-heading"><?php echo $lang['contribute2'] ?></h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card-->
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title"><?php echo $lang['contribute3'] ?></div>
                            <div class="price"><span class="value"><?php echo $lang['contribute4'] ?></span></div>
                            <div class="frequency"><a href="terms-conditions.php"><?php echo $lang['contribute5'] ?></a></div>
                            <div class="divider"></div>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body"><?php echo $lang['contribute6'] ?></div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body"><?php echo $lang['contribute7'] ?></div>
                                </li>
                            </ul>
                            <div class="button-wrapper"><br><br>
                                <a class="btn-solid-reg page-scroll" href="recordadmin.php"><?php echo $lang['contribute8'] ?></a>
                            </div>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of CONTRIBUTE -->


    <!-- Description -->
    <div class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="above-heading"><?php echo $lang['description1'] ?></div>
                    <h2 class="h2-heading"><?php echo $lang['description2'] ?></h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/description-1.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $lang['description3'] ?></h4>
                            <p><?php echo $lang['description4'] ?></p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/description-2.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $lang['description5'] ?></h4>
                            <p><?php echo $lang['description6'] ?></p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/description-3.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $lang['description7'] ?></h4>
                            <p><?php echo $lang['description8'] ?></p>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of description -->


    <!-- Features -->
    <div id="features" class="tabs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="above-heading"><?php echo $lang['features1'] ?></div>
                    <h2 class="h2-heading"><?php echo $lang['features2'] ?></h2>
                    <p class="p-heading"><?php echo $lang['features3'] ?></p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Tabs Links -->
                    <ul class="nav nav-tabs" id="argoTabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="nav-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true"><i class="fas fa-list"></i><?php echo $lang['features4'] ?></a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" id="nav-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false"><i class="fas fa-envelope-open-text"></i>Campaigns</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" id="nav-tab-3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false"><i class="fas fa-chart-bar"></i><?php echo $lang['features5'] ?></a>
                        </li>
                    </ul>
                    <!-- end of tabs links -->

                    <!-- Tabs Content -->
                    <div class="tab-content" id="argoTabsContent">

                        <!-- Tab -->
                        <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="image-container">
                                        <img class="img-fluid" src="images/features-1.png" alt="alternative">
                                    </div> <!-- end of image-container -->
                                </div> <!-- end of col -->
                                <div class="col-lg-6">
                                    <div class="text-container">
                                        <h3><?php echo $lang['features6'] ?></h3>
                                        <p><?php echo $lang['features7'] ?> <a class="blue page-scroll" href="sign-up.html"><?php echo $lang['features8'] ?></a> <?php echo $lang['features9'] ?></p>
                                        <ul class="list-unstyled li-space-lg">
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body"><?php echo $lang['features10'] ?></div>
                                            </li>
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body"><?php echo $lang['features11'] ?></div>
                                            </li>
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body"><?php echo $lang['features12'] ?></div>
                                            </li>
                                        </ul>
                                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-1"><?php echo $lang['features13'] ?></a>
                                    </div> <!-- end of text-container -->
                                </div> <!-- end of col -->
                            </div> <!-- end of row -->
                        </div> <!-- end of tab-pane -->
                        <!-- end of tab -->

                        <!-- Tab -->
                        <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="image-container">
                                        <img class="img-fluid" src="images/features-3.png" alt="alternative">
                                    </div> <!-- end of image-container -->
                                </div> <!-- end of col -->
                                <div class="col-lg-6">
                                    <div class="text-container">
                                        <h3><?php echo $lang['features14'] ?></h3>
                                        <ul class="list-unstyled li-space-lg">
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body"><?php echo $lang['features15'] ?></div>
                                            </li>
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body"><?php echo $lang['features16'] ?></div>
                                            </li>
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body"><?php echo $lang['features17'] ?></div>
                                            </li>
                                        </ul>
                                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-3"><?php echo $lang['features18'] ?></a>
                                    </div> <!-- end of text-container -->
                                </div> <!-- end of col -->
                            </div> <!-- end of row -->
                        </div> <!-- end of tab-pane -->
                        <!-- end of tab -->
                        
                    </div> <!-- end of tab content -->
                    <!-- end of tabs content -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of tabs -->
    <!-- end of features -->

    <!-- DETAILS LIGHTBOXES --> 
    <!-- Details Box 1 -->
	<div id="details-lightbox-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-lightbox.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <h3><?php echo $lang['detailsbox1'] ?></h3>
                    <hr>
                    <h5><?php echo $lang['detailsbox2'] ?></h5>
                    <p><?php echo $lang['detailsbox3'] ?></p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body"><?php echo $lang['detailsbox4'] ?></div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body"><?php echo $lang['detailsbox5'] ?></div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body"><?php echo $lang['detailsbox6'] ?></div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body"><?php echo $lang['detailsbox7'] ?></div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body"><?php echo $lang['detailsbox8'] ?></div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body"><?php echo $lang['detailsbox9'] ?></div>
                        </li>
                    </ul>
                    <a class="btn-solid-reg mfp-close" href="sign-up.php"><?php echo $lang['detailsbox10'] ?></a> <a class="btn-outline-reg mfp-close as-button" href="#screenshots"><?php echo $lang['detailsbox11'] ?></a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details box 1 -->

    <!-- Details Box 2 -->
	<div id="details-lightbox-3" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-lightbox.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <h3><?php echo $lang['detailsbox12'] ?></h3>
                    <hr>
                    <h5><?php echo $lang['detailsbox13'] ?></h5>
                    <p><?php echo $lang['detailsbox14'] ?></p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body"><?php echo $lang['detailsbox15'] ?></div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body"><?php echo $lang['detailsbox16'] ?></div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body"><?php echo $lang['detailsbox17'] ?></div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body"><?php echo $lang['detailsbox18'] ?></div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body"><?php echo $lang['detailsbox19'] ?></div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body"><?php echo $lang['detailsbox20'] ?></div>
                        </li>
                    </ul>
                    <a class="btn-solid-reg mfp-close" href="sign-up.php"><?php echo $lang['detailsbox21'] ?></a> <a class="btn-outline-reg mfp-close as-button" href="#screenshots"><?php echo $lang['detailsbox22'] ?></a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details box 2 -->
    <!-- end of details boxes -->


    <!-- Details -->
    <div id="details" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2><?php echo $lang['details1'] ?></h2>
                        <p><?php echo $lang['details2'] ?></p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><?php echo $lang['details3'] ?></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><?php echo $lang['details4'] ?></div>
                            </li>
                        </ul>
                        <a class="btn-solid-reg page-scroll" href="recordadmin.php"><?php echo $lang['details5'] ?></a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details -->


    <!-- Video -->
    <div id="video" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Video Preview -->
                    <div class="image-container">
                        <div class="video-wrapper">
                            <a class="popup-youtube" href="https://www.youtube.com" data-effect="fadeIn">
                                <img class="img-fluid" src="images/video-image.png" alt="alternative">
                                <span class="video-play-button">
                                    <span></span>
                                </span>
                            </a>
                        </div> <!-- end of video-wrapper -->
                    </div> <!-- end of image-container -->
                    <!-- end of video preview -->

                    <div class="p-heading"><?php echo $lang['video'] ?></div>        
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of video -->


    <!-- Testimonials -->
    <div class="slider-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">      
                    
                    <!-- Text Slider -->
                    <div class="slider-container">
                        <div class="swiper-container text-slider">
                            <div class="swiper-wrapper">
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="image-wrapper">
                                        <img class="img-fluid" src="images/testimonial-1.jpg" alt="alternative">
                                    </div> <!-- end of image-wrapper -->
                                    <div class="text-wrapper">
                                        <div class="testimonial-text"><?php echo $lang['testimonials1'] ?></div>
                                        <div class="testimonial-author"> </div>
                                    </div> <!-- end of text-wrapper -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="image-wrapper">
                                        <img class="img-fluid" src="images/testimonial-2.jpg" alt="alternative">
                                    </div> <!-- end of image-wrapper -->
                                    <div class="text-wrapper">
                                        <div class="testimonial-text"><?php echo $lang['testimonials2'] ?></div>
                                        <div class="testimonial-author"> </div>
                                    </div> <!-- end of text-wrapper -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="image-wrapper">
                                        <img class="img-fluid" src="images/testimonial-3.jpg" alt="alternative">
                                    </div> <!-- end of image-wrapper -->
                                    <div class="text-wrapper">
                                        <div class="testimonial-text"><?php echo $lang['testimonials3'] ?></div>
                                        <div class="testimonial-author"> </div>
                                    </div> <!-- end of text-wrapper -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="image-wrapper">
                                        <img class="img-fluid" src="images/testimonial-4.jpg" alt="alternative">
                                    </div> <!-- end of image-wrapper -->
                                    <div class="text-wrapper">
                                        <div class="testimonial-text"><?php echo $lang['testimonials4'] ?></div>
                                        <div class="testimonial-author"> </div>
                                    </div> <!-- end of text-wrapper -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                            </div> <!-- end of swiper-wrapper -->
                            
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of text slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-2 -->
    <!-- end of testimonials -->


    <!-- Newsletter -->
    <div class="form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <div class="above-heading"><?php echo $lang['newsletter1'] ?></div>
                        <h2><?php echo $lang['newsletter2'] ?></h2>

                        <!-- Newsletter Form -->
                        <form id="newsletterForm" data-toggle="validator" data-focus="false">
                            <div class="form-group">
                                <input type="email" class="form-control-input" id="nemail" required>
                                <label class="label-control" for="nemail"><?php echo $lang['newsletter3'] ?></label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group checkbox">
                                <input type="checkbox" id="nterms" value="Agreed-to-Terms" required><?php echo $lang['newsletter4'] ?> <a href="privacy-policy.php"><?php echo $lang['newsletter5'] ?></a> <?php echo $lang['newsletter6'] ?> <a href="terms-conditions.php"><?php echo $lang['newsletter7'] ?></a> 
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button"><?php echo $lang['newsletter8'] ?></button>
                            </div>
                            <div class="form-message">
                                <div id="nmsgSubmit" class="h3 text-center hidden"></div>
                            </div>
                        </form>
                        <!-- end of newsletter form -->

                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="icon-container">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> <!-- end of col -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form -->
    <!-- end of newsletter -->


    <!-- Footer -->
<?php
	include('footer.php');
?>