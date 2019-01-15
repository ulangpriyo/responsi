<?php
//including the database connection file
include("koneksi.php");
//getting id of the data from url
$idk = $_GET['id'];
//deleting the row from table
     $query = "DELETE From Person where id = '$idk' ";
     $result = mysqli_query($conn, $query);

//$result = mysqli_query($conn, "DELETE FROM Person WHERE id='$id' ");
//redirecting to the display page (index.php in our case)
header("Location:index.php");
?>
