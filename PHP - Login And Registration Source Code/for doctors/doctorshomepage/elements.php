<?php

			
$conn =new mysqli('localhost','root','','db_register_login');
if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  
echo 'Connected successfully';
$sql = 'SELECT * FROM data';
$retval=mysqli_query($conn, $sql); 
 
if(mysqli_num_rows($retval) > 0){  
  while($row = mysqli_fetch_assoc($retval)){  
     echo "<br>Number :{$row['id']}  <br> ". 
          "Data :{$row['data']}  <br> ".    
          "QRcode : {$row['Qrcode']} <br> " .            
          "--------------------------------<br>";  
  } //end of while  
 }else{  
 echo "0 results";  
 }  
 mysqli_close($conn);  
 
 
 
 ?>  
 





<!DOCTYPE HTML>
<!--
	Road Trip by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>patients</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="navbar.html">Doctors Home Page</span></a></div>
				<a href="#menu"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="navbar.html">Home</a></li>
					<li><a href="elements.php">Patients</a></li>
					<li><a href="sendmedicine.php">Send Medicine</a></li>
					<li><a href="http://localhost:10080/mental%20health%20solution/MHS/BBS/PHP%20-%20Login%20And%20Registration%20Source%20Code/for%20doctors/index.php">Logout</a></li>
				</ul>
			</nav>



		


					

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">


					<ul class="icons">
						<li><a href="#" class="icon round fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon round fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon round fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>

					<div class="copyright">
						Bluemoon Hackaton Seminar #IAMSOLUTION @Disability Solution.
					</div>

				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>