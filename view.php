<?php

			
$conn =new mysqli('localhost','root','','db_register_login');
if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  
echo 'Connected successfully';
$sql = 'SELECT * FROM patient';
$retval=mysqli_query($conn, $sql); 
 
if(mysqli_num_rows($retval) > 0){  
  while($row = mysqli_fetch_assoc($retval)){  
     echo "<br>Number :{$row['id']}  <br> ". 
          "Your QrCode :{$row['Qrnum']}  <br> ".    
          "Medicine From Doctor : {$row['file']} <br> " .
          "Also Doctor Says : {$row['comment']} <br> " .

          "--------------------------------<br>";  
  } //end of while  
 }else{  
 echo "0 results";  
 }  
 mysqli_close($conn);  
 
 
 ?> 

 <html>
<a href="associationAffiliations.php">back</a>

 </html>