<?php
	require("header.php");
	
	require('assets/sql.php');
	
	if(!empty($_GET['id']))
	{
		//there is data to save
		//validation
		require('assets/valid.php');
		
		$is_ok = true;
		if(!numeric($_GET["id"])){$is_ok = false;}
		
		if($is_ok)
		{
			//delete data from Database
			
			$sql = "DELETE FROM user WHERE user_id = ".$_GET['id'];
			
			if ($conn->query($sql) == TRUE) 
			{
				$MSG = "User Deleted successfully";
			}else{
				
				$MSG = "Error: " . $sql . "<br>" . $conn->error;
			}
			//$conn->close();
			
		}else
		{
			$MSG = "Please check the Data and try again";
		}
		echo "<script>
						alert('".$MSG."');
						setTimeout(function(){ window.location.href = 'user.php' }, 7000);
					</script>";
	}

?>