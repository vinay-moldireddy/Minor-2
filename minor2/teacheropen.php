<!DOCTYPE html>
<html>
<head>
	<title>adminpage</title>
</head>
<body>
<?php
	$con = mysqli_connect("localhost", "vinay", "", "minor") or die(mysqli_error($con));
	$select_query = "SELECT id, password FROM teachers" or die(mysqli_error($con));
	$select_query_result = mysqli_query($con, $select_query) or die(mysql_error($con));	
	$temp=0;
	while($row = mysqli_fetch_array($select_query_result))
	{
		if($row['id']==$_GET['id'])
		{
			$temp=1;
			if($row['password']==$_GET['password'])
			{
				include 'teacherpage.php';
				$temp=2;
				break;
			}
		}
	}
	if($temp==1)
	{
		echo "Wrong password ";
		echo '<a href= "http://192.168.64.2/minor/teacherlogin.php">login</a>';
	}
	else if($temp==0)
		{
			echo "No id matching ".$_GET['id']." found ";
			echo '<a href= "http://192.168.64.2/minor/teacherlogin.php">login</a>';
		}
?>
</body>
</html>

