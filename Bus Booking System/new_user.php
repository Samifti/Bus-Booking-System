<?php
	require("header.php");
	
	$MSG = "";
			
	if(!empty($_POST['name']))
	{
		//there is data to save
		//validation
		require('assets/valid.php');
		
		$is_ok = true;
		if(!Min_Length($_POST["name"],3)){$is_ok = false;}
		if(!Email($_POST["email"])){$is_ok = false;}
		if(!Min_Length($_POST["pass1"],3)){$is_ok = false;}
		if(!Min_Length($_POST["pass2"],3)){$is_ok = false;}
		if($_POST["pass1"]!=$_POST["pass2"]){$is_ok = false;}
		
		if($is_ok)
		{
			//save data to Database
			require('assets/sql.php');
			
			$sql = "INSERT INTO user(user_name, user_email, user_pass) 
									VALUES ( '".$_POST["name"]."','".$_POST["email"]."','".$_POST["pass1"]."')";

			if ($conn->query($sql) === TRUE) 
			{
				$last_id = $conn->insert_id;
				echo "<script>
						alert('New User created successfully With ID ".$last_id."');
						setTimeout(function(){ window.location.href = 'user.php' }, 7000);
					</script>";
			}else{
				$MSG = "Error: " . $sql . "<br>" . $conn->error;
			}
			//$conn->close();
			
		}else
		{
			$MSG = "Please check the Data and try again";
		}
	}
	
?>
<br><br>
<?php echo $MSG ;?>
<div class="enquiry">
	<form action="new_user.php" method="post" >
		<fieldset class="fieldset_center">
			<legend>New User</legend>
			<table class="form_table">
				<tr>
					<td><label for="name">Name:</label></td>
					<td><input type="text" id="name" name="name" required /></td>
				</tr>
				<tr>
					<td><label for="email">Email address:</label></td>
					<td><input type="email" id="email" name="email" required /></td>
				</tr>
				<tr>
					<td><label for="pass1">Password:</label></td>
					<td><input type="password" id="pass1" name="pass1" required /></td>
				</tr>
				<tr>
					<td><label for="pass2">Confirm Password:</label></td>
					<td><input type="password" id="pass2" name="pass2" required /></td>
				</tr>
				<tr>
					<td><center><input type="submit" class="button" value="Submit"/></center></td>
					<td><center><input type="reset" class="button" value="Reset"/></center></td>
				</tr>
			
			
		</fieldset>
	</form>
</div>


    