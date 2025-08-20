<?php
include("conn.php");

$name = $_REQUEST["name"];
$mobile = $_REQUEST["mobile"];
$add = $_REQUEST["address"];

$insertQuery = "INSERT INTO Customer (cust_name, cust_mobile, cust_add)
                VALUES ('$name', '$mobile', '$add')";
$result = mysqli_query($conn, $insertQuery);

if ($result) {
    // Redirect to form.php on success
    header("Location: custlist.php");
    exit(); // Always good to call exit after header redirect
} else {
    echo "Error inserting record: " . mysqli_error($conn);
}
?>
