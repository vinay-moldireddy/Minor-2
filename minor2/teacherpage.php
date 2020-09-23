<?php 
$con = mysqli_connect("localhost", "vinay", "", "minor") or die(mysqli_error($con));
$select_query = "SELECT id, name FROM students" or die(mysqli_error($con));
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


	 <div class="container pannelcont">
		<div class="panel panel-primary">
			<div class="panel-heading">Batch A</div>
            <div class="panel-body" >
            	<form method="post" action="attendanceupdate.php">
            		<label><input type="char" class="form-control" name="date" placeholder="YYYY-MM-DD"></label>
            		<label><input type="int" class="form-control" name="code" placeholder="Subject Code *"></label><br>
            		<?php while($row = mysqli_fetch_array($select_query_result)) { ?>
            			<div class="row">
            				<div class="col-xs-5"><label><?php echo $row['name'] ?></label></div>
            				<div class="col-xs-7"><label><?php echo $row['id'] ?></label>
            					<label>  </label>
            				<?php
            			     echo " <input type='radio' value=1 name=status[".$row['id']."]".">P" ; 
            				 echo  " <input type='radio' value=0 name=status[".$row['id']."]".">A" ;
						 	?>
						</div>
						</div>
					<?php } ?>
            		<input type="submit" name="submit" value="submit" class=" btn btn-primary">
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