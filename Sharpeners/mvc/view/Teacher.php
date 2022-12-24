<?php
	session_start();
	if(isset($_COOKIE['status'])){
?>
<html>
<head>
	<title> Teacher | Sharpeners </title>
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
						<br> </br>
							
							<a href="TeacherOwnProfile.php">View Own Profile </a>
						</td>
					</tr>
				    <tr>
						<td>
						<br> </br>
							
							<a href="TeacherList.php">View Teacher Profile </a>
						</td>
					</tr>
					<tr>
						<td>
						<br> </br>
							
							<a href="TeacherProfileUpdate.php"> Update Profile </a>
						</td>
					</tr>
                    
					<tr>
						<td>
						<br> </br>
							
							<a href="CourseList.php">Course List </a>
						</td>
					</tr>
					<tr>
						<td>
						<br> </br>
							
							<a href="ManageBook.php">Manage Book</a>
						</td>
					</tr>
					<tr>
						<td>
						<br> </br>
							<a href="Studentlist.php">Student List </a>
						</td>
					</tr>
					<tr>
						<td>
						<br> </br>
							
							<a href="AddStudentFeedback.php">Feedback </a>
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