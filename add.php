<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scandiweb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

 // Taking all 5 values from the form data(input)
 $sku =  $_REQUEST['sku'];
 $name = $_REQUEST['name'];
 $price =  $_REQUEST['price'];
 
  
 // Performing insert query execution
 // here our table name is college
 $sql = "INSERT INTO products  VALUES ('$sku',
     '$name','$price')";

if(mysqli_query($conn, $sql)){
  echo "done";

  echo nl2br("\n$sku\n $name\n "
                . "$price");

  
} else{
  echo "ERROR: Hush! Sorry $sql. "
      . mysqli_error($conn);
}
 

// Check connection



mysqli_close($conn);  
  

?>