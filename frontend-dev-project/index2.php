<!DOCTYPE html>
<html lang="en">
<head>
    <title>Minor.Sem5</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">

</head>
<body>

    

<?php	
			// Database credentials.
			$servername = "remotemysql.com:3306";
			$username = "DhXT9vcHjg";
			$dbname = "DhXT9vcHjg";
			$password = "Tiu4VrQQTP";
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			$result = mysqli_query($conn, "SELECT * FROM `rah` WHERE `id`=(SELECT max(`id`) FROM `rah`) ");
			$row = mysqli_fetch_assoc($result);
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
        
                    <a><i class="fas fa-cloud-sun-rain fa-5x"></i></a>
                   <h4 style="color:black"><?php 
                            if($row["yon"]==1) {
                                echo "RAINING Ph:" ; echo $row["ph"] ;
                            }
                            else echo "NOT RAINING" ;
                   ?></h4>
                   <p style="color:rgb(100,100,0)"><?php if($row["yon"]==1){
                            if($row["ph"]>5.5){echo "Filling Pure";}
                            else echo "Filling Impure";
                        }
                   ?></p>
                </li>
                <li class="space" id="red"> 
                        <a><i class="fas fa-fill fa-5x" style="color:rgb(150,50,50)"></i></a>

                    <h4 style="color:black"><?php echo "IMPURE  "; echo $row["vol1"]; echo " lt"; ?></h4>
                </li>
                <li class="space" id="green">
                       <a><i class="fas fa-prescription-bottle fa-5x" style="color:rgb(10,180,0)"></i></a>
                    <h4 style="color:black"><?php echo "PURE  "; echo $row["vol2"]; echo " lt"; ?></h4>
                </li>
            </ul>
        </div>
    </div>

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
            </div>
        </div>
    </footer>
</body>
</html>