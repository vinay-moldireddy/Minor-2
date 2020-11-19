
		<?php	
			// Database credentials.
			$servername = "remotemysql.com:3306";
			$username = "Y4eylF9dwR";
			$dbname = "Y4eylF9dwR";
			$password = "n34OTBUdtZ";
			// Number of entires to display.
			$display = 10;
			// Create connection.
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
		
			// Get the most recent 10 entries.
			$result = mysqli_query($conn, "SELECT * FROM `rah` WHERE `id`=(SELECT max(`id`) FROM `rah`) ");
			// while($row = mysqli_fetch_assoc($result)) {
			// 	echo "<table><tr><th>ph</th><th>vol1</th><th>vol2</th><th>Status</th></tr>";
			// 	echo "<tr><td>";
			// 	echo $row["ph"];
			// 	echo "</td><td>";
			// 	echo $row["vol1"];
			// 	echo "</td><td>";
			// 	echo $row["vol2"];
			// 	echo "</td><td>";
			// 	echo "</td></tr>";
			// 	$counter++;
			// }
			// echo "</table>";
			$row = mysqli_fetch_assoc($result);
			//echo $row["ph"];
			// Print number of entries in the database. Replace YOUR_TABLE_NAME with your database table name.
			$row_cnt = mysqli_num_rows(mysqli_query($conn, "SELECT ph, vol1, vol2 FROM rah"));
			//echo "<div class='notes'>Displaying last " . $display . " entries.<br/>The database table has " . $row_cnt . " total entries.</div>";
			
			// Close connection.
			mysqli_close($conn);
		?>