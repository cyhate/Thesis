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
    <title><?php echo $lang['record0'] ?></title>
    
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
	.texts p.replay {
    text-align: right;
  }
  
  .texts p {
  color: black;
  text-align: left;
  width: 100%;
  background-color: white;
  padding: 10px;
  border-radius: 8px;
  margin-bottom: 10px;
  font-family:Montserrat; 
  font-size:20px;
  }
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
        <br><br><br>
    </header> <!-- end of header -->
   
	<br><br><br>
    <!-- Testimonials -->
	<div id="features" class="tabs" style="background-color:white;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="above-heading"><?php echo $lang['record1'] ?></div>
                    <h2 class="h2-heading"><?php echo $lang['record2'] ?></h2>
                    <p class="p-heading"><?php echo $lang['record3'] ?> <i class="material-icons" style="color:red;">mic</i> <?php echo $lang['record4'] ?></p>
                </div> <!-- end of col -->
            </div> <!-- end of row --> <br><br>
    <div class="slider-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" >      
                  
                    <!-- Text Slider -->
                    <div class="slider-container" >
                        <div class="swiper-container text-slider2">
                            <div class="swiper-wrapper" >
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div >
                                        <div class="testimonial-text" style="text-align:center; color:black; width:100%; height:100%; font-size:35px; font-family:Montserrat;"><?php echo $lang['record5'] ?></div>
                                    </div> <!-- end of text-wrapper -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div>
                                        <div class="testimonial-text" style="text-align:center; color:black; width:100%; height:100%; font-size:35px; font-family:Montserrat;"><?php echo $lang['record6'] ?></div>
                                    </div> <!-- end of text-wrapper -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div>
                                        <div class="testimonial-text" style="text-align:center; color:black; width:100%; height:100%; font-size:35px; font-family:Montserrat;"><?php echo $lang['record7'] ?></div>
                                    </div> <!-- end of text-wrapper -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div>
                                        <div class="testimonial-text" style="text-align:center; color:black; width:100%; height:100%; font-size:35px; font-family:Montserrat;"><?php echo $lang['record8'] ?></div>
                                    </div> <!-- end of text-wrapper -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
								<!-- Slide -->
                                <div class="swiper-slide">
                                    <div>
                                        <div class="testimonial-text"style="text-align:center; color:black; width:100%; height:100%; font-size:35px; font-family:Montserrat;"><?php echo $lang['record9'] ?></div>
                                    </div> <!-- end of text-wrapper -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
								<!-- Slide -->
                                <div class="swiper-slide">
                                    <div>
                                        <div class="testimonial-text" style="text-align:center; color:black; width:100%; height:100%; font-size:35px; font-family:Montserrat;"><?php echo $lang['record10'] ?></div>
                                    </div> <!-- end of text-wrapper -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
								<!-- Slide -->
                                <div class="swiper-slide">
                                    <div>
                                        <div class="testimonial-text" style="text-align:center; color:black; width:100%; height:100%; font-size:35px; font-family:Montserrat;"><?php echo $lang['record11'] ?></div>
                                    </div> <!-- end of text-wrapper -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
								<!-- Slide -->
                                <div class="swiper-slide">
                                    <div>
                                        <div class="testimonial-text" style="text-align:center; color:black; width:100%; height:100%; font-size:35px; font-family:Montserrat;"><?php echo $lang['record12'] ?></div>
                                    </div> <!-- end of text-wrapper -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
								<!-- Slide -->
                                <div class="swiper-slide">
                                    <div>
                                        <div class="testimonial-text" style="text-align:center; color:black; width:100%; height:100%; font-size:35px; font-family:Montserrat;"><?php echo $lang['record13'] ?></div>
                                    </div> <!-- end of text-wrapper -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
								<!-- Slide -->
                                <div class="swiper-slide">
                                    <div>
                                        <div class="testimonial-text" style="text-align:center; color:black; width:100%; height:100%; font-size:35px; font-family:Montserrat;"><?php echo $lang['record14'] ?></div>
                                    </div> <!-- end of text-wrapper -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
								<div class="swiper-slide">
                                    <div>
                                        <div class="testimonial-text" style="text-align:center; color:black; width:100%; height:100%; font-size:35px; font-family:Montserrat;"><?php echo $lang['record15'] ?></div>
                                    </div> <!-- end of text-wrapper -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
								<div class="swiper-slide">
                                    <div>
                                        <div class="testimonial-text" style="text-align:center; color:black; width:100%; height:100%; font-size:35px; font-family:Montserrat;"><?php echo $lang['record16'] ?></div>
                                    </div> <!-- end of text-wrapper -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
								<div class="swiper-slide">
                                    <div>
                                        <div class="testimonial-text" style="text-align:center; color:black; width:100%; height:100%; font-size:35px; font-family:Montserrat;"><?php echo $lang['record17'] ?></div>
                                    </div> <!-- end of text-wrapper -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
								<div class="swiper-slide">
                                    <div>
                                        <div class="testimonial-text" style="text-align:center; color:black; width:100%; height:100%; font-size:35px; font-family:Montserrat;"><?php echo $lang['record18'] ?></div>
                                    </div> <!-- end of text-wrapper -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
								<div class="swiper-slide">
                                    <div>
                                        <div class="testimonial-text" style="text-align:center; color:black; width:100%; height:100%; font-size:35px; font-family:Montserrat;"><?php echo $lang['record19'] ?></div>
                                    </div> <!-- end of text-wrapper -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
								
                            </div> <!-- end of swiper-wrapper -->
                            
                            <!-- Add Arrows -->
                            <div class="swiper-button-next" ></div>
                            <div class="swiper-button-prev" ></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of text slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-2 -->
    <!-- end of testimonials -->
<br><br>
	<div>
	<?php if (isset($_GET['error1'])) {  ?> <p><?=$_GET['error1']?></p> <?php } ?>
	</div>
	<center>
	<div id="controls">
	<button id="recordButton" class="btn-solid-reg page-scroll"><?php echo $lang['record20'] ?> <i  id="recordIcon" class="material-icons" style="color:red; font-size:15px;">mic</i> </button>
	<button id="pauseButton" class="btn-solid-reg page-scroll" disabled><?php echo $lang['record37'] ?> <i id="pauseIcon" class="material-icons" style="color:black; font-size:15px;">pause</i> </button>
	<button id="stopButton" class="btn-solid-reg page-scroll" disabled><?php echo $lang['record21'] ?> <i class="material-icons" style="color:light-gray; font-size:15px;">stop</i> </button> <br><br>
	</div>
    <div id="formats"><?php echo $lang['record38'] ?></div>
  	<p><strong><?php echo $lang['record39'] ?></strong></p>
  	<ol id="recordingsList"></ol>
	</center>
	<br><br>
</div> 
			</div> 
<br><br><br><br>

<!-- Features -->
	<div id="upload" class="tabs">
    <div id="features" class="basic-1" >
        <div class="container" >
            <center> <div class="row">
                <div class="col-lg-12">
                    <div class="above-heading"><?php echo $lang['record22'] ?></div>
                    <h2 class="h2-heading"><?php echo $lang['record23'] ?></h2>
                    <p class="p-heading"><?php echo $lang['features3'] ?></p>
                </div> <!-- end of col -->
            </div></center> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <br><br>
                    <!-- Tabs Content -->
                    <div class="tab-content" id="argoTabsContent">
                        <!-- Tab -->
                        <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="text-container">
                                        <h3><?php echo $lang['record24'] ?></h3>
                                        <p><?php echo $lang['record25'] ?></p><br>
										<div>
										<label for="my_audio"><?php echo $lang['record26'] ?></label>
										<?php if (isset($_GET['error'])) {  ?>
										<p><?=$_GET['error']?></p> <?php } ?>
                                        <form action="uploadadmin.php" method="post" enctype="multipart/form-data">
											<input type="file" id="my_record" name="my_record" accept="audio/*" ><br><br><br>
											<input type="submit" name="submit" value="Submit" class="btn-solid-reg page-scroll">
										</form>
										</div>
                                    </div> <!-- end of text-container -->
                                </div> <!-- end of col -->
								 <div class="col-lg-6">
                                    <div class="image-container">
                                        <img class="img-fluid" src="images/features-4.png" alt="alternative">
                                    </div> <!-- end of image-container -->
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
</div>

<!-- CONTRIBUTE -->
    <div id="features" class="tabs" style="background-color:white;>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="above-heading"><?php echo $lang['record27'] ?></div>
                    <h2 class="h2-heading"><?php echo $lang['record28'] ?></h2>
					<p class="p-heading"><?php echo $lang['record29'] ?></p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
      <div class="buttons" style="text-align:center; font-size:18px; font-family:Montserrat; margin:5px; padding:15px;"> 
        <button id="GTPstartbtn" class="start-btn" style="border-radius:5px; color:#5f4dee; border-color:rgb(222, 222, 222, 0.4);"><?php echo $lang['record30'] ?></button>
        <button id="GTPstopbtn" class="stop-btn" style="border-radius:5px; color:#5f4dee; border-color:rgb(222, 222, 222, 0.4)"><?php echo $lang['record31'] ?></button>
        <button id="GTPrefreshbtn" class="refresh-btn" style="border-radius:5px; color:#5f4dee; border-color:rgb(222, 222, 222, 0.4)"><?php echo $lang['record32'] ?></button>
      </div>	
	  <section style="min-height:100vh; width:100%; display:flex; align-items:flex-start; background-color:rgb(222, 222, 222, 0.4); flex-direction:column; padding:50px 0;">
						<h1 style="color:#5f4dee; text-align:center; width:100%; font-size:50px; margin-bottom:10px; font-family:Montserrat;"><?php echo $lang['record33'] ?><br> <?php echo $lang['record34'] ?></h1>
						<p style="text-align:center; color:light-gray; width:100%; margin-bottom:40px; font-family:Montserrat; font-size:20px;"><?php echo $lang['record35'] ?> 😎</p>
						<div class="container" style=" width:90%; max-width:500px; margin:0 auto; justify-content:center;">
						<div class="texts">
						<p id="precognition" style="color:black; text-align:left; width:100%; background-color:white; padding:10px; border-radius:8px; margin-bottom:10px; font-family:Montserrat; font-size:20px;"><?php echo $lang['record36'] ?></p>
						
						</div>
						</div>
					</section>
				<!-- partial -->

                    

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of CONTRIBUTE -->
<br><br>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
      /* Text Slider - Swiper */
var mySwiper = new Swiper ('.text-slider2', {
	//centeredSlides: true,
   loop: true,
        navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev'
		}
  })
</script>

<script src="js/recorder.js"></script>
<script src="js/app-recorder.js"></script>
<script  src="js/GPTSpeechRecognitionScript.js"></script>
<!--<script src="js/arecordvoice.js"></script> <!-- Recording -->

    <!-- Footer -->
<?php
	include('footer.php');
?>