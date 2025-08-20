<?php
include("conn.php");

$id = $_GET['id'];
$query = "SELECT * FROM Customer WHERE cust_id = '$id'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Update Customer</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .form-container {
      background-color: #ffffff;
      padding: 30px 40px;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    .form-container label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
      color: #444;
    }

    .form-container input,
    .form-container textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
    }

    .form-container button {
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .form-container button:hover {
      background-color: #0069d9;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Update Customer</h2>
    <form action="update.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $data['cust_id']; ?>">

      <label for="name">Name</label>
      <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($data['cust_name']); ?>" required>

      <label for="mobile">Mobile</label>
      <input type="tel" id="mobile" name="mobile" pattern="[0-9]{10}" value="<?php echo htmlspecialchars($data['cust_mobile']); ?>" required>

      <label for="address">Address</label>
      <textarea id="address" name="address" rows="4" required><?php echo htmlspecialchars($data['cust_add']); ?></textarea>

      <button type="submit">Update</button>
    </form>
  </div>
</body>
</html>
