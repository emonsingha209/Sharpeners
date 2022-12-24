<?php
	session_start();
	if(isset($_COOKIE['status'])){
?>
<html>
<head>
	<title> Admin | Sharpeners </title>
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
				<br></br>
				<a href="AdminOwnProfile.php">Profile</a>
			</td>
		</tr>
		<tr>
			<td>
			<br></br>
				<a href="AdminRegistration.php">Add New Admin</a>
			</td>
		</tr>
		<tr>
			<td>
			<br></br>
				<a href="AdminList.php">View Admin List</a>
			</td>
		</tr>
		<tr>
			<td>
			<br></br>
				<a href="ManageManager.php">Manage Manager</a>
			</td>
		</tr>
		<tr>
			<td>
			<br></br>
				<a href="AdminManageCourse.php">Manage Course</a>
			</td>
		</tr>
		<tr>
			<td>
			<br></br>
				<a href="AdminManageBook.php">Manage Book</a>
			</td>
		</tr>
		<tr>
			<td>
			<br></br>
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