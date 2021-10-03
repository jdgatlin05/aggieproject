<?php
	require 'dbconfig/config.php'; /* connectino to the database*/

?>

<!DOCTYPE html>
<html>
<head>
<title>login page</title>
<link rel="stylesheet" href="css/style.css"><!-- link to the style sheet-->
</head>

<body style="background-color:#dcdde1">

	<div id="main-warpper">
		<center>
			<h2>Home Page</h2>
			<h3>Welcome<h3>
			<!--<img src="imgs/avatar.png" class="image"> to upload a picture we want-->
		</center>


		<form class="myform" action= "homepage.php" method="POST">
			<input type="submit" id="logout_btn" value="log out"/><br>
			
			
		</form>
	
		
	</div>

</body>
</html>