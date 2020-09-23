<!DOCTYPE html>
<html>
<head>
	<title>newstudent</title>
</head>
<body>
	<?php
	$con = mysqli_connect("localhost", "vinay", "", "minor") or die(mysqli_error($con));
	$id = mysqli_real_escape_string($con, $_POST['id']);
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$sql = "INSERT INTO students (id, name, password) VALUES ('$id', '$name', '$password')";
	
	$create_stdtable = "CREATE TABLE S".$id."(dte date)";
	$con->query($create_stdtable);
	$select_query="SELECT subjectcode FROM teachers" or die(mysqli_error($con));
	$select_query_result = mysqli_query($con, $select_query) or die(mysql_error($con));
	while($row = mysqli_fetch_array($select_query_result))
	{
		
		$stdsub="A".$row['subjectcode'];
		$sql2 = "ALTER TABLE S".$id." ADD $stdsub BOOLEAN";
		if ($con->query($sql2)==FALSE)
			echo "Not addend attendance";
	}
	if($con->query($sql) == TRUE)
	{
		// echo "Record Added Sucessfully";
		include 'adminpage.php';
	}
	else
	{
		echo "Error" . $sql . "<br/>" . $con->error;
	}
?>
</body>
</html>