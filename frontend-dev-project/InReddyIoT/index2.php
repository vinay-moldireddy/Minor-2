<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Minor.Sem5</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">

</head>
<body>

    

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




    <div class="container">
        <header>
            
            <img src="images/logo.svg" alt="ReddyiOT" class="logo">

            <nav>
                <a href="#" class="hide-desktop">
                    <img src="images/ham.svg" alt="toggle menu" class="menu" id="menu">
                </a>

                <ul class="show-desktop hide-mobile" id="nav">
                    <li id="exit" class="exit-btn hide-desktop">
                        <img src="images/exit.svg" alt="exit menu">
                    </li>
                    <li><a href="#">home</a></li>
                    <li><a href="#">services</a></li>
                    <li><a href="#">about</a></li>
                    <li><a href="#">contact</a></li>
                </ul>
            </nav>
        </header>

        <section>
            <img src="images/finalrain.jpeg" alt="server graphic" class="server">
            
            <h1>Smart Rain Water Harvesting</h1>
            <p class="subhead">Save Water Be Sustainable</p>

            <img src="images/scroll.svg" alt="scroll down" class="scroll hide-mobile show-desktop">
        </section>
    </div>
    

    <div class="blue-container">
        <div class="container">
                
            <ul>
                <li>
                    <a>  <i class="fas fa-temperature-low fa-5x" ></i> </a>
                    
                    <!-- <img src="images/icon-1.svg" alt="Calendar icon"> -->
                   <?php echo $row["ph"] ?>
                </li>
                <li class="space"> 
                        <a><i class="fas fa-cloud-sun-rain fa-5x"></i></a>
                    <!-- <img src="images/icon-2.svg" alt="Calendar icon"> -->
                    <p><?php echo $row["vol1"] ?></p>
                </li>
                <li class="space">
                       <a><i class="fas fa-tint fa-5x"></i></a>
                    <!-- <img src="images/icon-3.svg" alt="Calendar icon"> -->
                    <p><?php echo $row["vol2"] ?></p>
                </li>
            </ul>
        </div>
    </div>

    <!-- <div class="gray-container">
        <div class="container">
            <ul>
                <li>
                    <figure>
                        <img src="images/user1.png" alt="User testimonial picture">
                        <blockquote>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas tenetur totam, dolore</blockquote>
                        <figcaption>- Jane Doe</figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="images/user2.png" alt="User testimonial picture">
                        <blockquote>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas tenetur totam, dolore</blockquote>
                        <figcaption>- John Doe</figcaption>
                    </figure>
                </li>
            </ul>
        </div>
    </div> -->

    <div class="container2">
        <h2>Get Full Description</h2>
        <a href="#" class="cta">SHOW</a>
    </div>

    <footer>
        <div class="footer-container">
            <div class="container">
                <a href="#">
                    <img src="images/newlogo.svg" class="logo" alt="logo">
                </a>
                <p class="address">Jaypee Institute Of Information Technology<br>Noida</p>
                <!-- <ul class="footer-links">
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul> -->
            </div>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/121c6487e0.js" crossorigin="anonymous"></script>
    <script>
    
        var menu = document.getElementById('menu');
        var nav = document.getElementById('nav');
        var exit = document.getElementById('exit');

        menu.addEventListener('click', function(e) {
            nav.classList.toggle('hide-mobile');
            e.preventDefault();
        });

        exit.addEventListener('click', function(e) {
            nav.classList.add('hide-mobile');
            e.preventDefault();
        });

    </script>

</body>
</html>