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

<title>Edit User &reg; </title>


</head>
<body>
<!-- Navigation-->
       
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
                                <li><a class="dropdown-item" href="<?php echo getBaseUrl();?>ADMIN/delete/deleteuser.php">Delete Content</a></li>
                            </ul>
                        </li>
						<li class="nav-item"><a class="nav-link active" aria-current="page" href=""><b><em>Management</b></em></a></li>
						<li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php echo getBaseUrl();?>ADMIN/adminsettings/adminaccount_settings.php"><b><em>Settings</b></em></a></li>
                    </ul>
					</div>
				</a>
        </nav>
        

<p><b><em>Fones Admin&reg;</em></b></p>
</br>
</br>


<div <div align="center">

<h3><em>EDIT USER FORM 	&reg;</em></h3>
</br>
</br>
</br>
</br>
<h5><b><em>Show Users - Read From Database:</em></b></h5>
<?php 
include('db.php');

if (!empty($_GET['submit'])) {
	
$sql ="SELECT * from user_login";

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
} 
?>
<br>
<form method="get">
<input type="submit" class="btn btn-primary" name="submit" value="Show Users" id="submit">
</form>
</br>
</br>
</br>
</br>
<h4><em>Edit User Here:</em></h4>
</br>
    <form method="post" action="edituserscript.php" >
        <table border="0.5" >
			<tr>
                <td><label><b><em>Current Email of User:</em></b></label></td>
                <td><input type="text" class="form-control" name="currentemail" id="currentemail" required></td>
            </tr>
			<tr>
                <td><label><b><em>Current User ID:</em></b></label></td>
                <td><input type="number" class="form-control" name="currentid" id="currentid" required></td>
            </tr>
			<tr>
                <td><br></td>
                <td><br></td>
            </tr>
			<tr>
                <td><label><b><em>New Email:</em></b></label></td>
                <td><input type="email" class="form-control" name="user_email" id="user_email" required></input></td>
            </tr>
			            <tr>
                <td><label><b><em>New Password:</em></b></label></td>
                <td><input type="password" class="form-control" name="user_pass" id="user_pass" required></input></td>
            </tr>
            <tr>
                <td><label><b><em>New Full Name:</em></b></label></td>
                <td><input type="text" class="form-control" name="user_fullname" id="user_fullname" required></td>
            </tr>
			<tr>
                <td><label><b><em>New Place of birth:</em></b></label></td>
                <td><input type="text" class="form-control" name="user_place_of_birth" id="user_place_of_birth" required></input></td>
            </tr>
			<tr>
			<tr>
                <td><label><b><em>New Birth date:</em></b></label></td>
                <td><input type="date" class="form-control" name="user_birth_date" id="user_birth_date" required></input></td>
            </tr>
			<tr>
                <td><label><b><em>New Country:</em></b></label></td>
                <td><input type="text" class="form-control" name="user_country" id="user_country" required></input></td>
            </tr>
			<tr>
                <td><label><b><em>New City:</em></b></label></td>
                <td><input type="text" class="form-control" name="user_city" id="user_city" required></input></td>
            </tr>
			<tr>
                <td><label><b><em>New Gender:</em></b></label></td>
                <td><select name="user_gender" id="user_gender" class="form-control" required>
				<option hidden>Select</option>
				<option value = "Male">Male</option>
				<option value = "Female" >Female</option>
				</select>
				</td>
            </tr>
			<tr>
                <td><label><b><em>New Language:</em></b></label></td>
                <td><input type="text" class="form-control" name="user_language" id="user_language" required></input></td>
            </tr>
			<tr>
                <td><label><b><em>New Refugee:</em></b></label></td>
                <td><select name="user_refugee" id="user_refugee" class="form-control" required>
				<option hidden>Select</option>
				<option value = "Yes">Yes</option>
				<option value = "No" >No</option>
				</select>
				</td>
            </tr>
			<tr>
                <td><label><b><em>New Terms:</em></b></label></td>
                <td><select name="user_terms" id="user_terms" class="form-control" required>
				<option value = "Yes">Yes</option>
				<option value = "No" >No</option>
				</select>
				</td>
            </tr>
			<tr>
                <td><label><b><em>New Level:</em></b></label></td>
                <td><select name="user_level" id="user_level" class="form-control" required>
				<option value = "0" selected>User</option>
				<option value = "1" >Admin</option>
				</select>
				</td>
			<!--input type="number" class="form-control" name="user_level" id="user_level" min="0" max="1"></input-->
            </tr>
            <tr>
                <td><input type="submit" class="btn btn-primary" value="Edit" />
                <td><input type="reset" class="btn btn-secondary" value="Reset"/>
				<!--<button type="submit" name="submit" id="submit" value="read">Edit</button>-->
            </tr>
        </table>
    </form>
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