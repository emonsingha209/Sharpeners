<?php
	session_start();
	
	require_once "../model/adminModel.php";
	
	if(isset($_COOKIE['status'])){
	$email = $_SESSION['email'];
?>
<html>
<head>
	<title>Profile | Admin</title>
</head>
<body>
		<h2>Profile: </h2>
<?php
	adminProfile($email);
?>
	<form method="post" action="../controller/AdminPictureUpdateCheck.php" enctype="multipart/form-data">
		</table>
		<br><br>
		<tr>
			<td>Upload a new picture</td>
			<br></br>
			<td><input type="file" name="newpicture" value="" ></td>
			<input type="submit" name="" value="Change">
		</tr>
		<tr>
			<td>
			<br> </br>
				<a href="AdminProfileUpdate.php">Update Profile</a>
			</td>
			<td>
				<a href="AdminDelete.php">Delete Profile</a>
			</td>
		</tr>
		<tr>
			<td>
				<br> </br>
				<a href="../view/Admin.php"> Back </a>
			</td>
		</tr>
	</form>
</body>
</html>
<?php
	}
	else {
		header('location:../view/LogIn.html');
	}
?>