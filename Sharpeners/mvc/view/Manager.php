<?php
	session_start();
	if(isset($_COOKIE['status'])){
?>
<html>
<head>
	<title> Manager | Sharpeners </title>
	<link rel="stylesheet" href="../assets/css/StyleSheet3.css">
</head>
<body>
	<div class="start">
		<h1>SHARPENERS</h1>
		
		<center>
		
		<img src=<?php echo $_SESSION['pic'] ?> width="150px" height="150px" />
		<h2><?php echo $_SESSION['user'] ?> </h2>
		<table>
		<tr>
			<td>
				<a href="ManagerOwnProfile.php">Profile</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="ManagerRegistration.php">Add New Manager</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="managerlist.php">View Manager List</a>
			</td>
		</tr>
		
		<tr>
			<td>
				<a href="ManageTeacher.php">Manage Teacher</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="ManageStudent.php">Manage Student</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="ManagerManageCourse.php">Manage Course</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="ManagerManageBook.php">Manage Book</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="ManageCV.php">View CV</a>
			</td>
		</tr>
		<tr>
			<td>
				<br> </br>
				<a href="../controller/LogOut.php">Log Out</a>
			</td>
		</tr>
		</table>
</center>


	</div>
</body>
</html>

<?php
	}
	else {
		header('location:LogIn.html');
	}
?>