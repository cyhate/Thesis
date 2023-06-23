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

<title>Add Content &reg; </title>



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

<h3><em>ADD CONTENT FORM &reg;</em></h3>
</br>
</br>
<h5><em>Add Content Here:</em></h5>
<br>
<br>
<br>
</br>
<h3><em>Add Record:</em></h3>
<br>
<br>
<?php if (isset($_GET['error'])) {  ?>
										<p><?=$_GET['error']?></p> <?php } ?>
	<form action="addcontentscript.php" method="post" enctype="multipart/form-data">
        <table border="0.5" >
			<tr>
                <td><label><b><em>Select an audio file:</em><b></label></td>
                <td><input type="file" id="my_record" name="my_record" accept="audio/*" class="form-control" required></td>
			</tr>
			<tr>
                <td><label><b><em>User ID:</em></b></label></td>
                <td><input type="number" class="form-control" name="user_id" id="user_id" required></input></td>
            </tr>
			<tr>
                <td><label><b><em>Full-Name:</em></b></label></td>
                <td><input type="text" class="form-control" name="user_fullname" id="user_fullname" required></input></td>
            </tr>
            <tr>
                <td><label><b><em>Email:</em></b></label></td>
                <td><input type="email" class="form-control" name="user_email" id="user_email" required></input></td>
            </tr>
			<tr>
                <td><label><b><em>Place of birth:</em></b></label></td>
                <td><input type="text" class="form-control" name="user_place_of_birth" id="user_place_of_birth" ></input></td>
            </tr>
			<tr>
			<tr>
                <td><label><b><em>Birth date:</em></b></label></td>
                <td><input type="date" class="form-control" name="user_birth_date" id="user_birth_date" ></input></td>
            </tr>
			<tr>
			<tr>
                <td><label><b><em>Country:</em></b></label></td>
                <td><input type="country" class="form-control" name="user_country" id="user_country" ></input></td>
            </tr>
			<tr>
                <td><label><b><em>City:</em></b></label></td>
                <td><input type="text" class="form-control" name="user_city" id="user_city" ></input></td>
            </tr>
			<tr>
                <td><label><b><em>Gender:</em></b></label></td>
                <td><select name="user_gender" id="user_gender" class="form-control" >
				<option hidden>Select</option>
				<option value = "Male">Male</option>
				<option value = "Female" >Female</option>
				</select>
				</td>
            </tr>
			<tr>
                <td><label><b><em>Language:</em></b></label></td>
                <td><input type="text" class="form-control" name="user_language" id="user_language"></input></td>
            </tr>
			<tr>
                <td><label><b><em>Refugee:</em></b></label></td>
                <td><select name="user_refugee" id="user_refugee" class="form-control">
				<option hidden>Select</option>
				<option value = "Yes">Yes</option>
				<option value = "No" >No</option>
				</select>
				</td>
            </tr>
            <tr>
				<td><input type="submit"  name="submit" class="btn btn-primary" value="Add" />
                <td><input type="reset" class="btn btn-secondary" value="Reset"/>
            </tr>
        </table>
    </form>
<br>
<br>
<br>
<br>
<br>
<br>
<h4>Show Records - Read From Database:</h4>
<?php 
include('db.php');

if (!empty($_GET['submit'])) {
	
$sql ="SELECT * from records";

echo "<table class='table'>";
echo "<thead class='table-dark'>";
echo "<tr>";
echo "<th>Record ID:</th>";
echo "<th>Record URL:</th>";
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
echo "</tr>";
echo "<thead>";

if ($result=mysqli_query($con,$sql)) {
 while ($row=mysqli_fetch_row($result))
 {
 echo "<tr><td>",$row[0], "</td><td>",'<audio src="uploads/'.$row[1].'"controls></audio>', "</td><td>",$row[2], "</td><td>",$row[3], "</td><td>",$row[4], "</td><td>",$row[5], "</td><td>",$row[6], "</td><td>",$row[7], "</td><td>",$row[8], "</td><td>",$row[9], "</td><td>",$row[10], "</td><td>",$row[11], "</td></tr>";
 }
 echo "</table>";
 
 mysqli_free_result($result);
} 
} 
?>
<br>
<form method="get">
<input type="submit" class="btn btn-primary" name="submit" value="Show Records" id="submit">
</form>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
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