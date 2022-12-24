<?php
	session_start();
	
	require_once "../model/teacherModel.php";
	
	if(isset($_COOKIE['status'])){
	$email = $_SESSION['email'];
?>
<html>
<head>
	<title>Profile | teacher</title>
</head>
<body>
		<h2>Profile: </h2>
<?php
	teacherProfile($email);
?>
	<form method="post" action="../controller/teacherPictureUpdateCheck.php" enctype="multipart/form-data">
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
				<a href="teacherProfileUpdate.php">Update Profile</a>
			</td>
			<td>
				<a href="teacherDelete.php">Delete Profile</a>
			</td>
		</tr>
		<tr>
			<td>
				<br> </br>
				<a href="../view/teacher.php"> Back </a>
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