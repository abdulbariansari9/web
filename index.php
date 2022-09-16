<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Product list</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" ><a href="add_product.php">ADD Product </a></button>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Mass Delete</button>
    </form>
  </div>
</nav>


<h3>List of products.........</h3>


<style>

.b {
  display: inline-block;
  width: 200px;
  height: 200px;
  padding: 5px;
  border: 1px solid blue;    
  background-color: white; 
  margin:20px;
}



.b:hover {
    opacity: 0.5;
}

</style>





<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scandiweb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

/*
 // Taking all 5 values from the form data(input)
 $sku =  $_REQUEST['sku'];
 $name = $_REQUEST['name'];
 $price =  $_REQUEST['price'];

 
  
 // Performing insert query execution
 // here our table name is college
 $sql = "INSERT INTO products  VALUES ('$sku',
     '$name','$price')";

  

if(mysqli_query($conn, $sql)){ }

 */

// Check connection


$sql2 = 'SELECT * FROM products';  
$retval=mysqli_query($conn, $sql2);  
  
echo '<form action="delet.php" method="POST">';
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  

  ?>

    <div class="b"> 
    <input type="checkbox" name="delete_id[]" value="<?= $row['sku']; ?>">
    <center><?= $row['sku']; ?> </center>
    <center><?= $row['name']; ?></center>
    <center><?= $row['price']; ?></center>
    
     
    </div>
    <?php
  
    
 } //end of while  
 echo '<button type="submit" name="delete_btn" class="btn btn-danger">Delete</button>';
 echo '</form>';
}



else{  
echo "0 results";  
}  



mysqli_close($conn);  
  

?>


<hr>
<p><center>My web development</center></p>

</body>
</html>