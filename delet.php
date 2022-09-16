<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scandiweb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['delete_btn']))
{
    $all_id = $_POST['delete_id'];
    $extract_id = implode(',' , $all_id);
  echo $extract_id;

  $query = "DELETE FROM products WHERE sku IN($extract_id) ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Multiple Data Deleted Successfully";
        header("Location: index.php");
    }
    else
    {
        $_SESSION['status'] = "Multiple Data Not Deleted";
        header("Location: index.php");
    }

   
}


?>