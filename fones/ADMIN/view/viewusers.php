<?php
 include_once('../includes/functions.php'); //need functions to load prenav because BaseUrl function needs to be called
?> 
<!DOCTYPE html>
<html lang="en">
<head>
		<!-- Favicon-->
		<link rel="icon" href="../images/favicon.png"/>
		
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

<title>View Users &reg; </title>


</head>
<body>
        <!-- nav -->
    
		<!-- ADMIN PANEL -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
		
			<div class="container px-4 px-lg-5">
			
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
						 <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><b><em>User Management Functionalities</em></b></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?php echo getBaseUrl();?>ADMIN/add/adduser.php">Add</a></li>
                                <li><a class="dropdown-item" href="<?php echo getBaseUrl();?>ADMIN/edit/edituser.php">Edit</a></li>
                                <li><a class="dropdown-item" href="<?php echo getBaseUrl();?>ADMIN/delete/deleteuser.php">Delete User</a></li>
                            </ul>
                        </li>
						<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><b><em>Content Management</b></em></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?php echo getBaseUrl();?>ADMIN/AddContent/addcontent.php">Add</a></li>
                                <li><a class="dropdown-item" href="<?php echo getBaseUrl();?>ADMIN/EditContent/editcontent.php">Edit</a></li>
                                <li><a class="dropdown-item" href="<?php echo getBaseUrl();?>ADMIN/DeleteContent/deletecontent.php">Delete Content</a></li>
                            </ul>
                        </li>
						<li class="nav-item"><a class="nav-link active" aria-current="page" href="#"><b><em>Management</b></em></a></li>
						<li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php echo getBaseUrl();?>ADMIN/adminsettings/adminaccount_settings.php"><b><em>Settings</b></em></a></li>
                    </ul>
					</div>
				</a>
        </nav>
        

<p><b><em>Fones Admin&reg;<em></b></p>
</br>
</br>


<div <div align="center">

  <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h1>Welcome to admin panel</h1>
                <p class="lead">Browse the collection of users and management them online.</p>
            </div>
            <div class="col-md-4">
                <form  method="get">
                    <div class="form-group">
                        <label for="search">Search Users</label>
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

	
$sql ="SELECT * from user_login";
if (isset($_GET["search"]) && !empty($_GET["search"])) {
    $search = $_GET["search"];
    $sql .= " WHERE userid LIKE '$search%' OR full_name LIKE '$search%' OR email_address LIKE '$search%' OR place_of_birth LIKE '$search%' OR birth_date LIKE '$search%' OR gender LIKE '$search%' OR country LIKE '$search%' OR city LIKE '$search%' OR language LIKE '$search%' OR refugee LIKE '$search%' OR terms LIKE '$search%' OR level LIKE '$search%' ";
}

echo "<table class='table'>";
echo "<thead class='table-dark'>";
echo "<th>User ID:</th>";
echo "<th>User FullName:</th>";
echo "<th>User Email:</th>";
echo "<th>User Place of birth:</th>";
echo "<th>User Birth date:</th>";
echo "<th>User Gender:</th>";
echo "<th>User Country:</th>";
echo "<th>User City:</th>";
echo "<th>User Language:</th>";
echo "<th>User Refugee:</th>";
echo "<th>User Terms:</th>";
echo "<th>User Level:</th>";
echo "<thead>";


if ($result=mysqli_query($con,$sql)) {
 while ($row=mysqli_fetch_row($result))
 {
 echo "<tr><td>",$row[0], "</td><td>",$row[1], "</td><td>",$row[2], "</td><td>",$row[3], "</td><td>",$row[4], "</td><td>",$row[6], "</td><td>",$row[7], "</td><td>",$row[8], "</td><td>",$row[9], "</td><td>",$row[10], "</td><td>",$row[11], "</td><td>",$row[12], "</td></tr>";
 }
 echo "<table>";
 
 mysqli_free_result($result);
} 
 
?>

</div>
<br>
<br>
</br>
</br>
</br>
</br>
</br>
<a href="<?php echo getBaseUrl();?>indexadmin.php" style="text-decoration: none; margin-left:85%">Go Back</a>
</br>
</br>
</br>
<footer class="py-5 bg-dark">
		<div class="container px-4 px-lg-8">
		<ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-8">
			<ul style="margin-left: 1200px;"><a href="#" class="top" ><i class="fa fa-angle-up" style="font-size:36px"></i></a></ul>
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Fones Website 2023</p></div>
		</footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> </script>
        <!-- Core theme JS-->
        
    </body>
</html>