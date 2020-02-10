<?php

$conn =new mysqli('localhost','root','','db_register_login');
date_default_timezone_set('UTC');
   echo date('h:i:s a ,y') . "</br>";

   if(! $conn )  
   {  
     die('Could not connect: ' . mysqli_error());  
   }  
   echo 'Connected successfully';  

   $Qrnum = $_POST['qr'];
   $file = $_POST['file'];
   $other=$_POST['other'];

   $sql = "INSERT INTO patient(Qrnum,file,comment) VALUES ('$Qrnum','$file','$other')";
   if(mysqli_query($conn, $sql)){  
    echo "Record inserted successfully";  
   }else{  
   echo "Could not insert record: ". mysqli_error($conn);
   }  
     
   mysqli_close($conn); 

echo date('h:i:s a ,y') . "<a href='navbar.html'>Click Here To Go Bank In To The Menu</a>" ;










   
?>