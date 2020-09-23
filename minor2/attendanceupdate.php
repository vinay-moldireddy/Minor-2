<?php 
	$con = mysqli_connect("localhost", "vinay", "", "minor") or die(mysqli_error($con));
	$select_query = "SELECT id FROM students" or die(mysqli_error($con));
	$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));

	$check=0;
	$select_query2 = "SELECT dte FROM S17102012" or die(mysqli_error($con));
	$select_query2_result = mysqli_query($con, $select_query2) or die(mysqli_error($con));
	while ($pre = mysqli_fetch_array($select_query2_result)) {
		if($pre['dte']==$_POST['date'])
		{
			$check=1;
		}
	}


	while($row = mysqli_fetch_array($select_query_result))
	{
		if($check==1)
		{
			$col="UPDATE S".$row['id']." SET A".$_POST['code']." = '".$_POST['status'][$row['id']]."' WHERE dte= '".$_POST['date']."'";
			echo "DONE UPDATED ";
			$con->query($col);
		}
		else
		{
			$col="INSERT INTO S".$row['id']."(dte, A".$_POST['code'].") VALUES('".$_POST['date']."', '".$_POST['status'][$row['id']]."')";
			echo "DONE UPDATED.";
			$con->query($col);
		}
	}


?>