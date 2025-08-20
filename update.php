<?php
include("conn.php");

$id = $_REQUEST["id"];
$name = $_REQUEST["name"];
$mobile = $_REQUEST["mobile"];
$add = $_REQUEST["address"];

$updateQuery = "UPDATE Customer 
                SET cust_name = '$name', 
                    cust_mobile = '$mobile', 
                    cust_add = '$add' 
                WHERE cust_id = '$id'";

$result = mysqli_query($conn, $updateQuery);

if ($result) {
    // Redirect to form.php on success
    header("Location: custlist.php");
    exit(); // Always good to call exit after header redirect
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
?>
