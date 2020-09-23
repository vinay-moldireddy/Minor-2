<!DOCTYPE html>
<html>
<head>
	<title>adminpage</title>
</head>
<body>
<?php
	$con = mysqli_connect("localhost", "vinay", "", "minor") or die(mysqli_error($con));
	$select_query = "SELECT id, password FROM admins" or die(mysqli_error($con));
	$select_query_result = mysqli_query($con, $select_query) or die(mysql_error($con));	
	while($row = mysqli_fetch_array($select_query_result))
	{
		if($row['id']==$_GET['id'])
		{
			if($row['password']==$_GET['password'])
				include 'adminpage.php';
			else
			{
				echo "Wrong password ";
				echo '<a href= "http://192.168.64.2/minor/admin.php">login</a>';
			}
		}
		else
		{
			echo "No id matching ".$_GET['id']." found ";
			echo '<a href= "http://192.168.64.2/minor/admin.php">login</a>';
		}
	}
?>
</body>
</html>

