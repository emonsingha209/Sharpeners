<?php
    require_once "DB.php";

    function adminLogin($Email, $Password, $UserType)
	{
        $conn = getConnection();
		$sql = "select * from adminList where Email='{$Email}' and UserType= '{$UserType}' and Password='{$Password}'";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

        if($count >0){
            return true;
        }else{
            return false;
        }
    }
	function adminProfile($Email)
	{
        $conn = getConnection();
		$sql = "select * from adminList where Email='{$Email}'";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

        if($count >0){
            echo "<table border=1>
			<tr>
				<td>Name</td>
				<td>Email</td>
				<td>Contact Number</td>
				<td>Address</td>
				<td>Division</td>
				<td>Postal Code</td>
				<td>Gender</td>
				<td>Date of birth</td>
				<td>Blood Group</td>
				<td>Picture</td>
			</tr>";
		
		while($row = mysqli_fetch_assoc($result)) {
			echo "<tr>
				<td>{$row['UserName']}</td>
				<td>{$row['Email']}</td>
				<td>{$row['ContactNumber']}</td>
				<td>{$row['Address']}</td>
				<td>{$row['Division']}</td>
				<td>{$row['PostalCode']}</td>
				<td>{$row['Gender']}</td>
				<td>{$row['DateOfBirth']}</td>
				<td>{$row['BloodGroup']}</td>
				<td><img src={$row['PictureLocation']} style='width:100px;height:100px';</td>
				</tr>";
		}
		
		echo "</table>";
        }else{
            echo "Data not found..!!";
        }
    }
	function adminUpdateProfile($email)
	{
		$conn = getConnection();
		$sql = "select * from adminList where Email='{$email}'";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

        if($count >0){
            while($row = mysqli_fetch_assoc($result)) {
				$data = [
							'username' => $row['UserName'],
							'email' => $row['Email'],
							'contnum' => $row['ContactNumber'],
							'address' => $row['Address'],
							'division' => $row['Division'],
							'postcode' => $row['PostalCode'],
							'gender' => $row['Gender'],
							'dob' => $row['DateOfBirth'],
							'bg' => $row['BloodGroup'],
							'cv' => $row['CVLocation'],
							'pic' => $row['PictureLocation'],
							'password' => $row['Password'],
						];
					return $data;
		}
        }
		else
		{
			return false;
		}
	}
	function adminSearch($email)
	{
		$conn = getConnection();
		$sql = "select * from adminList where Email='{$email}'";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

        if($count >0){
            while($row = mysqli_fetch_assoc($result)) {
				$data = [
							'username' => $row['UserName'],
							'email' => $row['Email'],
							'contnum' => $row['ContactNumber'],
							'address' => $row['Address'],
							'division' => $row['Division'],
							'postcode' => $row['PostalCode'],
							'gender' => $row['Gender'],
							'dob' => $row['DateOfBirth'],
							'bg' => $row['BloodGroup'],
							'cv' => $row['CVLocation'],
							'pic' => $row['PictureLocation'],
							'password' => $row['Password'],
						];
					return $data;
		}
        }else{
            echo "No data found..!!";
        }
	}
	function adminList()
	{
        $conn = getConnection();
		$sql = "select * from adminList";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

        if($count >0){
            echo "<table border=1>
			<tr>
				<td>Name</td>
				<td>Email</td>
				<td>Contact Number</td>
				<td>Address</td>
				<td>Division</td>
				<td>Postal Code</td>
				<td>Gender</td>
				<td>Date of birth</td>
				<td>Blood Group</td>
				<td>Picture</td>
			</tr>";
		
		while($row = mysqli_fetch_assoc($result)) {
			echo "<tr>
				<td>{$row['UserName']}</td>
				<td>{$row['Email']}</td>
				<td>{$row['ContactNumber']}</td>
				<td>{$row['Address']}</td>
				<td>{$row['Division']}</td>
				<td>{$row['PostalCode']}</td>
				<td>{$row['Gender']}</td>
				<td>{$row['DateOfBirth']}</td>
				<td>{$row['BloodGroup']}</td>
				<td><img src={$row['PictureLocation']} style='width:100px;height:100px';</td>
				</tr>";
		}
		
		echo "</table>";
        }else{
            echo "No data found..!!";
        }
		
    }
	function adminUpdate($email, $UpUserName, $UpEmail, $UpPassword, $UpAddress, $UpDivision, $UpPostalCode, $UpContactNumber, $UpGender, $UpDateOfBirth, $UpBloodGroup)
	{
		$conn = getConnection();
		$sql = "UPDATE adminList SET UserName = '{$UpUserName}', Email =  '{$UpEmail}', Password =  '{$UpPassword}', Address =  '{$UpAddress}', Division =  '{$UpDivision}', PostalCode =  '{$UpPostalCode}', ContactNumber =  '{$UpContactNumber}', Gender =  '{$UpGender}', DateOfBirth =  '{$UpDateOfBirth}', BloodGroup =  '{$UpBloodGroup}' WHERE Email = '{$email}'";
		$result = mysqli_query($conn, $sql);
		return true;
	}
	function adminPic($email, $newpicture)
	{
		$conn = getConnection();
		$sql = "UPDATE adminList SET PictureLocation = '{$newpicture}' WHERE Email = '{$email}'";
		$result = mysqli_query($conn, $sql);
		return true;
	}
	function adminDelete($username, $password)
	{
		$conn = getConnection();
		$sql = "DELETE from adminList WHERE UserName = '{$username}' and Password =  '{$password}'";
		$result = mysqli_query($conn, $sql);
		return true;
	}
	function adminReg($UserName, $UserType, $Email, $Password, $Address, $Division, $PostalCode, $ContactNumber, $Gender, $DateOfBirth, $BloodGroup, $CVLocation, $PictureLocation)
	{
		$conn = getConnection();
		$sql = "INSERT into adminList(UserName, UserType, Email, Password, Address, Division, PostalCode, ContactNumber, Gender, DateOfBirth, BloodGroup, CVLocation, PictureLocation) VALUES ('{$UserName}', '{$UserType}', '{$Email}', '{$Password}', '{$Address}', '{$Division}', '{$PostalCode}', '{$ContactNumber}', '{$Gender}', '{$DateOfBirth}', '{$BloodGroup}', '{$CVLocation}', '{$PictureLocation}')";
		$result = mysqli_query($conn, $sql);
		return true;
	}
	function adminForgotPass($UserName, $Email, $DateOfBirth, $ContactNumber, $Password, $usertype)
	{
		$conn = getConnection();
		$sql = "UPDATE adminList SET Password =  '{$Password}' WHERE Email = '{$Email}' and UserName = '{$UserName}' and DateOfBirth = '{$DateOfBirth}'and ContactNumber = '{$ContactNumber}' and UserType = '{$usertype}'";
		$result = mysqli_query($conn, $sql);
		return true;
	}
?>