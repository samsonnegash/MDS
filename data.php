<?php
	//$conn =new mysqli('localhost','root','','db_register_login');
    //date_default_timezone_set('UTC');
       //echo date('h:i:s a ,y') . "</br>";
    
       //if(! $conn )  
       //{  
         //die('Could not connect: ' . mysqli_error());  
       //}  
       //echo 'Connected successfully';  
	
        //$file = $_POST['data'];

	//$sql = "INSERT INTO data(data) VALUES ('$file')";
	//if(mysqli_query($conn, $sql)){  
	// echo "Record inserted successfully";  
	//}else{  
	//echo "Could not insert record: ". mysqli_error($conn);
	//}  
	  
	//mysqli_close($conn); 




?>

<html>
<body>
        <form action="Php QR Generator/index.php" method="POST">
        <input type="submit" value="get qrcode">  

        </form>
        <div class="hero-unit-clock">
		</br>
			<form name="clock">
			<font color="white">Time is:</font>&nbsp;<input type="submit" class="trans" name="face" value="">
			</form>
			  </div>


</body>


</html>







