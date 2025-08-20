<?php
include("conn.php");

$query = "SELECT * FROM Customer";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Customer List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        h2 {
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 40px;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ccc;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        a.button {
            padding: 6px 12px;
            text-decoration: none;
            color: white;
            border-radius: 4px;
        }
        .update-btn {
            background-color: #28a745;
        }
        .delete-btn {
            background-color: #dc3545;
        }
        .update-btn:hover, .delete-btn:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>

<h2>Customer List</h2>

<table>
    <tr>
        <th>Name</th>
        <th>Mobile</th>
        <th>Address</th>
        <th>Actions</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo htmlspecialchars($row['cust_name']); ?></td>
            <td><?php echo htmlspecialchars($row['cust_mobile']); ?></td>
            <td><?php echo htmlspecialchars($row['cust_add']); ?></td>
            <td>
                <a class="button update-btn" href="updateform.php?id=<?php echo $row['cust_id']; ?>">Update</a>
                <a class="button delete-btn" href="delete.php?id=<?php echo $row['cust_id']; ?>" onclick="return confirm('Are you sure you want to delete this customer?');">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>

</body>
</html>
