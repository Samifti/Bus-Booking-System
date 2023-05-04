<?php
	$MSG = "";
	session_start();
	
	if(!empty($_SESSION["user_id"]))
	{
		header("Location:  view_enquiries.php"); 
		exit();
	}
	if(!empty($_SESSION["login_attempts"]) && $_SESSION["login_attemps"] > 3)
	{
		die('Sorry You Reached the attempt limit 3');
	}
	
	if(!empty($_POST['username']))
	{
		//validation
		require('assets/valid.php');
		$is_ok = true;
		if(!Min_Length($_POST["username"],3)){$is_ok = false;}
		if(!Min_Length($_POST["password"],3)){$is_ok = false;}
		
		if($is_ok)
		{
			require('assets/sql.php');
	
			$user = $conn->query('SELECT user_id, user_name, user_email 
								FROM user 
								WHERE user_email like "'.$_POST["username"].'" 
								AND user_pass like "'.$_POST["password"].'"');
	
			if ($user->num_rows != 1)
			{
				if(!empty($_SESSION["login_attemps"]))
				{
					$_SESSION["login_attemps"] ++;
				}else
				{
					$_SESSION["login_attemps"] = 1;
				}
				$MSG = "Please check the Data and try again, attemp: ".$_SESSION["login_attempts"];
			}else
			{
				$row = $user->fetch_assoc();
				
				$_SESSION["user_id"] 	= $row['user_id'];
				$_SESSION["user_name"] 	= $row['user_name'];
				$_SESSION["user_email"] = $row['user_email'];
				
				header("Location: view_enquiries.php"); 
				exit();
			}
			$conn->close();
		}else
		{
			if(!empty($_SESSION["login_attemps"]))
			{
				$_SESSION["login_attemps"] ++;
			}else
			{
				$_SESSION["login_attemps"] = 1;
			}
			$MSG = "Please check the Data and try again, attemp: ".$_SESSION["login_attemps"];
		}
	}
	
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		  	<title>Travel</title>
      	<meta name="viewport" content="width=device-width, initial-scale=1">
      	<link rel="stylesheet" type="text/css" href="css/style.css">
	 	<link rel="preconnect" href="https://fonts.googleapis.com">
	  	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">  
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Anton&family=Oswald&display=swap" rel="stylesheet">
		<script src="script.js"></script>
	
		<title>Translux</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
	</head>
	<body>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<div class="banner">
		<?php
			if(!empty($MSG))
			{
				echo $MSG;
			}
		?>
		<div class="contentbox-white">
			<form class="textcolor" action="login.php" method="post">
				<fieldset>
					<legend>Login</legend>
					<label for="first_name">Username:</label>
					<input type="email" id="username" name="username" required /><br/><br/>
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" required /><br/><br/>
					<br>
					<center>
						<input type="submit" class="book" value="Submit"/>
						<input type="reset" class="book" value="Reset"/>
					</center>
				</fieldset>
			</form>
			</div>
		</div>		
	</body>
</html>