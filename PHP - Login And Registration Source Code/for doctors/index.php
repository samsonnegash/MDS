<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="http://localhost:10080/mental%20health%20solution/MHS/BBS/PHP%20-%20Login%20And%20Registration%20Source%20Code/">For Only Doctors</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Login To Your Petient Data</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-2"></div>
		<div class="col-md-5">
			<form action="" method="POST">
				<div class="form-group">
					<label>Doctor Name</label>
					<input type="text" name="doctorname" class="form-control" required="required"/>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" required="required"/>
				</div>
				
				<center><button name="login" class="btn btn-primary">Login</button></center>
				
			</form>
			<br />
			<?php include 'login.php'?>
		</div>
	</div>

</body>	
</html>