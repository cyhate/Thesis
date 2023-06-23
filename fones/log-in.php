<?php
	include('config.php');
	
	require('log-inscript.php');
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
    <title><?php echo $lang['log-in1'] ?></title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	
	
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
    <header id="header" class="ex-2-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1><?php echo $lang['log-in2'] ?></h1>
                   <p><?php echo $lang['log-in3'] ?> <a class="white" href="sign-up.php"><b><?php echo $lang['log-in4'] ?></b></a></p> 
                    <!-- Sign Up Form -->
                    <div class="container-2">
					<?php if ($is_invalid): ?> <em><?php echo $lang['log-in5'] ?> &#10008;</em> <?php endif; ?> <!-- &#10006;=X --> 
                        <form method="post">
                            <div class="form-group">
                                <input type="email" class="form-control-input" name="user_email_address" id="user_email_address" required>
								<label class="label-control" for="lemail">&#128231; <?php echo $lang['log-in6'] ?></label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control-input" name="user_password" id="user_password" required>
                                <label class="label-control" for="lpassword">&#128273; <?php echo $lang['log-in7'] ?></label>
								<span class="eye" onclick="myFunction()" style="position:relative; bottom:35px; left:94%;">
								<i id="hide1" class="icon-eye-open" style="display:none;"></i>
								<i id="hide2" class="icon-eye-close"></i>
								</span>
                                <div class="help-block with-errors"></div>
                            </div>
							<div class="form-group">
                                <input style="margin-left:25px;" type="checkbox" name="rememberusername" id="rememberusername" value="1"/>
								<label style="margin-left:10px; for="rememberusername"><em><?php echo $lang['log-in8'] ?></em></label>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button"><?php echo $lang['log-in9'] ?></button>
                            </div>
                        </form>
                    </div> <!-- end of form container -->
                    <!-- end of sign up form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->
	<div style="background-color:#5f4dee;"><br><br><br><br><br></div>


<!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col first">
                        <h4><?php echo $lang['footer1'] ?></h4>
                        <p class="p-small"><?php echo $lang['footer2'] ?></p>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4><?php echo $lang['footer3'] ?></h4>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><?php echo $lang['footer4'] ?> <a class="white" href="https://www.nup.ac.cy/">nup.ac.cy</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><?php echo $lang['footer5'] ?> <a class="white" href="terms-conditions.html"><?php echo $lang['footer6'] ?></a>, <a class="white" href="privacy-policy.php"><?php echo $lang['footer7'] ?></a></div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col last">
                        <h4><?php echo $lang['footer8'] ?></h4>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="media-body"><?php echo $lang['footer9'] ?></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-envelope"></i>
                                <div class="media-body"><a class="white" href="mailto:contact@fones.com">contact@fones.com</a> <i class="fas fa-globe"></i><a class="white" href="#your-link">www.fones.com</a></div>
                            </li>
                        </ul>
                    </div> 
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © FONES 2023 <a href="">by AP</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    


    <!-- Scripts -->
	<script>
	function myFunction(){
	var x = document.getElementById("user_password");
	var y = document.getElementById("hide1");
	var z = document.getElementById("hide2");
	if(x.type === 'password'){
	x.type = "text"
	y.style.display = "";
	z.style.display = "none";
	}
	else {
	x.type = "password";
	y.style.display = "none";
	z.style.display = "";
		}
	}	
	</script>
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
	<!--<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>-->
	<script>
	$(document).ready(function () {
		$("#langSwitcher").val('<a href="index.php?lang=">')
		
		$("#langSwitcher").on('<change', function () {
			window.location = '<a href="index.php?lang=">' + $(this).val();
		});
	});
	</script>
</body>
</html>