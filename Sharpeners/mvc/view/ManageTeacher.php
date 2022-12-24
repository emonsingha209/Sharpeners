<?php
	session_start();
	if(isset($_COOKIE['status'])){
?>
<html>
<head>
	<title>Manage Teacher | Manager</title>
</head>
<body>
	<center>
			<fieldset>
				<h2>Manage Teacher</h2>
				<table>
					<tr>
						<td>
							<a href="TeacherRegistration.html">Add New Teacher</a>
						</td>
					</tr>
					<tr>
						<td>
						<a href="TeacherList.php">View Teacher List</a>
						</td>
					</tr>
					<tr>
						<td>
						<br> </br>
							<a href="Manager.php"> Back </a>
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
	</center>
</body>
</html>
<?php
	}
	else {
		header('location:LogIn.html');
	}
?>