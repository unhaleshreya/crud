<?php 
include("conn.php");
$id = $_REQUEST["id"];


$query = "DELETE FROM Customer WHERE cust_id='$id'";
$result = mysqli_query($conn, $query);
header("Location: custlist.php");
?>