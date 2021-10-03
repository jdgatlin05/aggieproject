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
			<h2>Login Form</h2>
			<!--<img src="imgs/avatar.png" class="image"> to upload a picture we want-->
		</center>


		<form class="myform" action= "index.php" method="POST">
			<label><b>Username:</b></label><br>
			<input type="username" class="inputvalues" placeholder="Type your username"/><br>
			<label><b>Password:</b></label><br>
			<input type="password" class="inputvalues" placeholder="Type your password"/><br>
			<input type="submit" id="login_btn" value="login"/><br>
			<a href = "register.php"><input type="button" id="register_btn" value="register"/>
			
		<!--<div id="reset">  <!-- to rest password took it out for now-->
		
			<!--<h2>Reset Form</h2>
			<!--<img src="imgs/avatar.png" class="image">-->
		<!--</center>
		<form class= "myreset" action="index.php" method="post">
			<label><b>Password Reset:</b></label><br>
			<input type="Password" class="inputvalues" placeholder="Enter Password"><br>
			<input type="Password" class="inputvalues" placeholder="Reenter Password"><br>
			<input type="button" id="reset_btn" value="reset"><br>
		</div><br>-->

			
			
		</form>
	
		
	</div>

</body>
</html>