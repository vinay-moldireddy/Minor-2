<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$con = mysqli_connect("localhost", "vinay", "", "minor") or die(mysqli_error($con));
	$id = mysqli_real_escape_string($con, $_POST['id']);
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$sql = "INSERT INTO teachers (id, name, password) VALUES ('$id', '$name', '$password')";
	if($con->query($sql) === TRUE)
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


