<?php
	$MSG = "";
	require('assets/sql.php');
	
	$users = $conn->query('SELECT user_id, user_name, user_email FROM user WHERE 1');
	
	
	require("header.php");
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<br/><br/>
<div>
	<a href="new_user.php"><button type="button" class="button"> New User</button></a>
</div>
<br/>
<div class="contentbox-white">
<fieldset>
	<legend>Current Users</legend>
	<table>
		<tr>
			<div><th>ID</th></div>
			<div><th>Name</th></div>
			<div><th>Email</th></div>
			<th colspan="2">Action</th>
		</tr>
		
	<?php
	session_start();
		while($row = $users->fetch_assoc()) 
		{
			echo "<tr>";
				echo "<td>".$row['user_id']."</td>";
				echo "<td>".$row['user_name']."</td>";
				echo "<td>".$row['user_email']."</td>";
			if($_SESSION["user_id"] == $row['user_id']);
			{
				echo "<td colspan='2'>current User</td>";
			} 
			{
				echo "<td><a href='upd_user.php?id=".$row['user_id']."'><input type='button' class='button' value='Update User'/></a></td>";
				echo "<td><a href='delete_user.php?id=".$row['user_id']."'><input type='button' class='button' value='Delete User'/></a></td>";
			}
				echo "</tr>";
		}	
		
	?>
	</table>
	

</fieldset>
</div>
