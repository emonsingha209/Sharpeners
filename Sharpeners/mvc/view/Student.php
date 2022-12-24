<?php
	session_start();
	if(isset($_COOKIE['status'])){
?>
<html>
<head>
	<title> Student | Sharpeners </title>
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
							
							<a href="StudentOwnProfile.php">View Own Profile </a>
						</td>
					</tr>
					<tr>
						<td>
						<br> </br>
							
							<a href="StudentProfileUpdate.php"> Update Profile </a>
						</td>
					</tr>

                    <tr>
						<td>
						<br> </br>
							
							<a href="TeacherList.php">Teacher List </a>
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
							
							<a href="BookList.php">Book List</a>
						</td>
					</tr>
					<tr>
						<td>
						<br> </br>
							
							<a href="AddTeacherFeedback.php">Feedback </a>
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