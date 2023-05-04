<?php
	require("header.php");
	
	$MSG = "";
	require('assets/sql.php');
	
	if(!empty($_POST['id']))
	{
		//there is data to save
		//validation
		require('assets/valid.php');
		
		$is_ok = true;
		if(!numeric($_POST["id"])){$is_ok = false;}
		if(!Min_Length($_POST["name"],3)){$is_ok = false;}
		if(!Email($_POST["email"])){$is_ok = false;}
		
		if($is_ok)
		{
			//save data to Database
			
			$sql = "UPDATE user SET user_name='".$_POST["name"]."',
						user_email='".$_POST["email"]."' 
						WHERE user_id = ".$_POST['id'];
			
			if ($conn->query($sql) == TRUE) 
			{
				echo "<script>
						alert('User Updated successfully');
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
		$id = $_POST['id'];
	}elseif(empty($_GET['id']))
	{
		echo "<script>
						alert('You Must select user first');
						setTimeout(function(){ window.location.href = 'user.php' }, 7000);
					</script>";
		die();
	}else
	{
		$id = $_GET['id'];
	}
	
	$user = $conn->query('SELECT user_id, user_name, user_email FROM user WHERE user_id = '.$id);
	if($user->num_rows != 1)
	{
		echo "<script>
						alert('Cannot Find the user ');
						setTimeout(function(){ window.location.href = 'user.php' }, 7000);
					</script>";
		die();
	}
	$user_data = $user->fetch_assoc();
	
?>
<br><br>
<?php echo $MSG ;?>
<div class="enquiry">
	<form action="upd_user.php" method="post" >
		<input type="hidden" id="id" name="id" value="<?php echo $user_data['user_id']?>" />
		<fieldset class="fieldset_center">
			<legend>Update User</legend>
			<table class="form_table">
				<tr>
					<td><label for="name">Name:</label></td>
					<td><input type="text" id="name" name="name" value="<?php echo $user_data['user_name']?>" required /></td>
				</tr>
				<tr>
					<td><label for="email">Email address:</label></td>
					<td><input type="email" id="email" name="email" value="<?php echo $user_data['user_email']?>" required /></td>
				</tr>
				<tr>
					<td><center><input type="submit" class="button" value="Submit"/></center></td>
					<td><center><input type="reset" class="button" value="Reset"/></center></td>
				</tr>
			
			
		</fieldset>
	</form>
</div>


    