<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">

			
			
            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <a class="navbar-brand logo-text page-scroll" href="index.php"><em><?php echo $lang['logo'] ?><i class="material-icons" style="color:light-red;">mic</i><em></a> 
			<!-- &#10023; &#10022; &#x2023 <i class="material-icons">mic</i> &ordm; &#8853; &#8756; &dego; -->
			
			<!-- style="margin-top:80rem; margin-right:40rem; position:relative;" position:absolute; top:0px; left:1px; bottom:0px; display:flex; position:absolute; top:0px; left:1px; bottom:0px; color:white; -->
            <!-- Image Logo -->
            <!-- <a class="navbar-brand logo-image" href="index.html"><img src="image" alt="alternative"></a> -->
            
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.php"><?php echo $lang['home'] ?><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.php#features"><?php echo $lang['features'] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.php#details"><?php echo $lang['details'] ?></a>
                    </li>

                    <!-- Dropdown Menu -->          
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle page-scroll" href="##" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $lang['information'] ?></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="record.php"><span class="item-text"><?php echo $lang['speak'] ?> <i class="material-icons" style="color:red; font-size:14px;">mic</i></span></a>
							<div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="index.php#video"><span class="item-text"><?php echo $lang['video'] ?></span></a>
							<div class="dropdown-items-divide-hr"></div>
							<a class="dropdown-item" href="article-details.php"><span class="item-text"><?php echo $lang['article'] ?></span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="terms-conditions.php"><span class="item-text"><?php echo $lang['terms'] ?></span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="privacy-policy.php"><span class="item-text"><?php echo $lang['privacy'] ?></span></a>
							<div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="#footer"><span class="item-text"><?php echo $lang['about'] ?></span></a>
                        </div>
                    </li>
                    <!-- end of dropdown menu -->

                    <!-- <li class="nav-item">
                        <a class="nav-link page-scroll" href="#pricing"><?php echo $lang['about'] ?></a>
                    </li>-->
                </ul>
                <span class="nav-item">
                  <?php
					if (isset($_SESSION['loggedin'])) {
					 echo'<div class="nav-item dropdown">';
                        echo '<a class="nav-link dropdown-toggle page-scroll" href="##" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="http://localhost/fones/images/ava1.png" style="margin-left:0%" width="85%" height="35"/></a>';
                        echo'<div class="dropdown-menu" aria-labelledby="navbarDropdown">';
						echo 	'<a style="color:white;">'. $lang['user'] . ':<br>' . $_SESSION['email_address'] . '</a>';
						echo	'<div class="dropdown-items-divide-hr"></div>';
                        echo    '<a class="dropdown-item" href="../fones/settings/account_settings.php"><span class="item-text">' . $lang['settings'] . '</span></a>';
						echo	'<div class="dropdown-items-divide-hr"></div>';
						echo	'<a class="dropdown-item" href="logout.php"><span class="item-text">' . $lang['logout'] . '</span></a>';
                        echo'</div>';
					 echo'</div>';
						
						//echo '<tr><td><a style="color:white;">' . $_SESSION['email_address'] . '</a></tr></td></table>';
						//echo '<table><tr><td><a class="btn-outline-sm" href="logout.php">LOG OUT</a></tr></td>';
					} else {
						echo '<a class="btn-outline-sm" href="log-in.php">' . $lang['login'] . '</a>';
					}

					?>
					
					
                </span>
            </div>
			
        </div> <!-- end of container -->
		<!--<div style="position:absolute; left:150px; bottom: 8px; margin-top:0.2rem; color:white;">
			<a style="text-decoration:none; color:white;" href="index.php?lang=en"><?php echo $lang['lang_en'] ?></a>|<a style="text-decoration:none; color:white;" href="index.php?lang=el"><?php echo $lang['lang_el'] ?></a>
		</div>-->
<div style="color:white;"> 
  <a style="text-decoration:none; color:white;" href="?lang=en"><?php echo $lang['lang_en'] ?></a> | <a style="text-decoration:none; color:white;" href="?lang=el"><?php echo $lang['lang_el'] ?></a>
</div>
			 <!--<select class="form-control" id="langSwitcher">
				<a href="index.php?lang=en"><option value="en">EN</option></a>
				<a href="index.php?lang=el"><option value="el">GR</option></a>
			</select>
			<select class="form-control" id="langSwitcher" onchange="location = this.value;">
				<option value="index.php?lang=en">EN</option>
				<option value="index.php?lang=el">GR</option>
			</select>-->
			<!--<div class="lang-block block" data-lang="3">
				<span class="lang-item lang-item-current">
				<a href="index.php?lang=en">EN</a>
				</span>
				<a href="index.php?lang=el">GR</a>
			</div>-->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->