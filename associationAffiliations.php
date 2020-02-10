<!DOCTYPE HTML>
<html>
<head>
	<title> Assocation Affiliations </title>
	<meta charset="utf-8">
	<meta name ="description" content= "Assocation Affiliations <!---Add better desciption---->">
	<link href="bbs-css/stylingsheet.css" type="text/css" rel="stylesheet" />
	<style type="text/css">
		.form-style-9{
			max-width: 450px;
			background: #FAFAFA;
			padding: 30px;
			margin: 50px auto;
			box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
			border-radius: 10px;
			border: 6px solid #305A72;
		}
		.form-style-9 ul{
			padding:0;
			margin:0;
			list-style:none;
		}
		.form-style-9 ul li{
			display: block;
			margin-bottom: 10px;
			min-height: 35px;
		}
		.form-style-9 ul li  .field-style{
			box-sizing: border-box; 
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box; 
			padding: 8px;
			outline: none;
			border: 1px solid #B0CFE0;
			-webkit-transition: all 0.30s ease-in-out;
			-moz-transition: all 0.30s ease-in-out;
			-ms-transition: all 0.30s ease-in-out;
			-o-transition: all 0.30s ease-in-out;
		
		}.form-style-9 ul li  .field-style:focus{
			box-shadow: 0 0 5px #B0CFE0;
			border:1px solid #B0CFE0;
		}
		.form-style-9 ul li .field-split{
			width: 49%;
		}
		.form-style-9 ul li .field-full{
			width: 100%;
		}
		.form-style-9 ul li input.align-left{
			float:left;
		}
		.form-style-9 ul li input.align-right{
			float:right;
		}
		.form-style-9 ul li textarea{
			width: 100%;
			height: 100px;
		}
		.form-style-9 ul li input[type="button"], 
		.form-style-9 ul li input[type="submit"] {
			-moz-box-shadow: inset 0px 1px 0px 0px #3985B1;
			-webkit-box-shadow: inset 0px 1px 0px 0px #3985B1;
			box-shadow: inset 0px 1px 0px 0px #3985B1;
			background-color: #216288;
			border: 1px solid #17445E;
			display: inline-block;
			cursor: pointer;
			color: #FFFFFF;
			padding: 8px 18px;
			text-decoration: none;
			font: 12px Arial, Helvetica, sans-serif;
		}
		.form-style-9 ul li input[type="button"]:hover, 
		.form-style-9 ul li input[type="submit"]:hover {
			background: linear-gradient(to bottom, #2D77A2 5%, #337DA8 100%);
			background-color: #28739E;
		}


		@import url(https://fonts.googleapis.com/css?family=Oswald:400);
		
		.navigation {
		  width: 100%;
		  background-color: black;
		}
		
		img {
		  width: 25px;
		  border-radius: 50px;
		  float: left;
		}
		
		.logout {
		  font-size: .8em;
		  font-family: 'Oswald', sans-serif;
			position: relative;
		  right: -18px;
		  bottom: -4px;
		  overflow: hidden;
		  letter-spacing: 3px;
		  opacity: 0;
		  transition: opacity .45s;
		  -webkit-transition: opacity .35s;
		  
		}
		
		.button {
			text-decoration: none;
			float: right;
		  padding: 12px;
		  margin: 15px;
		  color: white;
		  width: 25px;
		  background-color: black;
		  transition: width .35s;
		  -webkit-transition: width .35s;
		  overflow: hidden
		}
		
		a:hover {
		  width: 100px;
		}
		
		a:hover .logout{
		  opacity: .9;
		}
		
		a {
		  text-decoration: none;
		}

		</style>
		
</head>

<body>
	<div id="bigWrapper">
		<div id="topMenu">
			<ul>
				<li><a href="bindex.html">Home</a></li>
				<li><a href="profile.html">About The Doctors</a></li>
				<li><a href="associationAffiliations.php">Doctors Solution</a></li>
				<li><a href="paymentOptions.html">Payment options</a></li>
				<li><a href="clientinformation.html">Client Information</a></li>
			</ul>
		</div>
		<div id="topBanner">
			<h1>
				<!--Bradshaw Behavior Health </br > Solutions, LLC-->
			</h1>	
		</div>	
		<div id="header">
			
			<div class="navigation">
		  
				<a class="button" href="PHP - Login And Registration Source Code/logout.php">
				  <img src="logout.jpg">
			
			  <div class="logout">LOGOUT</div>
			
				</a>
		</div>
		</div>
		<div id="headerAA">
			<h2> 
				Enter Your Qrcode:
			</h2>
		</div>		
		<div id="paragraph">

				<form class="form-style-9" action="view.php" method="POST">
					<ul>
					<li>
						<input type="text" name="qrcode" class="field-style field-split align-left" placeholder="QrCode" />
					<br>
					<br>
					<br>
					<input type="submit" value="Get Doctors Result" />
					</li>
					</ul>
					</form>
		<div id="copyRight">
			<p>
						Bluemoon Hackaton Seminar <b>#IAMSOLUTION</b> @Disability Solution.
			</p>
		</div>
</body>
</html>