<?php 
$con = mysqli_connect("localhost", "vinay", "", "minor") or die(mysqli_error($con));
$select_query = "SELECT id, name, password FROM teachers" or die(mysqli_error($con)); 
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<title>admin</title>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div calss="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand">Institute of Tech.</a>
			</div>		
		    <div class="collapse navbar-collapse" id="myNavbar">
			    <ul class="nav navbar-nav navbar-right">
				   <!-- <li><a href="http://192.168.64.2/minor/index.php" target="_self"><span class="glyphicon glyphicon-log-in"></span> Student Login</a></li>
				   <li><a href="http://192.168.64.2/minor/teacherlogin.php" target="_self"><span class="glyphicon glyphicon-log-in"></span> Teacher Login</a></li> -->
		    	</ul>
		    </div>
	    </div>
	</nav>
<div class="row">
	<div class="col-xs-1 col-md-2"></div>
	<div class="col-xs-11 col-md-4 teacher" >
		<div class="row">
		<div class="col-xs-12"><h3>Teachers</h3></div>
		<hr>
		</div>
		<?php
	     while($row = mysqli_fetch_array($select_query_result)) 
		 { ?>
		 	<div class="row" >
		 		<div class="col-xs-5">ID</div>
		 		<div class="col-xs-7"><?php echo $row['id']; ?></div>
		 		<div class="col-xs-5">NAME</div>
		 		<div class="col-xs-7"><?php echo $row['name']; ?></div>
		 	</div>
		 <hr>
		 	
		<?php
		 }
		?>
	</div>
	<div class="col-xs-12 col-md-6">
<div class="container pannelcont">
		<div class="panel panel-primary">
			<div class="panel-heading">New Student</div>
            <div class="panel-body" >
            	<form method="post" action="newstudent.php">
            		<br><input type="integer" class="form-control" name="id" placeholder="id">
            		<br><input type="text" class="form-control" name="name" placeholder="name"><br>
            		<input type="password" class="form-control" name="password" placeholder="Password"><br>
            		<input type="submit" name="submit" value="ADD" class=" btn btn-primary">
            	</form>
            </div>
        </div>
    </div>
    <div class="container pannelcont">
		<div class="panel panel-primary">
			<div class="panel-heading">New Teacher</div>
            <div class="panel-body" >
            	<form method="post" action="newteacher.php">
            		<br><input type="integer" class="form-control" name="id" placeholder="id">
            		<br><input type="text" class="form-control" name="name" placeholder="name"><br>
            		<input type="password" class="form-control" name="password" placeholder="Password"><br>
            		<input type="submit" name="submit" value="ADD" class=" btn btn-primary">
            	</form>
            </div>
        </div>
    </div>
	</div>
</div>
	<?php
	include 'footer.php';
	?>
</body>
</html>