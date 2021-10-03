<?php
$username = $_POST['username'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$firstName = $_POST['first_name'];
$middleIntial = $_POST['middle_name'];
$lastName = $_POST['last_name'];

if (!empty($username) || !empty($password) || !empty($cpassword) || !empty($first_name) || !empty($middle_name) || !empty($last_name))
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "registration";
	
	//create connection
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	
	if (mysqli_connect_error()) {
			die('Connect Error(' .mysqli_connect_errno().')' . mysqli_connect_error());
	} else {
			$SELECT = "SELECT email From Register Where email = ? Limit 1";
			$INSERT = "INSERT Into register (username, password, cpassword, first_name, middle_name, last_name) values (?,?,?,?,?,?)";
			
			//prepare statement
			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param("s", $email);
			stmt->execute();
			stmt->bind_result($email);
			stmt->store_result();
			$rnum = $stmt->num_rows;
			
			if ($rnum==0) {
				$stmt->close();
				
				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("ssssii", $username, $password, $cpassword, $first_name, $middle_name, $last_name);
				$stmt->execute();
				echo "New record inserted sucessfully";
				
						}
			}

}	else {
	
		echo "All fields are required!";
		die();

}
?>