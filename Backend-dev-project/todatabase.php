<?php

	$ph = $_GET['ph'];
    $vol1 = $_GET['vol1'];
	$vol2 = $_GET['vol2'];
	
    // $ph = 18;
    // $vol1 = 28;
    // $vol2 = 77;
	
		if(isset($ph)&&isset($vol1)&&isset($vol2)){
			// Database credentials
			$servername = "remotemysql.com:3306";
			$username = "Y4eylF9dwR";
			$dbname = "Y4eylF9dwR";
			$password = "n34OTBUdtZ";
			// Create connection.
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			
			// Insert values into table. Replace YOUR_TABLE_NAME with your database table name.
			$sql = "INSERT INTO rah (ph, vol1, vol2)
			VALUES ('$ph', '$vol1', '$vol2')";
			if (mysqli_query($conn, $sql)) {
				echo "OK";
			} else {
				echo "Fail: " . $sql . "<br/>" . mysqli_error($conn);
			}
			
			// Close connection.
			mysqli_close($conn);
		}
?>