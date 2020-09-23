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
				   <li><a href="http://192.168.64.2/minor/index.php" target="_self"><span class="glyphicon glyphicon-log-in"></span> Student Login</a></li>
				   <li><a href="http://192.168.64.2/minor/teacherlogin.php" target="_self"><span class="glyphicon glyphicon-log-in"></span> Teacher Login</a></li>
		    	</ul>
		    </div>
	    </div>
	</nav>
		<div class="container pannelcont">
		<div class="panel panel-primary">
			<div class="panel-heading">Admin LOGIN</div>
            <div class="panel-body" >
            	<form method="get" action="adminopen.php">
            		<br><input type="integer" class="form-control" name="id" placeholder="Admin id"><br>
            		<input type="password" class="form-control" name="password" placeholder="Password"><br>
            		<input type="submit" name="submit" value="Login" class=" btn btn-primary">
            	</form>
            </div>
            <div class="panel-footer"><a href="http://192.168.64.2/minor/contactadmin.php">Contact Admin </a></div>
        </div>
	</div>
	<?php
	include 'footer.php';
	?>
</body>
</html>