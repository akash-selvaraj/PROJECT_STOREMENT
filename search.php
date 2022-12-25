<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventory_system";
$product_ID = $_POST['product_ID'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT product_ID,product_name,stock_available,cost_per_unit FROM items WHERE product_ID = '$product_ID'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<strong>Product ID        : </strong>" . $row["product_ID"]. "<br>"."<strong>Product Name         : </strong>" . $row["product_name"]. "<br>"."<strong>Stocks Available          : </strong>" . $row["stock_available"]. "<br>"."<strong>Unit Cost      : </strong>" ."₹ ".$row["cost_per_unit"];
  }
} else {
  echo "No Product found for the given Product ID";
}
$conn->close();
?>